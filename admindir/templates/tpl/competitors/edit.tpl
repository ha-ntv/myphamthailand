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
                     </div>
              </div>
            </div>              	
        <form name="allsubmit" id="frmEdit" action="index.php?do=competitors&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->
		&cid=<!--{$smarty.request.cid}-->&type=<!--{$smarty.request.type}-->&p=<!--{$smarty.request.p}-->" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
                  <tr>
                  		<td width="30%"  valign="top" align="right">
                           <strong>Danh mục sản phẩm</strong> 
                       </td>
                       <td valign="top" width="70%" align="left">
                        	<select id="cid" name="cid" onchange="loadpr(this.value)">
                                <option value="0">----Chọn Danh mục sản phẩm----</option>
                                <!--{section name=i loop=$catPr}-->
                                    <option <!--{if $catPr[i].id eq $edit.cid}-->selected="selected"<!--{/if}--> value="<!--{$catPr[i].id}-->"><!--{$catPr[i].name_vn}--></option>
                                <!--{/section}-->    
                            </select>
                            
                            <script>
								function loadpr(cid){
									if(cid){
										var idpr =  <!--{$edit.idpr}-->
										$.post('../admindir/ajax/searchAjax.php',{act:'editpr',cid:cid,idpr:idpr},function(data) {
										 var obj = jQuery.parseJSON(data);
										 jQuery('#idpr').html(obj.status);
											 
										});
										return false;
									}
								}
								$(document).ready(function() {
									loadpr(<!--{$edit.cid}-->)
								});
							</script>
                       </td>
                   </tr>
                   
                   <tr>    
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên sản phẩm</strong> 
                       </td>
                       <td valign="top" width="70%" align="left">
                       		
                        	<select id="idpr" name="idpr">
                                <option value="0">----Chọn tên sản phẩm----</option>
                                <span id="showidpr"></span> 
                            </select>
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
	var idpr = document.allsubmit.idpr;
	<!--{if $edit.id gt 0}-->
		var id = <!--{$edit.id}-->;
	<!--{else}-->
		var id = 0;
	<!--{/if}-->
	if(idpr.value.length == ''){
		alert('Vui lòng chọn tên sản phẩm');
		name.focus();
		return false;
	}
	else{
		
		jQuery.post('ajax/searchAjax.php',{
			idpr:idpr.value,
			type:<!--{$smarty.request.type}-->,
			id:id,
			act:'checkNamepr'
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