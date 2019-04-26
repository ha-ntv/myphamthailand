<?php
switch($act){
	case "detail":
		if(isset($cat2['id'])){ //cap 2
			$linkTitle = '
				<div class="breadcrumb flever_12">
					<a href="'.$path_url.'" title="Trang chủ">Trang chủ</a>
				</div>
				
				<div class="breadcrumbs_sepa">&gt;</div>
				<div class="breadcrumb">
					<a href="' . $path_url. '/' .$cat1["unique_key"]. '/" title="'.$cat1["title_link"].'">
						<span>' .$cat1["name_$lang"]. '</span>
					</a>
				</div>
				
				<div class="breadcrumbs_sepa">&gt;</div>
				<div class="breadcrumb">
					<a href="' . $path_url. '/' .$cat1["unique_key"]. '/' .$cat2["unique_key"]. '/"  title="'.$cat2["title_link"].'">
						<span>' .$cat2["name_$lang"]. '</span>
					</a>
				</div> 
			';
			$cat = $cat2;
			
		}
		else{//cap 1
			$linkTitle = '
				<div class="breadcrumb flever_12">
					<a href="'.$path_url.'" title="Trang chủ">Trang chủ</a>
				</div>
				
				<div class="breadcrumbs_sepa">&gt;</div>
				<div class="breadcrumb">
					<a href="' . $path_url. '/' .$cat1["unique_key"]. '/" title="'.$cat1["title_link"].'">
						<span>' .$cat1["name_$lang"]. '</span>
					</a>
				</div>
			';
			$cat = $cat1;			
		}
		
		$unique_key = $_GET['unique_key'];
		$sql = "select * from $GLOBALS[db_sp].articles where unique_key='$unique_key' and cid=" . $cat['id'];
		$rs = $GLOBALS["sp"]->getRow($sql);
		$smarty->assign("detail",$rs);
		
		$arr['view'] = ceil($rs['view']+1);
		vaUpdate('articles',$arr,' id='.$rs['id']);
	
		if(!$rs['id']){//bi rong la kg ton tai link quay ve trang chu
			PageHome("404/");
		}
		/*
		if($rs['id']==132){
			$sqltg = "select * from $GLOBALS[db_sp].categories where id=8";
			$rstg = $GLOBALS["sp"]->getRow($sqltg);
			if($showCity==17)
				$smarty->assign("slpercent",40);
					
			$smarty->assign("tragop",$rstg);
			
			$smarty->assign("checkProductDt",1);
			$smarty->assign("checkTragop",1);		
		}
		*/
		$sql_cl = " select * from $GLOBALS[db_sp].articles where active=1 and cid = ".$cat['id']." and id <> ".$rs['id']." order by  id desc limit 15 ";
		$rs_cl = $GLOBALS["sp"]->getAll($sql_cl);
		$smarty->assign("view",$rs_cl);
		$smarty->assign("seo",$rs);
		$smarty->assign("nametitle",$cat);
		
		////////////////load commmetn//////////////
		$smarty->assign("security",generateCode(6));
		$sql_comment = "select * from $GLOBALS[db_sp].comment where active=1 and idpr=".$rs['id']." and idcity=$showCity and type=1 order by num asc, id desc";
		$rs_comment = $GLOBALS["sp"]->getAll($sql_comment);
		$smarty->assign("commentCount",ceil(count($rs_comment)));
		$smarty->assign("viewComment",$rs_comment);
		//////////////////////////////////////////////////////////////////////
		
		/////////////load sản phẩm  right
		$sqlprright = " select * from $GLOBALS[db_sp].products pr, $GLOBALS[db_sp].colorsize cldd  
				 where pr.active=1  
				 and  pr.img_thumb_vn<>''
				 and pr.id=cldd.idpr
				 and cldd.idcity=$showCity 
				 and pr.cid_share like '%,".$rs['id'].",%'
				 group by pr.id
				 order by pr.orderhot asc, pr.id desc limit 20
		";
		$rsprright = $GLOBALS["sp"]->getAll($sqlprright);
		if(ceil(count($rsprright)) > 0){
			$smarty->assign("rightProductHot",$rsprright);
			$smarty->assign("rightCheckNew",1);
		}

		
		$h1='
			<div class="maintitlenewdt">
				<div class="contentnewdt">
					<h1 class="titlecontentnewdt"><strong>'.$rs['name_'.$lang].'</strong></h1>
			   </div>
			</div>

		';
		$smarty->assign("loadTitleh1",$h1);
		$template = "articles/detail.tpl";
		$smarty->assign("checkTintuc",1);
		
	break;
	
	default:	
		if(isset($cat2['id'])){ //cap 2
			$linkTitle = '
				<div class="breadcrumb flever_12">
					<a href="'.$path_url.'" title="Trang chủ">Trang chủ</a>
				</div>
				
				<div class="breadcrumbs_sepa">&gt;</div>
				<div class="breadcrumb">
					<a href="' . $path_url. '/' .$cat1["unique_key"]. '/" title="'.$cat1["title_link"].'">
						<span>' .$cat1["name_$lang"]. '</span>
					</a>
				</div>
				
				<div class="breadcrumbs_sepa">&gt;</div>
				<div class="breadcrumb">
					<a href="' . $path_url. '/' .$cat1["unique_key"]. '/' .$cat2["unique_key"]. '/"  title="'.$cat2["title_link"].'">
						<span>' .$cat2["name_$lang"]. '</span>
					</a>
				</div> 
			';
			$cat = $cat2;
			
		}
		else{//cap 1
			$linkTitle = '
				<div class="breadcrumb flever_12">
					<a href="'.$path_url.'" title="Trang chủ">Trang chủ</a>
				</div>
				
				<div class="breadcrumbs_sepa">&gt;</div>
				<div class="breadcrumb">
					<span>' .$cat1["name_$lang"]. '</span>
				</div>
			';
			$cat = $cat1;			
		}
		if($cat['id']==57){
			////////load 4 tin đầu tiên
			$sql4 = " select * from $GLOBALS[db_sp].articles where active=1 and cid = ".$cat['id']." and img_thumb_vn<>'' order by num asc, id desc limit 0,4";
			$rs4 = $GLOBALS["sp"]->getAll($sql4);
			$smarty->assign("view4",$rs4);
			
			////////load các tin còn lại

			$view = $str = $str1 = $str2 = '';
			$sql = " select * from $GLOBALS[db_sp].articles where active=1 and cid = ".$cat['id']." and img_thumb_vn<>'' order by num asc, id desc limit 4,3";
			$rs = $GLOBALS["sp"]->getAll($sql);
			if(ceil(count($rs))>0){
				foreach($rs as $item){
					$link = GetLinkDetail($item, $lang);
					$str.='
															
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt10">
							<div class="media-box clearfix">
								<a class="pull-left" href="'.$path_url.'/'.$link.'" title="'.$item["title_".$lang].'">
									<img width="102" height="102" src= "'.$path_url .'/'. $item["img_thumb_vn"] .'" alt="'.$item["name_".$lang].'" />
								</a>
								<div class="media-body">
									<h4 class="media-heading">
										<a href="'.$path_url.'/'.$link.'" title="'.$item["title_".$lang].'">'.$item["name_".$lang].'</a>
									</h4>
									<p>'.$item["short_".$lang].'</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					';
				}
				$str='<div class="row item active">'.$str.'</div>';
				
				$sql1 = "select * from $GLOBALS[db_sp].articles where active=1 and cid = ".$cat['id']." and img_thumb_vn<>'' order by num asc, id desc limit 6,3";
				$rs1 = $GLOBALS["sp"]->getAll($sql1);
				if(ceil(count($rs1))>0){
					foreach($rs1 as $item1){
						$link1 = GetLinkDetail($item1, $lang);
						$str1.='
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt10">
								<div class="media-box clearfix">
									<a class="pull-left" href="'.$path_url.'/'.$link1.'" title="'.$item1["title_".$lang].'">
										<img width="102" height="102" src= "'.$path_url .'/'. $item1["img_thumb_vn"] .'" alt="'.$item1["name_".$lang].'" />
									</a>
									<div class="media-body">
										<h4 class="media-heading">
											<a href="'.$path_url.'/'.$link1.'" title="'.$item1["title_".$lang].'">'.$item1["name_".$lang].'</a>
										</h4>
										<p>'.$item1["short_".$lang].'</p>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						';
					}
					$str1='<div class="row item">'.$str1.'</div>';
					
					$sql2 = "select * from $GLOBALS[db_sp].articles where active=1 and cid = ".$cat['id']." and img_thumb_vn<>'' order by num asc, id desc limit 9,3";
					$rs2 = $GLOBALS["sp"]->getAll($sql2);
					if(ceil(count($rs2))>0){
						foreach($rs2 as $item2){
							$link2 = GetLinkDetail($item2, $lang);
							$str2.='
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt10">
									<div class="media-box clearfix">
										<a class="pull-left" href="'.$path_url.'/'.$link2.'" title="'.$item2["title_".$lang].'">
											<img width="102" height="102" src= "'.$path_url .'/'. $item2["img_thumb_vn"] .'" alt="'.$item2["name_".$lang].'" />
										</a>
										<div class="media-body">
											<h4 class="media-heading">
												<a href="'.$path_url.'/'.$link2.'" title="'.$item2["title_".$lang].'">'.$item2["name_".$lang].'</a>
											</h4>
											<p>'.$item2["short_".$lang].'</p>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							';
						}
						$str2='<div class="row item">'.$str2.'</div>';
					}
				}
			}
			$str = $str.$str1.$str2;
			
			if($str){
				$view = '
					<div class="carousel-inner">            			                		                																										
						'.$str.'
					</div>
				
					<a data-slide="prev" href="#myCarouselnews" class=" carousel-control left "><i class="glyphicon glyphicon-chevron-left fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#myCarouselnews" class=" carousel-control right"><i class="glyphicon glyphicon-chevron-right fa fa-chevron-right"></i></a>
				';
			}
			else{
				$view = '';
			}
			$smarty->assign("viewNews",$view);
			$template = "articles/khuyenmai.tpl";
		}
		else{

			$sql = " select * from $GLOBALS[db_sp].articles where active=1 and cid = ".$cat['id']." order by num asc, id desc ";
			$total = $count = ceil(count($GLOBALS["sp"]->getAll($sql)));
			
			$num_rows_page = 8;
			$num_page = ceil($count/$num_rows_page);
			
			$begin = ($page - 1)*$num_rows_page;		
			$iSEGSIZE=5;
			$linkpg = "";
			
			if($num_page > 1 ){
				$linkpg = paginator($urll,1,$num_page,$iSEGSIZE,$cat['id'],'articles',$path_url,$UrlLink,$idd,$num_rows_page);
				$smarty->assign("Checkpg","1");
			}
			
			$sql = $sql." limit $begin,$num_rows_page";
			$rs = $GLOBALS["sp"]->getAll($sql);
			$template = "articles/view.tpl";
		}
		
		$smarty->assign("linkpg",$linkpg);
		$smarty->assign("CheckNull",$count);
		////////////////////////////////////////
		$smarty->assign("view",$rs);
		$smarty->assign("seo",$cat);	
			
	break;
}
$smarty->assign("linkTitle",$linkTitle);			
$smarty->display("./header.tpl");
$smarty->display($template);
$smarty->display("./footer.tpl");

?>