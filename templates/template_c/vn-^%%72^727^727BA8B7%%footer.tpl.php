<?php /* Smarty version 2.6.6, created on 2019-04-13 16:10:19
         compiled from ./footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'GetLinkCat', './footer.tpl', 53, false),)), $this); ?>
<!--Slide Script-->
<div class="SlideFooter">
    <div class="container">
    	 <link rel="stylesheet" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/jquery.bxslider.css" type="text/css" />
		<script src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/jquery.bxslider.js"></script>
        <script type="text/javascript">
			$(document).ready(function(){
			  $('.slider4').bxSlider({
				slideWidth: 276,
				minSlides: 2,
				maxSlides: 4,
				moveSlides: 1,
				slideMargin: 10
			  });
			});
			</script>
			
			<div class="slider4">
            	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['partnerFooterSlider']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                     <div class="slide">
                        <a <?php if ($this->_tpl_vars['partnerFooterSlider'][$this->_sections['i']['index']]['link'] != ''): ?>href="<?php echo $this->_tpl_vars['partnerFooterSlider'][$this->_sections['i']['index']]['link']; ?>
" <?php endif; ?> title="<?php echo $this->_tpl_vars['partnerFooterSlider'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
">
                            <img src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['partnerFooterSlider'][$this->_sections['i']['index']]['img_vn']; ?>
" title="<?php echo $this->_tpl_vars['partnerFooterSlider'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
" />
                        </a>
                    </div>
                <?php endfor; endif; ?>	
			 
			</div>
    </div>
   
</div>
<!--End Slide Script-->
    
<div id="footer">
	<div class="SubFooter1">
    	<div class="container">
         	<div class="footer_defaut hidden-xs">
            	<div class="row">
					<div class="col-lg-5 col-md-12" style=" width:100%">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6" style="width:23%">
								<p>&#8203;<img style="line-height: 1.6em; width: 165px; height: 104px;" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/hinh/visa.png"></p>
								<p><strong>THANH TOÁN ĐƠN GIẢN VỚI</strong></p>
								<p>
                                	<img style="width: 50px; height: 32px;" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/hinh/visa_footer.png"> &nbsp;
									<img style="width: 50px; height: 32px;" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/hinh/pp.png"> &nbsp;
                                    <img style="width: 50px; height: 32px;" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/hinh/master.png">
                                </p>

								<p style="margin:5px 0;"><strong>Thailand Cosmetics</strong></p>

								<p>
                                	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['HoiDapFooter']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                        <a class="menu-name" href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'GetLinkCat', 'cat' => $this->_tpl_vars['HoiDapFooter'][$this->_sections['i']['index']], 'lang' => $this->_tpl_vars['lang'])), $this); ?>
" title="<?php echo $this->_tpl_vars['homeHoiDap'][$this->_sections['i']['index']]['title_link']; ?>
"><span style="color:#0066cc;"><?php echo $this->_tpl_vars['HoiDapFooter'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
</span></a><br>
                                    <?php endfor; endif; ?>
									
                               	</p>
                                
                                <p style="margin:15px 0 7px 0; text-transform:uppercase"><strong>Kết Nối Cùng Thailand Cosmetics</strong></p>
                                <ul class="list_connect">
                                    <li><a href="https://www.facebook.com/HangXachTayThaiLan.HCM/" title="facebook" target="_blank" class="face"></a></li>
                                    <li><a href="javascript:void(0)" title="print" target="_blank" class="print"></a></li>
                                    <li><a href="https://youtube.com/" title="youtube" target="_blank" class="youtube"></a></li>
                                    <li><a href="https://google.com/" target="_blank" title="google" class="google"></a></li>
                                </ul>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6" style="width:55%">
                                <div style="margin-bottom:7px;"><strong><?php echo $this->_tpl_vars['danhmucsanphmFooter'][$this->_tpl_vars['name']]; ?>
</strong></div>
								<?php echo $this->_tpl_vars['danhmucsanphmFooter'][$this->_tpl_vars['content']]; ?>

								<div class="clear"><br /></div>
                                <?php echo $this->_tpl_vars['khuvucFooter'][$this->_tpl_vars['content']]; ?>

                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6" style="width:22%">
                            
                            	<?php if ($_SESSION['showCity'] == 1): ?>
									<script language="javascript" type="text/javascript">(function(d, s, id) {
                                      var js, fjs = d.getElementsByTagName(s)[0];
                                      if (d.getElementById(id)) return;
                                      js = d.createElement(s); js.id = id;
                                      js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                                      fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                    <div class="fb-like-box" data-href="https://www.facebook.com/HangXachTayThaiLan.HCM/" data-height="250" data-show-faces="true" data-stream="false" data-header="true">
                                <?php else: ?>
                                	<script language="javascript" type="text/javascript">(function(d, s, id) {
                                      var js, fjs = d.getElementsByTagName(s)[0];
                                      if (d.getElementById(id)) return;
                                      js = d.createElement(s); js.id = id;
                                      js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                                      fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                    <div class="fb-like-box" data-href="https://www.facebook.com/HangXachTayThaiLan.HCM/" data-height="250" data-show-faces="true" data-stream="false" data-header="true">
                                <?php endif; ?>
								</div>
                                
                                <a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=2163" rel="nofollow" target="_blank">
                                	<img style="margin:10px 20px 0 0;" align="right" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/congthuong.png" alt="Sở Công Thương">
                                </a>
							</div>
						</div>
                            
                            
						</div>
					</div>

            	</div>
                
                <!--Footer mobile-->    
                <div class="footer_molbile hidden-lg  hidden-sm hidden-md">
                    <div style="padding:10px 0;">
                    
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['partnerFooter']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                           
                            <div class="PartnerImg">
                               <a <?php if ($this->_tpl_vars['partnerFooter'][$this->_sections['i']['index']]['link'] != ''): ?>href="<?php echo $this->_tpl_vars['partnerFooter'][$this->_sections['i']['index']]['link']; ?>
" <?php endif; ?> title="<?php echo $this->_tpl_vars['partnerFooter'][$this->_sections['i']['index']]['title_link']; ?>
">
                                    <img src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['partnerFooter'][$this->_sections['i']['index']]['img_vn']; ?>
" alt="<?php echo $this->_tpl_vars['partnerFooter'][$this->_sections['i']['index']]['alt_img']; ?>
" class="img-responsive" title="<?php echo $this->_tpl_vars['partnerFooter'][$this->_sections['i']['index']]['title_img']; ?>
" />
                                </a>
                            </div>
                        <?php endfor; endif; ?>
                        
                        <div style="clear:both;height:1px">&nbsp;</div>
                    </div>
                    
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['HoiDapFooter']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <p>
                            <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'GetLinkCat', 'cat' => $this->_tpl_vars['HoiDapFooter'][$this->_sections['i']['index']], 'lang' => $this->_tpl_vars['lang'])), $this); ?>
" title="<?php echo $this->_tpl_vars['homeHoiDap'][$this->_sections['i']['index']]['title_link']; ?>
"><span style="color:#0066cc;"><?php echo $this->_tpl_vars['HoiDapFooter'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
</span></a>
                        </p>
                        <hr>
                    <?php endfor; endif; ?>
                    <div class="clear"> <br /></div>
                    <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left:0; margin-bottom:7px; width:100%"><strong><?php echo $this->_tpl_vars['danhmucsanphmFooter'][$this->_tpl_vars['name']]; ?>
</strong></div>
						<?php echo $this->_tpl_vars['danhmucsanphmFooter'][$this->_tpl_vars['content']]; ?>

                    
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <?php echo $this->_tpl_vars['khuvucFooter'][$this->_tpl_vars['content']]; ?>

                    </div>
                    
                    
                    <div class="clear"> <br /></div>    
                   <?php echo $this->_tpl_vars['addressFooter'][$this->_tpl_vars['content']]; ?>

                    <table cellspacing="1" cellpadding="1" border="0" style="width: 100%;">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="<?php echo $this->_tpl_vars['path_url']; ?>
" title="Về trang chủ">
                                        <span style="color:#ed1b24;">
                                            <span style="line-height: 20.7999992370605px;">
                                                <img style="width: 20px; height: 20px;" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/home.png" alt="trang chủ">Về trang chủ
                                            </span>
                                        </span>
                                    </a>
                                </td>
                                <td style="text-align: right;">
                                    <a href="#" title="Về đầu trang">
                                        <span style="color:#ed1b24;">
                                            <img style="width: 17px; height: 8px;" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/arrow_bottom.png" alt="">&nbsp;Về đầu trang
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!--End Footer mobile--> 
            </div>
        </div>
    </div>
    
	<div class="SubFooter2">
    	<div class="container">
         	<div class="footer_defaut hidden-xs">
            	<div class="row">
                	<address class="about_footer"><br>
                        <span style="font-family:arial,helvetica,sans-serif;">
                            <?php echo $this->_tpl_vars['addressFooter'][$this->_tpl_vars['content']]; ?>

                        </span>
                    </address>
                </div>
            </div>
         </div>
    </div>    
    
</div> 
<!-- end.container -->

<div class="modal fade" id="loginModal">
	<div class="modal-body">
          <div class="well">
                <button type="button" class="close" data-dismiss="modal">✕</button>	
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#login" data-toggle="tab">Đăng nhập tài khoản</a></li>
                    <li><a href="#create" data-toggle="tab">Đăng ký mới</a></li>
                </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="login">
                  <form class="" action="#" method="post" name="login_form">
                    <fieldset>
                        <!-- Username -->
                        <div class="controls">
                          <input type="text" id="email_login" name="email_login" placeholder="Email của bạn (*)" class="input-xlarge">
                        </div>
                        <div class="controls">
                          <input type="password" id="password_login" name="password_login" placeholder="Nhập mật khẩu (*)" class="input-xlarge">
                        </div>
                        <!-- Button -->
                        <div class="controls">
                          <a id="submitbt_login" href="javascript: void(0)" onclick="return login();" class="btn btn-success">Đăng nhập</a>
                        </div>
                         <div class="label_error" id="errromsglogin"></div>
                    </fieldset>
                     
                  </form>                
                </div>
                <div class="tab-pane fade" id="create">
                    <form  name="register_form" class="register_form" method="post">
                    	<div class="controls">
                            <input type="text" id="username_register" name="username_register" class="input-xlarge"  placeholder="Họ tên của bạn (*)"> 
                        </div>
                        <div class="controls">
                            <input type="text" id="email_register" name="email_register" class="input-xlarge" placeholder="Email của bạn (*)">
                        </div>
                        <div class="controls">
                            <input type=password id="password_register" name="password_register" class="input-xlarge" placeholder="Nhập mật khẩu (*)">
                        </div>	
                       
                        <div class="controls">
                          <a id="submitbt_register" href="javascript: void(0)" onclick="return registerHome();" class="btn btn-primary">Đăng ký thành viên</a>
                        </div>
                        <div class="label_error" id="errromsgregister"></div>
                        <script language="javascript" type="text/javascript">
							function signout(){
								 $.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/thanhvien.php',{type:'signout'},function(data) {
									 document.location.href= '<?php echo $this->_tpl_vars['path_url']; ?>
'
								});
							
							}
							function login(){
								$("#errromsglogin").hide();
								var email_login = $('#email_login').val();
								var password_login = $('#password_login').val();
								
								if((email_login=="") || (password_login=="")){
									$("#errromsglogin").html('Vui lòng nhập đầy đủ thông tin, dấu (*) là bắt buộc nhập.');
									$("#errromsglogin").show(800);
									return false;
								}
								else{
									jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/thanhvien.php',{
										type: 'login',
										email:email_login,
										password:password_login			
									},function(data) {
									 var obj = jQuery.parseJSON(data);
										if(obj.status == 'success'){
											alert('Bạn đã đăng nhập thành công.');
											//location.reload();
											$(location).attr('href','<?php echo $this->_tpl_vars['path_url']; ?>
/thanh-vien/thong-tin-tai-khoan/'); 
										}
										else{
											$("#errromsglogin").html(obj.errors);
											$("#errromsglogin").show(800);	
										}
									});
									return false;
								}
							}
							
							function registerHome(){
								$("#errromsgregister").hide();
								var username_register = $('#username_register').val();
								var email_register = $('#email_register').val();
								var password_register = $('#password_register').val();
								var r = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
								if((username_register=="") || (email_register=="") || (password_register=="")){
									$("#errromsgregister").html('Vui lòng nhập đầy đủ thông tin, dấu (*) là bắt buộc nhập.');
									$("#errromsgregister").show(800);
									return false;
								}
								else if(r.test(email_register)==false){
									$("#errromsgregister").html('Email không đúng định dạng.');
									$("#errromsgregister").show(800);
									return false;
								}
								else{
									jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/thanhvien.php',{
										type: 'register',
										name:username_register,
										email:email_register,
										password:password_register				
									},function(data) {
									 var obj = jQuery.parseJSON(data);
										if(obj.status == 'success'){
											alert('Bạn đã đăng ký thành viên thành công.');
											//location.reload();
											$(location).attr('href','<?php echo $this->_tpl_vars['path_url']; ?>
/thanh-vien/thong-tin-tai-khoan/'); 
										}
										else{
											$("#errromsgregister").html(obj.errors);
											$("#errromsgregister").show(800);	
										}
									});
									return false;
								}
							}
						</script>
                    </form>
                </div>
              </div>
          </div>
    </div>
</div>
  
<div class="modal fade" id="modal_city">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span></span></h4>
            </div>
            
            <div class="modal-body">
                <div class="welcome-city"><?php echo $this->_tpl_vars['popupHomeHome'][$this->_tpl_vars['name']]; ?>
</div>
                <div class="popupmiddle">
                    <div class="pupzbutton">
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
                        <a onclick="setCity(<?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['id']; ?>
)" class="button"><span><?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['name']; ?>
</span></a>
                        <?php endfor; endif; ?>
                        
                    </div>
                    <div class="puzinfo"><?php echo $this->_tpl_vars['popupHome'][$this->_tpl_vars['title']]; ?>
</div>
                </div>					
            </div>
                
            <div class="banners  banners-default block_inner block_banner_banner">
            	<a title="<?php echo $this->_tpl_vars['popupHomeHome'][$this->_tpl_vars['name']]; ?>
" href="<?php echo $this->_tpl_vars['popupHome']['link']; ?>
" onclick="createCookie('showCity',1,7)">
                	<img src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['popupHome']['img_vn']; ?>
" alt="<?php echo $this->_tpl_vars['popupHomeHome'][$this->_tpl_vars['name']]; ?>
" class="img-old img-responsive">
                </a>              
    			<div class="clear"></div>     	
			</div>
			<div class="clear"></div>     	  
        </div>
     </div>
</div>

<div id="loadingAjax"><div></div></div>
    <script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/bootstrap.js"></script>
    
    <script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/owl.carousel.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/progress_bar.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/thumbail.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/masonry.pkgd.min.js"></script>
 
 <?php if ($this->_tpl_vars['checkHome'] == 1): ?>   
    <script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/jquery.jcarousel.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/jcarousel.vert.js"></script>
 <?php endif; ?>  
 	<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/slidebars.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/slidebars1.js"></script>  
   
   <!---Ct sản phẩm--->
   <?php if ($this->_tpl_vars['checkProductDt'] == 1): ?>
    <script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/jquery.jcarousel.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/jcarousel-product.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/magiczoomplus.min.js"></script>
    <?php endif; ?>
 <!---End Ct sản phẩm--->

<script type="text/javascript">
    function viewpg(p,cid,type,url,path_url,idd,num_rows_page,strPrice){
    	$("#loadingAjax").show();
    	//alert(price);
    	 $.post(path_url+'/loading/getPage.php',{page:p,cid:cid, type:type,url:url,idd:idd,num_rows_page:num_rows_page,strPrice:strPrice},function(data) {
    		 var obj = jQuery.parseJSON(data);
    		  $('#view').append(obj.view);
    		  $('#showPaging').html(obj.Pagelink);
    		  $("#loadingAjax").hide();
    	});
    }

    function setCity(city){
    	createCookie('showCity',city,1)
    	location.reload();
    }

    <?php if ($_COOKIE['showCity'] == 0): ?>
    $(document).ready(function(){
    	$('#modal_city').modal(
    		{
    		  backdrop: 'static',
    		  keyboard: false
    		}
    	)     
    });
    <?php endif; ?>
</script>

<!--Chat facebook-->
<span id="chatFacebook">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
	
    <script type="text/javascript">
		$(document).ready(function(){
		 $('.online-support').hide();
		  $('.support-icon-right h3').click(function(e){
			 $('#displaynone').addClass("displaynone");										 
			e.stopPropagation();
			$('.online-support').slideToggle();
		  });
		   $('.support-icon-mobile').click(function(e){
													
			e.stopPropagation();
			$('#displaynone').removeClass("displaynone");
			$('.online-support').slideToggle();
		  });
		  $('.online-support').click(function(e){
			e.stopPropagation();
		  });
		  $(document).click(function(){	
			 $('#displaynone').addClass("displaynone");
			 $('.online-support').slideUp();
		  });
		});
	</script>
    <div class="support-icon-right">
        <h3 id="displaynone" class="displaynone"><i class="fa fa-facebook"></i> Hổ Trợ Qua Facebook</h3>
        <div class="online-support">
        	<div class="fb-page" data-width="250" data-height="300" data-href="<?php if ($_SESSION['showCity'] == 1): ?>https://www.facebook.com/HangXachTayThaiLan.HCM/<?php else: ?> https://www.facebook.com/HangXachTayThaiLan.HCM/ <?php endif; ?>" data-tabs="messages" data-small-header="true" data-hide-cover="false" data-show-facepile="true" data-adapt-container-width="true"></div>
        </div>
    </div>
</span>
<!--End Chat facebook-->
<a class="chat-consultant" title="0901793969" href="tel:0901793969"><img src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/ic-consultant.png" alt="0901793969" title="0901793969"><span></span></a>
<!--
<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
<script type="text/javascript">
/*Add class when scroll down*/
$(window).scroll(function(event){
  	var scroll = $(window).scrollTop();
    if (scroll >= 150) {
        $(".go-top").addClass("show");
    } else {
        $(".go-top").removeClass("show");
    }
});

