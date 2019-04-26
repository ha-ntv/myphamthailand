<?php
function PageHome($url){
	global $path_url;
	echo"<script type=\"text/javascript\">	
		document.location.href= '".$path_url."/".$url."'
	</script>";
}


////Intro ///////////////
function intro(){
	if($_SESSION['intro']!= "intro"){
		$_SESSION['intro'] = 'intro';
		return true;	
	}
	else{
		$_SESSION['intro'] = 'intro';
		return false;
	}
}

////////////////////////
function SubStrEx($str, $length){
	$str = strip_tags($str);
	if(strlen($str) <= $length)
		return $str;

	$pos = strpos($str, " " , $length-1);
	if($pos >0 )
		return substr($str, 0, $pos) . '...';
	else
		return $str;
}

function insert_SubStrEx($a){
	$str = strip_tags($a['str']);
	$length = $a['length'];
	if(strlen($str) <= $length)
		return $str;

	$pos = strpos($str, " " , $length-1);
	if($pos >0 )
		return substr($str, 0, $pos) . '...';
	else
		return $str;
}

///////////xóa khoản trắng//////
function strSpace($str){
	$str = str_replace(";", "", $str);
	$str = str_replace(",", "", $str);
	//$str = str_replace(".", "", $str);
	$str = str_replace(" ", "", $str);
	
	return $str;
}
////////Phan trang //////
function paginator($reload,$page,$tpages, $adjacents,$cid,$type,$path_url,$url,$idd=0,$num_rows_page,$strPrice='') {
	global $lang;
	$pgprev = $page-1;
	$pgnext = $page+1;
	$PrevBtn = "";
	$NextBtn = "";
		

	$pmin = ($page>$adjacents) ? ($page-$adjacents) : 1;
	$pmax = ($page<($tpages-$adjacents)) ? ($page+$adjacents) : $tpages;
	
	// next
	if($page<$tpages) {

		$NextBtn.= '<div class="pagination" > <a title="Next" href="javascript:void(0)" onclick=\'viewpg("'.$pgnext.'","'.$cid.'","'.$type.'","'.$url.'","'.$path_url.'","'.$idd.'","'.$num_rows_page.'","'.$strPrice.'")\'>Xem thêm</a> </div>';
	}
	else {
		$NextBtn.= '';
		//$out.= "";
	}
	
	return $NextBtn;
	//////////////////////////////////////////
	
}
/////////end phan trang///////

function GetLinkCat($cat, $lg2){
	$id = $cat['id'];
	
	$sql = "select c1.unique_key as cat_name,c2.unique_key as group_name from $GLOBALS[db_sp].categories c1, $GLOBALS[db_sp].categories c2 where c1.id=$id and c1.pid=c2.id";

	$r = $GLOBALS["sp"]->getRow($sql);
	$link = "/" . $r['group_name'] . "/" . $r['cat_name'] . "/";
	
	$link = str_replace("//", "/", $link);
	$link = substr($link,1,strlen($link));
	
	return $link;
}


function insert_GetLinkCat($a){
	$cat = $a['cat'];
	$lg2 = $a['lang'];
	$id = $cat['id'];
	
	$sql = "select c1.unique_key as cat_name,c2.unique_key as group_name,c1.comp from $GLOBALS[db_sp].categories c1, $GLOBALS[db_sp].categories c2 where c1.id=$id and c1.pid=c2.id";

	$r = $GLOBALS["sp"]->getRow($sql);
	$link = "/" . $r['group_name'] . "/" . $r['cat_name'] . "/";
	
	$link = str_replace("//", "/", $link);
	$link = substr($link,1,strlen($link));
	
	return $link;
}


function GetLinkDetail($cat, $lg2){
	$id = $cat['cid'];
	
	$sql = "select c1.unique_key as cat_name,c2.unique_key as group_name from $GLOBALS[db_sp].categories c1, $GLOBALS[db_sp].categories c2 where c1.id=$id and c1.pid=c2.id";

	$r = $GLOBALS["sp"]->getRow($sql);
	$link = "/" . $r['group_name'] . "/" . $r['cat_name'] . "/" . $cat["unique_key"].".html";
	
	$link = str_replace("//", "/", $link);
	$link = substr($link,1,strlen($link));
	
	return $link;
}


function insert_GetLinkDetail($a){
	$cat = $a['cat'];
	$lg2 = $a['lang'];
	$id = $cat['cid'];
	
	$sql = "select c1.unique_key as cat_name,c2.unique_key as group_name from $GLOBALS[db_sp].categories c1, $GLOBALS[db_sp].categories c2 where c1.id=$id and c1.pid=c2.id";

	$r = $GLOBALS["sp"]->getRow($sql);
	$link = "/" . $r['group_name'] . "/" . $r['cat_name'] . "/" . $cat["unique_key"].".html";
	
	$link = str_replace("//", "/", $link);
	$link = substr($link,1,strlen($link));
	
	return $link;
}

function insert_GetCat($a){
	$cat = $a['cat'];
	$lg2 = $a['lang'];
	$id = $cat['id'];
	/*
	$sql = "select c1.unique_key as cat_name,c2.unique_key as group_name from $GLOBALS[db_sp].categories c1, $GLOBALS[db_sp].categories c2 where c1.id=$id and c1.pid=c2.id";
	
	$r = $GLOBALS["sp"]->getRow($sql);
	$link = "/" . $r['group_name'] . "/" . $r['cat_name'] . "/" . $services["unique_key"]."/";
	
	$link = str_replace("//", "/", $link);
	$link = substr($link,1,strlen($link));
	*/
	return $id;
}

function GetCat($a, $lang){
	$cat = $a['cat'];
	$lg2 = $lang;
	$id = $a['id'];
	
	$sql = "select c1.unique_key as cat_name,c2.unique_key as group_name from $GLOBALS[db_sp].categories c1, $GLOBALS[db_sp].categories c2 where c1.id=$id and c1.pid=c2.id";
	
	$r = $GLOBALS["sp"]->getRow($sql);
	$link = "/" . $r['group_name'] . "/" . $r['cat_name'] . "/";
	
	$link = str_replace("//", "/", $link);
	$link = substr($link,1,strlen($link));
	
	return $link;
}

