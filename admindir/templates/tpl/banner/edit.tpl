<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                        <!--{insert name="HearderCat" cid=$smarty.request.cid root=$smarty.request.root act=$smarty.request.act}-->
                     </div>
              </div>
            </div>              	
        <form name="allsubmit" id="frmEdit" action="index.php?do=banner&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->
		&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
               <tr> 
               		<td width="30%"  valign="top" align="right">
                       
                   </td> 
                   <td valign="top" width="70%" align="left"> 
                   		<!--{if $edit.img_vn neq ""}-->
                            <img width="500"  src="../<!--{$edit.img_vn}-->"/>
                   		<!--{/if}-->
        		   </td>	
        		  </tr>	
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.name_vn|escape:"html":"UTF-8"}-->" name="name_vn" class="InputText" />
                        </td>
                  </tr>
                  <!--{if $smarty.request.cid eq 122}-->
                  	  <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Tên chọn</strong> 
                           </td>
                            <td valign="top" width="70%" align="left">                          
                               <input type="text" value="<!--{$edit.nameshort_vn|escape:"html":"UTF-8"}-->" name="nameshort_vn" class="InputText" />
                            </td>
                      </tr>
                      
                      <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Tiêu đề</strong> 
                           </td>
                            <td valign="top" width="70%" align="left">                          
                               <input type="text" value="<!--{$edit.title_vn|escape:"html":"UTF-8"}-->" name="title_vn" class="InputText" />
                            </td>
                      </tr>
                  <!--{/if}-->                  
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Link</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.link}-->" name="link" class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Hình Ảnh</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         
                          <input type="file" name="img_vn" id="img_vn" onchange="check_file('img_vn');" /> 
                          <!--{if $smarty.request.cid eq 62}-->
                          	 <span class="Size"> Max (890 x 336) </span>
                          <!--{elseif $smarty.request.cid eq 122}--> 
                          	 <span class="Size"> Max (225 x 75) </span>  
                          <!--{else}--> 
                          	<span class="Size"> Max (448 x 133) </span>
                          <!--{/if}-->     
                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_img_vn" value="del_img_vn" /></span>  
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
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                                	 <input type="hidden" value="<!--{$smarty.request.cid}-->" name="cat">
                                	<input type="hidden" name="id" value="<!--{$edit.id}-->" />
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