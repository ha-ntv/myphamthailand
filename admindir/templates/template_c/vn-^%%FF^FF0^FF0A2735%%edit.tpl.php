<?php /* Smarty version 2.6.6, created on 2019-03-18 15:56:14
         compiled from categories/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'categories/edit.tpl', 11, false),array('modifier', 'escape', 'categories/edit.tpl', 45, false),)), $this); ?>
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

         <form name="allsubmit" id="frmEdit" action="index.php?do=categories&act=

		<?php if ($_REQUEST['act'] == 'add'): ?>

			addsm

		<?php else: ?>

			editsm

		<?php endif; ?>

		&cid=<?php echo $_REQUEST['cid']; ?>
&root=<?php echo $_REQUEST['root']; ?>
&p=<?php echo $_REQUEST['p']; ?>
" method="post" enctype="multipart/form-data">

            <table  width="100%" border="0" cellspacing="15" cellpadding="0">

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Tên</strong> 

                       </td>

                        <td valign="top" width="70%" align="left">                          

                           <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['name_vn'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8")); ?>
" name="name_vn" class="InputText" />

                        </td>

                  </tr>

                  <?php if ($_REQUEST['cid'] == 2 || $_REQUEST['cid'] == 69 || $_REQUEST['id'] == 57): ?> 

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Title TPHCM</strong> 

                       </td>

                        <td valign="top" width="70%" align="left">                          

                           <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['title_vn'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8")); ?>
" name="title_vn" class="InputText" />

                        </td>

                  </tr>

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Title Đà nẵng</strong> 

                       </td>

                        <td valign="top" width="70%" align="left">                          

                           <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['title_en'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8")); ?>
" name="title_en" class="InputText" />

                        </td>

                  </tr>

                  <?php endif; ?>

                  <?php if ($_REQUEST['id'] == 81 || $_REQUEST['id'] == 8): ?> 

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Link</strong> 

                       </td>

                        <td valign="top" width="70%" align="left">                          

                           <input type="text" value="<?php echo $this->_tpl_vars['edit']['link']; ?>
" name="link" class="InputText" />

                        </td>

                  </tr>

                  <?php endif; ?>

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Hinh</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                          <?php if ($this->_tpl_vars['edit']['img_vn'] != ""): ?>

                            <img height="100"  src="../<?php echo $this->_tpl_vars['edit']['img_vn']; ?>
"   /><br />

                          <?php endif; ?>

                          <input type="file" name="img_vn" id="img_vn" onchange="check_file('img_vn');" /> 

                          <span class="Size"> <?php if ($_REQUEST['id'] == 81): ?> (750 x 442) <?php elseif ($_REQUEST['id'] == 136): ?> (680 x 79) <?php else: ?> (600 x 600) <?php endif; ?> </span>   

                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_img_vn" value="del_img_vn" /></span>   

                        </td>

                  </tr>

                  

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Logo Home</strong> 

                       </td>

                       

                       <td valign="top" width="70%" align="left">                          

                          <?php if ($this->_tpl_vars['edit']['img_thumb_vn'] != ""): ?>

                            <img style="background:#ed1b24; padding:5px;" width="110" src="../<?php echo $this->_tpl_vars['edit']['img_thumb_vn']; ?>
"/><br />

                          <?php endif; ?>

                          <input type="file" name="img_thumb_vn" id="img_thumb_vn" onchange="check_file('img_thumb_vn');" />

                          <span class="Size"><?php if ($_REQUEST['id'] == 136): ?>(191 x 291) <?php else: ?>(110 x 110) <?php endif; ?></span>   

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

                           <strong>Home</strong> 

                       </td>

                        <td valign="top" width="70%" align="left">                          

                            <input type="checkbox" class="CheckBox"  value="home" name="home"  <?php if ($this->_tpl_vars['edit']['home'] == 1): ?>checked<?php endif; ?>/>

                        </td>

                    </tr>      

                    

                   <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>SubMenu thuộc loại</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                            <select id="has_menu" name="has_menu" >

                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['has_menu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                                    <option <?php if ($this->_tpl_vars['has_menu'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['edit']['has_menu']): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['has_menu'][$this->_sections['i']['index']]['id']; ?>
">

                                        <?php echo $this->_tpl_vars['has_menu'][$this->_sections['i']['index']]['name']; ?>


                                    </option>

                                <?php endfor; endif; ?>											

                            </select>

                        </td>

                    </tr>

                    

                    <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Menu thuộc loại</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                            <select id="type" name="type" >

                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['type']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                                    <option <?php if ($this->_tpl_vars['type'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['edit']['type']): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['type'][$this->_sections['i']['index']]['id']; ?>
">

                                        <?php echo $this->_tpl_vars['type'][$this->_sections['i']['index']]['name']; ?>


                                    </option>

                                <?php endfor; endif; ?>											

                            </select>

                        </td>

                    </tr>                                          

                 

                   <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Thuộc menu</strong> 

                       </td>

                        <td valign="top" width="70%" align="left">                          

                            <input type="checkbox" class="CheckBox"  value="has_left" name="has_left"  <?php if ($this->_tpl_vars['edit']['has_left'] == 1): ?>checked<?php endif; ?>/>

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

                           <strong>Có Menu Con?</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                         	<input type="checkbox" class="CheckBox" onclick="CheckHasChild(this);" value="has_child" name="has_child"  <?php if ($this->_tpl_vars['edit']['has_child'] == 1): ?>checked<?php endif; ?>/>

                        </td>

                  </tr>

                  

                   <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Component</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                         	<select id="comp" name="comp" >

                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['comps']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                                    <option <?php if ($this->_tpl_vars['comps'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['edit']['comp']): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['comps'][$this->_sections['i']['index']]['id']; ?>
">

                                        <?php echo $this->_tpl_vars['comps'][$this->_sections['i']['index']]['name']; ?>


                                    </option>

                                <?php endfor; endif; ?>											

                            </select>

                        </td>

                  </tr>

                  

                  <?php if ($_REQUEST['id'] == 136): ?>

                   <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Show Popup Sale Up TPHCM</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                         	<input type="checkbox" class="CheckBox" name="showpopupsaleup" value="showpopupsaleup" <?php if ($this->_tpl_vars['edit']['showpopupsaleup'] == 1): ?>checked<?php endif; ?> />     

                        </td>

                  </tr>

                  

                   <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Show Popup Sale Up Đà Nẵng</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                         	<input type="checkbox" class="CheckBox" name="showpopupsaleupdn" value="showpopupsaleupdn" <?php if ($this->_tpl_vars['edit']['showpopupsaleupdn'] == 1): ?>checked<?php endif; ?> />     

                        </td>

                  </tr>

              	  <?php endif; ?>

                  <?php if ($_REQUEST['id'] == 89 || $_REQUEST['id'] == 93 || $_REQUEST['id'] == 102 || $_REQUEST['id'] == 109 || $_REQUEST['id'] == 136): ?> 

                      <tr>

                           <td width="30%"  valign="top" align="right">

                               <strong>Mô Tả TPHCM</strong> 

                           </td>

                           

                            <td valign="top" width="70%" align="left">                          

                                <textarea  id="editor2" name="content_vn" ><?php echo $this->_tpl_vars['edit']['content_vn']; ?>
</textarea>

                            </td>

                      </tr>

                      

                      <tr>

                           <td width="30%"  valign="top" align="right">

                               <strong>Mô Tả Đà Năng </strong> 

                           </td>

                           

                            <td valign="top" width="70%" align="left">                          

                                <textarea  id="editor3" name="content_en" ><?php echo $this->_tpl_vars['edit']['content_en']; ?>
</textarea>

                            </td>

                      </tr>

                      

                  

                  

                  <?php else: ?>

                  	<tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Mô Tả</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                            <textarea  id="editor2" name="content_vn" ><?php echo $this->_tpl_vars['edit']['content_vn']; ?>
</textarea>

                        </td>

                  	</tr>

                  <?php endif; ?>

                  

                 

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
" name="title" id="inputTitle" class="InputText" /> 

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

                					<input type="hidden" name="cat" value="2" />

                              		 <input type="button" onclick=" return SubmitFrom('checkForm','hinh-anh/thailandcosmetics');" value="  Save " />

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