function sendmail($user,$MAIL_FROMNAME,$email,$subj,$mess,$mailreply,$mailcc="",$mailcc1="")
{
	include("#include/email_config.php");
	$mail = new PHPMailer();
	/////////goi cho gmail	
	$mail->IsSMTP(); // send via SMTP
	$mail->SMTPAuth = true; // turn on SMTP authentication
	
	$mail->SMTPDebug = 1;
	$mail->SMTPSecure = 'ssl';
	$mail->Port       = 465;
	$mail->Host = SMTP_SERVER;
	
	$mail->Username = MAIL_USER; // SMTP username
	$mail->Password = MAIL_PASS; // SMTP password
	$mail->SetFrom($mailreply, $subj);
	$mail->CharSet = "UTF-8"; 
	
	$mail->From = MAIL_FROM;
	$mail->FromName = $MAIL_FROMNAME;

	$mail->AddAddress($email,$user);
	
	if($mailcc)
		$mail->AddCC($mailcc,$user);
			
	$mail->WordWrap = 50; // set word wrap
	
	$mail->IsHTML(true); // send as HTML
	$mail->Subject = $subj;
	$mail->Body = $mess;

	$send=$mail->Send();
	if ($send) {
		return true;
	}else return false;
}

function sendmailAjax($user,$email,$subj,$mess,$mailreply)
{

	include("../#include/email_config.php");
	/////////goi cho gmail	
	$mail = new PHPMailer();
		
	$mail->IsSMTP(); // send via SMTP
	$mail->SMTPAuth = true; // turn on SMTP authentication
	
	$mail->SMTPDebug = 1;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = SMTP_SERVER;
	$mail->Port       = 465;
	$mail->Username = MAIL_USER; // SMTP username
	$mail->Password = MAIL_PASS; // SMTP password
	$mail->SetFrom($mailreply, $subj);
	$mail->CharSet = "UTF-8"; 
	
	$mail->From = MAIL_FROM;
	$mail->FromName = MAIL_FROMNAME;
	$mail->AddAddress($email,'');
	
	$mail->WordWrap = 50; // set word wrap
	
	$mail->IsHTML(true); // send as HTML
	
	$mail->Subject = $subj;
	$mail->Body = $mess;

	$send=$mail->Send();
	if ($send) {
		return true;
	}else return false;
}


function validate_email($email)
{
	
	$atom = '[-a-z0-9!#$%&\'*+/=?^_`{|}~]';    // allowed characters for part before "at" character
	$domain = '([-a-z0-9]*[a-z0-9]+)'; // allowed characters for part after "at" character

	$regex = '^' . $atom . '+' .        // One or more atom characters.
	'(\.' . $atom . '+)*'.              // Followed by zero or more dot separated sets of one or more atom characters.
	'@'.                                // Followed by an "at" character.
	'(' . $domain . '{1,63}\.)+'.       // Followed by one or max 63 domain characters (dot separated).
	$domain . '{2,63}'.                 // Must be followed by one set consisting a period of two
	'$';                                // or max 63 domain characters.

	if(eregi($regex,$email))
		return true;
	else
		return false;
	
}//validate_email_syntax

function StripSql($data){
	$str = str_replace("'", "''", $data);
	return str_replace("\''", "''", $str);
}

//Thêm gi? hàng
	function add_item($intID,$qty=1,$color='',$size='') {
		$r = check_duplicate($intID,$color,$size);
		if(!$r) { 
			$intCount = count($_SESSION["Cart"]);   //Dem so mat hang trong gio
			$arrItem = array();
			                    //Tao mang chua chi tiet san pham
			$arrItem["id"]= $intID;
			$arrItem["qty"] = $qty;
			
			$arrItem["color"]= $color;
			$arrItem["size"] = $size;
			
			$_SESSION["Cart"][$intCount] = $arrItem;
		}
		//echo"vao roi"; exit();
	}
	
	function check_duplicate($intID,$color,$size) {
		$r = false;
		for($i=0; $i<count($_SESSION["Cart"]); $i++) {
			if( ($_SESSION["Cart"][$i]["id"] == $intID) && ($_SESSION["Cart"][$i]["color"] == $color) && ($_SESSION["Cart"][$i]["size"] == $size) ) {
				$r = true;
			}
			
		}
		return $r;
		
	}
/*	
	function check_duplicateColor($color) {
		$r = false;
		if($color){
			for($i=0; $i<count($_SESSION["Cart"]); $i++) {
				if($_SESSION["Cart"][$i]["color"] == $color) {
					$r = true;
				}
			}
		}
		return $r;
	}
	
	function check_duplicateSize($size) {
		print_r($_SESSION["Cart"]);die('xx: '.$size);
		$r = false;
		if($size){
			for($i=0; $i<count($_SESSION["Cart"]); $i++) {
				if($_SESSION["Cart"][$i]["size"] == $size) {
					//$_SESSION["Cart"][$i]["qty"] += 1;
					$r = true;
				}
			}
		}
		return $r;
	}
*/
//C?p nh?t gi? hàng
	function update_item($intID, $qty,$yc) {
		for($i=0; $i<count($_SESSION["Cart"]); $i++) {
			if($_SESSION["Cart"][$i]["id"] == $intID) {
				$_SESSION["Cart"][$i]["qty"] = $qty;
				$_SESSION["Cart"][$i]["yc"] = $yc;
				break;
			}
		 }
	}
//xóa gi? hàng
	function remove_item($intID) {
	for($i=0; $i<count($_SESSION["Cart"]); $i++) {
		if($_SESSION["Cart"][$i]["id"] == $intID) {
			array_splice($_SESSION["Cart"], $i, 1);
			break;
		}
	}
}

