<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                        <!--{insert name="HearderCat" cid=$smarty.request.cid root=$smarty.request.root act=$smarty.request.act}-->
                     </div>
              </div>
            </div>              	
        <form name="allsubmit" id="frmEdit" action="index.php?do=thongtinchung&act=
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
                           <strong>Địa điểm</strong> 
                       </td>
                        <td valign="top" width="70%" align="left"> 
                            <select name="idcity"  style="width:100px;">                        
                                <!--{section name=i loop=$city}-->
                                    <option  <!--{if $edit.idcity eq $city[i].id }-->selected="selected"<!--{/if}--> value="<!--{$city[i].id}-->">
                                        <!--{$city[i].name}-->
                                    </option>
                                <!--{/section}-->
                            </select>
                        </td>
                  </tr>
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tiêu đề</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<input type="text" value="<!--{$edit.name_vn|escape:"html":"UTF-8"}-->" name="name_vn" class="InputText" />
                        </td>
                  </tr>
                  
                 
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Mô Tả </strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <textarea  id="editor1" name="content_vn" ><!--{$edit.content_vn}--></textarea>
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
		var idcity = document.allsubmit.idcity.value;
		if(idcity==''){
			alert('Vui lòng chọn địa điểm.');
			return false;
		}
		
		else{
			<!--{if $edit.id eq ''}-->
			jQuery.post('ajax/Checkip.php',{idcity:idcity,cid:<!--{$smarty.request.cid}-->,act:'noidungkn'},function(data) {
			<!--{else}-->
			jQuery.post('ajax/Checkip.php',{idcity:idcity,cid:<!--{$smarty.request.cid}-->,act:'noidungkn',id:<!--{$edit.id}-->},function(data) {
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