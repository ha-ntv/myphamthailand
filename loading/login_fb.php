<?php 
	include_once("../include/config.php");
	include_once("../functions/function.php");
    unset($_SESSION['VIETANHMOBILE_MEMBER_ID']);
    unset($_SESSION['VIETANHMOBILE_MEMBER_NAME']);
    unset($_SESSION['VIETANHMOBILE_MEMBER_EMAIL']);
    unset($_SESSION['VIETANHMOBILE_MEMBER_IMAGE']);
    unset($_SESSION['VIETANHMOBILE_MEMBER_TYPE']);
	$id 		= isset($_POST['id']) ? $_POST['id'] : 0;
	$name 		= isset($_POST['name']) ? $_POST['name'] : '';
	$img    	= isset($_POST['img']) ? $_POST['img'] : ''; 
    $email    	= isset($_POST['email']) ? $_POST['email'] : ''; 
	$sql = "select * from $GLOBALS[db_sp].member where username = '".$id."'";
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
        $name = trim($name);
        $email = trim($email);
        $address = trim($address);
        $img = trim($img);
        $db->table = "core_user";
        $data = array(           
            'username'=> $id,
            'name'    => $name,
            'email'   => $email,
            'address'  =>$address,
            'img'      => $img
        );
        $userID = vaInsert('member',$data);       
    }
    $_SESSION['VIETANHMOBILE_MEMBER_ID'] = $userID;
    $_SESSION['VIETANHMOBILE_MEMBER_NAME'] = $name;
    $_SESSION['VIETANHMOBILE_MEMBER_EMAIL'] =$email;
    $_SESSION['VIETANHMOBILE_MEMBER_TYPE'] = "";
    $_SESSION['VIETANHMOBILE_MEMBER_IMG'] = $img;
	 echo $userID;  
	    ?>
	    <script type="text/javascript">
	    	window.location.href="/"
	    </script>
	