function vaInsert($table, $arr){

	
	if (count($arr) <= 0)	return false;

	$keys = array_keys($arr);
	$sql = "INSERT INTO $GLOBALS[db_sp].".$table." ( ";
	$sql .= "`".$keys[0]."`";
	for ($i = 1; $i < count($keys); $i++) {
		$sql .= ",`".$keys[$i]."`";
	}

	$sql .= ") VALUES (";
	$sql .= "'".StripSql($arr[$keys[0]])."'";
	for ($i = 1; $i < count($keys); $i++) {
		$sql .= ",'".StripSql($arr[$keys[$i]])."'";
	}
	$sql .= ");";
//die($sql);
	$GLOBALS["sp"]->execute($sql);
	$post_id = $GLOBALS["sp"]->Insert_ID();
	return $post_id;
}

function vaUpdate($table, $arr, $where=""){

	global $db,$table_prefix;

	if (count($arr) <= 0)

	return false;

	$keys = array_keys($arr);

	$sql = "UPDATE $GLOBALS[db_sp].".$table." SET ";
	$sql .= "`".$keys[0]."`='".StripSql($arr[$keys[0]])."' ";

	for ($i = 1; $i < count($keys); $i++) {
		$sql .= ", `".$keys[$i]."`='".StripSql($arr[$keys[$i]])."' ";
	}
	if ($where) $sql .= " WHERE ".$where;

	//echo $sql; die();

	$GLOBALS["sp"]->execute($sql);

	//echo mysql_error();
}

function generateCode($characters) {
	/* list all possible characters, similar looking characters and vowels have been removed */
	$possible = '23456789bcdfghjkmnpqrstvwxyz';
	$code = '';
	$i = 0;
	while ($i < $characters) { 
		$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
		$i++;
	}
	return $code;
}

function insert_getComment($a){
	global $path_url,$lang;
	$idpr = $a['idpr'];
	
	$sql = "select * from $GLOBALS[db_sp].comment where active=1 and idpr=$idpr order by num asc, id desc limit 3";
	$rs = $GLOBALS["sp"]->getAll($sql);
	$str = '';
	$i = 1;
	foreach($rs as $item){
		if($item['idm'] != 0){
			$sql_mb = "select * from $GLOBALS[db_sp].member where id =".$item['idm'];
			$rs_mb = $GLOBALS["sp"]->getRow($sql_mb);
			$name = $rs_mb['name'];
			if($rs_mb['img'])
				$img='<img title="" alt="" src="'.$path_url.'/'.$rs_mb['img'].'">';
			else
				$img='<img title="" alt="" src="'.$path_url.'/photo/no-img-comment.jpg">';	
		}	
		else{
			$name = $item['name'];
			$img='<img title="" alt="" src="'.$path_url.'/photo/no-img-comment.jpg">';
		}

		if(($i%2)!=0)
			$classcoment = 'comment1';
		else
			$classcoment = 'comment2';
		$str.= '
			<div class="'.$classcoment.'">
				<div class="subtop">
					<div class="leftcomment">
						'.$img.'
					</div>
					<div class="rightcomment">
						<p class="namecomment">
							<strong>'.$name.'</strong>
						</p>
						<p class="datecomment">
							'.date('d/m/Y',strtotime($item['dated'])).'
						</p>
					</div>
				</div>
				<div class="subbottom">
					'.$item['content'].'
				</div>
			</div>
		';
		$i++;
		
	}
	return $str;
}

function getComment($idpr){
	global $path_url,$lang;
	$idpr = $idpr;
	
	$sql = "select * from $GLOBALS[db_sp].comment where active=1 and idpr=$idpr order by num asc, id desc limit 3";
	$rs = $GLOBALS["sp"]->getAll($sql);
	$str = '';
	$i = 1;
	foreach($rs as $item){
		if($item['idm'] != 0){
			$sql_mb = "select * from $GLOBALS[db_sp].member where id =".$item['idm'];
			$rs_mb = $GLOBALS["sp"]->getRow($sql_mb);
			$name = $rs_mb['name'];
			if($rs_mb['img'])
				$img='<img title="" alt="" src="'.$path_url.'/'.$rs_mb['img'].'">';
			else
				$img='<img title="" alt="" src="'.$path_url.'/photo/no-img-comment.jpg">';	
		}	
		else{
			$name = $item['name'];
			$img='<img title="" alt="" src="'.$path_url.'/photo/no-img-comment.jpg">';
		}

		if(($i%2)!=0)
			$classcoment = 'comment1';
		else
			$classcoment = 'comment2';
		$str.= '
			<div class="'.$classcoment.'">
				<div class="subtop">
					<div class="leftcomment">
						'.$img.'
					</div>
					<div class="rightcomment">
						<p class="namecomment">
							<strong>'.$name.'</strong>
						</p>
						<p class="datecomment">
							'.date('d/m/Y',strtotime($item['dated'])).'
						</p>
					</div>
				</div>
				<div class="subbottom">
					'.$item['content'].'
				</div>
			</div>
		';
		$i++;
		
	}
	return $str;
}

function getNameCity($id){
	global $lang;
	$sql = "select name from $GLOBALS[db_sp].city where id=$id";
	$rs = $GLOBALS["sp"]->getOne($sql);
	return $rs;
}

function getNameDistrict($id){
	global $lang;
	$sql = "select name from $GLOBALS[db_sp].district where id=$id";
	$rs = $GLOBALS["sp"]->getOne($sql);
	return $rs;
}

function getNameWard($id){
	global $lang;
	$sql = "select name from $GLOBALS[db_sp].ward where id=$id";
	$rs = $GLOBALS["sp"]->getOne($sql);
	return $rs;
}

function insert_getnameColor($a){
	$idcolor = $a['idcolor'];
	$rs = '';
	if($idcolor > 0){
		$sql = "select name from $GLOBALS[db_sp].colorpr where id=".$idcolor;
		$rs = $GLOBALS["sp"]->getOne($sql);
	}
	return $rs;
}

function GetnameColor($idcolor){
	$sql = "select name from $GLOBALS[db_sp].colorpr where id=".$idcolor;
	$rs = $GLOBALS["sp"]->getOne($sql);
	return $rs;
}

function GetnameSize($idsize){
	$sql = "select name from $GLOBALS[db_sp].sizepr where id=".$idsize;
	$rs = $GLOBALS["sp"]->getOne($sql);
	return $rs;
}

