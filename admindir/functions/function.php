<?php
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
	
	if(isset($_SESSION['counter_artseed_login']) && $_SESSION['counter_artseed_login']>3){
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
   $alink.="<a href='$url&p=$first_page'>&nbsp;Đầu&nbsp;</a>";
   $alink.="<a href='$url&p=$back'>&nbsp;<<&nbsp;</a>";
  }else{
   $alink.="<span >&nbsp;Đầu&nbsp;</span>";
   $alink.="<span >&nbsp;<<&nbsp;</span>";
  }
  if (count($seg_page)<=0) return;
  foreach ($seg_page as $page){
   if ($page==$cur_page) {
    $alink.="<span><font color='#0066FF' style='font-family:Arial, Helvetica, sans-serif'>&nbsp;".$page."&nbsp;</font></span>";
   } else {
    $alink.="<a href='$url&p=$page'>&nbsp;$page&nbsp;</a>"; 
    
   }
  }

  //show/hide next
  if ($seg_cur<$seg_num) {$next=$cur_page+1;
   $alink.="<a href='$url&p=$next'>&nbsp;>>&nbsp;</a>";
   $alink.="<a href='$url&p=$last_page'>&nbsp;Cuối&nbsp;</a>";
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
	$sql = "select * from $GLOBALS[db_sp].component where id=".$comp;
	$rs = $GLOBALS["sp"]->getRow($sql);
	return $rs;
}

function insert_HearderCat($a){
	$cha = $a['cid'];
	$root =isset($a['root'])?$a['root']:1;
	$act = $a['act'];
	$list = "";
	$str = "";
	$arr = array();
	do{
		$sql = "select * from $GLOBALS[db_sp].categories where id=".$cha;
		$r = $GLOBALS["sp"]->getRow($sql);
		$arr[count($arr)] = $r;
		$cha = $r['pid'];
	}while($arr[count($arr)-1]['id'] != $root);
	$j = 0;
	for($i=(count($arr)-1);$i>=0;$i--){
		
		if(($i == 0) && ($act!='edit') && ($act!='add') )
			$img = "";
		else
			$img = " <span class='subconten'><img src='images/icon.gif' style='margin-top:13px' /></span>";
		
		if($arr[$i]['has_child']=='1'){
			$link = "index.php?do=categories&cid=".$arr[$i]['id']."&root=".$root."&p=".$_REQUEST['p'];
		}
		else{
			$sql = "select * from $GLOBALS[db_sp].component where id=".$arr[$i]['comp'];
			$r = $GLOBALS["sp"]->getRow($sql);
			$link = "index.php?do=".$r['do']."&act=".$r['act']."&cid=".$arr[$i]['id']."&root=".$root."&p=".$_REQUEST['p'];
		}
		$list.= "
			<span class='subconten'><a  href='".$link."' title='".$arr[$i]['name_vn']."' >		
				".$arr[$i]['name_vn']." 
			</a> </span> ". $img ."
		";
		
	}
	if(!isset($act))
		$list.= '';
	else if($act=='edit')
		$list.= " <span class='subconten'>Edit</span>";
	elseif($act=='add')
		$list.=" <span class='subconten'>Add</span>";
	else
		$list.= '';                                                    	
	return $list;
}

function insert_getSPHot($a){
	$cid = $a['cid'];
	$module = $a['module']; ///1 la tin tuc , 2 san pham .... trong table component
	$checked = "";
	$html = "";
	$sql = "select * from $GLOBALS[db_sp].categories where pid=2 order by num asc, id desc";
	$rs = $GLOBALS["sp"]->getAll($sql);
	$countCat1 = ceil(count($rs));
	if($countCat1 > 0){
		foreach($rs as $item){
			if($item['has_child']==1){
				if(CheckTheLoaiLive2($item['id'],$module)){//ham kiem tra cap 2
					if($cid == $item['id'])
						$checkedc = " selected style='color:#005EBB;' ";
					else
						$checkedc = "";
					$html .= "<option value='".$item['id']."' style='color:#006600;font-weight:bold;' ".$checkedc." > ".$item['name_vn']." </option>\n ";
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

					$html .= "<option value='".$item['id']."' ".$checked1."  > ".$item['name_vn']. $cid."  </option>\n ";
				}
				
			}
			
		}
	
	}
	return $html;

}

