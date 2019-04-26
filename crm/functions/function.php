<?php
function CheckLogin(){
	global $path_url;
	if(!isset($_SESSION["store_crmvietanhmobil_login"])){	
		echo"<script type=\"text/javascript\">	
			document.location.href= '".$path_url."';
		</script>";
	}
}

function CheckCountLogin(){
	global $db;
	$sql = "select * from $GLOBALS[db_sp].banned_ip where ip='".$_SERVER['REMOTE_ADDR']."'";
	$r = $GLOBALS["sp"]->getRow($sql);
	if($r){
		echo"<script type=\"text/javascript\">	
			document.location.href= '../index.html'
		</script>";
	}
	$timeoutseconds = 3600;
	$timestamp = time();
	$timeout = $timestamp-$timeoutseconds;
	$sql = "DELETE FROM $GLOBALS[db_sp].banned_ip WHERE timestamp<$timeout";
	$GLOBALS["sp"]->execute($sql);
	
	if(isset($_SESSION['counter_crmvietanhmobil_login']) && $_SESSION['counter_crmvietanhmobil_login']>3){
		$sql = "INSERT INTO $GLOBALS[db_sp].banned_ip(ip,timestamp) VALUES ('".$_SERVER['REMOTE_ADDR']."','$timestamp')";
		//echo $sql;
		$GLOBALS["sp"]->execute($sql);
	}
}

function replacePrice($str){
	$str = str_replace(".", "", $str);	
	return $str;
}

///////////xóa khoản trắng//////
function strSpace($str){
	$str = str_replace(";", "", $str);
	$str = str_replace(",", "", $str);
	$str = str_replace(".", "", $str);
	$str = str_replace(" ", "", $str);
	
	return $str;
}

function page_transfer2($url){
	echo"<script type=\"text/javascript\">	
		document.location.href= '".$url."'
	</script>";
}

function StripUnicode($str){

	$marTViet=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă",
	"ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề"
	,"ế","ệ","ể","ễ",
	"ì","í","ị","ỉ","ĩ",
	"ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"
	,"ờ","ớ","ợ","ở","ỡ",
	"ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
	"ỳ","ý","ỵ","ỷ","ỹ",
	"đ",
	"À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"
	,"Ằ","Ắ","Ặ","Ẳ","Ẵ",
	"È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
	"Ì","Í","Ị","Ỉ","Ĩ",
	"Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"
	,"Ờ","Ớ","Ợ","Ở","Ỡ",
	"Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
	"Ỳ","Ý","Ỵ","Ỷ","Ỹ",
	"Đ",
	"-",":",",",".","?",'/','\\','%','"',"'","&","(",")","( "," )"," ( "," ) "," ","!","+"
	);

	$marKoDau=array("a","a","a","a","a","a","a","a","a","a","a"
	,"a","a","a","a","a","a",
	"e","e","e","e","e","e","e","e","e","e","e",
	"i","i","i","i","i",
	"o","o","o","o","o","o","o","o","o","o","o","o"
	,"o","o","o","o","o",
	"u","u","u","u","u","u","u","u","u","u","u",
	"y","y","y","y","y",
	"d",
	"A","A","A","A","A","A","A","A","A","A","A","A"
	,"A","A","A","A","A",
	"E","E","E","E","E","E","E","E","E","E","E",
	"I","I","I","I","I",
	"O","O","O","O","O","O","O","O","O","O","O","O"
	,"O","O","O","O","O",
	"U","U","U","U","U","U","U","U","U","U","U",
	"Y","Y","Y","Y","Y",
	"D",
	" "," "," "," "," "," "," "," "," "," "," "," ","","","","",""," ","",""
	);
	
	$arrSpace = array("   ", "  "," " );
	$arrSpaceRep = array("-","-","-");
	$str =  mb_strtolower(str_replace($marTViet,$marKoDau,$str));
	return str_replace($arrSpace,$arrSpaceRep, $str);
}

function RenameFile($filename){

	$filename = str_replace("& ", "", $filename);

	$filename = str_replace(" &", "", $filename);

	$filename = str_replace("&", "", $filename);

	$filename = str_replace(",", "", $filename);

	$filename = str_replace(" - ", "-", $filename);

	$filename = str_replace(" -", "-", $filename);

	$filename = str_replace("- ", "-", $filename);

	$filename = str_replace(" ", "-", $filename);

	return $filename;

}

function CheckUploadImg($type){
	$type = strtolower($type);
	if($type!=".jpeg" && $type!=".jpg" && $type!=".bmp" && $type!=".gif" && $type!=".png" && $type!=".JPG" && $type!=".PNG" && $type!=".GIF" && $type!=".BMP" && $type!=".JPEG" && $type!=".swf" && $type!=".SWF")
		return false;
	else
		return true;
}

