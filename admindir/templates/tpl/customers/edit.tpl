<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                        <!--{insert name="HearderCat" cid=$smarty.request.cid root=$smarty.request.root act=$smarty.request.act}-->
                        
                        <!--{if $namekh.name_vn neq ''}--> 
                            <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                            <span class="subconten"> 
                                <a href="index.php?do=customers&khid=<!--{$smarty.request.khid}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->">		
                                    <!--{$namekh.name_vn}--> 
                                </a>
                            </span>
                        <!--{/if}-->    
                     </div>
              </div>
            </div>              	
        <form name="allsubmit" id="frmEdit" action="index.php?do=customers&khid=<!--{$smarty.request.khid}-->&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->
		&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
               
    			 <!--{if $smarty.request.act neq 'add' }-->
                	 <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Thể loại</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <!--{insert name="TheLoai" cid=$smarty.request.cid module=32}-->
                        </td>
                  </tr>
              	<!--{else}-->
                    <input type="hidden" value="<!--{$smarty.request.cid}-->" name="cat">
                <!--{/if}--> 
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên VN</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.name_vn|escape:"html":"UTF-8"}-->" name="name_vn" class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên EN</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.name_en|escape:"html":"UTF-8"}-->" name="name_en" class="InputText" />
                        </td>
                  </tr>
                 
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Hinh Ảnh</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          <!--{if $edit.img_thumb_vn neq ""}-->
                            <img width="120" src="../<!--{$edit.img_thumb_vn}-->"   /><br />
                          <!--{/if}-->
                          <input type="file" name="img_thumb_vn" id="img_thumb_vn" onchange="check_file('img_thumb_vn');" />
                          <span class="Size">(137 x 207) </span>   
                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_thumb_vn" value="del_thumb_vn" /></span>     
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Số Thứ Tự</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<input type="text" value="<!--{if $edit.num eq ""}-->0<!--{else}--><!--{$edit.num}--><!--{/if}-->" name="num" class="InputNum" />          
                        </td>
                  </tr>
                  
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Show</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<input type="checkbox" class="CheckBox" name="active" value="active" <!--{if $edit.active eq 1 || $smarty.request.act eq 'add'}-->checked<!--{/if}--> />     
                        </td>
                  </tr>
                 
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Mô Tả VN</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <textarea  id="editor2" name="content_vn" ><!--{$edit.content_vn}--></textarea>
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Mô Tả EN</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <textarea  id="editor1" name="content_en" ><!--{$edit.content_en}--></textarea>
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
                           <input type="text" value="<!--{$edit.unique_key}-->" name="unique_key" class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Title</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          <input type="text" value="<!--{$edit.title}-->" name="title" class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Title Link</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.title_link}-->" name="title_link" class="InputText" />
                        </td>
                  </tr>
                  
				  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Title Img</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          	<input type="text" value="<!--{$edit.title_img}-->" name="title_img" class="InputText" />
                        </td>
                  </tr>
                  
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Alt Img</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          	<input type="text" value="<!--{$edit.alt_img}-->" name="alt_img" class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Keyword</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          	<input type="text" value="<!--{$edit.keyword}-->" name="keyword" class="InputText" />
                        </td>
                  </tr>
                  
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Description</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          	<textarea name="des" class="InputTextarea"><!--{$edit.des}--></textarea>
                        </td>
                  </tr>
                  	
                  <tr>
                       
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                                	<input type="hidden" name="id" value="<!--{$edit.id}-->" />
                                    <input type="hidden" name="khid" value="<!--{$smarty.request.khid}-->" />
                					<input type="button" onclick=" return SubmitFrom('checkForm','picture/khach-hang');" value="  Save " />
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