function insert_TheLoai($a){
	$cid = $a['cid'];
	$module = $a['module']; ///1 la tin tuc , 2 san pham .... trong table component
	$checked = "";
	$html = "";
	$sql = "select * from $GLOBALS[db_sp].categories where pid=2 order by num asc, id desc";
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

function insert_NameTinhThanh($a){
	$id = $a['id'];
	$table = $a['table'];
	$sql = "select name_vn from $GLOBALS[db_sp].".$table." where id= ".$id;
	$name = $GLOBALS["sp"]->getOne($sql);
	
	return $name;
}

function NameTinhThanh($table,$typename , $id){
	$sql = "select ".$typename." from $GLOBALS[db_sp].".$table." where id= ".$id;
	$name = $GLOBALS["sp"]->getOne($sql);
	return $name;
}

function insert_NameNhaCungCap($a){
	$id = $a['id'];
	$table = $a['table'];
	$sql = "select name from $GLOBALS[db_sp].".$table." where id= ".$id;
	$name = $GLOBALS["sp"]->getOne($sql);
	
	return $name;
}

function checkPer(){
	if($_SESSION['group_artseed_user'] == -1)
		return true;
	else
		return false;
}

function checkPermision($cid, $act){//gia tri action ( 1 -> add, 2 -> edit , 3 -> delete)
	if($cid)
		$sql="select * from $GLOBALS[db_sp].permissions  where ((perm like '%".$act."%') or (perm like '%4%')) and cid=$cid and uid = " .$_SESSION["admin_artseed_id"];
	else
		$sql="select * from $GLOBALS[db_sp].permissions  where ((perm like '%".$act."%') or (perm like '%4%'))  and uid = " .$_SESSION["admin_artseed_id"];
	$showall = ceil(count($GLOBALS["sp"]->getAll($sql)));
	if( ($showall > 0) || ($_SESSION['group_artseed_user'] == -1))
		return true;
	else
		return false;
}

function page_permision(){
	echo"<script type=\"text/javascript\">	
		alert('Ban khong co quyen, vui long lien he voi nguoi quan tri.');
	</script>";
	
}

function insert_promotion($a){
	$idbanphieu = $a['idbanphieu'];
	////////load gia va khuyen  mai////////////////////
	$sql = "select * from $GLOBALS[db_sp].promotion where idbanphieu=".$idbanphieu." order by num asc, id desc";
	$rs = $GLOBALS["sp"]->getAll($sql);
	$listPromotion="";
	if(ceil(count($rs)) > 0){
		foreach($rs as $item){
			$listPromotion.='
				<tr>
					<td align="center" valign="middle">'.$item['promotion'].'%</td>
					<td align="center" valign="middle">'.number_format($item['price_vn'],0,",",".").'</td>
					<td  align="center" valign="middle">'.number_format($item['price_en'],0,",",".").'</td>
				 </tr>
			';	
		}
	}
	
	////////////////////////////////////////////////
	
	return $listPromotion;
}


function insert_GetcidPr($a){
	$id = $a['id_pr'];
	$sql = "select cid from $GLOBALS[db_sp].products where id= ".$id;
	$cid = $GLOBALS["sp"]->getOne($sql);
	return $cid;
}

function insert_NameCity($a){
	$city_id = $a['city_id'];
	$sql = "select name from $GLOBALS[db_sp].city where id= ".$city_id;
	$name = $GLOBALS["sp"]->getOne($sql);
	
	return $name;
}

function NameCity($city_id){
	$sql = "select name from $GLOBALS[db_sp].city where id= ".$city_id;
	$name = $GLOBALS["sp"]->getOne($sql);
	
	return $name;
}

function insert_NameDistrict($a){
	$district_id = $a['district_id'];
	$sql = "select name from $GLOBALS[db_sp].district where id= ".$district_id;
	$name = $GLOBALS["sp"]->getOne($sql);
	
	return $name;
}

function insert_CheckSize($a){
	$size = $a['idsize'];
	
	$size = explode(",",$size);
	$str = "";

	$sql = "select * from $GLOBALS[db_sp].sizepr where active=1 order by num asc, id asc";
	$rs = $GLOBALS["sp"]->getAll($sql);		
	
	foreach($rs as $item){
		if(in_array($item['id'],$size))
			$check = "checked='checked' ";
		else 
			$check = "";
				
		$str.="<input type='checkbox' class='CheckBoxltt'  name='size[]' ".$check."  value='".$item['id']."' /> ".$item['name']." <br>";
	}
	
	return $str;
}

function insert_getNamColor($a){
	$idcolor = $a['idcolor'];
	$sql = "select name from $GLOBALS[db_sp].colorpr where id= ".$idcolor;
	$name = $GLOBALS["sp"]->getOne($sql);
	
	return $name;
}

function getNamColor($idcolor){
	$sql = "select name from $GLOBALS[db_sp].colorpr where id= ".$idcolor;
	$name = $GLOBALS["sp"]->getOne($sql);
	
	return $name;
}


function insert_getNamSize($a){
	$idsize = $a['idsize'];
	$str = $space = "";
	$i = 0;
	$idsize = explode(",",$idsize);
	$sql = "select * from $GLOBALS[db_sp].sizepr where active=1 order by num asc, id asc";
	$rs = $GLOBALS["sp"]->getAll($sql);
	foreach($rs as $item){
		if($i != 0)
			$space = ", ";
		if(in_array($item['id'],$idsize)){
			$str.= $space . $item['name'];
			$i++;	
		}
		
	}
	return $str;
}

function insert_getCountColorSize($a){
	$id = $a['id'];
	$sql = "select * from $GLOBALS[db_sp].colorsize where idpr= ".$id;
	$rs = $GLOBALS["sp"]->getAll($sql);
	
	return ceil(count($rs));
}

function insert_getCountMasanpham($a){
	$cid = $a['cid'];
	$sql = "select * from $GLOBALS[db_sp].masanpham where cid= ".$cid;
	$rs = $GLOBALS["sp"]->getAll($sql);
	
	return ceil(count($rs));
}

function insert_getCountTags($a){
	$id = $a['id'];
	$sql = "select * from $GLOBALS[db_sp].tags where idpr= ".$id;
	$rs = $GLOBALS["sp"]->getAll($sql);
	
	return ceil(count($rs));
}


function insert_GetViewLinkComment($a){
	$id = $a['id'];
	$type = $a['type'];
	if($type==1){
		$sql = "select * from $GLOBALS[db_sp].articles where id= ".$id;
		$cat = $GLOBALS["sp"]->getRow($sql);
		if(!empty($cat['id'])){
			$link = (GetLinkDetail($cat));
		}
	}
	elseif($type==3){
		$sql = "select * from $GLOBALS[db_sp].categories where id= ".$id;
		$cat = $GLOBALS["sp"]->getRow($sql);
		if(!empty($cat['id'])){
			$link = (GetLinkCat($cat));
		}	
	}
	else{
		$sql = "select * from $GLOBALS[db_sp].products where id= ".$id;
		$cat = $GLOBALS["sp"]->getRow($sql);
		if(!empty($cat['id'])){
			$link = $cat['unique_key'].".html";
		}
	}
	return $link;
}

function GetLinkCat($cat){
	$id = $cat['id'];
	$sql = "select c1.unique_key as cat_name,c2.unique_key as group_name from $GLOBALS[db_sp].categories c1, $GLOBALS[db_sp].categories c2 where c1.id=$id and c1.pid=c2.id";

	$r = $GLOBALS["sp"]->getRow($sql);
	$link = "/" . $r['group_name'] . "/" . $r['cat_name'] . "/";
	
	$link = str_replace("//", "/", $link);
	$link = substr($link,1,strlen($link));
	
	return $link;
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

function insert_checkPhuKienGiamGia($a){
	$idpromotion = $a['idpromotion'];
	
	$idpromotion = explode(",",$idpromotion);
	$str = "";
		
	$sql="select * from $GLOBALS[db_sp].`phukiengiamgia` where active=1 order by num asc, id desc ";
	$rs = $GLOBALS["sp"]->getAll($sql);
	
	foreach($rs as $item){
		if(in_array($item['id'],$idpromotion))
			$check = "checked='checked' ";
		else 
			$check = "";
				
		$str.='
			<div class="phukiengiamgia">                        
				<input type="checkbox" value="'.$item['id'].'" name="idpromotion[]" '.$check.' class="CheckBoxPromotion">
				<div class="TextcheckPromotion">'.$item['name_vn'].' từ  '.number_format($item['price_vn'],0,",",".").' xuống '.number_format($item['promotion_vn'],0,",",".").'  </div>
			</div>
		';
	}
	
	return $str;
}



function insert_CheckColor($a){
	$idcolor = $a['idcolor'];
	
	$idcolor = explode(",",$idcolor);
	$str = "";
		
	$sql="select * from $GLOBALS[db_sp].`colorpr` where active=1 order by id desc ";
	$colorpr = $GLOBALS["sp"]->getAll($sql);
	
	foreach($colorpr as $item){
		if(in_array($item['id'],$idcolor))
			$check = "checked='checked' ";
		else 
			$check = "";
				
		$str.='
			 <div class="SubColor">
				<input type="checkbox" value="'.$item['id'].'" name="id_color[]" '.$check.' class="CheckBoxltt">
				<div class="Color" style="background-color:'.$item['color'].'"></div>
				<div class="Textcheck"> '.$item['name'].' </div>
			</div>
		';
	}
	
	return $str;
}

function insert_CheckDiadiem($a){
	$idpr = $a['idpr'];
	$str = '' ;
	$sql="select * from $GLOBALS[db_sp].`colorsize` where active=1 and idpr=$idpr order by idcity asc ";
	$rs = $GLOBALS["sp"]->getAll($sql);
	if(ceil(count($rs)) > 0){
		foreach($rs as $item){
			$str.='
				<div class="SubColor">                     
					<div class="Textcheck xanh"> '.NameCity($item['idcity']).' </div>
					<div class="Textcheck"> Giá </div>
					<input readonly="readonly" type="text" value="'.number_format($item['price_vn'],0,",",".").'" class="InputChonPrice" />
					 <div class="Textcheck"> Số lượng </div>
					<input readonly="readonly" type="text" value="'.ceil($item['soluong_vn']-$item['soluongban_vn']).'"  class="InputChonSoluong" />
				   
				</div>
			';
		}
	}
	return $str;
}
/*
function insert_CheckDiadiemList($a){
	$idpr = $a['idpr'];
	$str = '' ;
	$sql="select * from $GLOBALS[db_sp].`colorsize` where active=1 and idpr=$idpr order by idcity asc ";
	$rs = $GLOBALS["sp"]->getAll($sql);
	if(ceil(count($rs)) > 0){
		foreach($rs as $item){
			$str.='
				<div class="SubColor">                     
					<div class="xanh"> '.NameCity($item['idcity']).' </div>
					<div> Giá: '.number_format($item['price_vn'],0,",",".").'</div>
					 <div> Số lượng: '.ceil($item['soluong_vn']-$item['soluongban_vn']).' </div>
				</div>
			';
		}
	}
	return $str;
}
*/
function insert_CheckDiadiemList($a){
	$idpr = $a['idpr'];
	$str = '' ;
	$sql="select * from $GLOBALS[db_sp].`colorsize` where active=1 and idpr=$idpr order by idcity asc ";
	$rs = $GLOBALS["sp"]->getAll($sql);
	if(ceil(count($rs)) > 0){
		foreach($rs as $item){
			if($item['in_stock']==1)
				$tinhtrang = 'Còn hàng';
			else if($item['in_stock']==2)
				$tinhtrang = 'Liên hệ';
			else
				$tinhtrang = 'Hết hàng';
			$str.='
				<div class="SubColor">                     
					<div class="xanh"> '.NameCity($item['idcity']).' </div>
					
					 <div> '.$tinhtrang.' </div>
				</div>
			';
		}
	}
	return $str;
}


function insert_ShowColor($a){
	$idcolor = $a['idcolor'];
	$getNameColor = $a['getNameColor'];
	if($getNameColor==1)
		$nameColor = "&nbsp;&nbsp;".getNamColor($idcolor);
	else
		$nameColor = '';
	$str = "";
	$sql="select * from $GLOBALS[db_sp].`colorpr` where active=1 and id in ($idcolor) order by id desc ";
	$rs = $GLOBALS["sp"]->getAll($sql);

	foreach($rs as $item){
		$str.='
			 <div class="SubColor">
				 <div class="ShowColor" style="background-color:'.$item['color'].'"></div>  '.$nameColor.'
			</div>
		';
	}
	
	return $str;
}

function insert_getNamenv($a){
	$mid = $a['mid'];
	$type = $a['type'];

	$sql="select * from $GLOBALS[db_sp].`member` where id=$mid ";
	$rs = $GLOBALS["sp"]->getRow($sql);
	if($type == 'name')
		$str = $rs['name'];
	else
		$str = $rs['email'];
	return $str;
}

function insert_getPhoneComputor($a){
	$id = $a['type'];
	$sql="select name_vn from $GLOBALS[db_sp].`categories` where id=$id";
	$name = $GLOBALS["sp"]->getOne($sql);
	return $name;
}

function insert_getNamePrSearch($a){
	global $path_url;
	$type = $a['type'];
	$idpr = $a['idpr'];
	$idkhuvuc = $a['idkhuvuc'];
	if($idkhuvuc<=0)
		$idkhuvuc = 1;
	$str = '';
	if(!empty($idpr)){
		$sql = " select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
						where pr.id= $idpr 
						and pr.id=cldd.idpr
						and cldd.idcity=$idkhuvuc
						limit 1
			";
		$rs = $GLOBALS["sp"]->getRow($sql);
		switch($type){
			case "name":
				$str = $rs['name_vn'];
			break;
			
			case "price":
				$str = number_format($rs["price_vn"],0,",",".");
			break;
			
			case "links":
				$str = $path_url .'/'.$rs["unique_key"].'.html';
			break;
		}
	}	
	return $str;
}


function getNamePrSearch($type,$idpr, $idkhuvuc){
	$sql = " select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd 
					where pr.id= $idpr 
					and pr.id=cldd.idpr
					and cldd.idcity=$idkhuvuc
					limit 1
		";

	$rs = $GLOBALS["sp"]->getRow($sql);
	switch($type){
		case "name":
			$str = $rs['name_vn'];
		break;
		
		case "price":
			$str = $rs["price_vn"];
		break;
	}
	
	return $str;
}


function insert_getPriceSoSanh($a){
	$url = $links = $a['links'];
	$pricevam = $a['price'];
	$links = str_replace('http://www.','',$links);
	$links = str_replace('https://www.','',$links);
	$links = str_replace('http://','',$links);
	$links = str_replace('https://','',$links);	
	$links = explode('/',$links);
	
	$linkUrl =  $links[0];
	switch($linkUrl){
		case "sangmobile.com":
			$price = getsangmobilecom($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "24hstore.vn":
			$price = get24hstorevn($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		case "applecentervn.com":
			$price = getapplecentervncom($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		case "istorehcm.com":
			$price = getistorehcmcom($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "minhlocmobile.com":
			$price = getMinhlocmobilecom($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "vinhphatmobile.com":
			$price = getVinhphatmobilecom($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "hoangphat360.vn":
			$price = getHoangphat360vn($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "a-smart.vn":
			$price = getAsmartmobile($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "anphongmobile.vn":
			$price = getAnphongmobile($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		case "anphongmobile.com.vn":
			$price = getAnphongmobilecomvn($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "baotinmobile.vn":
			$price = getBaotinmobile($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "quangphucmobile.com":
			$price = getQuangphucmobile($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "ihubdanang.com":
			$price = getIhubdanang($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "ishopdn.vn":
			$price = getIshopdn($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "achaumobile.com":
			$price = getAchaumobile($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "hcm.cellphones.com.vn":
			$price = getCellphones($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "cellphones.com.vn":
			$price = getCellphones($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "techone.vn":
			$price = getTechone($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "didongthongminh.vn":
			$price = getDidongthongminh($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}			
		break;
		
		case "didongviet.vn":
			$price = getDidongviet($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}
				
		break;
		
		case "hcm.clickbuy.com.vn":
			$price = getClickbuy($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "clickbuy.com.vn":
			$price = getClickbuy($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}		
		break;
		
		case "viettablet.com":
			$price = getViettablet($url);
			if($pricevam > $price){
				$str = '<span style="color:#ed1b24 ;"> '.number_format($price,0,",",".").' </span>';		
			}
			else{
				$str = number_format($price,0,",",".");
			}			
		break;
		
	}
	
	return $str;
}

function getContentUrl($url){
	header("Content-Type: text/html; charset=utf-8");
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt ($ch, CURLOPT_HEADER, 0);
	curl_setopt ($ch, CURLOPT_NOBODY, 0);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

function getsangmobilecom($data)
{
    $data = getContentUrl($data);
	$dom = new domDocument;
    @$dom->loadHTML($data);
    $divs = $dom->getElementsByTagName('span');
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'price' ) !== false )
        {
				$price = $div -> nodeValue;
        }
    }
	$price = ceil(strSpace($price));
	return $price;
}
function get24hstorevn($data)
{
   	$data = getContentUrl($data);
    $dom = new domDocument;
    @$dom->loadHTML($data);
    $divs = $dom->getElementsByTagName('span');
	$i=0;
    foreach ( $divs as $div )
    {
		if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'ty-price-num' ) !== false )
        {
			if($i==0)
				$price = $div -> nodeValue;
			$i++;
        }
    }
	$price = ceil(strSpace($price));
	return $price;
}
function getapplecentervncom($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('div');
	$i=0;
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'price-dt' ) !== false )
        {
			if($i==1)
				$price = $div -> nodeValue;
			$i++;
        }
    }
	$price = ceil(strSpace($price));
	return $price;
}

function getistorehcmcom($data)
{
   	$data = getContentUrl($data);
    $dom = new domDocument;
    @$dom->loadHTML($data);
    $divs = $dom->getElementsByTagName('span');
	$i=0;
    foreach ( $divs as $div )
    {
		if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'amount' ) !== false )
        {
			if($i==0)
				$price = $div -> nodeValue;
			$i++;
        }
    }
	$price = ceil(strSpace($price));
	return $price;
}

function getMinhlocmobilecom($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('p');
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'product-price' ) !== false )
        {
				$price = $div -> nodeValue;
        }
    }
	$price = ceil(strSpace($price));
	return $price;
}

function getVinhphatmobilecom($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('span');
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'ty-price-num' ) !== false )
        {
				if($i==0)
					$price = $div -> nodeValue;
				$i++;
        }
    }
	$price = ceil(strSpace($price));
	return $price;
}

function getHoangphat360vn($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('span');
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('id') && strpos( $div -> getAttribute('id'), 'our_price_display' ) !== false )
        {
				$price = $div -> nodeValue;
        }
    }
	$price = ceil(strSpace($price));
	return $price;
}

function getAsmartmobile($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('p');
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'price' ) !== false )
        {
				$price = $div -> nodeValue;
        }
    }
	$price = ceil(strSpace($price));
	return $price;
}

function getAnphongmobile($data)
{
    $data = getContentUrl($data);
	$dom = new domDocument;
    @$dom->loadHTML($data);
    $divs = $dom->getElementsByTagName('span');
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('id') && strpos( $div -> getAttribute('id'), 'main_price' ) !== false )
        {
			$price = $div -> nodeValue;
        }
    }
	$price = ceil(strSpace($price))+200000;
	return $price;
}