function SubStrEx($str, $length){
	if(strlen($str) <= $length)
		return $str;

	$pos = strpos($str, " " , $length-1);
	if($pos >0 )
		return substr($str, 0, $pos) . '...';
	else
		return $str;
}
/////// them sua xoa/////////

function StripSql($data){
	$str = str_replace("'", "''", $data);
	return str_replace("\''", "''", $str);
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
function vaDelete($tbl, $where){
	global $db,$table_prefix;
	$sql = "DELETE FROM $GLOBALS[db_sp].`".$tbl."` WHERE $where";
	$GLOBALS["sp"]->execute($sql);
}


function vaUpdateWeb($table, $arr, $where=""){

	global $db,$table_prefix;

	if (count($arr) <= 0)

	return false;

	$keys = array_keys($arr);

	$sql = "UPDATE $GLOBALS[db_web].".$table." SET ";
	$sql .= "`".$keys[0]."`='".StripSql($arr[$keys[0]])."' ";

	for ($i = 1; $i < count($keys); $i++) {
		$sql .= ", `".$keys[$i]."`='".StripSql($arr[$keys[$i]])."' ";
	}
	if ($where) $sql .= " WHERE ".$where;

	//echo $sql; die();

	$GLOBALS["web"]->execute($sql);

	//echo mysql_error();
}

function vaInsertWeb($table, $arr){

	if (count($arr) <= 0)	return false;

	$keys = array_keys($arr);
	$sql = "INSERT INTO $GLOBALS[db_web].".$table." ( ";
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
	$GLOBALS["web"]->execute($sql);
	$post_id = $GLOBALS["web"]->Insert_ID();
	return $post_id;
}
function vaDeleteWeb($tbl, $where){
	global $db,$table_prefix;
	$sql = "DELETE FROM $GLOBALS[db_web].`".$tbl."` WHERE $where";
	$GLOBALS["web"]->execute($sql);
}

function GetArtLink2($art, $lg2){
	$id = $art['cid'];
	$sql = "select c1.unique_key_$lg2 as cat_name,c2.unique_key_$lg2 as group_name from $GLOBALS[db_sp].categories c1,$GLOBALS[db_sp].categories c2 where c1.id=$id and c1.pid=c2.id";
	$r = $GLOBALS["sp"]->getRow($sql);
	
	$link = "/" . $r['group_name'] . "/" . $r['cat_name'] . "/" . $art["unique_key_$lg2"].".html";
	$link = str_replace("//", "/", $link);
	$link = substr($link,1,strlen($link));
	return $link;
}
function GetIntroLink($art, $lg2){
	
	$id = $art['cid'];
	$sql = "select c1.unique_key_$lg2 as cat_name,c2.unique_key_$lg2 as group_name from $GLOBALS[db_sp].categories c1,$GLOBALS[db_sp].categories c2 where c1.id=$id and c1.pid=c2.id";
	$r = $GLOBALS["sp"]->getRow($sql);
	return "/" . $r['group_name'] . "/" . $r['cat_name'] . "/";
}
/////////////end them sua xoa/////////////

////////Phan trang//////
function paginator($num_page,$page,$iSEGSIZE,$url) //pagination.
{
  $alink = "";
  $cur_page=$page;
  $lastpage=$num_page;
  $seg_size=$iSEGSIZE;
  $seg_num=ceil($num_page/$seg_size);
  $seg_cur=ceil($page/$seg_size);
 
  $first_page=1;
  $back_page=$page-1;
  
  //so trang tren moi phan doan
  $n=($seg_cur*$seg_size<=$lastpage)?$seg_cur*$seg_size:$lastpage;
  //in ra cac trang trong moi phan doan
  for ($p=($seg_cur-1)*$seg_size+1;$p<=$n;$p++)
  {
   $seg_page[]=$p;
  }
  
  //show/hide back 
  $next_page=$page+1;
  $last_page=$lastpage; 
  
  if ($seg_cur>1) {
   $back=$cur_page-1;
   $alink.="<a href='$url/$first_page/'>&nbsp;Đầu&nbsp;</a>";
   $alink.="<a href='$url/$back/'>&nbsp;<<&nbsp;</a>";
  }else{
   $alink.="<span >&nbsp;Đầu&nbsp;</span>";
   $alink.="<span >&nbsp;<<&nbsp;</span>";
  }
  if (count($seg_page)<=0) return;
  foreach ($seg_page as $page){
   if ($page==$cur_page) {
    $alink.="<span><font color='#0066FF' style='font-family:Arial, Helvetica, sans-serif'>&nbsp;".$page."&nbsp;</font></span>";
   } else {
    $alink.="<a href='$url/$page/'>&nbsp;$page&nbsp;</a>"; 
    
   }
  }

  //show/hide next
  if ($seg_cur<$seg_num) {$next=$cur_page+1;
   $alink.="<a href='$url/$next/'>&nbsp;>>&nbsp;</a>";
   $alink.="<a href='$url/$last_page/'>&nbsp;Cuối&nbsp;</a>";
  }else{
   $alink.="<span>&nbsp;>>&nbsp;</span>";
   $alink.="<span>&nbsp;Cuối&nbsp;</span>";
  }
 return $alink;
}


/////////end phan trang///////

/////////Insert tpl//////////////////
function insert_GetNameComponent($a){
	$comp = $a['comp'];
	$sql = "select * from $GLOBALS[db_web].component where id=".$comp;
	$rs = $GLOBALS["web"]->getRow($sql);
	return $rs;
}

function insert_HearderCat($a){
	global $path_url;
	$cha = $a['cid'];
	$root =isset($a['root'])?$a['root']:1;
	$act = $a['act'];
	//die($act);
	$list = "";
	$str = "";
	$arr = array();
	do{
		$sql = "select * from $GLOBALS[db_web].categories where id=".$cha;
		$r = $GLOBALS["web"]->getRow($sql);
		$arr[count($arr)] = $r;
		$cha = $r['pid'];
	}while($arr[count($arr)-1]['id'] != $root);
	$j = 0;
	for($i=(count($arr)-1);$i>=0;$i--){
		
		if(($i == 0) && ($act!='edit') && ($act!='add') )
			$img = "";
		else
			$img = " <span class='subconten'><img src='".$path_url."/images/icon.gif' style='margin-top:9px' /></span>";
		
		if($arr[$i]['has_child']=='1'){
			$link = $path_url;
		}
		else{
			$sql = "select * from $GLOBALS[db_web].component where id=".$arr[$i]['comp'];
			$r = $GLOBALS["web"]->getRow($sql);
			$link =  $path_url."/".$r['do']."/".$arr[$i]['id']."/";
		}
		if($arr[$i]['id'] == 2){
			$link =  $path_url."/categories/2/";
			$list.= "
				<span class='subconten'><a  href='".$link."' title='Danh mục' >		
					Danh mục 
				</a> </span> ". $img ."
			";
		}
		else if($arr[$i]['id'] !=1 ){
			$list.= "
				<span class='subconten'><a  href='".$link."' title='".$arr[$i]['name_vn']."' >		
					".$arr[$i]['name_vn']." 
				</a> </span> ". $img ."
			";
		}
	}                                             	
	return $list;
}


function insert_TheLoai($a){
	$cid = $a['cid'];
	$module = $a['module']; ///1 la tin tuc , 2 san pham .... trong table component
	$checked = "";
	$html = "";
	$sql = "select * from $GLOBALS[db_sp].categories where pid=2 and id<>9 order by num asc, id desc";
	$rs = $GLOBALS["sp"]->getAll($sql);
	$countCat1 = ceil(count($rs));
	if($countCat1 > 0){
		foreach($rs as $item){
		
			if($item['has_child']==1){
				if(CheckTheLoaiLive2($item['id'],$module)){//ham kiem tra cap 2
					$html .= "<option value='' style='color:#006600;font-weight:bold;' > ".$item['name_vn']." </option>\n ";
					$sql2 = "select * from $GLOBALS[db_sp].categories where pid= ".$item['id']." and comp = ".$module." order by num asc, id desc";
					$rs2 = $GLOBALS["sp"]->getAll($sql2);
					foreach($rs2 as $item2){
						if($cid == $item2['id'])
							$checked = " selected style='color:#005EBB;' ";
						else
							$checked = ""; 
						$html .= "<option value='".$item2['id']."' ".$checked."  > &nbsp;&nbsp;&nbsp;&nbsp;  ".$item2['name_vn']."  </option>\n ";
					}
				
				}
			}
			
			else{ //cap 1
				
				if($item['comp'] == $module){
					if($cid == $item['id'])
						$checked1 = " selected style='color:#005EBB;' ";
					else
						$checked1 = "";

					$html .= "<option value='".$item['id']."' ".$checked1."  > ".$item['name_vn']."  </option>\n ";
				}
				
			}
			
		}
	
	}
	$html = "<select  name='cat' id='cat' >" . $html . "</select>";
	return $html;

}

function CheckTheLoaiLive2($cid,$module){
	$sql = "select * from $GLOBALS[db_sp].categories where pid= ".$cid." and comp = ".$module." order by num asc, id asc";
	$rs = $GLOBALS["sp"]->getAll($sql);
	
	if(ceil(count($rs)) > 0 )
		return true;
	else
		return false;
}


function sendmail($user,$MAIL_FROMNAME,$email,$subj,$mess,$mailreply,$mailcc="",$mailcc1="")
{
	include("../#include/email_config.php");
	$mail = new PHPMailer();
	/////////goi cho gmail	
	$mail->IsSMTP(); // send via SMTP
	$mail->SMTPAuth = true; // turn on SMTP authentication
	
	$mail->SMTPDebug = 1;
	$mail->SMTPSecure = 'tls';
	$mail->Port       = 587;
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

function checkPer(){
	if($_SESSION['admin_crmvietanhmobil_group'] == -1)
		return true;
	else
		return false;
}

function checkPermision($cid, $act){//gia tri action ( 1 -> add, 2 -> edit , 3 -> delete)
	if($cid)
		$sql="select * from $GLOBALS[db_sp].permissions  where ((perm like '%".$act."%') or (perm like '%4%')) and cid=$cid and uid = " .$_SESSION["admin_crmvietanhmobil_id"];
	else
		$sql="select * from $GLOBALS[db_sp].permissions  where ((perm like '%".$act."%') or (perm like '%4%'))  and uid = " .$_SESSION["admin_crmvietanhmobil_id"];
	$showall = ceil(count($GLOBALS["sp"]->getAll($sql)));
	if( ($showall > 0) || ($_SESSION['admin_crmvietanhmobil_group'] == -1))
		return true;
	else
		return false;
}

function page_permision(){
	echo"<script type=\"text/javascript\">	
		alert('Ban khong co quyen, vui long lien he voi nguoi quan tri.');
	</script>";
	
}


function GetLinkDetail($cat){
	$id = $cat['cid'];
	$sql = "select c1.unique_key as cat_name,c2.unique_key as group_name from $GLOBALS[db_sp].categories c1, $GLOBALS[db_sp].categories c2 where c1.id=$id and c1.pid=c2.id";

	$r = $GLOBALS["sp"]->getRow($sql);
	$link = "/" . $r['group_name'] . "/" . $r['cat_name'] . "/" . $cat["unique_key"].".html";
	
	$link = str_replace("//", "/", $link);
	$link = substr($link,1,strlen($link));
	
	return $link;
}
function insert_countNhapKho($a){
	$idpr = $a['idpr'];
	$act = $a['act'];
	$maphieu = $a['maphieu'];
	$FromDate = $a['FromDate'];
	$ToDate = $a['ToDate'];
	$wh = '';
	
	switch($act){ /// active 1 hàng còn, 0 hàng đã bán 
		case "soluongnhapPhieuNhapHang":
			if(!empty($maphieu))
				$wh.=' and maphieu = "'.$maphieu.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].serial 
				   where idcity in (".$_SESSION['admin_showCity'].") ". $wh
			;
		break;
		
		case "soluongnhap":
			if(!empty($FromDate))
				$wh.=' and dated >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and dated <= "'.$ToDate.'" ';
			if(!empty($maphieu))
				$wh.=' and maphieu = "'.$maphieu.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].serial 
				   where  idpr=$idpr 
				   and idcity in (".$_SESSION['admin_showCity'].")" . $wh
			;
		break;
		case "soluongban":
			if(!empty($FromDate))
				$wh.=' and datesell >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and datesell <= "'.$ToDate.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].serial 
				   where idpr=$idpr 
				   and active = 0
				   and idcity in (".$_SESSION['admin_showCity'].")" . $wh	   
			;
		break;
		case "soluongtonkho":
			if(!empty($FromDate))
				$wh.=' and dated >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and dated <= "'.$ToDate.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].serial 
				   where idpr=$idpr 
				   and active = 1
				   and idcity in (".$_SESSION['admin_showCity'].")" . $wh  
			;
		break;
		case "soluongbaohang":
			if(!empty($FromDate))
				$wh.=' and dated >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and dated <= "'.$ToDate.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].serial 
				   where idpr=$idpr 
				   and baohanh = 1
				   and idcity in (".$_SESSION['admin_showCity'].")"	
				   .$wh   
			;
		break;
	}	
	
	$total = ceil($GLOBALS["sp"]->getOne($sql));
	return $total;
}