/*Animation anchor
$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 1000);
});
*/
</script>
-->
<!-- chat subiz
<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",39204]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
-->

<!-- Google Code dành cho Thẻ tiếp thị -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 943599270;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/943599270/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<div class="modal fade" id="popup-maggiamgia">
    <div class="modal-dialog" style="max-width:500px; padding-top:12%;">
        <div class="modal-content">
            <div class="main-saleup">
            	<div class="img-left-saleup" style="background:url(<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['saleup']['img_thumb_vn']; ?>
)  no-repeat;"></div>
                <div class="img-top-saleup" style="background:url(<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['saleup']['img_vn']; ?>
) center 0 no-repeat;"></div>
            	<button type="button" class="close popup-saleup" onclick="return goSaleUp(2);" > </button>
                <input type="hidden" data-dismiss="modal" id="closesaleup" />
                <div class="title-saleup">
                	<?php $this->assign('titleSaleup', "title_".($this->_tpl_vars['flagnd'])); ?>
                    <?php echo $this->_tpl_vars['saleup'][$this->_tpl_vars['titleSaleup']]; ?>

                </div>
                <div class="content-saleup">
                	<?php $this->assign('descSaleup', "content_".($this->_tpl_vars['flagnd'])); ?>
                    <?php echo $this->_tpl_vars['saleup'][$this->_tpl_vars['descSaleup']]; ?>

                </div>
                <form method="post">
                    <fieldset>
                        <!-- Username -->
                        <div class="controls">
                          <input type="text" class="input-xlarge snp-field-phone" placeholder="Tên của bạn (*)" name="namesaleup" id="namesaleup">
                        </div>
                        <div class="controls">
                          <input type="text" class="input-xlarge snp-field-name" placeholder="Điện thoại (*)" name="phonesaleup" id="phonesaleup">
                        </div>
                        <!-- Button -->
                        <div class="controls">
                          <a class="btn btn-success Fr" onclick="return goSaleUp(1);" href="javascript: void(0)" id="submitbt_login"> ĐĂNG KÝ NHẬN </a>
                        </div>
                        <div class="clear"></div>
                         <div id="errromsgsaleup" class="label_error" style="display:none; text-align:center; margin-top:5px;"></div>
                    </fieldset>
                     
                </form>
                <div class="footer-saleup snp-privacy">
                    Thông tin của Quý Khách sẽ được bảo mật tuyệt đối.
                </div>
            </div>
			<div class="clear"></div>     	  
        </div>
     </div>
