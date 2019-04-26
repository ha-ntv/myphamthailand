<?php /* Smarty version 2.6.6, created on 2019-04-13 16:10:19
         compiled from ./header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'countCart', './header.tpl', 196, false),array('insert', 'getCart', './header.tpl', 200, false),)), $this); ?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content ="vn" />
<?php if ($_SESSION['saleupOne'] == 2): ?>
<meta http-equiv="REFRESH" content="90" />
<?php endif; ?>
<title><?php echo $this->_tpl_vars['seo']['title']; ?>
</title>
<meta name="description" content="<?php echo $this->_tpl_vars['seo']['des']; ?>
"/>
<meta name="keywords" content="<?php echo $this->_tpl_vars['seo']['keyword']; ?>
"/>
<meta name="robots" content="INDEX, FOLLOW"/>
<meta name="robots" content="NOODP, NOYDIR" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['path_url']; ?>
/images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/headernew.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/bootstrap.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/font-awesome.min.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/fonts/Fonts.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/theme.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/default.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/owl.carousel.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/owl.theme.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/progress_bar.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/thumbail.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/newslist_tabs.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/jcarousel.vert.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/slidebars.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/slidebars-mobile.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/search.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/sb_menu_slidebars.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/style1.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/style2.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/menu.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/newslist_style1.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/content.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/breadcrumbs_simple.css" /> 
<!-----tin tuc----->
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/newslist_grid.css" /> 
 <?php if ($this->_tpl_vars['checkTintuc'] == 1): ?>
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/product.css" />
<?php endif; ?>  
<?php if ($this->_tpl_vars['checkProductDt'] == 1): ?>
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/product.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/magiczoomplus.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/jcarousel-ct-product.css" />
<?php endif; ?> 
<?php if ($this->_tpl_vars['checkUser'] == 1): ?>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/users_info.css" />
<?php endif;  if ($this->_tpl_vars['checkTragop'] == 1): ?>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/instalment.css" />
<?php endif; ?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/products_filter_default.css" />  
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/manufactory.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/responsive.css" />

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>


<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/jsapi.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/script.js"></script>

<!--[if lte IE 7]>
    <link href="css/ie7.css" media="screen" type="text/css" rel="stylesheet" />
<![endif]--> <!--[if lte IE 8]>
    <link href="css/ie8.css" media="screen" type="text/css" rel="stylesheet" />
<![endif]-->
<?php $this->assign('name', "name_".($this->_tpl_vars['lang']));  $this->assign('title', "title_".($this->_tpl_vars['lang']));  $this->assign('short', "short_".($this->_tpl_vars['lang']));  $this->assign('content', "content_".($this->_tpl_vars['lang']));  $this->assign('price', "price_".($this->_tpl_vars['lang']));  $this->assign('promotion', "promotion_".($this->_tpl_vars['lang'])); ?>
<meta property="fb:admins" content="100003956391242">
<meta property="fb:app_id" content="862495993761330" />
<meta property="og:url" content="<?php echo $this->_tpl_vars['path_url'];  echo $_SERVER['REQUEST_URI']; ?>
"/>

<!-- Google Code dành cho Thẻ tiếp thị lại -->
<!--------------------------------------------------
Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 944853914;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/944853914/?guid=ON&amp;script=0"/>
</div>
</noscript>
</head>
<body id="myAnchor">
<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=862495993761330&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="slidebars">
<style type="text/css">
  .formLogin #loginBox li a.btnlogin.nthdd{
    width: 105px !important;
  }
</style>
 <!---menu mobile-->
    <nav class="navbar navbar-default  sb-slide" role="navigation">
    	<div class="container">
            <div class="select-box">
                <select onchange="setCity(this.value)">	
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['cityHome']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                     <option <?php if ($this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['id'] == $_SESSION['showCity']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['name']; ?>
</option>
                    <?php endfor; endif; ?>
                </select>
            </div>	
        </div>
        <!-- Left menu -->
        <div class="sb-toggle-left navbar-left">
            <div class="navicon-line"></div>
            <div class="navicon-line"></div>
            <div class="navicon-line"></div>
        </div>
        <!-- Right menu -->
        <div class="sb-toggle-right navbar-right">
            <div class="navicon-line"></div>
            <div class="navicon-line"></div>
            <div class="navicon-line"></div>
        </div>
        <div class="container">
            <!-- Logo -->
            <div id="logo" class="navbar-left">
                <a href="<?php echo $this->_tpl_vars['path_url']; ?>
" title="Hệ Thống Bán Lẻ Mỹ Phẩm Thái Lan Uy Tín Toàn Quốc" class='logo' rel='home'>
                    <img src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon/logo.png" alt="Hệ Thống Bán Lẻ Mỹ Phẩm Thái Lan Uy Tín Toàn Quốc"  height="50" />
                </a>
            </div><!-- /#logo -->
            <div id="search" class="search">
                <div id="search_form" >
                <form onsubmit="return check_searchtext1()" >
                    <input type="text" autocomplete="off"  placeholder='Tìm kiếm sản phẩm'  name="keyword" class="keyword" id="inputString1" onkeyup="lookup1(this.value);" />
                    <input type="submit" value="" class ='searchbt button-search' />
                </form>
                <div id="suggestions1"></div>
                 <script type="text/javascript">
					function check_searchtext1(){
						var searchtext = $("#inputString1").val();
						if(searchtext==''){
							alert('Vui lòng nhập từ cân tìm kiếm.');
							return false;
						}
						else{
							jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/thanhvien.php',{type:'searchSp',searchtext:searchtext},function(data) {
								 var obj = jQuery.parseJSON(data);
								 var url = obj.distination;
								 jQuery(location).attr('href',url);
							});
							return false;
						}
					}
				</script>
            </div>
        </div>
        <div class="clear" style="margin-bottom:8px;"></div>
    </nav>
	<!---menu mobile left-->
    <div class="sb-slidebar sb-left">
   		<ul class="sb-menu sb_menu_slidebars">
            <li id="sb-item_top">
                <a href="<?php echo $this->_tpl_vars['path_url']; ?>
" title="Hệ Thống Bán Lẻ Mỹ Phẩm Thái Lan Uy Tín Toàn Quốc" class='logo'>
                    <img src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon/logo.png" alt="Hệ Thống Bán Lẻ Mỹ Phẩm Thái Lan Uy Tín Toàn Quốc"  />
                </a>
            </li>            
            <?php echo $this->_tpl_vars['ListMenuLeft']; ?>
	                                                                               
            
         </ul>   
    </div><!--sb-right -->
	<div class="sb-slidebar sb-right">
		<div class="th-sb sb-slogan">
			<span><?php echo $this->_tpl_vars['khachhanglathuongde'][$this->_tpl_vars['name']]; ?>
</span>
		</div>
		<div class="th-sb sb-hotline">
			<?php echo $this->_tpl_vars['hotline']; ?>

		</div>
		<div class="sb-menu ">
			<div class='mainmenu mainmenu-style1'>
    			<ul class="clearfix">
                        <li class="menu-item">
                             <img src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon/cart.png"><span id="cartCount1"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'countCart')), $this); ?>
</span></a> 
                   
                            <div class="hover_menu" id="menuCart1">
                                <ul class="list_hotline">
                                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getCart')), $this); ?>

                                </ul>
                            </div>
                        </li>
                    <?php if ($_SESSION['VIETANHMOBILE_MEMBER_ID'] != ''): ?>

                    	<li class="menu-item">
                          <a href="#" title="Thông tin tài khoản"><img style="width:15px;margin-right:6px;" src="<?php echo $_SESSION['VIETANHMOBILE_MEMBER_IMG']; ?>
" title="<?php echo $_SESSION['VIETANHMOBILE_MEMBER_NAME']; ?>
" style="margin-right:10px;"><?php echo $_SESSION['VIETANHMOBILE_MEMBER_NAME']; ?>
</a> <a href="#" onclick="logout()" style="color:#c0c5be;margin-left:10px;" > <span> <i class="fa fa-sign-out" aria-hidden="true"></i></span>  Đăng xuất
                           </a> 
                        </li>
                    <?php else: ?>
                    	<li class="menu-item">
                    		<a href="javascript:void(0);" style="font-weight:bold;font-size:16px;margin-left:20px;" onmouseenter="hover_out(this)">Đăng nhập<span class="arrow_down"></span></a> 
                            <div class="hover_menu" style="left:0;top:0;">
                               <ul class="list_hotline" style="left:0;right:0;width:100%;top:0;">
                                     <li>
                                        <div id="formLoginDetail1" class="formLoginDetail">                
                                        <br/>
                                            <span class="fb-login-button"  scope="public_profile, email" data-max-rows="1" data-size="medium" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false" style="width: 100% !important; " onlogin="checkLoginState();"></span><br/>
                                            <div class="login_google" id="link_loginG1">
                                                <a href="#" style="color:#fff" id=""> <span> <i class="fa fa-google-plus" aria-hidden="true"></i></span> Tiếp tục với Google
                                                </a>
                                            </div>
                                        </div>   
                                    </li>                             	
                               </ul>
                            </div> 
                        </li>
                    <?php endif; ?>
        		</ul>
    		</div>
            <div class="col-lg-6 col-md-6 col-sm-6" style="width:100%">
            	<?php echo $this->_tpl_vars['khuvucFooter'][$this->_tpl_vars['content']]; ?>

           </div>
		</div>
	</div>
<!--End menu mobile-->
</div>
<!-------------------scroll_fixed------------------------>   
<header class="index_header scroll_fixed">
	<div class="header_menu">
    	<div class="ContainerHeader">
            <div >
                <ul class="MenuTopLeft">
                	<li style="padding-top:5px;">
                    	<a href="<?php echo $this->_tpl_vars['path_url']; ?>
" title="Trang chủ"> <img alt="trang chủ" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/hometop.png" style="width:20px;height:20px;" /> Trang chủ</a>
                    </li> 
                    
                    
                </ul>
            </div>
        	<div class="collg2 Fr">
            	 <ul class="menu_top">
                 	<li>
                        <select onchange="setCity(this.value)" style="width:100px;">	
                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['cityHome']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                             <option <?php if ($this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['id'] == $_SESSION['showCity']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['name']; ?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                    </li>
                <!--<li>
                        <a href="javascript:void(0)"><?php echo $this->_tpl_vars['homeHeThongCuaHang'][$this->_tpl_vars['name']]; ?>
<span class="arrow_down"></span></a>
                        <div class="hover_menu">
                         	<?php echo $this->_tpl_vars['homeHeThongCuaHang'][$this->_tpl_vars['content']]; ?>
 
                        </div>
                    </li>-->
                    
                    <li>
                    	<?php if ($_SESSION['VIETANHMOBILE_MEMBER_ID'] != ''): ?>
                             <a href="#" title="Thông tin tài khoản"><img style="width:15px;margin-right:6px;" src="<?php echo $_SESSION['VIETANHMOBILE_MEMBER_IMG']; ?>
" title="<?php echo $_SESSION['VIETANHMOBILE_MEMBER_NAME']; ?>
" style="margin-right:10px;"><?php echo $_SESSION['VIETANHMOBILE_MEMBER_NAME']; ?>
<span class="arrow_down"></span></a>
                            <div class="hover_menu">
                               <ul class="list_hotline">
                                <li>
                                    <a href="#" onclick="logout()" style="color:#c0c5be" > <span> <i class="fa fa-sign-out" aria-hidden="true"></i></span>  Đăng xuất
                                    </a>
                                </li>	
                                </ul>
                            </div>
                        <?php else: ?>
                        
                        	<a href="javascript:void(0);">Đăng nhập<span class="arrow_down"></span></a> 
                            <div class="hover_menu">
                               <ul class="list_hotline">
                                     <li>
                                        <div id="formLoginDetail" class="formLoginDetail">                
                                        <br/>
                                            <span class="fb-login-button"  scope="public_profile, email" data-max-rows="1" data-size="medium" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false" style="width: 100% !important; " onlogin="checkLoginState();"></span><br/>
                                            <div class="login_google" id="link_loginG">
                                                <a href="#" style="color:#fff" id=""> <span> <i class="fa fa-google-plus" aria-hidden="true"></i></span> Tiếp tục với Google
                                                </a>
                                            </div>
                                        </div>   
                                    </li>                             	
                               </ul>
                            </div>
                        <?php endif; ?> 
                    </li>
                    <li style="margin-right:20px;">
                   <img src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon/cart.png"><span id="cartCount"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'countCart')), $this); ?>
</span></a> 
                   
                     <div class="hover_menu" id="menuCart">
                        <ul class="list_hotline">
                           	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getCart')), $this); ?>

                        </ul>
                    </div>
                   
                    </li>
                    
            	</ul>
        	</div>
    	</div>
	</div>
   <!--EndDonut--> 
    <div class="header_main">
        <div class="ContainerHeader">
            <nav class="chose_cate">
                <a href="<?php echo $this->_tpl_vars['path_url']; ?>
" title="Hệ Thống Mỹ Phẩm Thái Lan Uy Tín Toàn Quốc"><!--<div class="MenuLineNgang">&nbsp;</div>--><img style="height:49px;" class="logo-img" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon/logo.png" alt="vietanhmobile"></a>
                <div class="menu_cate menu_ver_inside ">
				<!-- MainMenu-->
                <ul class="menu_ver">
                    <?php echo $this->_tpl_vars['ListMenu']; ?>

                </ul>
                </div>
            </nav>
            
            <div class="logan">
            	<strong><?php echo $this->_tpl_vars['khachhanglathuongde'][$this->_tpl_vars['name']]; ?>
</strong> 
            </div>
            <div class="menu_right_home">
               <div id="search" class="search">
                    <div  id="search_form" >
                        <form onsubmit="return check_searchtext()">
                            <input autocomplete="off" type="text" placeholder='Tìm kiếm sản phẩm' name="keyword" class="keyword" id="inputString" onkeyup="lookup(this.value);"  />
                            <input type="submit" value="" class ='searchbt button-search' />
                        </form>
                        <div id="suggestions"></div>
                        <script type="text/javascript">
							function check_searchtext(){
								var searchtext = $("#inputString").val();
								if(searchtext==''){
									alert('Vui lòng nhập từ cân tìm kiếm.');
									return false;
								}
								else{
									jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/thanhvien.php',{type:'searchSp',searchtext:searchtext},function(data) {
										 var obj = jQuery.parseJSON(data);
										 var url = obj.distination;
										 jQuery(location).attr('href',url);
									});
									return false;
								}
							}
						</script>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</header>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '2367971546801811',
      cookie     : true,
      xfbml      : true,
      xfbml      : true, 
      version    : 'v3.0'
    });
    FB.AppEvents.logPageView();  
      FB.getLoginStatus(function (response) {
          statusChangeCallback(response);
      });
  };
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/vi_VN/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

    function statusChangeCallback(response) {
        if (response.status === 'connected') {
            ShowWelcome();
        }
        else if (response.status === 'not_authorized') {
         //   ShowLoginButton();
        }
        else {
         //   ShowLoginButton();
        }
    }
 function checkLoginState() {location.href= "<?php echo $this->_tpl_vars['path_url']; ?>
"}
 function RequestLoginFB() {
  window.location = 'http://graph.facebook.com/oauth/authorize?' 
+ 'client_id=290150761562102&scopes=' + 
'public_profile,email,user_likes&redirect_uri=https://xomnhau.vn';
        }
 
    function ShowWelcome() { 
        
          
           FB.api('/me', {fields: 'name, email, birthday, picture, link, gender'}, function(response) {
                id   = response.id;
                name = response.name;
                email = response.email;
                img  = 'https://graph.facebook.com/'+id+'/picture?type=large&width=50&height=50';
                rev  = 'id='+id+'&name='+name+'&img='+img+'&email='+email;
              <?php if ($_SESSION['VIETANHMOBILE_MEMBER_ID'] == ''): ?>
               jQuery.ajax({
                    url:'<?php echo $this->_tpl_vars['path_url']; ?>
/loading/login_fb.php',
                    type: 'POST',
                    data: rev,
                    dataType: "html",
                    success: function(data){
                      //  if(link) location.href= link; else location.href= "<?php echo '<?='; ?>
HOME_URL_LANG<?php echo '?>'; ?>
";
                       location.reload(false);  
                        
                    }
                });
            <?php endif; ?>
                return false;
            });
        }
        
        function logout(){
          FB.getLoginStatus(function(response) {
          console.log(response);
          if (response.status === 'connected') {
            var uid = response.authResponse.userID;
            var accessToken = response.authResponse.accessToken;
            FB.api('/'+uid+'/permissions', 'delete', function(response){});
          } else if (response.status === 'not_authorized') {
          } else {
          }
         });
         jQuery.ajax({
                    url:'<?php echo $this->_tpl_vars['path_url']; ?>
/loading/logout.php',
                    type: 'POST',
                    dataType: "html",
                    dataType: "html",
                    success: function(data){
                      location.reload(false);                        
                    }
                });
        }
    function hover_out(a) {
        $(a).siblings('.hover_menu').toggle();
    }
</script>
<div id="sb-site" class="offcanvas-pusher">