function countNhapKho($idpr,$act,$maphieu,$FromDate,$ToDate){
	$wh = '';
	switch($act){ /// active 1 hàng còn, 0 hàng đã bán 
		case "soluongnhap":
			if(!empty($FromDate))
				$wh.=' and dated >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and dated <= "'.$ToDate.'" ';
			if(!empty($maphieu))
				$wh.=' and maphieu = "'.$maphieu.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].serial 
				   where  idpr=$idpr 
				   and idcity in (".$_SESSION['admin_showCity'].")" . $wh
			;
		break;
		case "soluongban":
			if(!empty($FromDate))
				$wh.=' and datesell >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and datesell <= "'.$ToDate.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].serial 
				   where idpr=$idpr 
				   and active = 0
				   and idcity in (".$_SESSION['admin_showCity'].")" . $wh	   
			;
		break;
		case "soluongtonkho":
			if(!empty($FromDate))
				$wh.=' and dated >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and dated <= "'.$ToDate.'" ';
			if(!empty($maphieu))
				$wh.=' and maphieu = "'.$maphieu.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].serial 
				   where idpr=$idpr 
				   and active = 1
				   and idcity in (".$_SESSION['admin_showCity'].")" . $wh  
			;
		break;
		case "soluongbaohang":
			if(!empty($FromDate))
				$wh.=' and dated >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and dated <= "'.$ToDate.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].serial 
				   where idpr=$idpr 
				   and baohanh = 1
				   and idcity in (".$_SESSION['admin_showCity'].")"
				   .$wh   
			;
		break;
	}	
	
	$total = ceil($GLOBALS["sp"]->getOne($sql));
	return $total;
}

