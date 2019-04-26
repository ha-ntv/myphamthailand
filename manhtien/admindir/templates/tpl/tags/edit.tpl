<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                     <!--{insert name="HearderCat" cid=$smarty.request.cid act='list'}-->
                     <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span> 
                    <span class="subconten">
                    	<a href="index.php?do=tags&act=list&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->">	
                    		<!--{$viewpr.name_vn}-->
                        </a>
                    </span>
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                    <span class="subconten">
                           tags                         
                    </span> 
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>	
                   	<span class="subconten"><!--{if $smarty.request.act eq 'add' }-->Add<!--{else}-->Edit<!--{/if}--></span>      
                 </div>
              </div>
            </div>              	
         <form name="allsubmit" id="frmEdit" action="index.php?do=tags&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->
		" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
                  <tr>
                        <td colspan="2"> 
                        	<div id="tabname_vn">
                                <span id="addnew1">
                                    <div class="AllTable" id="answerTab1">
                                    	<div class="TableLeft">
                                            <strong>Tên Tags 1</strong> &nbsp;
                                        </div>
                                        <div class="TableRight"> 
                                             <input type="text" value="<!--{$edit.name_vn|escape:"html":"UTF-8"}-->" name="name_vn[]" class="InputText" />
                                        </div>
                                    </div>
                                </span>
                                <!--{if $smarty.request.act eq 'add'}-->
                                    <div class="AllTable">
                                        <div class="TableLeft">&nbsp;</div>
                                        <div class="TableRight">
                                             <input type="hidden" name='numname_vn' id='numname_vn' value="1" />
                                             <input type="button" onclick="addname_vn('answerTab1')" value="Add Tên Tags" />
                                            
                                        </div>
                                    </div>
                                    
                                	<script language="javascript">
										$("#tabname_vn").show();
										function addname_vn(){
											var numname_vn = $("#numname_vn").val();
											numname_vn = parseInt(numname_vn) + 1;
											$("#numname_vn").val(numname_vn);
											$("#addnew1").append('<div class="AllTable" id="answerTab'+numname_vn+'"> <div class="TableLeft" id="addnew1"> <strong> Tên Tags '+numname_vn+'</strong> &nbsp; </div> <div class="TableRight"><input type="text" name="name_vn[]" class="InputText" /> <a href="javascript:void(0)" onclick=\'deletename_vn("answerTab'+numname_vn+'") \'><img src="images/delete.png"/></a></div> </div>');		
										}
										function deletename_vn(a){
											$("#"+a).hide(1200);
										}
									</script> 
                               <!--{/if}-->
                             </div>
                           
                           
                           
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
                                	<input type="hidden" name="idpr" value="<!--{$smarty.request.idpr}-->" />
                                     <input type="hidden" value="<!--{$smarty.request.cid}-->" name="cat">
									<input type="hidden" name="id" value="<!--{$edit.id}-->" />
                					<input type="button" onclick=" return SubmitFromTags();" value="  Save " />
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
	function SubmitFromTags(){
		document.allsubmit.submit();
	}
</script>