function getAnphongmobilecomvn($data)
{
	$data = getContentUrl($data);
    $dom = new domDocument;
    @$dom->loadHTML($data);
    $divs = $dom->getElementsByTagName('span');
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('id') && strpos( $div -> getAttribute('id'), 'block_price' ) !== false )
        {
			$price = $div -> nodeValue;
        }
    }
	$str = explode(' ',$price);
	$price = ceil(strSpace($str[0]));
	//$price = ceil(strSpace($price));
	return $price;
}

function getBaotinmobile($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('span');
	$i=0;
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'price' ) !== false )
        {
			if($i==2)
				$price = $div -> nodeValue;
			$i++;	
        }
    }
	$price = ceil(strSpace($price));
	return $price;
}
function getQuangphucmobile($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('strong');

    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'price' ) !== false )
        {
				$price = $div -> nodeValue;
        }
    }
	$price = ceil(strSpace($price));
	return $price;
}

function getIhubdanang($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('span');

    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'gia_sp' ) !== false )
        {
				$price = $div -> nodeValue;
        }
    }
	$price = ceil(strSpace($price));
	return $price;
}
function getIshopdn($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('div');

    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'price' ) !== false )
        {
				$price = $div -> nodeValue;
        }
    }	
	$price = ceil(strSpace($price));
	return $price;
}