function getNameAll($id,$table,$name){
	$rs = '';
	if($id > 0){
		$sql = "select ".$name." from $GLOBALS[db_sp].".$table." where id=".$id;
		$rs = $GLOBALS["sp"]->getOne($sql);
	}
	return $rs;
}

function insert_getSize($a){
	$id = $a['id'];
	$idcolor = $a['idcolor'];
	$sql = "SELECT * FROM $GLOBALS[db_sp].colorsize where id=$id order by num asc, id desc";
	//die($sql);
	$rs = $GLOBALS["sp"]->GetRow($sql);
	$size = explode(",",$rs['idsize']);
		
	foreach($size as $value)
	{
		if($value > 0)
			$center .= '<option value="'.$value.'" >'.GetnameSize($value).'</option>';;
	}

	$list =  ' 
		<select onchange="getValue('.$idcolor.','.$id.')" class="select_number" name="kichthuoc" id="kichthuoc'.$id.'" > 
			'.$center.'
		</select>
	';
	return $list;
}

function insert_getColorPr($a){
	$id = $a['idpr'];
	$str = '';
	$sql = "SELECT * FROM $GLOBALS[db_sp].colorsize 
			where idpr=$id 
			group by idcolor
			order by num asc, id desc
	";
	$rs = $GLOBALS["sp"]->GetAll($sql);
	if(ceil(count($rs)) > 0){
		foreach($rs as $item){
			$sql_color = "SELECT color FROM $GLOBALS[db_sp].colorpr where id=".$item['idcolor']."	";
			$color = $GLOBALS["sp"]->GetOne($sql_color);
			$str.='
				<span class="color" style="background-color:'.$color.';"></span>
			';
		}
	}
	return $str;
}

function getColorPr($id){
	$str = '';
	$sql = "SELECT * FROM $GLOBALS[db_sp].colorsize 
			where idpr=$id 
			group by idcolor
			order by num asc, id desc
	";
	$rs = $GLOBALS["sp"]->GetAll($sql);
	if(ceil(count($rs)) > 0){
		foreach($rs as $item){
			$sql_color = "SELECT color FROM $GLOBALS[db_sp].colorpr where id=".$item['idcolor']."	";
			$color = $GLOBALS["sp"]->GetOne($sql_color);
			$str.='
				<span class="color" style="background-color:'.$color.';"></span>
			';
		}
	}
	return $str;
}

function insert_getColorPrDt($a){
	$id = $a['idpr'];
	$str = '';
	$sql = "SELECT * FROM $GLOBALS[db_sp].colorsize 
			where idpr=$id 
			group by idcolor
			order by num asc, id desc
	";
	$rs = $GLOBALS["sp"]->GetAll($sql);
	if(ceil(count($rs)) > 0){
		foreach($rs as $item){
			$sql_color = "SELECT color FROM $GLOBALS[db_sp].colorpr where id=".$item['idcolor']."	";
			$color = $GLOBALS["sp"]->GetOne($sql_color);
			$str.='
				<a>
					<span style="background-color: '.$color.';"></span>
				</a>
			';
		}
	}
	return $str;
}

function insert_getColorPrCity($a){
	$idpr = $a['idpr'];
	$idcity = $a['idcity'];
	$str = '';
	$sql = "SELECT * FROM $GLOBALS[db_sp].colorsize 
			where idpr=$idpr 
			and soluong > 0
			and idcity=$idcity
	";
	//die($sql);
	$rs = $GLOBALS["sp"]->GetAll($sql);
	if(ceil(count($rs)) > 0){
		foreach($rs as $item){
			$sql_color = "SELECT color FROM $GLOBALS[db_sp].colorpr where id=".$item['idcolor']."	";
			$color = $GLOBALS["sp"]->GetOne($sql_color);
			$str.='
				<span class="color" style="background-color:'.$color.';"></span>
			';
		}
	}
	return $str;
}


