<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                        <span class="subconten"><a title="VietAnhMobile" href="index.php?do=categories&cid=1&root=1">		
                            VietAnhMobile 
                        </a> </span>  <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                    
                        <span class="subconten"><a title="Menu" href="index.php?do=categories&cid=2&root=1">		
                            Menu 
                        </a> </span>  <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                    	
                        <span class="subconten"><a title="Menu" href="index.php?do=contact&act=list">		
                            Khách hàng liên hệ tư vấn
                        </a> </span>  <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                        
                        <span class="subconten">
                            View
                        </span>  
                     </div>
              </div>
            </div>              	
        <form name="allsubmit" id="frmEdit" action="index.php?do=contact&act=editsm&id=<!--{$smarty.request.id}-->" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
               
    			 
                  
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Phone</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.phone}-->" class="InputText" name="phone" />
                        </td>
                  </tr>


                    <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Sản phẩm</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" disabled value="<!--{$edit.name_vn}-->" class="InputText" name="product" />
                        </td>
                  </tr>  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Ngày liên hệ</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" disabled value="<!--{$edit.date}-->" class="InputText" name="dated" />
                        </td>
                  </tr>  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Đã liên lạc tư vấn</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <input type="checkbox" class="CheckBox"  value="1" name="home"  <!--{if $edit.called eq 1}-->checked<!--{/if}-->/>
                        </td>
                  </tr>
                 
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