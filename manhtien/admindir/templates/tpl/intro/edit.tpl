<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                       <!--{insert name="HearderCat" cid=$smarty.request.cid root=$smarty.request.root act=$smarty.request.act}-->
                     </div>
              </div>
            </div>              	
         <form name="allsubmit" id="frmEdit" action="index.php?do=intro&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->
		&cid=<!--{$smarty.request.cid}-->" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
                 
                  
                   <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Mô Tả</strong> 
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
                                	<input type="hidden" name="name_vn" value="<!--{$editCat.name_vn}-->" />
                                    <input type="hidden" name="name_en" value="<!--{$editCat.name_en}-->" />
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
