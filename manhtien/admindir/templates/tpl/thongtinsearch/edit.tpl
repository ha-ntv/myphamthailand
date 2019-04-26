<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                        <!--{insert name="HearderCat" cid=$smarty.request.cid root=$smarty.request.root act=$smarty.request.act}-->
                     </div>
              </div>
            </div>              	
        <form name="allsubmit" id="frmEdit" action="index.php?do=thongtinsearch&act=
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
                           <strong>Tên</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<!--{$edit.name_vn|escape:"html":"UTF-8"}-->" name="name_vn" class="InputText" />
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
                                	<input type="hidden" name="id" id="id" value="<!--{$edit.id}-->" />
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
		var name_vn = document.allsubmit.name_vn.value;
		if(name_vn==''){
			alert('Vui lòng nhập vào tên.');
			return false;
		}
		
		else{
			<!--{if $edit.id eq ''}-->
			jQuery.post('ajax/Checkip.php',{name_vn:name_vn,cid:<!--{$smarty.request.cid}-->,act:'thongtinseach'},function(data) {
			<!--{else}-->
			jQuery.post('ajax/Checkip.php',{name_vn:name_vn,cid:<!--{$smarty.request.cid}-->,act:'thongtinseach',id:<!--{$edit.id}-->},function(data) {
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