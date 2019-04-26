<div class="conten_body">
    <div class="conten margin10">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">
                    <span class="subconten">
                    	<a title="Menu" href="index.php?do=sizepr">		
                        Size Sản Phẩm
                    	</a> 
                    </span> 
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>	
                   	<span class="subconten"><!--{if $smarty.request.act eq 'add' }-->Add<!--{else}-->Edit<!--{/if}--></span>      
                 </div>
          </div>
        </div>              	
    <form name="allsubmit" id="frmEdit" action="index.php?do=sizepr&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->
		" method="post" enctype="multipart/form-data">
        <table  width="100%" border="0" cellspacing="15" cellpadding="0">
            	
                <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Mã Size</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<!--{$edit.code}-->" name="code" class="InputText" />
                    </td>
              </tr>
              
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Name</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<!--{$edit.name|escape:"html":"UTF-8"}-->" name="name" class="InputText" />
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
                                <input type="hidden" name="cat" value="1" />
								<input type="hidden" name="id" value="<!--{$edit.id}-->" />
                                <input type="button" onclick=" return SubmitFromTP();" value="  Save " />
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
	function SubmitFromTP(){
		var name = document.allsubmit.name;
		var code = document.allsubmit.code;
		
		
		if(code.value.length == ''){
			alert('Vui lòng nhập mã màu');
			code.focus();
			return false;
		}
		else if(name.value.length == ''){
			alert('Vui lòng nhập vào tên');
			name.focus();
			return false;
		}
		else{
			<!--{if $edit.id eq ''}-->
			jQuery.post('ajax/Checkip.php',{code:code.value,name:name.value,act:'sizepr'},function(data) {
			<!--{else}-->
			jQuery.post('ajax/Checkip.php',{code:code.value,name:name.value,act:'sizepr',id:<!--{$edit.id}-->},function(data) {
			<!--{/if}-->
				 var obj = jQuery.parseJSON(data);
				 if(obj.status != ''){
					 alert(obj.status);
					 return false;
				 }
				 else{
					 
					document.allsubmit.submit();
				 }
			 
			});
		}
	}
</script>