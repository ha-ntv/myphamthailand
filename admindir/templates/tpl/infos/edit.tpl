<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                    	<span class="subconten">
                        	<a title="Artseed" href="index.php?do=infos">		
                           		THÔNG TIN WEBSITE 
							</a> 
                        </span>  
            			<span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                        <span class="subconten">Edit</span>
              		</div>
           		 </div> 
             </div>             	
        <form name="allsubmit" id="frmEdit" action="index.php?do=infos&act=editsm&id=<!--{$smarty.request.id}-->" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text"  value="<!--{$edit.name_vn|escape:"html":"UTF-8"}-->" name="name_vn" class="InputText" />
                        </td>
                  </tr>
                   <!--{if $edit.id eq 10}-->
                   		<tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Price</strong> 
                           </td>
                            <td valign="top" width="70%" align="left">                          
                               <input type="text"  value="<!--{$edit.price}-->" name="price" class="InputNum" />
                            </td>
                      </tr>
                   <!--{elseif $edit.id eq 15}-->
                   	  <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Email Liên Hệ</strong> 
                           </td>
                            <td valign="top" width="70%" align="left">                          
                               <input type="text"  value="<!--{$edit.plain_text_en}-->" name="plain_text_en" class="InputText" />
                            </td>
                      </tr>	
                      
                      <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Email Đơn Hàng</strong> 
                           </td>
                            <td valign="top" width="70%" align="left">                          
                               <input type="text"  value="<!--{$edit.plain_text_vn}-->" name="plain_text_vn" class="InputText" />
                            </td>
                      </tr>	
				    <!--{elseif $edit.id eq 14}--> 
                    	<tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Khu Vực TPHCM</strong> 
                           </td>
                           
                            <td valign="top" width="70%" align="left">                          
                                <textarea  id="editor1" name="content_vn" ><!--{$edit.content_vn}--></textarea>
                            </td>
                      </tr>
                      
                      <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Khu Vực Đà Nẵng</strong> 
                           </td>
                           
                            <td valign="top" width="70%" align="left">                          
                                <textarea  id="editor2" name="content_en" ><!--{$edit.content_en}--></textarea>
                            </td>
                      </tr>                     
                   <!--{else}-->             
                       <tr>
                           <td width="30%"  valign="top" align="right">
                               <strong>Mô Tả</strong> 
                           </td>
                           
                            <td valign="top" width="70%" align="left">                          
                                <textarea  id="editor1" name="content_vn" ><!--{$edit.content_vn}--></textarea>
                            </td>
                      </tr>
                  <!--{/if}-->
                  
                  
                  <tr>
                       
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                                	<input type="hidden" name="id" value="<!--{$edit.id}-->" />
                              		 <input type="submit"  value="  Save " />
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