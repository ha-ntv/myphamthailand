<div class="conten_body">
    <div class="conten margin10">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright"> 
                      <!--{insert name="HearderCat" cid=$smarty.request.cid act=$smarty.request.act}--> 
                    <span class="subconten"><!--{$view.name_vn}--></span>
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                    <span class="subconten">
                    	<a href="index.php?do=masanpham&act=list&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->">		
                           Mã sản phẩm 
                        </a>
                        
                    </span> 
                     
                 </div>
          </div>
        </div>              	
    <form name="allsubmit" id="frmEdit" action="index.php?do=masanpham&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->
		" method="post" enctype="multipart/form-data">
        <table  width="100%" border="0" cellspacing="15" cellpadding="0">
        	 
               <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Tên Sản Phẩm</strong> 
                   </td>
                    <td valign="top" width="70%" align="left"> 
                        <input type="text" value="<!--{$edit.name_vn}-->" name="name_vn" class="InputText"/>
                    </td>
              </tr>
              
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Mã Sản Phẩm</strong> 
                   </td>
                    <td valign="top" width="70%" align="left"> 
                        <input type="text" value="<!--{$edit.code}-->" name="code" class="InputText"/>
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
                                <input type="hidden" name="cid" value="<!--{$smarty.request.cid}-->" />
								<input type="hidden" name="id" value="<!--{$edit.id}-->" />
                                <input type="button" onclick=" return SubmitFromCode();" value="  Save " />
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
	function SubmitFromCode(){
		var code = document.allsubmit.code;
		
		if(code.value==''){
			alert('Vui lòng nhập vào mã sản phẩm.');
			code.focus();
			return false;
		}
		else{
			<!--{if $edit.id eq ''}-->
			jQuery.post('ajax/Checkip.php',{code:code.value,cid:<!--{$smarty.request.cid}-->,act:'masanpham'},function(data) {
			<!--{else}-->
			jQuery.post('ajax/Checkip.php',{code:code.value,cid:<!--{$smarty.request.cid}-->,act:'masanpham',id:<!--{$edit.id}-->},function(data) {
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