function getAchaumobile($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('td');

    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'MdetailPri' ) !== false )
        {
				$price = $div -> nodeValue;
        }
    }	
	$price = ceil(strSpace($price));
	return $price;
}

function getCellphones($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('span');
	$i=0;
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('id') && strpos( $div -> getAttribute('id'), 'price' ) !== false )
        {
			 if($i==0)
				$price = $div -> nodeValue;
			$i++;
        }
    }	
	$price = substr(trim($price),14);
	
	$price = ceil(strSpace($price));
	if($price < 1){//khong co gia khuyen mai lay gia goc
		foreach ( $divs as $div )
		{
			if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'price' ) !== false )
			{
				$price = $div -> nodeValue;
			}
		}	
		$price = ceil(strSpace($price));
	}
	return $price;
}

function getClickbuy($data)
{
	$dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('span');
    $i=0;
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'price' ) !== false )
        {
			if($i==0)
			  $price = $div -> nodeValue;
			$i++;  
        }
    }	
	$price = ceil(strSpace($price));
	return $price;
}

function getTechone($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('span');
	$i=0;
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'price' ) !== false )
        {
				if($i==0)
					$price = $div -> nodeValue;
				$i++;
				
        }
    }	
	$price = ceil(strSpace($price));
	return $price;
}

