<?php /* Smarty version 2.6.6, created on 2019-03-18 10:09:23
         compiled from infos/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'infos/edit.tpl', 23, false),)), $this); ?>
<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                    	<span class="subconten">
                        	<a title="Artseed" href="index.php?do=infos">		
                           		THÔNG TIN WEBSITE 
							</a> 
                        </span>  
            			<span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                        <span class="subconten">Edit</span>
              		</div>
           		 </div> 
             </div>             	
        <form name="allsubmit" id="frmEdit" action="index.php?do=infos&act=editsm&id=<?php echo $_REQUEST['id']; ?>
" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text"  value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['name_vn'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8")); ?>
" name="name_vn" class="InputText" />
                        </td>
                  </tr>
                   <?php if ($this->_tpl_vars['edit']['id'] == 10): ?>
                   		<tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Price</strong> 
                           </td>
                            <td valign="top" width="70%" align="left">                          
                               <input type="text"  value="<?php echo $this->_tpl_vars['edit']['price']; ?>
" name="price" class="InputNum" />
                            </td>
                      </tr>
                   <?php elseif ($this->_tpl_vars['edit']['id'] == 15): ?>
                   	  <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Email Liên Hệ</strong> 
                           </td>
                            <td valign="top" width="70%" align="left">                          
                               <input type="text"  value="<?php echo $this->_tpl_vars['edit']['plain_text_en']; ?>
" name="plain_text_en" class="InputText" />
                            </td>
                      </tr>	
                      
                      <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Email Đơn Hàng</strong> 
                           </td>
                            <td valign="top" width="70%" align="left">                          
                               <input type="text"  value="<?php echo $this->_tpl_vars['edit']['plain_text_vn']; ?>
" name="plain_text_vn" class="InputText" />
                            </td>
                      </tr>	
				    <?php elseif ($this->_tpl_vars['edit']['id'] == 14): ?> 
                    	<tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Khu Vực TPHCM</strong> 
                           </td>
                           
                            <td valign="top" width="70%" align="left">                          
                                <textarea  id="editor1" name="content_vn" ><?php echo $this->_tpl_vars['edit']['content_vn']; ?>
</textarea>
                            </td>
                      </tr>
                      
                      <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Khu Vực Đà Nẵng</strong> 
                           </td>
                           
                            <td valign="top" width="70%" align="left">                          
                                <textarea  id="editor2" name="content_en" ><?php echo $this->_tpl_vars['edit']['content_en']; ?>
</textarea>
                            </td>
                      </tr>                     
                   <?php else: ?>             
                       <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Mô Tả</strong> 
                           </td>
                           
                            <td valign="top" width="70%" align="left">                          
                                <textarea  id="editor1" name="content_vn" ><?php echo $this->_tpl_vars['edit']['content_vn']; ?>
</textarea>
                            </td>
                      </tr>
                  <?php endif; ?>
                  
                  
                  <tr>
                       
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                                	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />
                              		 <input type="submit"  value="  Save " />
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