</div>

<div id="support">
	<ul>
    	<li id="quick_contacts" class="min supportright">
            <i class="fa fa-comments font24"></i>
            <span>Góp ý</span>
        </li>
        <li id="gotop">
            <i class="fa fa-level-up font24"></i>
            <span>Lên đầu</span>
        </li>
        <li class="support-icon-mobile">
            <i class="fa fa-facebook font24"></i>
            <span>Facebook</span>
        </li>
    </ul>    
<div>
<div id="support-right">
	<div class="small supportright" style="cursor:pointer;">
		<i class="fa fa-angle-double-right font24"></i>
    </div>
    <div class="panel">
        <div class="head_panel">
            <?php echo $this->_tpl_vars['gopykienRight'][$this->_tpl_vars['name']]; ?>

        </div>
        <div class="feedback">
            <?php echo $this->_tpl_vars['gopykienRight'][$this->_tpl_vars['content']]; ?>

        </div>
        <div class="feedback">
        	<form onsubmit="return subscribeEmail();" id="home-newsletter-form">
                <div class="control-email">
                    <input type="text" class="input-text required-entry validate-email newsletter_email" placeholder="Tên anh/ chị (*)" value="" id="txtSubscribeName" name="txtSubscribeName"/>
                    <input type="text" class="input-text required-entry validate-email newsletter_email" placeholder="Nhập số điện thoại(*)" value="" id="txtSubscribePhone" name="txtSubscribePhone">
                    <textarea class="input-text required-entry validate-email newsletter_email" placeholder="Nhập nội dung (*)" id="txtSubscribeMgs" name="txtSubscribeMgs"></textarea>
                </div>
                
                <div class="control-button" id="btn_dangkymail_men_hi">
                    <input type="button" class="btn_dangkymail_men nav-sprite" value=" Gửi " onclick="return subscribeEmail()">
                </div>
                <div class="newsletterError" id="newsletterError"></div>
            </form>
            <script type="text/javascript">
                function subscribeEmail(){
                    var txtSubscribeName = $('#txtSubscribeName').val();
                    var txtSubscribePhone = $('#txtSubscribePhone').val();
                    var txtSubscribeMgs = $('#txtSubscribeMgs').val(); 
                    var checkPhone = txtSubscribePhone.match(/^0/i); 
                    var rnewletter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    $('#newsletterError').show(200);
                    if (txtSubscribeName==""){
                        $('#newsletterError').html('Vui lòng nhập Tên anh/ chị');
                        return false;
                    } 
                    else if (txtSubscribePhone==""){
                        $('#newsletterError').html('Vui lòng nhập điện thoại.');
                        return false;
                    } 
                    else if(checkPhone!=0){
                        $('#newsletterError').html('Số điện thoại không đúng vd:0xxxxxxxx.');
                        return false;
                    }
                    else if(isNaN(txtSubscribePhone) == true){
                        $('#newsletterError').html('Số điện thoại không hợp lệ (vd:0909999999).');
                        return false;
                    }
                    else if(txtSubscribePhone.length < 10 || txtSubscribePhone.length>11){
                        $('#newsletterError').html('Số điện thoại phải là 10 hoặc 11 số.');
                        return false;
                    }
                    if (txtSubscribeMgs==""){
                        $('#newsletterError').html('Vui lòng nhập nội dung.');
                        return false;
                    } 
                    else{
						$('#btn_dangkymail_men_hi').hide();
                        $('#newsletterError').html('<img src="<?php echo $this->_tpl_vars['path_url']; ?>
/ajax-loader.gif">');
                        jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/thanhvien.php',{
                            type: 'ykhachhang',
                            txtSubscribeName:txtSubscribeName,
                            txtSubscribePhone:txtSubscribePhone,
                            txtSubscribeMgs:txtSubscribeMgs				
                        },function(data) {
                         var obj = jQuery.parseJSON(data);
                            if(obj.status == 'success'){
                                alert('Cám ơn bạn đã đóng góp ý kiến.');
                                location.reload();
                            }
                            else{
								$('#btn_dangkymail_men_hi').show();
                                alert('Lỗi gởi mail, bạn vui lòng quay lại sau.');
                            }
                        });
                    }
    
                }
            </script>
        </div>
    </div>   
