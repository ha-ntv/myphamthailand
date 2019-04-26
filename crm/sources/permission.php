<?php
if($_SESSION['admin_crmvietanhmobil_group'] == -1){
	$act = isset($_REQUEST['cat1'])?$_REQUEST['cat1']:'';
	switch($act){
		case 'editsm':
			if($_POST){
				$peroles = isset($_POST)?$_POST:"0";
				$uid = $_POST['id'];
				$sql = "DELETE from $GLOBALS[db_sp].permissions where uid=$uid ";
				$GLOBALS["sp"]->execute($sql);
				
				foreach($peroles as $key=>$item)
				{
					if($key != 'id' && $key != 'addcheck' && $key != 'editcheck' && $key != 'delcheck' && $key != 'allcheck')
					{
						$perm = implode(",",$item);
						$sql = "
							INSERT INTO $GLOBALS[db_sp].permissions SET 
								 uid = $uid,
								`cid` = ".$key.", 
								`perm` = '".$perm."' 
						";
						$rs = $GLOBALS["sp"]->execute($sql);
						
					}
				}
			}
			$url = $path_url."/permission/$uid/";
			page_transfer2($url);
		break;
		default:
			$uid  = $_GET['cat1'];
			$sql = "select * from $GLOBALS[db_sp].admin where id=$uid";
			$rs = $GLOBALS["sp"]->getRow($sql);
			$smarty->assign("viewuser",$rs);
			$html = '';
			$level = '';
			$str = '';
			
			$sql_pms = "select * from $GLOBALS[db_sp].permissions where uid=$uid and cid=5 ";
			$rs_pms = $GLOBALS["sp"]->getRow($sql_pms);
			$list = '';
			
			if(in_array("5",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkview5' type='checkbox' checked='checked' name='5[]' value='5' /></td>";
			else
				$list .= "<td align='center'><input id='checkview5' type='checkbox'  name='5[]' value='5' /></td>";
				
			if(in_array("1",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkadd5' type='checkbox' checked='checked' name='5[]' value='1' /></td>";
			else
				$list .= "<td align='center'><input id='checkadd5' type='checkbox'  name='5[]' value='1' /></td>";
				
			if(in_array("2",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkedit5' type='checkbox' checked='checked' name='5[]' value='2' /></td>";
			else
				$list .= "<td align='center'><input id='checkedit5' type='checkbox'  name='5[]' value='2' /></td>";
			
			if(in_array("3",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkdel5' type='checkbox' checked='checked' name='5[]' value='3' /></td>";
			else
				$list .= "<td align='center'><input id='checkdel5' type='checkbox'  name='5[]' value='3' /></td>";
				
			if(in_array("4",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkall5' type='checkbox' checked='checked'  name='4[]' value='4' /></td>";
			else
				$list .= "<td align='center'><input id='checkall5' type='checkbox'  name='5[]' value='4' /></td>";
			
			$str.="
				 <tr class='trColortwo'>
					<td align='left'><strong>Tổng quan</strong></td>
					".$list."
				 </tr>  
			 "; 
			 
			
			$sql_pms = "select * from $GLOBALS[db_sp].permissions where uid=$uid and cid=1 ";
			$rs_pms = $GLOBALS["sp"]->getRow($sql_pms);
			$list = '';
			
			if(in_array("5",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkview1' type='checkbox' checked='checked' name='1[]' value='5' /></td>";
			else
				$list .= "<td align='center'><input id='checkview1' type='checkbox'  name='1[]' value='5' /></td>";
				
			if(in_array("1",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkadd1' type='checkbox' checked='checked' name='1[]' value='1' /></td>";
			else
				$list .= "<td align='center'><input id='checkadd1' type='checkbox'  name='1[]' value='1' /></td>";
				
			if(in_array("2",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkedit1' type='checkbox' checked='checked' name='1[]' value='2' /></td>";
			else
				$list .= "<td align='center'><input id='checkedit1' type='checkbox'  name='1[]' value='2' /></td>";
			
			if(in_array("3",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkdel1' type='checkbox' checked='checked' name='1[]' value='3' /></td>";
			else
				$list .= "<td align='center'><input id='checkdel1' type='checkbox'  name='1[]' value='3' /></td>";
				
			if(in_array("4",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkall1' type='checkbox' checked='checked'  name='1[]' value='4' /></td>";
			else
				$list .= "<td align='center'><input id='checkall1' type='checkbox'  name='1[]' value='4' /></td>";
			
			$str.="
				 <tr class='trColorOne'>
					<td align='left'><strong>Máy bảo hành, tìm kiếm Serial</strong></td>
					".$list."
				 </tr>  
			 "; 
			 
			$sql_pms = "select * from $GLOBALS[db_sp].permissions where uid=$uid and cid=2 ";
			$rs_pms = $GLOBALS["sp"]->getRow($sql_pms);
			$list = '';
			
			if(in_array("5",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkview2' type='checkbox' checked='checked' name='2[]' value='5' /></td>";
			else
				$list .= "<td align='center'><input id='checkview2' type='checkbox'  name='2[]' value='5' /></td>";
			
			if(in_array("1",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkadd2' type='checkbox' checked='checked' name='2[]' value='1' /></td>";
			else
				$list .= "<td align='center'><input id='checkadd2' type='checkbox'  name='2[]' value='1' /></td>";
				
			if(in_array("2",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkedit2' type='checkbox' checked='checked' name='2[]' value='2' /></td>";
			else
				$list .= "<td align='center'><input id='checkedit2' type='checkbox'  name='2[]' value='2' /></td>";
			
			if(in_array("3",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkdel2' type='checkbox' checked='checked' name='2[]' value='3' /></td>";
			else
				$list .= "<td align='center'><input id='checkdel2' type='checkbox'  name='2[]' value='3' /></td>";
				
			if(in_array("4",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkall2' type='checkbox' checked='checked'  name='2[]' value='4' /></td>";
			else
				$list .= "<td align='center'><input id='checkall2' type='checkbox'  name='2[]' value='4' /></td>";
			
			$str.="
				 <tr class='trColortwo'>
					<td align='left'><strong>Thống kê kho</strong></td>
					".$list."
				 </tr>  
			 "; 
			
			$sql_pms = "select * from $GLOBALS[db_sp].permissions where uid=$uid and cid=3 ";
			$rs_pms = $GLOBALS["sp"]->getRow($sql_pms);
			$list = '';
			
			if(in_array("5",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkview3' type='checkbox' checked='checked' name='3[]' value='5' /></td>";
			else
				$list .= "<td align='center'><input id='checkview3' type='checkbox'  name='3[]' value='5' /></td>";
				
			if(in_array("1",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkadd3' type='checkbox' checked='checked' name='3[]' value='1' /></td>";
			else
				$list .= "<td align='center'><input id='checkadd3' type='checkbox'  name='3[]' value='1' /></td>";
				
			if(in_array("2",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkedit3' type='checkbox' checked='checked' name='3[]' value='2' /></td>";
			else
				$list .= "<td align='center'><input id='checkedit3' type='checkbox'  name='3[]' value='2' /></td>";
			
			if(in_array("3",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkdel3' type='checkbox' checked='checked' name='3[]' value='3' /></td>";
			else
				$list .= "<td align='center'><input id='checkdel3' type='checkbox'  name='3[]' value='3' /></td>";
				
			if(in_array("4",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkall3' type='checkbox' checked='checked'  name='3[]' value='4' /></td>";
			else
				$list .= "<td align='center'><input id='checkall3' type='checkbox'  name='3[]' value='4' /></td>";
			
			$str.="
				 <tr class='trColortwo'>
					<td align='left'><strong>Nhập hàng</strong></td>
					".$list."
				 </tr>  
			 "; 
			 
			
			$sql_pms = "select * from $GLOBALS[db_sp].permissions where uid=$uid and cid=4 ";
			$rs_pms = $GLOBALS["sp"]->getRow($sql_pms);
			$list = '';
			
			if(in_array("5",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkview4' type='checkbox' checked='checked' name='4[]' value='5' /></td>";
			else
				$list .= "<td align='center'><input id='checkview4' type='checkbox'  name='4[]' value='5' /></td>";
				
			if(in_array("1",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkadd4' type='checkbox' checked='checked' name='4[]' value='1' /></td>";
			else
				$list .= "<td align='center'><input id='checkadd4' type='checkbox'  name='4[]' value='1' /></td>";
				
			if(in_array("2",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkedit4' type='checkbox' checked='checked' name='4[]' value='2' /></td>";
			else
				$list .= "<td align='center'><input id='checkedit4' type='checkbox'  name='4[]' value='2' /></td>";
			
			if(in_array("3",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkdel4' type='checkbox' checked='checked' name='4[]' value='3' /></td>";
			else
				$list .= "<td align='center'><input id='checkdel4' type='checkbox'  name='4[]' value='3' /></td>";
				
			if(in_array("4",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkall4' type='checkbox' checked='checked'  name='4[]' value='4' /></td>";
			else
				$list .= "<td align='center'><input id='checkall4' type='checkbox'  name='4[]' value='4' /></td>";
			
			$str.="
				 <tr class='trColortwo'>
					<td align='left'><strong>Nhà cung cấp</strong></td>
					".$list."
				 </tr>  
			 "; 
			 
			$sql_pms = "select * from $GLOBALS[db_sp].permissions where uid=$uid and cid=6 ";
			$rs_pms = $GLOBALS["sp"]->getRow($sql_pms);
			$list = '';
			
			if(in_array("5",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkview6' type='checkbox' checked='checked' name='6[]' value='5' /></td>";
			else
				$list .= "<td align='center'><input id='checkview6' type='checkbox'  name='6[]' value='5' /></td>";
				
			if(in_array("1",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkadd6' type='checkbox' checked='checked' name='6[]' value='1' /></td>";
			else
				$list .= "<td align='center'><input id='checkadd6' type='checkbox'  name='6[]' value='1' /></td>";
				
			if(in_array("2",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkedit6' type='checkbox' checked='checked' name='6[]' value='2' /></td>";
			else
				$list .= "<td align='center'><input id='checkedit6' type='checkbox'  name='6[]' value='2' /></td>";
			
			if(in_array("3",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkdel6' type='checkbox' checked='checked' name='6[]' value='3' /></td>";
			else
				$list .= "<td align='center'><input id='checkdel6' type='checkbox'  name='6[]' value='3' /></td>";
				
			if(in_array("4",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkall6' type='checkbox' checked='checked'  name='6[]' value='4' /></td>";
			else
				$list .= "<td align='center'><input id='checkall6' type='checkbox'  name='6[]' value='4' /></td>";
			
			$str.="
				 <tr class='trColortwo'>
					<td align='left'><strong>Khách hàng</strong></td>
					".$list."
				 </tr>  
			 "; 
			 
			  
			$sql_pms = "select * from $GLOBALS[db_sp].permissions where uid=$uid and cid=7 ";
			$rs_pms = $GLOBALS["sp"]->getRow($sql_pms);
			$list = '';
			
			if(in_array("5",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkview7' type='checkbox' checked='checked' name='7[]' value='5' /></td>";
			else
				$list .= "<td align='center'><input id='checkview7' type='checkbox'  name='7[]' value='5' /></td>";
				
			if(in_array("1",explode(',',$rs_pms['perm'])))
				$list .= "<td  align='center'><input id='checkadd7' type='checkbox' checked='checked' name='7[]' value='1' /></td>";
			else
				$list .= "<td align='center'><input id='checkadd7' type='checkbox'  name='7[]' value='1' /></td>";
				
			if(in_array("2",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkedit7' type='checkbox' checked='checked' name='7[]' value='2' /></td>";
			else
				$list .= "<td align='center'><input id='checkedit7' type='checkbox'  name='7[]' value='2' /></td>";
			
			if(in_array("3",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkdel7' type='checkbox' checked='checked' name='7[]' value='3' /></td>";
			else
				$list .= "<td align='center'><input id='checkdel7' type='checkbox'  name='7[]' value='3' /></td>";
				
			if(in_array("4",explode(',',$rs_pms['perm'])))
				$list .= "<td align='center'><input id='checkall7' type='checkbox' checked='checked'  name='7[]' value='4' /></td>";
			else
				$list .= "<td align='center'><input id='checkall7' type='checkbox'  name='7[]' value='4' /></td>";
			
			$str.="
				 <tr class='trColortwo'>
					<td align='left'><strong>Phiếu xuất hàng</strong></td>
					".$list."
				 </tr>  
			 "; 


			$smarty->assign("view",$str);
			$template = "permission/edit.tpl";
		break;
	}
	$smarty->display("header.tpl");
	$smarty->display($template);
	$smarty->display("footer.tpl");
}
else{
	page_permision();
	$page='index.html';
	page_transfer2($page);
}
function dequi($root,&$html,$level,$uid){
	global $db,$flash;
	$sql = "select * from $GLOBALS[db_sp].categories where  pid=".$root." order by num asc ";
	$all = $GLOBALS['sp']->getAll($sql);
	if( ceil(count($all)) > 0){
		for($i=0;$i<count($all);$i++){
			$flash++;
			if(($flash % 2) == 0)
				$bg = 'class="Bgf1"';
			else
				$bg = 'class="Bgf2"';
			$class = '';
			$class = 'class="PemissionBrBottom PemissionName'.$level.'" ';
			$list_pms = '';
			////load check da phan quyen
			$sql_pms = "select * from $GLOBALS[db_sp].permissions where uid=$uid  and cid=".$all[$i]['id'];
			$rs_pms = $GLOBALS['sp']->getRow($sql_pms);
			if(in_array("1",explode(',',$rs_pms['perm'])))
				$list_pms .= "<td align='center' valign='middle' class='PemissionBrBottom' ><input id='checkadd".$flash."' type='checkbox' checked='checked' name='".$all[$i]['id']."[]' value='1' /></td>";
			else
				$list_pms .= "<td align='center' valign='middle' class='PemissionBrBottom'><input id='checkadd".$flash."' type='checkbox'  name='".$all[$i]['id']."[]' value='1' /></td>";
				
			if(in_array("2",explode(',',$rs_pms['perm'])))
				$list_pms .= "<td align='center' valign='middle' class='PemissionBrBottom'><input id='checkedit".$flash."' type='checkbox' checked='checked' name='".$all[$i]['id']."[]' value='2' /></td>";
			else
				$list_pms .= "<td align='center' valign='middle' class='PemissionBrBottom'><input id='checkedit".$flash."' type='checkbox'  name='".$all[$i]['id']."[]' value='2' /></td>";
			
			if(in_array("3",explode(',',$rs_pms['perm'])))
				$list_pms .= "<td align='center' valign='middle' class='PemissionBrBottom'><input id='checkdel".$flash."' type='checkbox' checked='checked' name='".$all[$i]['id']."[]' value='3' /></td>";
			else
				$list_pms .= "<td align='center' valign='middle' class='PemissionBrBottom'><input id='checkdel".$flash."' type='checkbox'  name='".$all[$i]['id']."[]' value='3' /></td>";
			
			if(in_array("5",explode(',',$rs_pms['perm'])))
				$list_pms .= "<td align='center' valign='middle'class='PemissionBrBottom' ><input id='checkall".$flash."' type='checkbox' checked='checked'  name='".$all[$i]['id']."[]' value='5' /></td>";
			else
				$list_pms .= "<td align='center' valign='middle' class='PemissionBrBottom'><input id='checkall".$flash."' type='checkbox'  name='".$all[$i]['id']."[]' value='5' /></td>";
					
			if(in_array("4",explode(',',$rs_pms['perm'])))
				$list_pms .= "<td align='center' valign='middle'class='PemissionBrBottom' ><input id='checkall".$flash."' type='checkbox' checked='checked'  name='".$all[$i]['id']."[]' value='4' /></td>";
			else
				$list_pms .= "<td align='center' valign='middle' class='PemissionBrBottom'><input id='checkall".$flash."' type='checkbox'  name='".$all[$i]['id']."[]' value='4' /></td>";	
			$html .= "
				<tr ".$bg.">
					<td align='left' valign='middle' ".$class." >".$all[$i]['name']."</td>
					".$list_pms."
				 </tr>			
			";
			dequi($all[$i]['id'],$html,$level+1,$uid);
		}
	}
	return $html;
}

?>