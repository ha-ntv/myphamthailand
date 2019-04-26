<?php /* Smarty version 2.6.6, created on 2017-06-29 14:28:41
         compiled from member/danh-sach-yeu-thich.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'member/danh-sach-yeu-thich.tpl', 55, false),array('modifier', 'date_format', 'member/danh-sach-yeu-thich.tpl', 60, false),)), $this); ?>
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
						<h1><span><?php echo $this->_tpl_vars['seo']['title']; ?>
</span></h1>
                        
                        <div class="form_user_footer_body">
                            <table width="100%" cellspacing="0" cellpadding="6" bordercolor="#DDDDDD" border="1">
                                <thead>
                                    <tr class="head-tr" height="30">
                                        <td align="center"><b>Sản phẩm</b></td>
                                        <td align="center"><b>Ngày</b></td>
                                        <td align="center"><b>Mua hàng</b></td>
                                        <td align="center"><b>Xóa</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['view']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <tr>
                                        <td> 
                                            <a class="pull-left" href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['unique_key']; ?>
.html" title="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['title_link']; ?>
">
                                                <img align="center" style="margin: 5px;" width="80" class="img-responsive" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['img_thumb_vn']; ?>
" alt="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['alt_img']; ?>
" title="<?php echo $this->_tpl_vars['newsHome1'][$this->_sections['i']['index']]['title_img']; ?>
" />
                                           </a>
                                            <div class="media-body product-like">
                                                <h4 class="media-heading">
                                                	<a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['unique_key']; ?>
.html" title="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['title_link']; ?>
">
                                                       <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>

                                                    </a> 
                                                    
                                                </h4>
                                                <p class="price"><span class="red"><?php echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']][$this->_tpl_vars['price']])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>
 VNĐ </span></p>
                                            </div>	
                                        </td>
                                        
                                        <td align="center"> 
                                            <span> <?php echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']]['dated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
</span>
                                        </td>
                                        <td align="center"> 
                                            <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['unique_key']; ?>
.html" class="btn  btn-buy-like">&nbsp;</a>
                                        </td>
                                        <td align="center" class="remove-fav">
                                            <a href="javascript:void(0)" onclick="dellike(<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['idsp']; ?>
)">
                                                <img alt="del" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/delete.png">
                                            </a>
                                            <script type="text/javascript">
												function dellike(id){
													var answer = confirm("Bạn chắc chắn muốn xóa?");
													if (answer)
													{
														$.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/thanhvien.php',{
															type: 'dellike',
															id:id		
														},function(data) {
														 var obj = jQuery.parseJSON(data);
															if(obj.status == 'success'){
																alert('Xóa thành công sản phẩm yêu thích.');
																location.reload();
															}
														});
													}
												}
											</script>
                                        </td>
                                    </tr>
                                <?php endfor; endif; ?>                                                  
                                </tbody>
                                
                            </table>	
                        </div>
			
                        
                    </div>
    
				</div>	                
            </div>
        </div><!-- end.row -->
	</div>
<!---End Content-->
<script language="javascript" type="text/javascript">
	function loginMember(){
		$("#errromsg").hide();
		var email = $('#email').val();
		var password = $('#password').val();
		if((email=="") || (password=="")){
			$("#errromsg").html('Vui lòng nhập đầy đủ thông tin, dấu (*) là bắt buộc nhập.');
			$("#errromsg").show();
			return false;
		}
		
		else{
			jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/thanhvien.php',{
				type: 'login',
				email:email,
				password:password			
			},function(data) {
			 var obj = jQuery.parseJSON(data);
				if(obj.status == 'success'){
					alert('Bạn đã đăng nhập thành công.');
					$(location).attr('href','<?php echo $this->_tpl_vars['path_url']; ?>
/thanh-vien/thong-tin-tai-khoan/'); 
				}
				else{
					$("#errromsg").html(obj.errors);
					$("#errromsg").show();	
				}
			});
			return false;
		}
	}
</script>