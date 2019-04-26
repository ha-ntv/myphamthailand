<?php /* Smarty version 2.6.6, created on 2016-03-19 09:34:26
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getNameWeb', 'header.tpl', 116, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content ="vn" />
<title>Phần Mền Quản Lý</title>
<meta name="robots" content="NOINDEX,NOFOLLOW"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/body.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/header.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/menu.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/navimenu.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/content.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/font-awesome.min.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/them.css" /> 
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/jquery.js"></script>
<script src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/script-menu.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/navimenu.js"></script>
<script type='text/javascript' src='<?php echo $this->_tpl_vars['path_url']; ?>
/js/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/jquery.autocomplete.css" />

<link type="text/css" href="<?php echo $this->_tpl_vars['path_url']; ?>
/calendar/themes/ui-lightness/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/calendar/ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/calendar/ui/ui.dialog.js"></script>
</head>
<body>
<div  class="mainWrap">
	<div class="Header">
    	<div class="TopHeader">
        	<div class="Logo">
            	<a href=""><img class="ImgReponsive" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/logo.png" /></a>
            </div>
            <div class="RightTop">
				<div class="ddsmoothmenu" id="smoothmenu1">
                    <ul>
                    	

                    	<li style="background:none;">
                            <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/" class="" style="color:#676565;background:none;">	
                                <i class="fa fa-bell-o"></i>
                                <strong id="countSapHetHang" style="color:#d64457; position:relative; top:-7px; left:-5px; font-size:13px;"></strong>
                            </a>
                        </li>
                       
                        
                    	<li>
                            <a href="#" class="">	
                                <strong><?php echo $_SESSION['admin_crmvietanhmobil_username']; ?>
</strong> <i class="fa fa-caret-down1"></i>
                            </a>
                            <ul>
                             <?php if ($_SESSION['admin_crmvietanhmobil_group'] == -1): ?>
                            	<li>
                                     <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/users/">
                                        <i class="fa fa-male"></i> Quản lý người dùng
                                     </a> 
                                </li>
                             <?php endif; ?>   
                                <li>
                                     <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/users/changes/">
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
										 $.post('<?php echo $this->_tpl_vars['path_url']; ?>
/ajax/member.php',{type:'signout'},function(data) {
											 location.reload();//document.location.href= '<?php echo $this->_tpl_vars['path_url']; ?>
'
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
                                <strong><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getNameWeb', 'id' => $_SESSION['admin_showCity'], 'table' => 'city', 'typename' => 'name')), $this); ?>
</strong> <i class="fa fa-map-marker"></i>
                            </a>
                            <?php if ($_SESSION['admin_crmvietanhmobil_group'] == -1): ?>
                                <ul>
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
                                        <li>
                                             <a href="javascript:void(0)" onclick="setSessionDiaDiem(<?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['id']; ?>
)">
                                                <i class="fa fa-wrench"></i> <?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['name']; ?>

                                             </a> 
                                        </li>
                                    <?php endfor; endif; ?>
                                    <script type="text/javascript">
                                        function setSessionDiaDiem(idcity){
									
                                             $.post('<?php echo $this->_tpl_vars['path_url']; ?>
/ajax/member.php',{idciy:idcity,type:'setSessionDiaDiem'},function(data) {
                                                 location.reload();//document.location.href= '<?php echo $this->_tpl_vars['path_url']; ?>
'
                                            });
											
                                        
                                        }
                                    </script>
                                    
                                </ul>
                         <?php endif; ?>
                        </li>

                    </ul>  
                </div>
            </div>
        </div>
        
    	<div class="Menu BgColor">
       		<div id='cssmenu'>
            	<ul>	
                	<li <?php echo $this->_tpl_vars['checkTongquan']; ?>
>
                    	<a href='<?php echo $this->_tpl_vars['path_url']; ?>
/'><i class="fa fa-eye"></i> Tổng quan</a>
                    </li>
                   	<li <?php echo $this->_tpl_vars['checkHanghoa']; ?>
><a href='#'><i class="fa fa-cube"></i> Hàng hóa</a>
                   		<ul>
                        	<li <?php echo $this->_tpl_vars['checkMaybaohanh']; ?>
><a href='<?php echo $this->_tpl_vars['path_url']; ?>
/serial/2/0/viewbaohanh/'><i class="fa fa-wrench"></i> Máy bảo hành</a></li>
                            <li <?php echo $this->_tpl_vars['checkNhapkho']; ?>
><a href='<?php echo $this->_tpl_vars['path_url']; ?>
/categories/2/'><i class="fa fa-check-square-o"></i> Thống kê kho</a></li>
                      	</ul>   
                   </li>
                   <li <?php echo $this->_tpl_vars['checkGiaoDich']; ?>
>
                   		<a><i class="fa fa-exchange"></i> Giao dịch</a>
                   		<ul>
                        	<li <?php echo $this->_tpl_vars['checkPhieuNhapHang']; ?>
><a href='<?php echo $this->_tpl_vars['path_url']; ?>
/phieu-nhap-hang/2/'><i class="fa fa-recycle"></i> Nhập hàng</a></li>
                            <li <?php echo $this->_tpl_vars['checkPhieuXuatHang']; ?>
><a href='<?php echo $this->_tpl_vars['path_url']; ?>
/phieu-xuat-hang/2/'><i class="fa fa-sign-in"></i> Phiếu xuất hàng</a></li>
                      	</ul>  	
                   </li>
                   <li <?php echo $this->_tpl_vars['checkDoitac']; ?>
 ><a href='<?php echo $this->_tpl_vars['path_url']; ?>
/nha-cung-cap/2/'><i class="fa fa-male"></i>Đối tác</a>
                   		<ul>
                        	<li <?php echo $this->_tpl_vars['checkKhachhang']; ?>
><a href='<?php echo $this->_tpl_vars['path_url']; ?>
/khach-hang/2/'><i class="fa fa-user"></i> Khách hàng</a></li>
                        	<li <?php echo $this->_tpl_vars['checkNhacungcap']; ?>
><a href='<?php echo $this->_tpl_vars['path_url']; ?>
/nha-cung-cap/2/'><i class="fa fa-undo"></i> Nhà cung cấp</a></li>
                            
                      	</ul>   
                   </li>
                   <li><a href='#'><i class="fa fa-usd"></i> Sổ quỹ</a></li>
                   <li><a href='#'><i class="fa fa-bar-chart"></i> Báo cáo</a></li>
                </ul>

            </div>
        </div>	
    </div>