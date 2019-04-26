<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content ="vn" />
<title>Phần Mền Quản Lý</title>
<meta name="robots" content="NOINDEX,NOFOLLOW"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" media="screen" href="<!--{$path_url}-->/css/body.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<!--{$path_url}-->/css/header.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<!--{$path_url}-->/css/menu.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<!--{$path_url}-->/css/navimenu.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<!--{$path_url}-->/css/content.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<!--{$path_url}-->/css/font-awesome.min.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<!--{$path_url}-->/css/them.css" /> 
<script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/jquery.js"></script>
<script src="<!--{$path_url}-->/js/script-menu.js"></script>
<script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/navimenu.js"></script>
<script type='text/javascript' src='<!--{$path_url}-->/js/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="<!--{$path_url}-->/css/jquery.autocomplete.css" />

<link type="text/css" href="<!--{$path_url}-->/calendar/themes/ui-lightness/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="<!--{$path_url}-->/calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="<!--{$path_url}-->/calendar/ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<!--{$path_url}-->/calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="<!--{$path_url}-->/calendar/ui/ui.dialog.js"></script>
</head>
<body>
<div  class="mainWrap">
	<div class="Header">
    	<div class="TopHeader">
        	<div class="Logo">
            	<a href=""><img class="ImgReponsive" src="<!--{$path_url}-->/images/logo.png" /></a>
            </div>
            <div class="RightTop">
				<div class="ddsmoothmenu" id="smoothmenu1">
                    <ul>
                    	

                    	<li style="background:none;">
                            <a href="<!--{$path_url}-->/" class="" style="color:#676565;background:none;">	
                                <i class="fa fa-bell-o"></i>
                                <strong id="countSapHetHang" style="color:#d64457; position:relative; top:-7px; left:-5px; font-size:13px;"></strong>
                            </a>
                        </li>
                       
                        
                    	<li>
                            <a href="#" class="">	
                                <strong><!--{$smarty.session.admin_crmvietanhmobil_username}--></strong> <i class="fa fa-caret-down1"></i>
                            </a>
                            <ul>
                             <!--{if $smarty.session.admin_crmvietanhmobil_group eq -1}-->
                            	<li>
                                     <a href="<!--{$path_url}-->/users/">
                                        <i class="fa fa-male"></i> Quản lý người dùng
                                     </a> 
                                </li>
                             <!--{/if}-->   
                                <li>
                                     <a href="<!--{$path_url}-->/users/changes/">
                                        <i class="fa fa-unlock-alt"></i> Thay đổi mật khẩu
                                     </a> 
                                </li>
                            
                                <li>
                                     <a href="javascript:void(0)" onclick="return signout();">
                                        <i class="fa fa-external-link"></i> Đăng xuất
                                     </a> 
                                </li>
                                 <script type="text/javascript">
									function signout(){
										 $.post('<!--{$path_url}-->/ajax/member.php',{type:'signout'},function(data) {
											 location.reload();//document.location.href= '<!--{$path_url}-->'
										});
									
									}
								</script>
                            </ul>
                            
                        </li>
                        
                        <li>
                            <a href="#" class="">	
                                <strong>Thiết lập</strong> <i class="fa fa-caret-down1"></i>
                            </a>
                            <ul>
                            	<li>
                                     <a href="#">
                                        <i class="fa fa-wrench"></i> Thiết lập cửa hàng
                                     </a> 
                                </li>
                            	<li>
                                     <a href="#">
                                       <i class="fa fa-file-text"></i> Quản lý mẫu tin
                                     </a> 
                                </li>
                            	
                                <li>
                                     <a href="#">
                                         <i class="fa fa-puzzle-piece"></i> Quản lý chi nhánh
                                     </a> 
                                </li>
                            
                                <li>
                                     <a href="#">
                                        <i class="fa fa-trash"></i> Xóa dữ liệu hệ thống
                                     </a> 
                                </li>
                                
                            </ul>
                        </li>
                        
                         <li>
                            <a href="#">	
                                <strong><!--{insert name="getNameWeb" id=$smarty.session.admin_showCity table="city" typename="name"}--></strong> <i class="fa fa-map-marker"></i>
                            </a>
                            <!--{if $smarty.session.admin_crmvietanhmobil_group eq -1}-->
                                <ul>
                                    <!--{section name=i loop=$cityHome}-->
                                        <li>
                                             <a href="javascript:void(0)" onclick="setSessionDiaDiem(<!--{$cityHome[i].id}-->)">
                                                <i class="fa fa-wrench"></i> <!--{$cityHome[i].name}-->
                                             </a> 
                                        </li>
                                    <!--{/section}-->
                                    <script type="text/javascript">
                                        function setSessionDiaDiem(idcity){
									
                                             $.post('<!--{$path_url}-->/ajax/member.php',{idciy:idcity,type:'setSessionDiaDiem'},function(data) {
                                                 location.reload();//document.location.href= '<!--{$path_url}-->'
                                            });
											
                                        
                                        }
                                    </script>
                                    
                                </ul>
                         <!--{/if}-->
                        </li>

                    </ul>  
                </div>
            </div>
        </div>
        
    	<div class="Menu BgColor">
       		<div id='cssmenu'>
            	<ul>	
                	<li <!--{$checkTongquan}-->>
                    	<a href='<!--{$path_url}-->/'><i class="fa fa-eye"></i> Tổng quan</a>
                    </li>
                   	<li <!--{$checkHanghoa}-->><a href='#'><i class="fa fa-cube"></i> Hàng hóa</a>
                   		<ul>
                        	<li <!--{$checkMaybaohanh}-->><a href='<!--{$path_url}-->/serial/2/0/viewbaohanh/'><i class="fa fa-wrench"></i> Máy bảo hành</a></li>
                            <li <!--{$checkNhapkho}-->><a href='<!--{$path_url}-->/categories/2/'><i class="fa fa-check-square-o"></i> Thống kê kho</a></li>
                      	</ul>   
                   </li>
                   <li <!--{$checkGiaoDich}-->>
                   		<a><i class="fa fa-exchange"></i> Giao dịch</a>
                   		<ul>
                        	<li <!--{$checkPhieuNhapHang}-->><a href='<!--{$path_url}-->/phieu-nhap-hang/2/'><i class="fa fa-recycle"></i> Nhập hàng</a></li>
                            <li <!--{$checkPhieuXuatHang}-->><a href='<!--{$path_url}-->/phieu-xuat-hang/2/'><i class="fa fa-sign-in"></i> Phiếu xuất hàng</a></li>
                      	</ul>  	
                   </li>
                   <li <!--{$checkDoitac}--> ><a href='<!--{$path_url}-->/nha-cung-cap/2/'><i class="fa fa-male"></i>Đối tác</a>
                   		<ul>
                        	<li <!--{$checkKhachhang}-->><a href='<!--{$path_url}-->/khach-hang/2/'><i class="fa fa-user"></i> Khách hàng</a></li>
                        	<li <!--{$checkNhacungcap}-->><a href='<!--{$path_url}-->/nha-cung-cap/2/'><i class="fa fa-undo"></i> Nhà cung cấp</a></li>
                            
                      	</ul>   
                   </li>
                   <li><a href='#'><i class="fa fa-usd"></i> Sổ quỹ</a></li>
                   <li><a href='#'><i class="fa fa-bar-chart"></i> Báo cáo</a></li>
                </ul>

            </div>
        </div>	
    </div>