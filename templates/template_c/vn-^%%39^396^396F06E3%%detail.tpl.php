<?php /* Smarty version 2.6.6, created on 2019-04-13 11:55:23
         compiled from articles/detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'articles/detail.tpl', 107, false),)), $this); ?>
<!---Content-->

    <div class="breadcrumbs">

 		<div class="container">

 			<div class="row">

 				<div class="col-xs-12">		

                	<div class="breadcrumb">

                        <?php echo $this->_tpl_vars['linkTitle']; ?>


                        <div class="clear"></div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    

    <div class="container mt20">	

        <div class="row">

             <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bannertop2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        </div>

    </div>



    <div class="container mt20">

		<div class="row">

        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">

            	<div class="content_detail">

					<div class="row mt20" id="news_contents">

						<div class="col-lg-r col-lg-9 col-md-12 col-sm-12 col-xs-12">

                        	<h1 class="content_title">

                                <span><?php echo $this->_tpl_vars['detail'][$this->_tpl_vars['name']]; ?>
</span> <span style="font-size:18px; color:#0069b8">(<?php echo $this->_tpl_vars['detail']['view']; ?>
 lượt xem)</span>

                            </h1>

                            <div class="description">

                            	<?php if ($this->_tpl_vars['detail'][$this->_tpl_vars['content']] == ""): ?>

                                    <p class="nodate"> Thông tin đang cập nhập!</p>

                                <?php else: ?>

                                    <?php echo $this->_tpl_vars['detail'][$this->_tpl_vars['content']]; ?>


                                <?php endif; ?>

                            </div>

                            

                            <?php if ($this->_tpl_vars['checkTragop'] == 1): ?>

                            	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "articles/tra-gop.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                            <?php endif; ?>

                            

                            <div id="frame_commnet">

                                <div class="comments">

                                    <?php if ($this->_tpl_vars['commentCount'] > 0): ?>

                                       <div class="add-task" id="goToComment">

                                            <div class="comment_form_title_send">Ý kiến bạn đọc</div>

                                            <div class="clear"> </div>

                                        </div>

                                        

                                       <div class="comments_contents"> 

                                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['viewComment']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                                                <div class="comment-item">

                                                    <span class="name"><?php echo $this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['name']; ?>
</span> 

                                                    <span class="date">(nhận xét lúc:<?php echo ((is_array($_tmp=$this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['dated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
 <?php echo $this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['timed']; ?>
)</span> 

                                                    <div class="comment_content "> 

                                                        <?php echo $this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['content']; ?>


                                                       <!-- <a href="javascript: void(0)" class="button_reply">Trả lời</a>-->	

                                                    </div>

                                                    <?php if ($this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['name_tl'] != ''): ?>

                                                    <div class="comment-item comment-item1">

                                                        <span class="name"><?php echo $this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['name_tl']; ?>
</span> <span class="date">(Trả lời lúc:<?php echo ((is_array($_tmp=$this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['dated_tl'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
 <?php echo $this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['timed_tl']; ?>
)</span> 

                                                        <div class="comment_content "> 

                                                            <?php echo $this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['content_tl']; ?>


                                                        </div>

                                                     </div>

                                                     <?php endif; ?>

                                                </div>

                                            <?php endfor; endif; ?>

                                        </div>

                                    <?php endif; ?>

                                     <!-- FORM COMMENT	-->

                                    

                                    <div class="comment_form_title" style="margin-top:20px;">Gửi bình luận trên Facebook</div>

                                     <div id="fb-root"></div>

                                        <script>(function(d, s, id) {

                                          var js, fjs = d.getElementsByTagName(s)[0];

                                          if (d.getElementById(id)) return;

                                          js = d.createElement(s); js.id = id;

                                          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=567589320047215";

                                          fjs.parentNode.insertBefore(js, fjs);

                                        }(document, 'script', 'facebook-jssdk'));

                                        </script>

                                       <div class="fb-comments" data-href="<?php echo $this->_tpl_vars['path_url'];  echo $_SERVER['REQUEST_URI']; ?>
" data-width="100%" data-numposts="20"></div>

                                            



                                

                                </div>

                   		 	</div>	

                            

                            

						</div>

                        

                         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right-product.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

					</div>



				</div>

            </div>

         </div><!-- end.row -->

	</div>

<!---End Content-->