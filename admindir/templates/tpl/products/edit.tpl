<div class="conten_body">

        <div class="conten margin10">

            <div class="divtitle">

                <div class="divleft">

                    <div class="divright">

                        <!--{insert name="HearderCat" cid=$smarty.request.cid root=$smarty.request.root act=$smarty.request.act}-->

                     </div>

              </div>

            </div>              	

        <form name="allsubmit" id="frmEdit" action="index.php?do=products&act=

		<!--{if $smarty.request.act eq 'add' }-->

			addsm

		<!--{else}-->

			editsm

		<!--{/if}-->

		&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->" method="post" enctype="multipart/form-data">

            <table  width="100%" border="0" cellspacing="15" cellpadding="0">

               

    				<input type="hidden" value="<!--{$smarty.request.cid}-->" name="cat">

                                	

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Tên sản phẩm</strong> 

                       </td>

                        <td valign="top" width="70%" align="left">                          

                           <input type="text" value="<!--{$edit.name_vn|escape:"html":"UTF-8"}-->" name="name_vn" class="InputText" />

                        </td>

                  </tr>

                  	

                  

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Mã sản phẩm</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left"> 

                        	<input type="text" onblur="checkCode(this.value)" value="<!--{$edit.codesp1}-->" name="codesp1" id="codesp1" class="InputText" />                        

                        </td>

                  </tr>	

                  

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Mã phát sinh</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left"> 

                        	<input type="text" value="<!--{$edit.code}-->" name="code" class="InputPrice" />                        

                        </td>

                  </tr>

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Mã video youtube</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left"> 

                        	<input type="text" value="<!--{$edit.video}-->" name="video" placeholder="vd:P95Iq70zwhM" class="InputText" />                        

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

                           <strong>Sản phẩm hot</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left"> 

                        	<input type="checkbox" class="CheckBox" name="type" value="sphost" <!--{if $edit.type eq 3}-->checked<!--{/if}--> />                 

                        </td>

                  </tr>

                  

                   


                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong> Giá</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                         	<div class="AllColor">

                            	
                            <input name="price" type="text" value="<!--{$edit.price|number_format:0:",":"."}-->" class="autoNumeric InputChonPrice" />
                                      

                            </div>    

                        </td>

                  </tr>

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong> Giảm giá</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                         	<div class="AllColor">

                            	
                            <input name="discount" type="text" value="<!--{$edit.discount}-->" class="InputChonPrice" />
                                      
                            <span style="display:inline-block; position: relative;left:10px;top:0;">%</span>
                            </div>    

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

                           <strong>Hinh nhỏ</strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left">                          

                          <!--{if $edit.img_thumb_vn neq ""}-->

                            <img  height="100" src="../<!--{$edit.img_thumb_vn}-->" /><br />

                          <!--{/if}-->

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

                          <!--{if $edit.img_thumb_en neq ""}-->

                            <img  height="100" src="../<!--{$edit.img_thumb_en}-->" /><br />

                          <!--{/if}-->

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

                          <!--{if $edit.img_vn neq ""}-->

                            <img height="100"  src="../<!--{$edit.img_vn}-->"   /><br />

                          <!--{/if}-->

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

                          <!--{if $edit.img2_vn neq ""}-->

                            <img height="100"  src="../<!--{$edit.img2_vn}-->"   /><br />

                          <!--{/if}-->

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

                          <!--{if $edit.img3_vn neq ""}-->

                            <img height="100"  src="../<!--{$edit.img3_vn}-->"   /><br />

                          <!--{/if}-->

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

                          <!--{if $edit.img4_vn neq ""}-->

                            <img height="100"  src="../<!--{$edit.img4_vn}-->"   /><br />

                          <!--{/if}-->

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

                          <!--{if $edit.img5_vn neq ""}-->

                            <img height="100"  src="../<!--{$edit.img5_vn}-->"   /><br />

                          <!--{/if}-->

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

                            <textarea  id="editor5" name="content_vn" ><!--{$edit.content_vn}--></textarea>

                        </td>

                  </tr>

                  

                  <tr>

                       <td width="30%"  valign="top" align="right">

                           <strong>Lưu ý sản phẩm </strong> 

                       </td>

                       

                        <td valign="top" width="70%" align="left"> 

                        	<textarea class="InputTextarea"  name="luuysanpham_vn"><!--{$edit.luuysanpham_vn}--></textarea>                         

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

                                	<input type="hidden" name="id" id="id" value="<!--{$edit.id}-->" />

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