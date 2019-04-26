<?php /* Smarty version 2.6.6, created on 2019-03-18 10:09:03
         compiled from intro/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'intro/edit.tpl', 6, false),)), $this); ?>
<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                       <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'HearderCat', 'cid' => $_REQUEST['cid'], 'root' => $_REQUEST['root'], 'act' => $_REQUEST['act'])), $this); ?>

                     </div>
              </div>
            </div>              	
         <form name="allsubmit" id="frmEdit" action="index.php?do=intro&act=
		<?php if ($_REQUEST['act'] == 'add'): ?>
			addsm
		<?php else: ?>
			editsm
		<?php endif; ?>
		&cid=<?php echo $_REQUEST['cid']; ?>
" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
                 
                  
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Mô Tả</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <textarea  id="editor1" name="content_vn" ><?php echo $this->_tpl_vars['edit']['content_vn']; ?>
</textarea>
                        </td>
                  </tr>
                  
                  
                  <tr>
                       
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                                	<input type="hidden" name="name_vn" value="<?php echo $this->_tpl_vars['editCat']['name_vn']; ?>
" />
                                    <input type="hidden" name="name_en" value="<?php echo $this->_tpl_vars['editCat']['name_en']; ?>
" />
                                    <input type="hidden" name="cat" value="<?php echo $_REQUEST['cid']; ?>
" />
                                    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />
                                    
                              		 <input type="button" onclick=" return SubmitFrom('checkForm','');" value="  Save " />
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