</div>
<script>
	$(".supportright").click(function(){
		$("#support-right").animate({width:'toggle'},350);
		//$("#img1").toggle("slide", {direction:"left"}, 1000);
	});
	$('#gotop').click(function () {
		$('body,html').animate({scrollTop: 0}, 'slow');
	});
</script>

<script>
	<?php if (( $this->_tpl_vars['checkShowSaleup'] == 1 ) && ( $_COOKIE['saleup'] == '' ) && ( $_SESSION['saleupOne'] != 3 )): ?>	
		<?php if ($_SESSION['saleupOne'] == 2): ?>
			$(document).ready(function(){
				$('#popup-maggiamgia').modal(
					{
					  backdrop: 'static',
					  keyboard: true
					}
				)     
			});
		<?php else: ?>
			var count = 60;
			myCounter = setInterval(function () {
				count -= 1;
				if(count==0){
					$(document).ready(function(){
						$('#popup-maggiamgia').modal(
							{
							  backdrop: 'static',
							  keyboard: true
							}
						)     
					});
				}
				
			}, 1000);
		<?php endif; ?>
	<?php endif; ?>
	function goSaleUp(flash){ 
		if(flash==2){
			jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/thanhvien.php',{
					type: 'close-saleup'		
				},function(data) {
				 var obj = jQuery.parseJSON(data);
					if(obj.status == 'success'){
						//$('#closesaleup').trigger('click'); // dong popup
						location.reload();
					}
				});
				return false;
		}

		else{	
			$("#errromsgsaleup").hide();
			var namesaleup = $('#namesaleup').val();
			var phonesaleup = $('#phonesaleup').val();
			var phonesaleupLength = phonesaleup.length;
			var checkPhonesaleup = phonesaleup.match(/^0/i);
			if(namesaleup==""){
				$("#errromsgsaleup").html('Vui lòng họ và tên.');
				$("#errromsgsaleup").show(800);
				return false;
			}
			else if(phonesaleup==""){
				$("#errromsgsaleup").html('Vui lòng số điện thoại.');
				$("#errromsgsaleup").show(800);
				return false;
			}
			else if( (phonesaleup!="") && (checkPhonesaleup!=0)){
				$("#errromsgsaleup").html('Số điện thoại không đúng (vd:0xxxxxxxx)');
				$("#errromsgsaleup").show(800);
				return false;
			}
			else if ( (phonesaleup!="") && (isNaN(phonesaleup) == true)){
				$("#errromsgsaleup").html('Số điện thoại không hợp lệ (vd:0909999999)');
				$("#errromsgsaleup").show(800);
				return false;
			}
			else if(phonesaleupLength < 10 || phonesaleupLength>11){
				$("#errromsgsaleup").html('Số điện thoại phải là 10 hoặc 11 số');
				$("#errromsgsaleup").show(800);
				return false;
			}
			else{
				jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/thanhvien.php',{
					type: 'saleup',
					namesaleup:namesaleup,
					phonesaleup:phonesaleup			
				},function(data) {
				 var obj = jQuery.parseJSON(data);
					if(obj.status == 'success'){
						createCookie('saleup','saleup',31536000);
						location.reload();
						//$('#closesaleup').trigger('click');// dong popup
						//$(location).attr('href','<?php echo $this->_tpl_vars['path_url']; ?>
/thanh-vien/thong-tin-tai-khoan/'); 
					}
					else{
						$("#errromsglogin").html(obj.errors);
						$("#errromsglogin").show(800);	
					}
				});
				return false;
			}
		}
	}

    if ($('.original').length > 0){
        var orgElementPos = $('.original').offset().top;
        $(window).scroll(function () {
            if($(window).scrollTop() >= (orgElementPos)){
                $('.original').addClass("box_menu_fix");
            }
            else{
                $('.original').removeClass("box_menu_fix");
            }
        });
    }

