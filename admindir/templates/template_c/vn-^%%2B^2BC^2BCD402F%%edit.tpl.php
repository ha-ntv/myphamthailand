<?php /* Smarty version 2.6.6, created on 2019-03-19 03:49:13
         compiled from banner/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'banner/edit.tpl', 6, false),array('modifier', 'escape', 'banner/edit.tpl', 33, false),)), $this); ?>
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
        <form name="allsubmit" id="frmEdit" action="index.php?do=banner&act=
		<?php if ($_REQUEST['act'] == 'add'): ?>
			addsm
		<?php else: ?>
			editsm
		<?php endif; ?>
		&cid=<?php echo $_REQUEST['cid']; ?>
&p=<?php echo $_REQUEST['p']; ?>
" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
               <tr> 
               		<td width="30%"  valign="top" align="right">
                       
                   </td> 
                   <td valign="top" width="70%" align="left"> 
                   		<?php if ($this->_tpl_vars['edit']['img_vn'] != ""): ?>
                            <img width="500"  src="../<?php echo $this->_tpl_vars['edit']['img_vn']; ?>
"/>
                   		<?php endif; ?>
        		   </td>	
        		  </tr>	
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['name_vn'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8")); ?>
" name="name_vn" class="InputText" />
                        </td>
                  </tr>
                  <?php if ($_REQUEST['cid'] == 122): ?>
                  	  <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Tên chọn</strong> 
                           </td>
                            <td valign="top" width="70%" align="left">                          
                               <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['nameshort_vn'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8")); ?>
" name="nameshort_vn" class="InputText" />
                            </td>
                      </tr>
                      
                      <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Tiêu đề</strong> 
                           </td>
                            <td valign="top" width="70%" align="left">                          
                               <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['title_vn'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8")); ?>
" name="title_vn" class="InputText" />
                            </td>
                      </tr>
                  <?php endif; ?>                  
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Link</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<?php echo $this->_tpl_vars['edit']['link']; ?>
" name="link" class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Hình Ảnh</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         
                          <input type="file" name="img_vn" id="img_vn" onchange="check_file('img_vn');" /> 
                          <?php if ($_REQUEST['cid'] == 62): ?>
                          	 <span class="Size"> Max (890 x 336) </span>
                          <?php elseif ($_REQUEST['cid'] == 122): ?> 
                          	 <span class="Size"> Max (225 x 75) </span>  
                          <?php else: ?> 
                          	<span class="Size"> Max (448 x 133) </span>
                          <?php endif; ?>     
                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_img_vn" value="del_img_vn" /></span>  
                        </td>
                  </tr>
                  
                  
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Số Thứ Tự</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<input type="text" value="<?php if ($this->_tpl_vars['edit']['num'] == ""): ?>0<?php else:  echo $this->_tpl_vars['edit']['num'];  endif; ?>" name="num" class="InputNum" />          
                        </td>
                  </tr>
                  
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Show</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<input type="checkbox" class="CheckBox" name="active" value="active" <?php if ($this->_tpl_vars['edit']['active'] == 1 || $_REQUEST['act'] == 'add'): ?>checked<?php endif; ?> />     
                        </td>
                  </tr>
                  
                  <tr>
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                              		 <input type="button" onclick="CreateTitleSEOBanner();" value=" Tạo Seo " />
                                </div>
                          </div>
                        </div>
                       
                      </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Title Link</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<?php echo $this->_tpl_vars['edit']['title_link']; ?>
" name="title_link" class="InputText" />
                        </td>
                  </tr>

                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Title Img</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          	<input type="text" value="<?php echo $this->_tpl_vars['edit']['title_img']; ?>
" name="title_img" class="InputText" />
                        </td>
                  </tr>
                  
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Alt Img</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          	<input type="text" value="<?php echo $this->_tpl_vars['edit']['alt_img']; ?>
" name="alt_img" class="InputText" />
                        </td>
                  </tr>

                  <tr> 
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                                	 <input type="hidden" value="<?php echo $_REQUEST['cid']; ?>
" name="cat">
                                	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />
                					<input type="button" onclick=" return SubmitFrom('checkForm','hinh-anh/quang-cao');" value="  Save " />
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