function insert_countXuatKho($a){
	$idpr = $a['idpr'];
	$act = $a['act'];
	$maphieu = $a['maphieu'];
	$FromDate = $a['FromDate'];
	$ToDate = $a['ToDate'];
	$wh = '';
	
	switch($act){ /// active 1 hàng còn, 0 hàng đã bán 
		case "soluongnhapPhieuXuatHang":
			if(!empty($maphieu))
				$wh.=' and maphieu = "'.$maphieu.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].ctphieuxuathang 
				   where idcity in (".$_SESSION['admin_showCity'].") ". $wh
			;
		break;
		
		case "soluongnhap":
			if(!empty($FromDate))
				$wh.=' and dated >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and dated <= "'.$ToDate.'" ';
			if(!empty($maphieu))
				$wh.=' and maphieu = "'.$maphieu.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].serial 
				   where  idpr=$idpr 
				   and idcity in (".$_SESSION['admin_showCity'].")" . $wh
			;
		break;
		case "soluongban":
			if(!empty($FromDate))
				$wh.=' and datesell >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and datesell <= "'.$ToDate.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].serial 
				   where idpr=$idpr 
				   and active = 0
				   and idcity in (".$_SESSION['admin_showCity'].")" . $wh	   
			;
		break;
		case "soluongtonkho":
			if(!empty($FromDate))
				$wh.=' and dated >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and dated <= "'.$ToDate.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].serial 
				   where idpr=$idpr 
				   and active = 1
				   and idcity in (".$_SESSION['admin_showCity'].")" . $wh  
			;
		break;
		case "soluongbaohang":
			if(!empty($FromDate))
				$wh.=' and dated >= "'.$FromDate.'" ';
			if(!empty($ToDate))
				$wh.=' and dated <= "'.$ToDate.'" ';
			$sql=" select count(id) from $GLOBALS[db_sp].serial 
				   where idpr=$idpr 
				   and baohanh = 1
				   and idcity in (".$_SESSION['admin_showCity'].")"	
				   .$wh   
			;
		break;
	}	
	
	$total = ceil($GLOBALS["sp"]->getOne($sql));
	return $total;
}



