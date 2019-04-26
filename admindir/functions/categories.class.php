<?php
	class Categories
	{
	  var $root_tree=1;
	  
	  function admin_tree_filter($root=1,$selected=0,$comp="a",$name="cat",$onchange="TreeFilterChanged",$where="1"){
	  
		$level = 1;
		$filter_cat = '<select class="TheLoai" name="'.$name.'" id="'.$name.'" onchange="'.$onchange.'(this.value);">';
		$this->dequi($root,$filter_cat,$level,$selected,$comp,$where);
		$filter_cat .= '</select>';
		return $filter_cat;
	  }
	  
	  function dequi($root,&$html,$level,$selected,$comp,$where){
		global $db;
		$sql = "select id,name_vn,pid,comp from $GLOBALS[db_sp].categories where pid=".$root." and ".$where." order by num asc, id asc";
		$all = $GLOBALS["sp"]->getAll($sql);
		if($all){
			for($i=0;$i<count($all);$i++){
				$temp = "";
				if($all[$i]['comp'] == $comp){	
					for($j=0;$j<$level;$j++)
						$temp .="&nbsp;&nbsp;";
					$checked = "";
					if($selected == $all[$i]['id'])
						$checked = " selected ";
					$html .= "<option value='".$all[$i]['id']."' ".$checked." style=\"";
				/*	
					if($all[$i]['comp'] == $comp)
						$html .= "color:#EFC105;";
					if($all[$i]['pid']==1)
						$html .= "font-weight:bold;";
				*/	
					
				}	
				$html .= "\">".$temp." |-> ".$all[$i]['name_vn']."</option>\n";
				$this->dequi($all[$i]['id'],$html,$level+1,$selected,$comp,$where);
				
			}
		}
	  } 
	
	} 
  
?>