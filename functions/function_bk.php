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
		session_register('intro');
		$_SESSION['intro'] = 'intro';
		return true;	
	}
	else{
		session_register('intro');
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
	$mail->WordWrap = 50; // set word wrap
	
	$mail->IsHTML(true); // send as HTML
	$mail->Subject = $subj;
	$mail->Body = $mess;

	$send=$mail->Send();
	if ($send) {
		return true;
	}else return false;
}

function sendmailAjax($user,$email,$subj,$mess)
{

	include("../#include/email_config.php");
	/////////goi cho gmail	
	$mail = new PHPMailer();
		
	$mail->IsSMTP(); // send via SMTP
	$mail->SMTPAuth = true; // turn on SMTP authentication
	
	$mail->SMTPDebug = 1;
	//$mail->SMTPSecure = 'tls';
	$mail->Host = SMTP_SERVER;
	$mail->Port       = 25;
	$mail->Username = MAIL_USER; // SMTP username
	$mail->Password = MAIL_PASS; // SMTP password
	$mail->CharSet = "UTF-8"; 
	
	$mail->From = MAIL_FROM;
	$mail->FromName = MAIL_FROMNAME;
	$mail->AddAddress($email,$user);
	
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
	
	$sql = "select name from $GLOBALS[db_sp].colorpr where id=".$idcolor;
	$rs = $GLOBALS["sp"]->getOne($sql);
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

function insert_getProductApple($a){
	global $lang, $path_url,$showCity,$iphonePromotion;
	$cid = $a['cid'];
	$html = "";
	$sql = "SELECT * FROM $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
			where pr.cid=$cid 
			and pr.active=1 
			and pr.id=cldd.idpr
		 	and cldd.idcity=$showCity
			order by pr.num asc, pr.id desc 
	";
	//die($sql);
	$rs = $GLOBALS["sp"]->getAll($sql);
	$total = ceil(count($GLOBALS["sp"]->getAll($sql)));
	
	if($total > 0 ){
		foreach($rs as $item){
			if( $item["typeiphone"] != 1)
				$promotion = $item["promotion_".$lang];
			else
				$promotion = $iphonePromotion["content_".$lang];
			$class = '';
			
			$tinhtrang = '';	
			if( $item["typepr"] == 0)
				$tinhtrang = '(Tạm hết hàng)';
			
			$TemChinhHang = '';	
			if( $item["temchinhhang"] == 1)
				$TemChinhHang = '<div class="TemChinhHang"></div>';
			if($item["price_".$lang]==0){
				$pricecheck = 'Giá liên hệ';
			}
			else{
				$pricecheck = number_format($item["price_".$lang],0,",",".").' VNĐ ';
			}	
					 	
			$imgview = "<img class='img-responsive' src='".$path_url ."/". $item['img_thumb_vn'] ."' alt='".$item["alt_img"]."' title='".$item['title_img']."'/>";
			
			$html.='
				<li class="product '.$class.'">
					<div class="frame_inner">
						<div class="frame_img_cat ">
							'.$TemChinhHang.'
							<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">
								'.$imgview.'
						   </a>
						</div>
						<div class="frame_title">
							<h3 class="name" >
								<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
							</h3>
						</div>
						<div class="frame_price">
							<div class="price">
								<span>'.$pricecheck.$tinhtrang.'</span>
							</div>
							<div class="discount">&nbsp;</div>
						</div>
					</div>
					<div class="frame-hover" onclick="location.href=\''.$path_url.'/'.$item["unique_key"].'.html\'">
						<div class="frame_title">
							<div class="name" >
								<a href="'.$path_url.'/'.$item["unique_key"].'.html" title="'.$item["title_link"].'">'.$item["name_".$lang].'</a> 
							</div>
						</div>
						
						<div class="frame_price">
							<div class="price">
								<span>'.$pricecheck.$tinhtrang.'</span>
							</div>
						</div>
						<div class="divider"></div>
						<div class="frame_discount"></div>
						<div class="frame_accessories">
							'.$promotion.'
						</div>
					</div>
				</li>
			';
		}
	}
	
	return $html;
}

function insert_getPhuKienGiamGia($a){
	$idpromotion = $a['idpromotion'];
	$price = $a['price'];
	$sql = "SELECT * FROM $GLOBALS[db_sp].phukiengiamgia where id in ($idpromotion) and active = 1 order by id desc";
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

?>