function insert_tbcongHangTon($a){ /// active 1 hàng còn, 0 hàng đã bán 
	$idpr = $a['idpr'];
	$act = $a['act'];
	$FromDate = $a['FromDate'];
	$ToDate = $a['ToDate'];
	$wh = '';
	if(!empty($FromDate))
		$wh.=' and dated >= "'.$FromDate.'" ';
	if(!empty($ToDate))
		$wh.=' and dated <= "'.$ToDate.'" ';
		
	$sql=" select sum(pricenhap) from $GLOBALS[db_sp].serial 
		   where idpr=$idpr 
		   and active = 1
		   and idcity in (".$_SESSION['admin_showCity'].")"
		   .$wh	   
	;

	$tongtien = ceil($GLOBALS["sp"]->getOne($sql));
	/////////////load tong ton kho
	
	$sql_tonkho=" select count(id) from $GLOBALS[db_sp].serial 
				   where idpr=$idpr 
				   and active = 1
				   and idcity in (".$_SESSION['admin_showCity'].")"
				   .$wh   
	;
	$tongtonkho = ceil($GLOBALS["sp"]->getOne($sql_tonkho));
	
	$price = ceil($tongtien/$tongtonkho);
	return number_format($price,0,",",".");
}

function tbcongHangTon($idpr,$act,$FromDate,$ToDate){ /// active 1 hàng còn, 0 hàng đã bán 
	$wh = '';
	if(!empty($FromDate))
		$wh.=' and dated >= "'.$FromDate.'" ';
	if(!empty($ToDate))
		$wh.=' and dated <= "'.$ToDate.'" ';
		
	$sql=" select sum(pricenhap) from $GLOBALS[db_sp].serial 
		   where idpr=$idpr 
		   and active = 1
		   and idcity in (".$_SESSION['admin_showCity'].")"
		   .$wh	   
	;

	$tongtien = ceil($GLOBALS["sp"]->getOne($sql));
	/////////////load tong ton kho
	
	$sql_tonkho=" select count(id) from $GLOBALS[db_sp].serial 
				   where idpr=$idpr 
				   and active = 1
				   and idcity in (".$_SESSION['admin_showCity'].")"
				   .$wh   
	;
	$tongtonkho = ceil($GLOBALS["sp"]->getOne($sql_tonkho));
	
	$price = ceil($tongtien/$tongtonkho);
	return number_format($price,0,",",".");
}


