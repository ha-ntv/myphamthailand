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
                  <!--
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Gói bảo hành Vcare 6 tháng VNĐ</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left"> 
                        	<input type="text" value="$edit.vcare" name="vcare" class="InputPrice autoNumeric" />                        
                        </td>
                  </tr>	
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Gói bảo hành Vcare 12 tháng VNĐ</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left"> 
                        	<input type="text" value="$edit.vcare12" name="vcare12" class="InputPrice autoNumeric" />                        
                        </td>
                  </tr>	
                  -->
                  
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
                           <strong>Sản phẩm chính hãng</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left"> 
                        	<input type="checkbox" class="CheckBox" name="chinhhang" value="chinhhang" <!--{if $edit.chinhhang eq 1 || $smarty.request.act eq 'add'}-->checked<!--{/if}--> />                 
                        </td>
                  </tr>
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tem chính hãng</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left"> 
                        	<input type="checkbox" class="CheckBox" name="temchinhhang" value="temchinhhang" <!--{if $edit.temchinhhang eq 1 }-->checked<!--{/if}--> />                 
                        </td>
                  </tr>
                  <!--{if $edit.id neq ''}-->	
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Hiển thị Khuc Vực, Số Lượng, Giá</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<div class="AllColor">
                            	<!--{insert name="CheckDiadiem" idpr=$edit.id}-->	
                                      
                            </div>    
                        </td>
                  </tr>
                   <!--{/if}-->
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
                          <span class="Size">(454 x 252)</span>   
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
                          <span class="Size"> (562 x 340) </span>   
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
                          <span class="Size"> (562 x 340) </span>   
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
                          <span class="Size"> (562 x 340) </span>   
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
                          <span class="Size"> (562 x 340) </span>   
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
                          <span class="Size"> (562 x 340) </span>   
                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_img5_vn" value="del_img5_vn" /></span>   
                        </td>
                  </tr>
                  
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Phụ kiện giảm giá</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left"> 
                        	<!--{insert name="checkPhuKienGiamGia" idpromotion=$edit.idpromotion}--> 
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Bộ sản phẩm chuẩn</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left"> 
                        	<select name="typebspchuan">  
                            	<option value="0">-----Chọn Bộ sản phẩm chuẩn-----</option>                      
                                <!--{section name=i loop=$bochuansp}-->
                                    <option  <!--{if $edit.typebspchuan eq $bochuansp[i].id }-->selected="selected"<!--{/if}--> value="<!--{$bochuansp[i].id}-->">
                                        <!--{$bochuansp[i].name_vn}-->
                                    </option>
                                <!--{/section}-->
                            </select>   
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                          <strong>Bộ sản phẩm chuẩn TPHCM</strong>
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<textarea id="editor7" name="bosanphamchuan_vn"><!--{$edit.bosanphamchuan_vn}--></textarea>
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                         <strong> Bộ sản phẩm chuẩn Đà Nẵng</strong>
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<textarea id="editor8" name="bosanphamchuan_en"><!--{$edit.bosanphamchuan_en}--></textarea>
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Chế độ bảo hành</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left"> 
                        	<select name="typebaove">
                            	<option value="0">-----Chọn chế độ bảo hành-----</option>                        
                                <!--{section name=i loop=$chedobaohanh}-->
                                    <option  <!--{if $edit.typebaove eq $chedobaohanh[i].id }-->selected="selected"<!--{/if}--> value="<!--{$chedobaohanh[i].id}-->">
                                        <!--{$chedobaohanh[i].name_vn}-->
                                    </option>
                                <!--{/section}-->
                            </select>   
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Chế độ bảo hành TPHCM</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<textarea id="editor1" class="InputTextarea" name="chedobaohanh_vn"><!--{$edit.chedobaohanh_vn}--></textarea>
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Chế độ bảo hành Đà Năng</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<textarea id="editor6" class="InputTextarea" name="chedobaohanh_en"><!--{$edit.chedobaohanh_en}--></textarea>
                        </td>
                  </tr>
                  
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Cam kết</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left"> 
                        	<select name="typecamket">
                            	<option value="0">-----Chọn Cam Kết-----</option>                        
                                <!--{section name=i loop=$camket}-->
                                    <option  <!--{if $edit.typecamket eq $camket[i].id }-->selected="selected"<!--{/if}--> value="<!--{$camket[i].id}-->">
                                        <!--{$camket[i].name_vn}-->
                                    </option>
                                <!--{/section}-->
                            </select>   
                        </td>
                  </tr>
                  
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Quà khuyến mãi</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left"> 
                        	<select name="typeiphone">  
                            	<option value="0">-----Chọn quà khuyến mãi-----</option>                      
                                <!--{section name=i loop=$quakhuyenmai}-->
                                    <option  <!--{if $edit.typeiphone eq $quakhuyenmai[i].id }-->selected="selected"<!--{/if}--> value="<!--{$quakhuyenmai[i].id}-->">
                                        <!--{$quakhuyenmai[i].name_vn}-->
                                    </option>
                                <!--{/section}-->
                            </select>   
                        </td>
                  </tr>
                  
                    
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Quà khuyến mãi TPHCM</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<textarea id="editor2" class="InputTextarea" name="promotion_vn"><!--{$edit.promotion_vn}--></textarea>
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Quà khuyến mãi Đà Năng</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<textarea id="editor3" class="InputTextarea" name="promotion_en"><!--{$edit.promotion_en}--></textarea>
                        </td>
                  </tr>

                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Thông số kỹ thuật</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <textarea id="editor4" name="thongsokythuat_vn" ><!--{$edit.thongsokythuat_vn}--></textarea>
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