function getDidongthongminh($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('p');
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'basic_price' ) !== false )
        {
				$price = $div -> nodeValue;
        }
    }
	$price = ceil(strSpace($price));
	return $price;
}

function getDidongviet($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('div');
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'block_gia' ) !== false )
        {
				$price = $div -> nodeValue;
        }
    }
	$str= explode(' ', trim($price));
	$price = ceil(strSpace($price));
	return $price;
}


function getViettablet($data)
{
    $dom = new domDocument;
    @$dom->loadHTML(file_get_contents($data));
    $divs = $dom->getElementsByTagName('span');
    foreach ( $divs as $div )
    {
        if ( $div -> hasAttribute('class') && strpos( $div -> getAttribute('class'), 'new_price_sg' ) !== false )
        {
				$price = $div -> nodeValue;
        }
    }
	$price = ceil(strSpace($price));
	return $price;
}

function insert_CopyPr($a){
	$idcat = $a['id'];	
	$cid_share = $a['cid_share'];
	$cidother = $a['cidother'];
	$sql = "select * from $GLOBALS[db_sp].categories where pid = $idcat and id<>$cidother order by num asc, id desc";
	$rs = $GLOBALS["sp"]->getAll($sql);
	$list = '';
	foreach($rs as $item){
		if(in_array($item['id'],$cid_share))
			$check = "checked='checked' ";
		else 
			$check = "";
			
		$list.= '
			<tr class="bgno"  onmouseout="this.className=\'bgno\'" onmouseover="this.className=\'bgonmose\'" >
			   <td class="pa_t_b brbottom"  align="center">
				   <input type="checkbox" value="'.$item['id'].'" name="iddel[]" '.$check.' >
				</td>
				
				<td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
					'.$item['name_vn'].' 
				</td>
			 </tr>
		';
	}
	return $list;
}

