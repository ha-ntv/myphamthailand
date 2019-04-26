<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                        <span class="subconten">
                            <a title="Menu" href="index.php?do=categories&cid=2&root=1&p=">		
                                Menu 
                            </a> 
                       </span>  
                       <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                       <span class="subconten">
                            <a title="So Sánh Giá Đối Thủ Cạnh Tranh" href="index.php?do=competitors&act=list&type=<!--{$smarty.request.type}-->">		
                                So Sánh Giá Đối Thủ Cạnh Tranh
                            </a> 
                       </span> 
                       
                       <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                       <span class="subconten"> 
                            <a href="index.php?do=competitorslink&act=list&cid=<!--{$smarty.request.cid}-->&type=<!--{$smarty.request.type}-->">		
                               <!--{insert name=getNamePrSearch idpr=$viewidpr.idpr type='name'}-->
                            </a> 
                       </span> 
                     </div>
              </div>
            </div>              	
        <form name="allsubmit" id="frmEdit" action="index.php?do=competitorslink&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->
		&cid=<!--{$smarty.request.cid}-->&type=<!--{$smarty.request.type}-->&p=<!--{$smarty.request.p}-->" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên sản phẩm</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">              
                           <input type="text" name="name_vn" class="InputText"  id="name_vn" value="<!--{$edit.name_vn}-->" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Giá sản phẩm</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">              
                           <input type="text" value="<!--{$edit.price}-->" name="price" class="autoNumeric InputPrice" />
                        </td>
                  </tr>
                  
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Link</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">              
                           <input type="text" name="links" class="InputText"  id="links" value="<!--{$edit.links}-->" />
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
                       
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                                	<input type="hidden" name="id" value="<!--{$edit.id}-->" />
                                    <input type="hidden" name="cid" value="<!--{$smarty.request.cid}-->" />
                					<input type="button" onclick=" return SubmitAll('','');" value="  Save " />
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
    
<script type="text/javascript">
function SubmitAll(){
	//var links = document.allsubmit.links;
	var name = document.allsubmit.name_vn;
	<!--{if $edit.id gt 0}-->
		var id = <!--{$edit.id}-->;
	<!--{else}-->
		var id = 0;
	<!--{/if}-->
	if(name.value.length == ''){
		alert('Vui lòng nhập tên.');
		name.focus();
		return false;
	}
	
	else{
		
		jQuery.post('ajax/searchAjax.php',{
			name:name.value,
			links:links.value,
			cid:<!--{$smarty.request.cid}-->,
			id:id,
			act:'checkNameprLink'
		},function(data) {
			var obj = jQuery.parseJSON(data);
			 if(obj.status != ''){ //loi 
				  alert(obj.status); 
				 return false;
			 }
			 else{
				document.allsubmit.submit();
			 }
		});	
		 return false;
	 }
}
</script>