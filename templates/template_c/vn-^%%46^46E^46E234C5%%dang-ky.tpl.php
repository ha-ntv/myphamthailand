<?php /* Smarty version 2.6.6, created on 2019-03-21 08:00:19
         compiled from member/dang-ky.tpl */ ?>
<!---Content-->
    <div class="breadcrumbs">
 		<div class="container">
 			<div class="row">
 				<div class="col-xs-12">		
                	<div class="breadcrumb">
                        <div class="breadcrumb flever_12">
                            <a title="Trang chủ" href="<?php echo $this->_tpl_vars['path_url']; ?>
/">Trang chủ</a>
                        </div>
                        <div class="breadcrumbs_sepa">&gt;</div>
                        
                        <div class="breadcrumb">
                            <span><?php echo $this->_tpl_vars['seo']['title']; ?>
</span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt20">
		<div class="row">
       		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">	  
                <div class="row">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "member-left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    
					<div class="users_info col-lg-9">
						<h1><span>Đăng ký thành viên</span></h1>
						<form name="dangnhap" >
                        	<div class="MemberAll">
                            	<div class="MemberName"> 
                                	<strong>Họ và tên của bạn</strong>&nbsp;<font color="red">*</font> 
                                </div>
                                <div class="MemberText">
                                	<input type="text" id="name" name="name" class="txt-input" />
                                </div>
                            </div>
                            
                            <div class="MemberAll">
                            	<div class="MemberName"> 
                                	<strong>Email của bạn</strong>&nbsp;<font color="red">*</font> 
                                </div>
                                <div class="MemberText">
                                	<input type="text" id="email" name="email" class="txt-input" />
                                </div>
                            </div>
                            
                             <div class="MemberAll">
                            	<div class="MemberName"> 
                                	<strong>Ngày sinh</strong>
                                </div>
                                <div class="MemberText">
                                    <div class="select-box pull-left">
                                        <select name="birth_day" id="birth_day">
                                            <option>Ngày</option>
                                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)1;
$this->_sections['i']['loop'] = is_array($_loop=32) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
                                                <option <?php if ($this->_tpl_vars['memberCar']['day'] == $this->_sections['i']['index']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_sections['i']['index']; ?>
"> <?php echo $this->_sections['i']['index']; ?>
 </option>
                                            <?php endfor; endif; ?>
                                        </select>
                                    </div>
                                    <div class="select-box pull-left">
                                        <select name="birth_month" id="birth_month">
                                            <option>Tháng</option>
                                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)1;
$this->_sections['i']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
                                                <option <?php if ($this->_tpl_vars['memberCar']['month'] == $this->_sections['i']['index']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_sections['i']['index']; ?>
"> <?php echo $this->_sections['i']['index']; ?>
 </option>
                                              <?php endfor; endif; ?>
                                        </select>
                                    </div>
                                    <div class="select-box pull-left">	
                                        <select name="birth_year" id="birth_year">
                                            <option>năm</option>
                                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)1950;
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['yearView']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
                                                <option <?php if ($this->_tpl_vars['memberCar']['year'] == $this->_sections['i']['index']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_sections['i']['index']; ?>
" > <?php echo $this->_sections['i']['index']; ?>
 </option>
                                              <?php endfor; endif; ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="MemberAll">
                            	<div class="MemberName"> 
                                	<strong>Mật khẩu</strong>&nbsp;<font color="red">*</font> 
                                </div>
                                <div class="MemberText">
                                	<input type="password" id="password" name="password" class="txt-input" />
                                </div>
                            </div>
                            
                             <div class="MemberAll">
                            	<div class="MemberName">&nbsp;</div>
                                <div class="MemberText">
                                	 <input type="button" value="Đăng ký" name="submit" onclick="return registerMenber();" class="button-submit-edit button">
                                    <input type="reset" value="Nhập lại" name="reset" class="button-reset-edit button">
                                    <br /><br />
                                    <div class="field_btn" style="padding:0; color:#ed1b24; display:none;" id="errromsg"></div>
                                </div>
                            </div>
  						</form>
                    </div>
    
				</div>	                
            </div>
        </div><!-- end.row -->
	</div>
<!---End Content-->
<script language="javascript" type="text/javascript">
	function registerMenber(){
		$("#errromsg").hide();
		var name = $('#name').val();
		var email = $('#email').val();
		var password = $('#password').val();
		var birth_day = $('#birth_day').val();
		var birth_month = $('#birth_month').val();
		var birth_year = $('#birth_year').val();
		var r = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if((email=="") || (password=="")){
			$("#errromsg").html('Vui lòng nhập đầy đủ thông tin, dấu (*) là bắt buộc nhập.');
			$("#errromsg").show();
			return false;
		}
		else if(r.test(email)==false){
			$("#errromsg").html('Email không đúng định dạng.');
			$("#errromsg").show();
			return false;
		}
		else{
			jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/thanhvien.php',{
				type: 'register',
				name:name,
				email:email,
				birth_day:birth_day,
				birth_month:birth_month,
				birth_year:birth_year,
				password:password				
			},function(data) {
			 var obj = jQuery.parseJSON(data);
				if(obj.status == 'success'){
					alert('Bạn đã đăng ký thành viên thành công.');
					$(location).attr('href','<?php echo $this->_tpl_vars['path_url']; ?>
/thanh-vien/thong-tin-tai-khoan/'); 
				}
				else{
					$("#errromsgregister").html(obj.errors);
					$("#errromsgregister").show();	
				}
			});
			return false;
		}
	}
</script>