<?php 
include_once("config.php");
include_once("function.php");
$client_id = '773950546454-cmhi9crk457oh1gvmdfo9474h77ubk25.apps.googleusercontent.com'; 
$client_secret = 'B21ae_atOFGoErwM62PjPkSR';
$redirect_uri = $path_url;
require_once '/vendor/autoload.php';
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");
$service = new Google_Service_Oauth2($client);
if (isset($_REQUEST['logout'])) 
{
  unset($_SESSION['access_token']);
  $client->revokeToken();
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL)); //redirect user back to page
}
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
} else { 
    $authUrl = $client->createAuthUrl();
}


if (isset($_GET['code'])) {
    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
    $user = $service->userinfo->get(); 

    // $db->table  = "core_user";
    // $db->condition = "`user_name` like '".$user->id."'";
    // $riws = $db->select();
    $sql = "select * from $GLOBALS[db_sp].member where username like'".$user->id."'";
    $riws = $GLOBALS["sp"]->getAll($sql);
    if(count($riws) > 0)
    {
      $userID = $riws[0]['id']+0;
      $name =  $riws[0]['name'];
      $email =  $riws[0]['email'];
      $img =  $riws[0]['img'];
    }
    else 
    { 
        $name = trim($user->name);
        $email = trim($user->email);
        $address = trim($user->link);
        $img = trim($user->picture);
        $db->table = "core_user";
        $data = array(           
            'username'=> $user->id,
            'name'    => $name,
            'email'   => $email,
            'address'  =>$address,
            'img'      => $img
        );
        $userID = vaInsert('member',$arr);       
    }
    $_SESSION['VIETANHMOBILE_MEMBER_ID'] = $userID;
    $_SESSION['VIETANHMOBILE_MEMBER_NAME'] = $name;
    $_SESSION['VIETANHMOBILE_MEMBER_EMAIL'] =$email;
    $_SESSION['VIETANHMOBILE_MEMBER_TYPE'] = "";
    $_SESSION['VIETANHMOBILE_MEMBER_IMAGE'] = $img;
	      header('Location: '.$redirect_uri);
          exit;
}
    if (isset($authUrl)){ 
    ?>
    <script type="text/javascript">
        jQuery('#link_loginG').html('<a href="<?php echo $authUrl ?>" style="color:#fff"> <span> <i class="fa fa-google-plus" aria-hidden="true"></i></span>  Tiếp tục với Google</a>')
        jQuery('#link_loginG1').html('<a href="<?php echo $authUrl ?>" style="color:#fff"> <span> <i class="fa fa-google-plus" aria-hidden="true"></i></span>  Tiếp tục với Google</a>')
    </script>
    <?php
} else{
  // $user1 = $service->userinfo->get();
}


 ?>