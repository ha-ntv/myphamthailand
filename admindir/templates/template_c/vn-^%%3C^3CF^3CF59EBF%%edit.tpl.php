<?php /* Smarty version 2.6.6, created on 2019-03-20 05:47:41
         compiled from products/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'products/edit.tpl', 11, false),array('modifier', 'escape', 'products/edit.tpl', 51, false),array('modifier', 'number_format', 'products/edit.tpl', 179, false),)), $this); ?>
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

        <form name="allsubmit" id="frmEdit" action="index.php?do=products&act=

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

                           <strong>Tên sản phẩm</strong> 

                       </td>

                        <td valign="top" width="70%" align="left">                          

                           <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['name_vn'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8")); ?>
" name="name_vn" class="InputText" />

                        </td>

                  </tr>

                  	

                  

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Mã sản phẩm</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left"> 

                        	<input type="text" onblur="checkCode(this.value)" value="<?php echo $this->_tpl_vars['edit']['codesp1']; ?>
" name="codesp1" id="codesp1" class="InputText" />                        

                        </td>

                  </tr>	

                  

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Mã phát sinh</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left"> 

                        	<input type="text" value="<?php echo $this->_tpl_vars['edit']['code']; ?>
" name="code" class="InputPrice" />                        

                        </td>

                  </tr>

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Mã video youtube</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left"> 

                        	<input type="text" value="<?php echo $this->_tpl_vars['edit']['video']; ?>
" name="video" placeholder="vd:P95Iq70zwhM" class="InputText" />                        

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

                           <strong>Sản phẩm hot</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left"> 

                        	<input type="checkbox" class="CheckBox" name="type" value="sphost" <?php if ($this->_tpl_vars['edit']['type'] == 3): ?>checked<?php endif; ?> />                 

                        </td>

                  </tr>

                  

                   


                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong> Giá</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                         	<div class="AllColor">

                            	
                            <input name="price" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>
" class="autoNumeric InputChonPrice" />
                                      

                            </div>    

                        </td>

                  </tr>

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong> Giảm giá</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                         	<div class="AllColor">

                            	
                            <input name="discount" type="text" value="<?php echo $this->_tpl_vars['edit']['discount']; ?>
" class="InputChonPrice" />
                                      
                            <span style="display:inline-block; position: relative;left:10px;top:0;">%</span>
                            </div>    

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

                           <strong>Hinh nhỏ</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                          <?php if ($this->_tpl_vars['edit']['img_thumb_vn'] != ""): ?>

                            <img  height="100" src="../<?php echo $this->_tpl_vars['edit']['img_thumb_vn']; ?>
" /><br />

                          <?php endif; ?>

                          <input type="file" name="img_thumb_vn" id="img_thumb_vn" onchange="check_file('img_thumb_vn');" /> 

                          <span class="Size">(140 x 140)</span>   

                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_thumb_vn" value="del_thumb_vn" /></span>   

                        </td>

                  </tr>

                  

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Hinh nhỏ lớn</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                          <?php if ($this->_tpl_vars['edit']['img_thumb_en'] != ""): ?>

                            <img  height="100" src="../<?php echo $this->_tpl_vars['edit']['img_thumb_en']; ?>
" /><br />

                          <?php endif; ?>

                          <input type="file" name="img_thumb_en" id="img_thumb_en" onchange="check_file('img_thumb_en');" /> 

                          <span class="Size">(454 x 454)</span>   

                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_thumb_en" value="del_thumb_en" /></span>   

                        </td>

                  </tr>

 

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Hinh 1</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                          <?php if ($this->_tpl_vars['edit']['img_vn'] != ""): ?>

                            <img height="100"  src="../<?php echo $this->_tpl_vars['edit']['img_vn']; ?>
"   /><br />

                          <?php endif; ?>

                          <input type="file" name="img_vn" id="img_vn" onchange="check_file('img_vn');" /> 

                          <span class="Size"> (562 x 562) </span>   

                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_img_vn" value="del_img_vn" /></span>   

                        </td>

                  </tr>

                  

                   <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Hinh 2</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                          <?php if ($this->_tpl_vars['edit']['img2_vn'] != ""): ?>

                            <img height="100"  src="../<?php echo $this->_tpl_vars['edit']['img2_vn']; ?>
"   /><br />

                          <?php endif; ?>

                          <input type="file" name="img2_vn" id="img2_vn" onchange="check_file('img2_vn');" /> 

                          <span class="Size"> (562 x 562) </span>   

                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_img2_vn" value="del_img2_vn" /></span>   

                        </td>

                  </tr>

                  

                   <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Hinh 3</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                          <?php if ($this->_tpl_vars['edit']['img3_vn'] != ""): ?>

                            <img height="100"  src="../<?php echo $this->_tpl_vars['edit']['img3_vn']; ?>
"   /><br />

                          <?php endif; ?>

                          <input type="file" name="img3_vn" id="img3_vn" onchange="check_file('img3_vn');" /> 

                          <span class="Size"> (562 x 562) </span>   

                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_img3_vn" value="del_img3_vn" /></span>   

                        </td>

                  </tr>

                  

                   <tr style="background:">

                       <td width="30%"  valign="top" align="right">

                           <strong>Hinh 4</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                          <?php if ($this->_tpl_vars['edit']['img4_vn'] != ""): ?>

                            <img height="100"  src="../<?php echo $this->_tpl_vars['edit']['img4_vn']; ?>
"   /><br />

                          <?php endif; ?>

                          <input type="file" name="img4_vn" id="img4_vn" onchange="check_file('img4_vn');" /> 

                          <span class="Size"> (562 x 562) </span>   

                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_img4_vn" value="del_img4_vn" /></span>   

                        </td>

                  </tr>

                  

                   <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Hinh 5</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                          <?php if ($this->_tpl_vars['edit']['img5_vn'] != ""): ?>

                            <img height="100"  src="../<?php echo $this->_tpl_vars['edit']['img5_vn']; ?>
"   /><br />

                          <?php endif; ?>

                          <input type="file" name="img5_vn" id="img5_vn" onchange="check_file('img5_vn');" /> 

                          <span class="Size"> (562 x 562) </span>   

                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_img5_vn" value="del_img5_vn" /></span>   

                        </td>

                  </tr>

                  

                  


                  

                  

                  

                  
                 

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Mô Tả </strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                            <textarea  id="editor5" name="content_vn" ><?php echo $this->_tpl_vars['edit']['content_vn']; ?>
</textarea>

                        </td>

                  </tr>

                  

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Lưu ý sản phẩm </strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left"> 

                        	<textarea class="InputTextarea"  name="luuysanpham_vn"><?php echo $this->_tpl_vars['edit']['luuysanpham_vn']; ?>
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

                                	<input type="hidden" name="id" id="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />

                					<input type="button" onclick=" return SubmitFrom('products','hinh-anh/san-pham');" value="  Save " />

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

  		function checkCode(codesp) {

			var id = $("#id").val();

			jQuery.post('ajax/Checkip.php',{codesp:codesp,act:'checkcode',id:id},function(data) {																				

				 var obj = jQuery.parseJSON(data);

				 if(obj.status != ''){

					 alert(obj.status);

					 $("#codesp1").val('');

					 return false;

				 } 

			});	

		}

  </script>