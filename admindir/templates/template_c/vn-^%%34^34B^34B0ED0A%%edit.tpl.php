<?php /* Smarty version 2.6.6, created on 2017-09-23 17:13:23
         compiled from comment/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'comment/edit.tpl', 24, false),)), $this); ?>
<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                        
                     </div>
              </div>
            </div>              	
        <form name="allsubmit" id="frmEdit" action="index.php?do=comment&act=
		<?php if ($_REQUEST['act'] == 'add'): ?>
			addsm
		<?php else: ?>
			editsm
		<?php endif; ?>
		&cid=<?php echo $_REQUEST['cid']; ?>
&city=<?php echo $_REQUEST['city']; ?>
&type=<?php echo $_REQUEST['type']; ?>
&p=<?php echo $_REQUEST['p']; ?>
" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
               
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên commet</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8")); ?>
" name="name" class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Điện thoại</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<?php echo $this->_tpl_vars['edit']['phone']; ?>
" name="phone" class="InputText" />
                        </td>
                  </tr>
                 
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Câu hỏi</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <textarea class="InputTextarea" name="content" ><?php echo $this->_tpl_vars['edit']['content']; ?>
</textarea>
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên admin</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<?php if ($this->_tpl_vars['edit']['name_tl'] == ''): ?>Việt Anh Mobile - <?php echo $this->_tpl_vars['NameTinhThanh'];  else:  echo ((is_array($_tmp=$this->_tpl_vars['edit']['name_tl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8"));  endif; ?>" name="name_tl" class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Trả lời</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <textarea  id="editor2" name="content_tl" ><?php echo $this->_tpl_vars['edit']['content_tl']; ?>
</textarea>
                        </td>
                  </tr>
                  
                                    	
                  <tr>
                       
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                                	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />
                                    <input type="hidden" name="cat" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />
                					<input type="button" onclick=" return SubmitFromCm();" value="  Save " />
                                </div>
                          </div>
                        </div>
                       
                      </td>
                  </tr>
                  
            </table>
          </form>
          <div class="clear"></div>
        </div>
        
    </div>
    
    <script>
		function SubmitFromCm(){
			document.allsubmit.submit();
		}
	</script>