function insert_CopyNews($a){
	$idcat = $a['id'];	
	$cid_share = $a['cid_share'];
	$cidother = $a['cidother'];
	$sql = "select * from $GLOBALS[db_sp].articles where cid = $idcat order by num asc, id desc";
	//die($sql);
	$rs = $GLOBALS["sp"]->getAll($sql);
	$list = '';
	foreach($rs as $item){
		if(in_array($item['id'],$cid_share))
			$check = "checked='checked' ";
		else 
			$check = "";
			
		$list.= '
			<tr class="bgno"  onmouseout="this.className=\'bgno\'" onmouseover="this.className=\'bgonmose\'" >
			   <td class="pa_t_b brbottom"  align="center">
				   <input type="checkbox" value="'.$item['id'].'" name="iddel[]" '.$check.' >
				</td>
				
				<td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
					'.$item['name_vn'].' 
				</td>
			 </tr>
		';
	}
	return $list;
}

function loaikhachhang(){
	$khachhang = array(
	   array('id'=>'1','name'=>'Khách hàng lẻ'),
	   array('id'=>'2','name'=>'Khach hành sỉ')
	);

	return $khachhang;
}

function insert_checkSearch($a){
	$cid = $a['cid'];
	$idsearch = $a['idsearch'];
	$idsearch = explode(",",$idsearch);
	$str = "";
	$sql = "select * from $GLOBALS[db_sp].thongtinsearch where active=1 and cid=$cid order by num asc, id asc";
	$rs = $GLOBALS["sp"]->getAll($sql);		
	
	foreach($rs as $item){
		if(in_array($item['id'],$idsearch))
			$check = "checked='checked' ";
		else 
			$check = "";
				
		$str.="<input type='checkbox' class='CheckBoxltt'  name='idsearch[]' ".$check."  value='".$item['id']."' /> ".$item['name_vn']." <br>";
	}
	
	return $str;
}
function insert_getColorPice($a){
	$idcolorsize = $a['idcolorsize'];
	$sql="select * from $GLOBALS[db_sp].`colorpr` where active=1 order by num asc ";
	$rs = $GLOBALS["sp"]->getAll($sql);
	foreach($rs as $item){
		if(!empty($idcolorsize)){
			$sql1 = "select * from $GLOBALS[db_sp].`colorprice` where idcolorsize=".$idcolorsize." and idcolor=".$item['id']." ";
			$rs1 = $GLOBALS["sp"]->getRow($sql1);
		}
		if(!empty($rs1['price_vn']))
			$inputprie = '<input type="text" value="'.$rs1['price_vn'].'" name="pricecolor[]" class="autoNumeric" />';
		else
			$inputprie = '<input type="text" value="" name="pricecolor[]" class="autoNumeric" />';
		$str.='
			<tr>
			   <td width="30%"  valign="top" align="right">
					<strong>'.$item['name'].'</strong>	    
			   </td>
			   <td valign="top" width="70%" align="left">
			   		<input type="hidden" name="color[]" value="'.$item['id'].'" /> 
					<input value="'.$item['color'].'" type="color" disabled="disabled"/> 
					'.$inputprie.'   
			   </td>
		  </tr>
		';
	}
	
	return $str;
}

function insert_showColorPice($a){
	$idcolorsize = $a['idcolorsize'];
	$sql="select * from $GLOBALS[db_sp].`colorpr` where active=1 order by num asc ";
	$rs = $GLOBALS["sp"]->getAll($sql);
	foreach($rs as $item){
		if(!empty($idcolorsize)){
			$sql1 = "select * from $GLOBALS[db_sp].`colorprice` where idcolorsize=".$idcolorsize." and idcolor=".$item['id']." ";
			$rs1 = $GLOBALS["sp"]->getRow($sql1);
		}
		if(!empty($rs1['price_vn'])){
			$str.=' 
				<input value="'.$item['color'].'" type="color" disabled="disabled" style="margin:2px 5px 2px 0;"/> 
				'.number_format($rs1['price_vn'],0,",",".").'
				<br />
			';
		}	
	}
	return $str;
}
?>

