<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="NOINDEX, NOFOLLOW" />
<title>Administrator</title>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&amp;subset=vietnamese" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="images/style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ddtabmenu.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<script type="text/javascript" src="ADMeditor/ckeditor.js"></script>

<!--[if IE]>
<link rel="stylesheet" type="text/css" href="images/style_fixIE.css">
<![endif]-->
</head>
<body>
<!-- Header start -->
<div class="bgleft">
	<div class="bgright">
        <div class="header">
            <div class="divfull">
                <div class="date linkorg">
                Hôm nay ngày: <!--{$smarty.now|date_format:"%d-%m-%Y"}--> <br />
                Hi: <strong><!--{$smarty.session.admin_artseed_username}--></strong><br /> 
               <a href="index.php?do=login&act=log_out">Thoát</a> | <a href="index.php?do=users&act=changes">Đổi Mật Khẩu</a> <br />
               </div>
                
            </div>
        </div>
        <div id="tabmenu" >
            <ul>
                
                <li ><a href="index.php?do=categories&cid=2&root=1" rel="country1"><b><p> Menu </p></b></a></li>		     
                <li ><a href="index.php?do=users" rel="country2"><b><p> Quản Lý Account	 </p></b></a></li>
				<li ><a href="index.php?do=maintain" rel="country3"><b><p> Bảo Trì </p></b></a></li>
                <li ><a href="index.php?do=infos" rel="country4"><b><p> Thông Tin Website </p></b></a></li>
                <li ><a href="index.php?do=member" rel="country5"><b><p>Thành Viên</p></b></a></li>
                <li ><a href="index.php?do=orders" rel="country6"><b><p>ĐH đang chờ</p></b></a></li>
                <li ><a href="index.php?do=orders&s=2" rel="country7"><b><p>ĐH đã liên hệ</p></b></a></li>
                <li ><a href="index.php?do=orders&s=1" rel="country8"><b><p>ĐH đã duyệt</p></b></a></li>
                <li ><a href="index.php?do=city" rel="country9"><b><p>Tỉnh Thành</p></b></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="menuconten">
            <div class="divfull tabcontainer">    	
                <div id="country1" class="tabcontent" >
                	<!--<a href="javascript:void(0)" onclick="delIp('thuongkhach');">Xóa Banned | </a>-->
                    <a href="index.php?do=comment&cid=0&type=0" <!--{$comment}-->> Duyệt Bình Luận Sản Phẩm |</a>
                    <a href="index.php?do=comment&cid=0&type=1" <!--{$comment1}-->> Duyệt Bình Luận Tin tức |</a>
                    <a href="index.php?do=products&act=hot">Sản Phẩm Hot |</a>
                   
                    <a href="index.php?do=competitors&act=list&type=17">Đà Nẵng | </a>
                    <a href="index.php?do=ykienkhachhang&act=list">Ý Kiến Khách Hàng | </a>
                    <a href="index.php?do=saleup&act=list">Popup Sale Up </a>
                </div>
                <div id="country2" class="tabcontent" ></div>
                <div id="country3" class="tabcontent" ></div>
                <div id="country4" class="tabcontent" ></div>
                <div id="country5" class="tabcontent" ></div>
				<div id="country6" class="tabcontent" ></div>
				<div id="country7" class="tabcontent" ></div>
                <div id="country8" class="tabcontent" ></div>
                <div id="country9" class="tabcontent" ></div>
                <div class="clear"></div>    
            </div>
        </div>
<!-- Header end -->

<script type="text/javascript">
  ddtabmenu.definemenu("tabmenu",<!--{$tabmenu}-->) //selected tab
  
  function delIp(a){
  	
	jQuery.post('ajax/delIpBanned.php',{type:a},function(data) {
		 var obj = jQuery.parseJSON(data);
		 alert(obj.status);
		 return false;
	});
  }
</script>