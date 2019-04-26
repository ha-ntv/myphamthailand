<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                        <!--{insert name="HearderCat" cid=$smarty.request.cid root=$smarty.request.root act=$smarty.request.act}-->
                     </div>
              </div>
            </div>              	
        <form name="allsubmit" id="frmEdit" action="index.php?do=nicks&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->
		&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Hinh Ảnh</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                          <!--{if $edit.img_thumb_vn neq ""}-->
                            <img width="156" src="../<!--{$edit.img_thumb_vn}-->"   /><br />
                          <!--{/if}-->
                          <input type="file" name="img_thumb_vn" id="img_thumb_vn" onchange="check_file('img_thumb_vn');" />
                          <span class="Size">(156 x 122) </span>   
                          <span class="SizeImgDel"> Xóa Hình <input type="checkbox" class="CheckBoxImg" name="del_thumb_vn" value="del_thumb_vn" /></span>     
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
                   
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Yahoo</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.yahoo}-->" name="yahoo" class="InputText" />
                        </td>
                  </tr>
                
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Skype</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.skype}-->" name="skype" class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>phone</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.phone}-->" name="phone" class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>email</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.email}-->" name="email" class="InputText" />
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
                                	 <input type="hidden" value="<!--{$smarty.request.cid}-->" name="cat">
                                	<input type="hidden" name="id" value="<!--{$edit.id}-->" />
                					<input type="button" onclick=" return SubmitFrom('checkForm','');" value="  Save " />
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