function insert_getProductHome($a){
	global $lang, $path_url,$showCity,$iphonePromotion, $iphonePromotion100;
	$catinput = $a['cat'];
	$id = $catinput['id'];
	$cat = $id;
	
	 if($catinput['has_child']==1){
		$sqlcat = "SELECT id FROM $GLOBALS[db_sp].categories where pid=$id and active=1 order by num asc, id desc";
		$rscat = $GLOBALS["sp"]->GetCol($sqlcat);
		$cat = implode(',',$rscat);	
	}
	$html = "";
	$sql = "SELECT * FROM $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd			
			where pr.active=1
			and pr.id=cldd.idpr  
			and cldd.in_stock=1			
		 	and cldd.idcity=$showCity
			and pr.type=3 
			and pr.price>0
			and pr.cid in ($cat)
			order by pr.orderhot asc, pr.id desc 
	";
	$rs = $GLOBALS["sp"]->getAll($sql);
	$total = ceil(count($GLOBALS["sp"]->getAll($sql)));
	
	if($total > 0 ){
		foreach($rs as $item){ 
			//				
			// if( $item["typeiphone"] > 1){
			// 	$promotion = getChedobaohanh($item["typeiphone"]);
			// }
			// else{
			// 	if($showCity == 1)
			// 		$promotion = $item["promotion_vn"];
			// 	else
			// 		$promotion = $item["promotion_en"];
			// }
			$promotion = "";
			
			$tinhtrang = tinhtranghang($item["in_stock"]);
			
			$TemChinhHang = $chinhhang = '';	
			// if( $item["temchinhhang"] == 1)
			// 	$TemChinhHang = '<div class="TemChinhHang"></div>';
			
			if( ($item["price"]==0) || ($tinhtrang != '') ){
				$pricecheck = $tinhtrang;
				$classOpacity = 'opacity';
				$divhethang = '<div class="hethang"></div>';
			}
			else{
				$pricecheck = number_format($item["price"],0,",",".").' VNĐ ';
				$classOpacity = $divhethang = '';
			}	
			if($item["discount"] > 0) {
				$promotion = '<div class="discount">'.$item["discount"].'%</div>';
			}
			
			if(!empty($item["img_thumb_en"])){	
			//	$class = 'promotion';
				$imgview = "<img class='img-responsive ".$classOpacity."' src='".$path_url ."/". $item['img_thumb_en'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";
			}
			else{
				$class = '';
				$imgview = "<img class='img-responsive ".$classOpacity."' src='".$path_url ."/". $item['img_thumb_vn'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";	
			}
			// if( $item["chinhhang"] == 1){
			// 	$chinhhang = '
			// 		<div class="noelmu"></div>
			// 		<div class="noelhoa"></div>
			// 	';	
			// }		 	
			$html.='
				<li class="product '.$class.'">
					<div class="frame_inner">
					'.$promotion.
						'<div class="frame_img_cat ">
							'.$TemChinhHang.'
							'.$chinhhang.'
							'.$divhethang.'
							<a class="viewproduct" href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">
								'.$imgview.'
						   </a>
						   
						</div>
						<div class="frame_title">
							<h3 class="name" >
								<a class="viewproduct" href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
							</h3>
						</div>
						<div class="frame_price">
							<div class="price">
								<span>'.$pricecheck.'</span>
							</div>
							
						</div>
					</div>
					<div class="frame-hover viewproduct">
						<div class="frame_title">
							<div class="name" >
								<a class="viewproduct"  href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
							</div>
						</div>
						
						<div class="frame_price">
							<div class="price">
								<span>'.$pricecheck.'</span>
							</div>
						</div>
						<div class="divider"></div>
						<div class="frame_description" style="height:60px;">

						</div>
						<div class="frame_accessories button clearfix" style="text-align:center;">
							<a href="javascript:void(0);" class="button__item button--left"  onclick="add_cart(1,'.$item["idpr"].')"data-id="'.$item["idpr"].'"><img src="'.$path_url.'/images/icon/cart.png" title="Mua hàng"></a>
							<a href="'.$path_url.'/'.$item["unique_key"].'.html" class="button__item button--right" ><img src="'.$path_url.'/images/icon/search.png" title="Chi tiết"></a>
						</div>
					</div>
				</li>
			';
		}
	}
	
	return $html;
}
function insert_getCart() {
	$html = "";
	global $path_url,$lang;
	$str = array();
	if(isset($_SESSION["cart"])) {
		foreach($_SESSION['cart'] as $key => $val) {
			$str[] = $key;
		}
		if(count($str)) {
			$str = implode(',',$str);
			$sql = "SELECT * FROM $GLOBALS[db_sp].products WHERE  id IN ( $str )";
			$rs = $GLOBALS["sp"]->getAll($sql);
			$contact = true;
			$total = 0;
			foreach($rs as $r) {
				if($r['price'] > 0) 
				$price = number_format($r["price"],0,",",".").' VNĐ ';
				else  {
					$price = "Liên hệ"; 
					$contact = false;
				}
				$total += $r['price']*$_SESSION['cart'][$r["id"]];
				$html.= '<li class="clearfix" style="position:relative;"><img style="width:40px;height:40px;float:left;" class="img-responsive" src="'.$path_url .'/'. $r['img_thumb_en'] . '" alt="'.$r["alt_img"].'" title="'.$r['title_img'].'"/><h3 class="title" style="font-size:16px;">'.$r["name_vn"].'</h3>
				<div class="detail-cart" style="padding:0;">
				<p style="color:blue;">'.$price.'  x <span style="color:red">'.$_SESSION['cart'][$r["id"]].'</span></p>
				</div>
				<span class="delItem" onclick="del_cart('.$r['id'].')">x</span></li>';
			}
			$total =  number_format($total,0,",",".").' VNĐ ';
			$html.= '<li class="clearfix total-cart">
						 <span style="padding: 10px;color:red;font-weight:bold;">Tổng cộng:</span>
						 <span style="padding: 10px;font-weight:bold;">'.($contact ? $total: 'Liên hệ') .'</span>
					 </li>';
			$html.= '<li class="clearfix buttons">
						<a href="javascript:void(0)" onclick="dell_all()" class="buttons__item button--red">Xóa</a>
						<a href="'.$path_url.'/gio-hang/1/" class="buttons__item button--blue" id="OrderButton">Đặt mua</a>
					 </li>';
		}
	}
	
	return $html;
	
}
function insert_countCart() {
	if(isset($_SESSION["cart"])) {
		 return count($_SESSION["cart"]);
	}
	return 0;
}
function insert_getProductApple($a){
	global $lang, $path_url,$showCity,$iphonePromotion,$iphonePromotion100;
	$cid = $a['cid'];
	$html = "";
	$sql = "SELECT * FROM $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
			where pr.cid=$cid 
			and pr.active=1 
			and pr.id=cldd.idpr
			and pr.price > 0
		 	and cldd.idcity=$showCity
			order by pr.num asc, pr.id desc 
	";
	//die($sql);
	$rs = $GLOBALS["sp"]->getAll($sql);
	$total = ceil(count($GLOBALS["sp"]->getAll($sql)));
	
	if($total > 0 ){
		foreach($rs as $item){
			//				
			// if( $item["typeiphone"] > 1){
			// 	$promotion = getChedobaohanh($item["typeiphone"]);
			// }
			// else{
			// 	if($showCity == 1)
			// 		$promotion = $item["promotion_vn"];
			// 	else
			// 		$promotion = $item["promotion_en"];
			// }
			$promotion = "";
			
			$tinhtrang = tinhtranghang($item["in_stock"]);
			
			$TemChinhHang = $chinhhang = '';	
			// if( $item["temchinhhang"] == 1)
			// 	$TemChinhHang = '<div class="TemChinhHang"></div>';
			
			if( ($item["price"]==0) || ($tinhtrang != '') ){
				$pricecheck = $tinhtrang;
				$classOpacity = 'opacity';
				$divhethang = '<div class="hethang"></div>';
			}
			else{
				$pricecheck = number_format($item["price"],0,",",".").' VNĐ ';
				$classOpacity = $divhethang = '';
			}	
			if($item["discount"] > 0) {
				$promotion = '<div class="discount">'.$item["discount"].'%</div>';
			}
			
			if(!empty($item["img_thumb_en"])){	
			//	$class = 'promotion';
				$imgview = "<img class='img-responsive ".$classOpacity."' src='".$path_url ."/". $item['img_thumb_en'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";
			}
			else{
				$class = '';
				$imgview = "<img class='img-responsive ".$classOpacity."' src='".$path_url ."/". $item['img_thumb_vn'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";	
			}
			// if( $item["chinhhang"] == 1){
			// 	$chinhhang = '
			// 		<div class="noelmu"></div>
			// 		<div class="noelhoa"></div>
			// 	';	
			// }		 	
			$html.='
				<li class="product '.$class.'">
					<div class="frame_inner">
					'.$promotion.
						'<div class="frame_img_cat ">
							'.$TemChinhHang.'
							'.$chinhhang.'
							'.$divhethang.'
							<a class="viewproduct" href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">
								'.$imgview.'
						   </a>
						   
						</div>
						<div class="frame_title">
							<h3 class="name" >
								<a class="viewproduct" href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
							</h3>
						</div>
						<div class="frame_price">
							<div class="price">
								<span>'.$pricecheck.'</span>
							</div>
							
						</div>
					</div>
					<div class="frame-hover viewproduct" >
						<div class="frame_title">
							<div class="name" >
								<a class="viewproduct"  href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
							</div>
						</div>
						
						<div class="frame_price">
							<div class="price">
								<span>'.$pricecheck.'</span>
							</div>
						</div>
						<div class="divider"></div>
						<div class="frame_description" style="height:60px;">

						</div>
						<div class="frame_accessories button clearfix" style="text-align:center;">
							<a href="javascript:void(0);" class="button__item button--left"  data-id="'.$item["id"].'"><img src="'.$path_url.'/images/icon/cart.png" title="Mua hàng"></a>
							<a href="'.$path_url.'/'.$item["unique_key"].'.html" class="button__item button--right" ><img src="'.$path_url.'/images/icon/search.png" title="Chi tiết"></a>
						</div>
					</div>
				</li>
			';
		}
	}
	
	return $html;
}
function insert_getCartDetail() {
	global $path_url,$lang;
	$html = "";
	$str = array();
	if(!isset($_SESSION["cart"])) {
		$html = ' <div style="display:block;" class="account_content">

		<p style="color: #FC650F!important; padding: 15px;" class="no_product">Không có đơn hàng nào</p>

	</div>';
	}
	elseif(count($_SESSION["cart"])== 0) {
		$html = ' <div style="display:block;" class="account_content">

		<p style="color: #FC650F!important; padding: 15px;" class="no_product">Không có đơn hàng nào</p>

	</div>';
	}
	else {
		$html.= ' <div class="woocommerce row row-large row-divided"> <div class="col large-7 pb-0 ">
					<form class="woocommerce-cart-form"  method="post">
					<table cellspacing="0" cellpadding="0" border="0" class="shopping_cart_detail_big shop_table shop_table_responsive">
						<thead>
						<tr>
							<th class="product-name" colspan="3">Sản phẩm</th>
							<th class="product-price">Giá</th>
							<th class="product-quantity">Số lượng</th>
							<th class="product-subtotal">Tổng</th>
						</tr>
					</thead><tbody>';
					foreach($_SESSION['cart'] as $key => $val) {
						$str[] = $key;
					}
					if(count($str)) {
						$str = implode(',',$str);
						$sql = "SELECT * FROM $GLOBALS[db_sp].products WHERE  id IN ( $str )";
						$rs = $GLOBALS["sp"]->getAll($sql);
						$contact = true;
						$total = 0;
						$gross = 0;
						$countCart = 0;
						foreach($rs as $r) {
							if($r['price'] > 0) {
								$price = number_format($r["price"],0,",",".").' VNĐ ';
							}							
								else  {
									$price = "Liên hệ"; 
									$contact = false;
								}
								$gross = $r['price']*$_SESSION['cart'][$r["id"]];
								$total += $gross;
								

								$html.= 
								'<tr class="woocommerce-cart-form__cart-item cart_item">
								<td class="product-remove">
								  <a href="javascript:void(0)"
								  class="remove" aria-label="Xóa sản phẩm này" data-productid="'.$r['id'].'" >×</a>
								</td>
								<td class="product-thumbnail">
								  <a href="'.$path_url.'/'.$r['unique_key'].'.html">
									<img class="img-responsive" style="width:75px;height:75px;" src="'.$path_url .'/'. $r['img_thumb_en'] . '" alt="'.$r["name_vn"].'" title="'.$r['name_vn'].'"/>
									</a>
								</td>
								<td class="product-name" data-title="Sản phẩm">
								  <a href="'.$path_url.'/'. $r["unique_key"] .'.html">'.$r["name_vn"] .'</a>
								</td>
								<td class="product-price" data-title="Giá">
								  <span class="woocommerce-Price-amount amount">' . $price . '</span>
								</td>
								<td class="product-quantity" data-title="Số lượng">
									  <div class="quantity buttons_added">
										  <input type="button" value="-" class="minus button is-form">
										  <label class="screen-reader-text" for="quantity_'.$countCart.'">Số lượng</label>
										  <input type="number" id="quantity_'.$countCart.'" class="input-text qty text" step="1" min="0" max="9999" name="cart[2afe4567e1bf64d32a5527244d104cea][qty]" value="'.$_SESSION["cart"][$r["id"]].'" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="'.$r["name_vn"].' số lượng" >
										  <input type="button" value="+" class="plus button is-form">	
									  </div>
								</td>
								
								<td class="product-subtotal" data-title="Tổng cộng">
								  <span class="woocommerce-Price-amount amount">'.
								  ($r["price"]+0 > 0? (number_format($gross,0,",",".")  . ' VNĐ') :"Liên hệ")
								 .'</span>
								</td>
							  </tr>';
							  
							  $countCart++;
						}
						$html.='<tr>
									<td colspan="6" class="actions">
								<div class="continue-shopping pull-left text-left">
									<a class="button-continue-shopping button is-outline" href="'.$path_url.'">
										← Tiếp tục xem sản phẩm    </a>
								</div>
									<button type="submit" class="button primary" name="update_cart" value="Cập nhật giỏ hàng"
									>Cập nhật giỏ hàng</button> 
									</td>
								</tr>
								</tbody>';

						$html.='</table></form></div>';
						$html.='<div class="cart-collaterals large-5 col pb-0">
						<div class="cart_totals">
						  <h2 class="cart__title">Tổng số lượng</h2>
						  <table cellspacing="0" class="shop_table shop_table_responsive">
							<tbody>						 
							  
							  <tr class="order-total">
								<th>Tổng cộng</th>
								<td data-title="Tổng cộng">
								  <strong>
									<span class="woocommerce-Price-amount amount">'.($contact? number_format($total,0,",","."). ' VNĐ': 'Liên hệ').'
									</span>
								  </strong>
								</td>
							  </tr>
							</tbody>
						  </table>
						  <div class="wc-proceed-to-checkout">
							<a href="'.$path_url.'/thanh-toan/1/" class="checkout-button button alt wc-forward">Tiến hành
							thanh toán</a>
						  </div>
						</div>						
					  </div></div>';
					}

		
	
	}
	return $html;
}
function insert_getCartPayment() {
	global $path_url,$lang;
	$html = "";
	$str = array();
	if(!isset($_SESSION["cart"])) {
		$html = ' <div style="display:block;" class="account_content">

		<p style="color: #FC650F!important; padding: 15px;" class="no_product">Không có đơn hàng nào</p>

	</div>';
	}
	elseif(count($_SESSION["cart"])== 0) {
		$html = ' <div style="display:block;" class="account_content">

		<p style="color: #FC650F!important; padding: 15px;" class="no_product">Không có đơn hàng nào</p>

	</div>';
	}else {
		foreach($_SESSION['cart'] as $key => $val) {
			$str[] = $key;
		}
		if(count($str)) {
			$html.= '<div class="col-inner has-border">
			<h3 id="order_review_heading">Đơn hàng của bạn</h3>
			<div id="order_review" class="woocommerce-checkout-review-order">
				<table class="shop_table woocommerce-checkout-review-order-table shop_table_responsive">
					<thead>
						<tr>
							<th class="product-name">Sản phẩm</th>
							<th class="product-total">Tổng cộng</th>
						</tr>
					</thead>
					<tbody>';
			$str = implode(',',$str);
			$sql = "SELECT * FROM $GLOBALS[db_sp].products WHERE  id IN ( $str )";
			$rs = $GLOBALS["sp"]->getAll($sql);
			$contact = true;
			$total = 0;
			$gross = 0;
			$countCart = 0;
			foreach($rs as $r) {
				if($r['price'] > 0) {
					$price = number_format($r["price"],0,",",".").' VNĐ ';
				}							
					else  {
						$price = "Liên hệ"; 
						$contact = false;
					}
				$gross = $r['price']*$_SESSION['cart'][$r["id"]];
				$total += $gross;
				$html.= '<tr class="cart_item">
				<td class="product-name">
					'.$r["name_vn"] .'
						<strong class="product-quantity">×
							'.$_SESSION['cart'][$r['id']] .'</strong></td>
					<td class="product-total">
						<span class="woocommerce-Price-amount amount">'.
						($r["price"]+0 > 0? (number_format($gross,0,",",".")  . ' VNĐ') :"Liên hệ")
							.'</span>
					</td>
				</tr>';				
				$countCart++;
			}

			$html.='</tbody>';
			$html.='<tfoot>
			<tr class="cart-subtotal">
				<th>Tổng cộng</th>
				<td>
					<span class="woocommerce-Price-amount amount">'.($contact? number_format($total,0,",","."). ' VNĐ': 'Liên hệ').'
						</span>
				</td>
			</tr>
			<tr class="woocommerce-shipping-totals shipping">
				<th>Shipping</th>
				<td data-title="Shipping">
					<ul id="shipping_method" class="woocommerce-shipping-methods">
						<li>
							<input type="text" name="shipping_method" data-index="0" id="shipping_cost"	value="" />							
						</li>
						
					</ul>
				</td>
			</tr>
			<tr class="order-total">
				<th>Tổng cộng</th>
				<td>
					<strong>
						<span class="woocommerce-Price-amount amount" id="totalValueCart">
						'.($contact? number_format($total,0,",","."). ' VNĐ': 'Liên hệ'). '
						</span>
					</strong>
				</td>
			</tr>
		</tfoot></table>';
		$html.='<div id="payment" class="woocommerce-checkout-payment">
					<ul class="wc_payment_methods payment_methods methods">
						<li class="wc_payment_method payment_method_cod">
							<input id="payment_method_cod" type="radio" class="input-radio" name="payment_method"
								value="cod" checked="checked" data-order_button_text="" />
							<label for="payment_method_cod">Thanh toán khi nhận hàng ( Free Ship COD )</label>
							<div class="payment_box payment_method_cod" style="display: block;">
								<p>Trả tiền mặt khi giao hàng</p>
							</div>
						</li>
						<li class="wc_payment_method payment_method_bacs">
							<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method"
								value="bacs" data-order_button_text="" />
							<label for="payment_method_bacs">Chuyển khoản ngân hàng</label>
							<div class="payment_box payment_method_bacs" style="display:none;">
								<p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui
									lòng sử dụng
									Mã đơn hàng của bạn trong phần Nội dung thanh toán. Đơn hàng sẽ đươc
									giao sau khi
									tiền đã chuyển.</p>
							</div>
						</li>
					</ul>
					<div class="form-row place-order">
						<div class="woocommerce-terms-and-conditions-wrapper">
							<div class="woocommerce-privacy-policy-text"></div>
						</div>
						<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" onclick="return sendOrder()"
							value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>

					</div>
				</div>
			</div>
		</div>
	</div>
</form>';
		}
	}
	return $html;

}
function insert_getPhuKienGiamGia($a){
	$idpromotion = $a['idpromotion'];
	$price = $a['price'];
	$sql = "SELECT * FROM $GLOBALS[db_sp].phukiengiamgia where id in ($idpromotion) and active = 1 order by num asc, id desc";
	$rs = $GLOBALS["sp"]->GetAll($sql);
	$str = '';
	if(ceil(count($rs)) > 0){
		foreach($rs as $item){
			$str .='
				<br />
				<input class="checkboxBuy" id="PkPromotion'.$item['id'].'" type="checkbox" value="'.$item['id'].'" name="PkPromotion[]" onclick="getPkPromotion'.$item['id'].'();" /> 
				 '.$item['name_vn'].' từ  '.number_format($item['price_vn'],0,",",".").' xuống '.number_format($item['promotion_vn'],0,",",".").'
				 
				  <script type="text/javascript">
					function getPkPromotion'.$item['id'].'()
					{
						var Total;
						var promotion = '.$item['promotion_vn'].';
						var price = $("#priceTotal").val();
						if($("#PkPromotion'.$item['id'].'").is(":checked")){   
							Total = Math.round(price) + Math.round(promotion);
							Totalshow = formatNumber(Total);
							$("#priceTotal").val(Total);
							$("#showPrice").html(Totalshow);	
						}
						else{
							Total = Math.round(price) - Math.round(promotion);
							Totalshow = formatNumber(Total);
							$("#priceTotal").val(Total);
							$("#showPrice").html(Totalshow);
						}
					}
				</script>
			';
		}
	}
	return $str;
}




function insert_countSearchPr($a){
	global $lang, $path_url;
	$id = $a['id'];
	if($id == 4 || $id == 43 ){
		$sql_sum = "select count(id) from $GLOBALS[db_sp].products 
					where cid in (select id from $GLOBALS[db_sp].categories where `type`=$id) 
		";
	}
	else{
		$sql_sum = "select count(id) from $GLOBALS[db_sp].products where cid= $id ";
	}
	$total = ceil($GLOBALS["sp"]->getOne($sql_sum));
	return $total;
}

function getPrid($cid){
	global $showCity;
	 $sql = "select pr.id
				from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
				where pr.active=1 
				and pr.cid = ".$cid."
				and pr.id=cldd.idpr
				and pr.price > 0
		 		and cldd.idcity=$showCity 
				order by pr.num asc, pr.id desc 
		";
	$prid=implode(',',$GLOBALS["sp"]->getCol($sql));
	return $prid;
	
}

function getLinkTitle($cid,$live){
	global $path_url,$lang;
	$sql = "select * from $GLOBALS[db_sp].categories
			where id=$cid
	";
	$item = $GLOBALS["sp"]->getRow($sql);
	
	$link = GetLinkCat($item, $lang);
	$str='
		<div class="breadcrumb ">
			<a href="' . $path_url. '/' .$link. '" title="'.$item["title_link"].'">
				' .$item["name_$lang"]. '
			</a>
		</div>
		<div class="breadcrumbs_sepa">&gt;</div>
	';
	

	if($item['pid'] != 2)
		return getLinkTitle($item["pid"]).$str;	
	else
		return $str;	
}
function insert_tinhtranghang($a){
	global $showCity;
	$active = $a['active'];
	if($active == 0)
		$tinhtrang = "Tạm hết hàng";
	elseif($active == 2){
		if($showCity==1)
			$tinhtrang = "Liên hệ: 08.6685.1666";
		else
			$tinhtrang = "Liên hệ: 0511.655.8855";
	}
	else
		$tinhtrang = '';
		
		return $tinhtrang;
}

function tinhtranghang($active){
	if($active == 0)
		$tinhtrang = "Tạm hết hàng";
	elseif($active == 2)
		$tinhtrang = "Liên hệ: 08.6685.1666";
	else
		$tinhtrang = '';
	return $tinhtrang;
}

function insert_getChedobaohanh($a){
	global $lang, $path_url,$showCity;
	$cid = $a['cid'];
	$sql = "SELECT * FROM $GLOBALS[db_sp].thongtinchung where cid=$cid and idcity=".$showCity." order by num asc, id desc";
	$rs = $GLOBALS["sp"]->GetRow($sql);
	
	return $rs['content_vn'];
}

function insert_getnambaohanh($a){
	global $lang, $path_url,$showCity;
	$cid = $a['cid'];
	$sql = "SELECT * FROM $GLOBALS[db_sp].thongtinchung where cid=$cid and idcity=".$showCity." order by num asc, id desc";
	$rs = $GLOBALS["sp"]->GetRow($sql);
	
	return $rs['name_vn'];
}

function getChedobaohanh($cid){
	global $lang, $path_url,$showCity;
	$sql = "SELECT * FROM $GLOBALS[db_sp].thongtinchung where cid=$cid and idcity=".$showCity." order by num asc, id desc";
	$rs = $GLOBALS["sp"]->GetRow($sql);
	
	return $rs['content_vn'];
}

function checkisIphone($cid){
	global $lang, $path_url,$showCity;
	$sql = "SELECT count(id) FROM $GLOBALS[db_sp].categories where id=$cid and type=4"; //điện thoại thuộc iphone
	$total = ceil($GLOBALS['sp']->getOne($sql));
	return $total;
}
function checkNotragop($cid){
	global $lang, $path_url,$showCity;
	$sql = "SELECT * FROM $GLOBALS[db_sp].categories where id=$cid ";
	$rs = $GLOBALS['sp']->getRow($sql);
	if($rs['has_menu']==3)
		return 1;
	else
		return 0;
}
function loadCat($cid){
	global $lang, $path_url,$showCity;
	$sql = "SELECT * FROM $GLOBALS[db_sp].categories where id=$cid ";
	$rs = $GLOBALS['sp']->getRow($sql);
	return $rs;
}
function striptags($str){
	$str = strip_tags(trim($str));
	$str = str_replace(".js","", $str);
	$str = str_replace(".php","", $str);
	$str = str_replace(".asp","", $str);
	$str = str_replace(".aspx","", $str);
	$str = str_replace("#","", $str);
	$str = str_replace("$","", $str);
	$str = str_replace("{","", $str);
	$str = str_replace("}","", $str);
	return $str;
}

?>

