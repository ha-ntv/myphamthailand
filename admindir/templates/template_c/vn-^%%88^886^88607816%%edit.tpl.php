<?php /* Smarty version 2.6.6, created on 2019-04-13 11:45:16
         compiled from articles/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'articles/edit.tpl', 6, false),array('modifier', 'escape', 'articles/edit.tpl', 27, false),)), $this); ?>
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
        <form name="allsubmit" id="frmEdit" action="index.php?do=articles&act=
		<?php if ($_REQUEST['act'] == 'add'): ?>
			addsm
		<?php else: ?>
			editsm
		<?php endif; ?>
		&cid=<?php echo $_REQUEST['cid']; ?>
&p=<?php echo $_REQUEST['p']; ?>
" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
               
    			 
                    <input type="hidden" value="<?php echo $_REQUEST['cid']; ?>
" name="cat">
 
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['name_vn'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8")); ?>
" name="name_vn" class="InputText" />
                        </td>
                  </tr>
                  <?php if ($_REQUEST['cid'] == 57): ?> 
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Thời gian khuyến mãi</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['promotion_vn'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8")); ?>
" name="promotion_vn" class="InputText" />
                        </td>
                  </tr>
                  <?php endif; ?>

                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Hinh Ảnh</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          <?php if ($this->_tpl_vars['edit']['img_thumb_vn'] != ""): ?>
                            <img width="150" src="../<?php echo $this->_tpl_vars['edit']['img_thumb_vn']; ?>
"   /><br />
                          <?php endif; ?>
                          <input type="file" name="img_thumb_vn" id="img_thumb_vn" onchange="check_file('img_thumb_vn');" />
                          <span class="Size">(150 x 150) </span>   
                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_thumb_vn" value="del_thumb_vn" /></span>     
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
                       <td width="30%"  valign="top" align="right">
                           <strong>Mô Tả Ngắn</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<textarea class="InputTextarea"  name="short_vn"><?php echo $this->_tpl_vars['edit']['short_vn']; ?>
</textarea>
                        </td>
                  </tr>
                 
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Mô Tả</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <textarea  id="editor2" name="content_vn" ><?php echo $this->_tpl_vars['edit']['content_vn']; ?>
</textarea>
                        </td>
                  </tr>
				  
                  <tr>
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                              		 <input type="button" onclick="CreateTitleSEO();" value=" Tạo Seo " />
                                </div>
                          </div>
                        </div>
                       
                      </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Link</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<?php echo $this->_tpl_vars['edit']['unique_key']; ?>
" name="unique_key" class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Title</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          <input type="text" value="<?php echo $this->_tpl_vars['edit']['title']; ?>
" name="title" class="InputText" id="inputTitle" />
                          <span id="showNumTitle" style="color:#ed1b24;">0</span>
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
                       <td width="30%"  valign="top" align="right">
                           <strong>Keyword</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          	<input type="text" value="<?php echo $this->_tpl_vars['edit']['keyword']; ?>
" name="keyword" class="InputText" />
                        </td>
                  </tr>
                  
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Description</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          	<textarea name="des" class="InputTextarea" id="inputDesc"><?php echo $this->_tpl_vars['edit']['des']; ?>
</textarea>
                            <span id="showNumDesc" style="color:#ed1b24;">0</span>
                        </td>
                  </tr>
                  	
                  <tr>
                       
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                                	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />
                					<input type="button" onclick=" return SubmitFrom('checkForm','hinh-anh/tin-tuc');" value="  Save " />
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