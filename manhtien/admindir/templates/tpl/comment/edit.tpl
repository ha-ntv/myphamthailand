<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                        
                     </div>
              </div>
            </div>              	
        <form name="allsubmit" id="frmEdit" action="index.php?do=comment&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->
		&cid=<!--{$smarty.request.cid}-->&city=<!--{$smarty.request.city}-->&type=<!--{$smarty.request.type}-->&p=<!--{$smarty.request.p}-->" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
               
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên commet</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.name|escape:"html":"UTF-8"}-->" name="name" class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Điện thoại</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.phone}-->" name="phone" class="InputText" />
                        </td>
                  </tr>
                 
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Câu hỏi</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <textarea class="InputTextarea" name="content" ><!--{$edit.content}--></textarea>
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên admin</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{if $edit.name_tl eq ''}-->Việt Anh Mobile - <!--{$NameTinhThanh}--><!--{else}--><!--{$edit.name_tl|escape:"html":"UTF-8"}--><!--{/if}-->" name="name_tl" class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Trả lời</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <textarea  id="editor2" name="content_tl" ><!--{$edit.content_tl}--></textarea>
                        </td>
                  </tr>
                  
                                    	
                  <tr>
                       
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                                	<input type="hidden" name="id" value="<!--{$edit.id}-->" />
                                    <input type="hidden" name="cat" value="<!--{$edit.id}-->" />
                					<input type="button" onclick=" return SubmitFromCm();" value="  Save " />
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
		function SubmitFromCm(){
			document.allsubmit.submit();
		}
	</script>