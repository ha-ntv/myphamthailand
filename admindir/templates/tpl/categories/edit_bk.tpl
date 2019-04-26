<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                        <!--{insert name="HearderCat" cid=$smarty.request.cid root=$smarty.request.root act=$smarty.request.act}-->
                     </div>
              </div>
            </div>              	
         <form name="allsubmit" id="frmEdit" action="index.php?do=categories&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->
		&cid=<!--{$smarty.request.cid}-->&root=<!--{$smarty.request.root}-->&p=<!--{$smarty.request.p}-->" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.name_vn|escape:"html":"UTF-8"}-->" name="name_vn" class="InputText" />
                        </td>
                  </tr>
                  <!--{if $smarty.request.cid eq 2 || $smarty.request.cid eq 69 || $smarty.request.id eq 57}--> 
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Title TPHCM</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.title_vn|escape:"html":"UTF-8"}-->" name="title_vn" class="InputText" />
                        </td>
                  </tr>
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Title Đà nẵng</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.title_en|escape:"html":"UTF-8"}-->" name="title_en" class="InputText" />
                        </td>
                  </tr>
                  <!--{/if}-->
                  <!--{if $smarty.request.id eq 81 || $smarty.request.id eq 8}--> 
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Link</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.link}-->" name="link" class="InputText" />
                        </td>
                  </tr>
                  <!--{/if}-->
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Hinh</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          <!--{if $edit.img_vn neq ""}-->
                            <img height="100"  src="../<!--{$edit.img_vn}-->"   /><br />
                          <!--{/if}-->
                          <input type="file" name="img_vn" id="img_vn" onchange="check_file('img_vn');" /> 
                          <span class="Size"> <!--{if $smarty.request.id eq 81}--> (750 x 442) <!--{elseif $smarty.request.id eq 136}--> (680 x 79) <!--{else}--> (351 x 220) <!--{/if}--> </span>   
                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_img_vn" value="del_img_vn" /></span>   
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Logo Home</strong> 
                       </td>
                       
                       <td valign="top" width="70%" align="left">                          
                          <!--{if $edit.img_thumb_vn neq ""}-->
                            <img style="background:#ed1b24; padding:5px;" width="110" src="../<!--{$edit.img_thumb_vn}-->"/><br />
                          <!--{/if}-->
                          <input type="file" name="img_thumb_vn" id="img_thumb_vn" onchange="check_file('img_thumb_vn');" />
                          <span class="Size"><!--{if $smarty.request.id eq 136}-->(191 x 291) <!--{else}-->(110 x 45) <!--{/if}--></span>   
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
                           <strong>Home</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                            <input type="checkbox" class="CheckBox"  value="home" name="home"  <!--{if $edit.home eq 1}-->checked<!--{/if}-->/>
                        </td>
                    </tr>                         
    
    
                    <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Thuộc menu</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                            <input type="checkbox" class="CheckBox"  value="has_left" name="has_left"  <!--{if $edit.has_left eq 1}-->checked<!--{/if}-->/>
                        </td>
                    </tr>                         
    
    
                    <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Menu thuộc loại</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <select id="type" name="type" >
                                <!--{section name=i loop=$type}-->
                                    <option <!--{if $type[i].id eq $edit.type }--> selected="selected" <!--{/if}--> value="<!--{$type[i].id}-->">
                                        <!--{$type[i].name}-->
                                    </option>
                                <!--{/section}-->											
                            </select>
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
                           <strong>Có Menu Con?</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<input type="checkbox" class="CheckBox" onclick="CheckHasChild(this);" value="has_child" name="has_child"  <!--{if $edit.has_child eq 1}-->checked<!--{/if}-->/>
                        </td>
                  </tr>
                  
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Component</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<select id="comp" name="comp" >
                                <!--{section name=i loop=$comps}-->
                                    <option <!--{if $comps[i].id eq $edit.comp }--> selected="selected" <!--{/if}--> value="<!--{$comps[i].id}-->">
                                        <!--{$comps[i].name}-->
                                    </option>
                                <!--{/section}-->											
                            </select>
                        </td>
                  </tr>
                  
                  <!--{if $smarty.request.id eq 136}-->
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Show Popup Sale Up TPHCM</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<input type="checkbox" class="CheckBox" name="showpopupsaleup" value="showpopupsaleup" <!--{if $edit.showpopupsaleup eq 1}-->checked<!--{/if}--> />     
                        </td>
                  </tr>
                  
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Show Popup Sale Up Đà Nẵng</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<input type="checkbox" class="CheckBox" name="showpopupsaleupdn" value="showpopupsaleupdn" <!--{if $edit.showpopupsaleupdn eq 1}-->checked<!--{/if}--> />     
                        </td>
                  </tr>
              	  <!--{/if}-->
                  <!--{if $smarty.request.id eq 89 || $smarty.request.id eq 93 || $smarty.request.id eq 102 || $smarty.request.id eq 109 || $smarty.request.id eq 136}--> 
                      <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Mô Tả TPHCM</strong> 
                           </td>
                           
                            <td valign="top" width="70%" align="left">                          
                                <textarea  id="editor2" name="content_vn" ><!--{$edit.content_vn}--></textarea>
                            </td>
                      </tr>
                      
                      <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Mô Tả Đà Năng </strong> 
                           </td>
                           
                            <td valign="top" width="70%" align="left">                          
                                <textarea  id="editor3" name="content_en" ><!--{$edit.content_en}--></textarea>
                            </td>
                      </tr>
                      
                  <!--{elseif $smarty.request.id eq 8}--> 
                  		<tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Bảng Thông Tin Trả Góp</strong> 
                           </td>
                           
                            <td valign="top" width="70%" align="left">                          
                                <textarea  id="editor1" name="content_en" ><!--{$edit.content_en}--></textarea>
                            </td>
                        </tr>   
                        
                  		<tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Mô Tả</strong> 
                           </td>
                           
                            <td valign="top" width="70%" align="left">                          
                                <textarea  id="editor2" name="content_vn" ><!--{$edit.content_vn}--></textarea>
                            </td>
                        </tr>   
                  
                  <!--{else}-->
                  	<tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Mô Tả</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <textarea  id="editor2" name="content_vn" ><!--{$edit.content_vn}--></textarea>
                        </td>
                  	</tr>
                  <!--{/if}-->
                  
                 
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
                          <input type="text" value="<!--{$edit.title}-->" name="title" id="inputTitle" class="InputText" /> 
                          <span id="showNumTitle" style="color:#ed1b24;">0</span>
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
                          	<textarea name="des" class="InputTextarea" id="inputDesc"><!--{$edit.des}--></textarea>
                            <span id="showNumDesc" style="color:#ed1b24;">0</span>
                        </td>
                  </tr>
                  
                  <tr>
                       
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                                	<input type="hidden" name="id" value="<!--{$edit.id}-->" />
                					<input type="hidden" name="cat" value="2" />
                              		 <input type="button" onclick=" return SubmitFrom('checkForm','hinh-anh/vietanhmobile');" value="  Save " />
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