function insert_getName($a){
	$id = $a['id'];
	$table = $a['table'];
	$name = '';
	if($id > 0){
		$sql = "select name from $GLOBALS[db_sp].".$table." where id= ".$id;
		$name = $GLOBALS["sp"]->getOne($sql);
	}
	return $name;
}

function getName($id, $table){
	$name = '';
	if($id > 0){
		$sql = "select name from $GLOBALS[db_sp].".$table." where id= ".$id;
		$name = $GLOBALS["sp"]->getOne($sql);
	}
	return $name;
}

function insert_getNameWeb($a){
	$name = '';
	$table = $a['table'];
	$typename = $a['typename'];
	$id = $a['id'];
	if($id > 0){
		$sql = "select ".$typename." from $GLOBALS[db_web].".$table." where id= ".$id;
		$name = $GLOBALS["web"]->getOne($sql);
	}
	return $name;
}

function getNameWeb($table,$typename,$id){
	$name = '';
	if($id > 0){
		$sql = "select ".$typename." from $GLOBALS[db_web].".$table." where id= ".$id;
		$name = $GLOBALS["web"]->getOne($sql);
	}
	return $name;
}

function insert_getidr($a){
	$idpr = $a['idpr'];
	if($idpr > 0){
		$sql = "select cid from $GLOBALS[db_web].products where id= ".$idpr;
		$rs = $GLOBALS["web"]->getOne($sql);
	}
	return $rs;
}

function checkStr($str){
	if (preg_match("/select/i", $str)){ 
		$str = 0;
	}
	if (preg_match("/INSERT/i", $str)){ 
		$str = 0;
	}
	if (preg_match("/DELETE/i", $str)){ 
		$str = 0;
	}
	if (preg_match("/UPDATE/i", $str)){ 
		$str = 0;
	}
	return $str;

}

function insert_getViewDtPhieuNhapKho($a){
	global $path_url;
	$maphieu = $a['maphieu'];
	$cid = $a['cid'];
	$sql="select * from $GLOBALS[db_sp].serial where cid=$cid and maphieu='$maphieu' and idcity in (".$_SESSION['admin_showCity'].") order by id desc";
	$rs = $GLOBALS["sp"]->getAll($sql);
	foreach($rs as $siral){
		$j++;
		if($j%2==0)
			$classtk = 'trColorTwo';
		else
			$classtk = 'trColorOne';
			
		if(checkPermision(3,3)){ //check perm
			$delete = '
				<a title="Xóa" href="javascript:void(0)" onclick="Dele(\' '.$path_url.'/phieu-nhap-hang/'.$siral['maphieu'].'/deletephieu/'.$siral['id'].'/ \');">
					<i class="fa fa-trashlist"></i>
				</a>
			';
		}
		else{
			$delete = '<i class="fa fa-trashlist colorxam"></i>';
		}	
		
		if(checkPermision(3,2)){ //check perm
			$edit = '
				<a href="'.$path_url.'/phieu-nhap-hang/'.$siral['maphieu'].'/editphieu/'.$siral['id'].'/" title="Sửa">
					<i class="fa fa-pencil-square-o"></i>
				</a>
			   
			';
		}
		else{
			$edit = '<i class="fa fa-pencil-square-o colorxam"></i>';
		}		
			
		$listSerial.='
			<tr class="'.$classtk.'">
				<td>
					'.$j.'
				</td>
				<td>
					'.$siral['code'].'
				</td>
				<td>
					'.number_format($siral["pricenhap"],0,",",".").'
				</td>
				<td>
					'.$siral['dated'].'
				</td>
				<td>
					'.getName($siral['idpartner'],'partner').'
				</td>
				<td align="center">
					'.$delete.$edit.'
				</td>
			</tr>
		';
	}	
	return $listSerial;
}