function add_cart(val,id) {
  
    jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/add_cart.php',{
                quantity: val,
                id:id,	
    },function(data) {
        var obj = jQuery.parseJSON(data);
        if(obj.status == 'success'){
            jQuery('#cartCount').text(obj.number);
            jQuery('#menuCart .list_hotline').html(obj.html);
             jQuery('#cartCount1').text(obj.number);
            jQuery('#menuCart1 .list_hotline').html(obj.html);
        }
        else{
            alert('Một số vấn đề từ server nên ko thể thêm vào giỏ hàng được')
        }
    });
    return false;
}
function del_cart(id) {
   
    jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/del_cart.php',{
                
                id:id,	
    },function(data) {
        var obj = jQuery.parseJSON(data);
        if(obj.status == 'success'){
            jQuery('#cartCount').text(obj.number);
             jQuery('#menuCart .list_hotline').html(obj.html);
             jQuery('#cartCount1').text(obj.number);
             jQuery('#menuCart1 .list_hotline').html(obj.html);
        }
        else{
            alert('Một số vấn đề từ server nên ko thể xóa món hàng được')
        }
    });
}
function dell_all() {
    jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/del_all.php',function(data) {
        var obj = jQuery.parseJSON(data);
        if(obj.status == 'success'){
            jQuery('#cartCount').text(obj.number);
             jQuery('#menuCart .list_hotline').html('');
             jQuery('#cartCount1').text(obj.number);
             jQuery('#menuCart1 .list_hotline').html('');
        }
        else{
            alert('Một số vấn đề từ server nên ko thể xóa món hàng được')
        }
    });
}
$('body').on('click','#OrderButton',function(e){
    e.preventDefault();
    var link = $(this).attr('href');
    <?php if ($_SESSION['VIETANHMOBILE_MEMBER_ID'] != ''): ?>
    location.href= link;
    <?php else: ?>
    alert('Bạn phải đăng nhập trước khi thực hiện mua hàng')
     <?php endif; ?>
})
</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NR5HBH5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>