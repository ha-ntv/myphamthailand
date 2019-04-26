<div class="conten_body">
    <div class="conten margin10">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">
                    <span class="subconten">
                    	<a title="Thuong Khach" href="index.php?do=categories&amp;cid=1&amp;root=1">		
                            Vấy đồng giá
                        </a> 
                    </span>  
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                    <span class="subconten">
                    	<a title="Menu" href="index.php?do=tinhthanh&cid=0">		
                        Tỉnh thành
                    	</a> 
                    </span> 
		            <!--{if $smarty.request.cid neq 0}-->
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>	
                     <span class="subconten">  
                       <a href="index.php?do=tinhthanh&cid=<!--{$smarty.request.cid}-->" class="">		
                          <!--{insert name="NameTinhThanh" id=$smarty.request.cid table="tinhthanh"}--> 
                        </a>
                    </span>
                    <!--{/if}-->
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>	
                   	<span class="subconten"><!--{if $smarty.request.act eq 'add' }-->Add<!--{else}-->Edit<!--{/if}--></span>      
                 </div>
          </div>
        </div>              	
    <form name="allsubmit" id="frmEdit" action="index.php?do=tinhthanh&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->
		&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->" method="post" enctype="multipart/form-data">
        <table  width="100%" border="0" cellspacing="15" cellpadding="0">
            
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Name VN</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<!--{$edit.name_vn|escape:"html":"UTF-8"}-->" name="name_vn" class="InputText" />
                    </td>
              </tr>
             
              
               <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Name EN</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<!--{$edit.name_en|escape:"html":"UTF-8"}-->" name="name_en" class="InputText" />
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
                       <strong>Có Menu Con?</strong> 
                   </td>
                   
                    <td valign="top" width="70%" align="left">                          
                        <input type="checkbox" class="CheckBox"  value="has_child" name="has_child"  <!--{if $edit.has_child eq 1}-->checked<!--{/if}-->/>
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
                                <input type="hidden" name="cat" value="<!--{$smarty.request.cid}-->" />
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