function insert_getViewDtPhieuXuatKho($a){
	global $path_url;
	$maphieu = $a['maphieu'];
	$cid = $a['cid'];
	$sql="select * from $GLOBALS[db_sp].ctphieuxuathang where cid=$cid and maphieu='$maphieu' and idcity in (".$_SESSION['admin_showCity'].") order by id desc";
	$rs = $GLOBALS["sp"]->getAll($sql);
	foreach($rs as $siral){
		$j++;
		if($j%2==0)
			$classtk = 'trColorTwo';
		else
			$classtk = 'trColorOne';
			
		if(checkPermision(3,3)){ //check perm
			$delete = '
				<a title="Xóa" href="javascript:void(0)" onclick="Dele(\' '.$path_url.'/phieu-xuat-hang/'.$siral['maphieu'].'/deletephieu/'.$siral['id'].'/ \');">
					<i class="fa fa-trashlist"></i>
				</a>
			';
		}
		else{
			$delete = '<i class="fa fa-trashlist colorxam"></i>';
		}	
		
		if(checkPermision(3,2)){ //check perm
			$edit = '
				<a href="'.$path_url.'/phieu-xuat-hang/'.$siral['maphieu'].'/editphieu/'.$siral['id'].'/" title="Sửa">
					<i class="fa fa-pencil-square-o"></i>
				</a>
			   
			';
		}
		else{
			$edit = '<i class="fa fa-pencil-square-o colorxam"></i>';
		}		
			
		$listSerial.='
			<tr class="'.$classtk.'">
				<td>
					'.$j.'
				</td>
				<td>
					'.$siral['code'].'
				</td>
				<td>
					'.number_format($siral["priceban"],0,",",".").'
				</td>
				<td>
					'.$siral['dated'].'
				</td>
				<td>
					'.getName($siral['idpartner'],'khachhang').'
				</td>
				<td align="center">
					'.$delete.$edit.'
				</td>
			</tr>
		';
	}	
	return $listSerial;
}

function insert_getViewDtBaohanh($a){
	global $path_url;
	$cid = $a['cid'];
	$sql="select * from $GLOBALS[db_sp].serial where cid=$cid and baohanh in (1,2) and cid > 0 and idcity in (".$_SESSION['admin_showCity'].") order by id desc";
	$rs = $GLOBALS["sp"]->getAll($sql);
	foreach($rs as $siral){
		$j++;
		if($j%2==0)
			$classtk = 'trColorTwo';
		else
			$classtk = 'trColorOne';
		
		if(checkPermision(2,2)){ // check Perm
			if($siral["baohanh"] == 1){
				$baohanh = '
					<a href="javascript:void(0)" onclick="domainHide(\''.$path_url.'/serial/2/0/baohanhxong/'.$siral["id"].'/viewbaohanh/\')"  title="Bảo hành xong"> 
						<i class="fa fa-home"></i>
					</a>
				';
			}
			elseif($siral["baohanh"] == 2){
				$baohanh = '
					<a href="javascript:void(0)" onclick="domainHide(\''.$path_url.'/serial/2/0/baohanhxong/'.$siral["id"].'/viewbaohanh/\')"  title="Bảo hành xong"> 
						<i class="fa fa-user"></i>
					</a>
				';
			}
		}
		else{
			$baohanh = '
					<img src="'.$path_url.'/images/hide-no.png" />
				';
		}
		
		$listSerial.='
			<tr class="'.$classtk.'">
				<td>
					'.$j.'
				</td>
				<td>
					'.$siral['code'].'
				</td>
				<td>
					'.number_format($siral["pricenhap"],0,",",".").'
				</td>
				<td>
					'.number_format($siral["priceban"],0,",",".").'
				</td>
				<td>
					'.$siral['dated'].'
				</td>
				<td>
					'.getName($siral['idpartner'],'partner').'
				</td>
				<td align="center">
					'.$baohanh.'
				</td>
			</tr>
		';
	}	
	return $listSerial;
}

function insert_getSapHetHang($a){
	global $path_url;
	$cid = $a['id'];
	$sql="select * from $GLOBALS[db_web].products where cid=$cid and active = 1 and crmhethang=1 order by num asc, id desc ";
	$rs = $GLOBALS["web"]->getAll($sql);
	$j=0;
	$str = '';
	foreach($rs as $item){
		$sqls="select count(id) from $GLOBALS[db_sp].serial where idpr=".$item['id']." and active=1 and idcity in (".$_SESSION['admin_showCity'].")";
		$rss = $GLOBALS["sp"]->getOne($sqls);
		if(ceil($rss) < 3){
			$j++;
			if($j%2==0)
				$classtk = 'trColorTwo';
			else
				$classtk = 'trColorOne';	
			$str .= '
				<tr onclick="location.href=\''.$path_url.'/serial/'.$cid.'/'.$item['id'].'/\'" class="'.$classtk.'">
						<td>
							'.$j.'
						</td>
						<td>
							'.$item['name_vn'].'
						</td>
						<td>
							'.countNhapKho($item['id'],'soluongtonkho').'
						</td>
					</tr>
			';
			$_SESSION['countSapHetHang']++;
		}
	}	
	return $str;
}

function insert_getThongKe($a){
	global $path_url;
	$checkBanhang = $a['checkBanhang'];
	$cid = $a['cid'];
	$FromDate = $a['FromDate'];
	$ToDate = $a['ToDate'];
	$listarry = array();
	if(!empty($FromDate))
		$wh.=' and datesell >= "'.$FromDate.'" ';
	if(!empty($ToDate))
		$wh.=' and datesell <= "'.$ToDate.'" ';
		
	if($checkBanhang == 1)
		$wh.= ' ';	
	elseif($checkBanhang == 2)
		$wh.= ' and active=0 ';
	else
		$wh.= ' and active=1 ';			

	$sqlid="select idpr  from $GLOBALS[db_sp].serial where cid=$cid and idcity in (".$_SESSION['admin_showCity'].") $wh group by idpr";
	$rsid = $GLOBALS["sp"]->getCol($sqlid); 

	$rsid1 = implode(',',$rsid);	
	$sql="  select * from $GLOBALS[db_web].products 
			where id in ($rsid1)
			order by id desc
	";
	$rs = $GLOBALS["web"]->getAll($sql); 
	$footer = '';
	$strcount = $listcount = 0 ;		
	foreach($rs as $rs){
		$j++;
		if($j%2==0)
			$classtk = 'trColorTwo';
		else
			$classtk = 'trColorOne';
		///footer	
		if ($checkBanhang == 1){
			$listcount = countNhapKho($rs['id'],"soluongnhap",$maphieu='',$FromDate,$ToDate);
			$footer = '
				<td align="center">
					'.$listcount.'
				</td>
				<td align="center">
					 <a target="_blank" href="'.$path_url.'/thong-ke/view-nhap-hang/'.$rs['id'].'/'.$FromDate.'/'.$ToDate.'/" title="View">
						<i class="fa a-file-text-o"></i>
					</a>
				</td>   
			';
		}
		elseif ($checkBanhang == 2){
			$listcount = countNhapKho($rs['id'],"soluongban",$maphieu='',$FromDate,$ToDate);
			$footer = '
				<td align="center">
					'.$listcount.'
				</td>
				<td align="center">
					 <a target="_blank" href="'.$path_url.'/thong-ke/view-ban-hang/'.$rs['id'].'/'.$FromDate.'/'.$ToDate.'/" title="View">
						<i class="fa a-file-text-o"></i>
					</a>
				</td>   
			';
		}
		else{
			$listcount = countNhapKho($rs['id'],"soluongtonkho",$maphieu='',$FromDate,$ToDate);
			$footer = '
				<td align="center">
					'.$listcount.'
				</td>
				<td align="center">
					'.tbcongHangTon($rs['id'],"trungBinhCong",$FromDate,$ToDate).'
				</td>
				 <td align="center">
				 	'.countNhapKho($rs['id'],"soluongbaohang",$maphieu='',$FromDate,$ToDate).'
				</td>
				<td align="center">
					 <a target="_blank" href="'.$path_url.'/thong-ke/view-ton-kho/'.$rs['id'].'/'.$FromDate.'/'.$ToDate.'/" title="View">
						<i class="fa a-file-text-o"></i>
					</a>
				</td>   
			';
		}
			
		$list.='
			<tr class="'.$classtk.'">
				<td>
					'.$j.'
				</td>
				<td>
					'.$rs['codesp1'].'
				</td>
				<td>
					'.$rs['name_vn'].'
				</td>
				'.$footer.'
			</tr>
		';
		$strcount = $strcount + $listcount ;
	}	
	$listarry = array('list'=>$list,'countList'=>$strcount);
	return $listarry;
}

function cong6so($so){
	$leng = strlen($so);
	if($leng==1)
		$so = '000000'.$so;
	elseif($leng==2)
		$so = '00000'.$so;
	elseif($leng==3)
		$so = '0000'.$so;
	elseif($leng==4)
		$so = '000'.$so;
	elseif($leng==5)
		$so = '00'.$so;
	elseif($leng==6)
		$so = '0'.$so;
	else
		$so = $so;
		
	return $so;
}

function thongkekho(){
	$thongke = array(
	   array('id'=>'thong-ke','name'=>'Thống kê tồn kho'),
	   array('id'=>'nhap-hang','name'=>'Thống kê nhập kho'),
	   array('id'=>'ban-hang','name'=>'Thống kê bán hàng')
	);

	return $thongke;
}
?>

