<div class="conten_body">

    <div class="conten margin10">

        <div class="divtitle">

            <div class="divleft">

                <div class="divright">

                     <!--{insert name="HearderCat" cid=$smarty.request.cid act='list'}--> 

                    <span class="subconten"><!--{$view.name_vn}--></span>

                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>

                    <span class="subconten">

                    	<a href="index.php?do=colorsize&act=list&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->">		

                           Địa điểm 

                        </a>

                        

                    </span> 

                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>	

                   	<span class="subconten"><!--{if $smarty.request.act eq 'add' }-->Add<!--{else}-->Edit<!--{/if}--></span>      

                 </div>

          </div>

        </div>              	

    <form name="allsubmit" id="frmEdit" action="index.php?do=colorsize&act=

		<!--{if $smarty.request.act eq 'add' }-->

			addsm

		<!--{else}-->

			editsm

		<!--{/if}-->&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->

		" method="post" enctype="multipart/form-data">

        <table  width="100%" border="0" cellspacing="15" cellpadding="0">

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

                       <strong>Còn hàng</strong> 

                   </td>

                   

                    <td valign="top" width="70%" align="left">                          

                    	<input type="checkbox" class="CheckBox" name="in_stock" value="in_stock" <!--{if $edit.in_stock eq 1 || $smarty.request.act eq 'add'}-->checked<!--{/if}--> />     

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

		var idcity = document.allsubmit.idcity.value;

		var in_stock = document.allsubmit.in_stock.value;
		if(idcity==''){

			alert('Vui lòng chọn địa điểm.');

			return false;

		}


		else{

			<!--{if $edit.id eq ''}-->

			jQuery.post('ajax/Checkip.php',{idcity:idcity,in_stock:in_stock,idpr:<!--{$smarty.request.idpr}-->,act:'colorsize'},function(data) {

			<!--{else}-->

			jQuery.post('ajax/Checkip.php',{idcity:idcity,in_stock:in_stock,idpr:<!--{$smarty.request.idpr}-->,act:'colorsize',id:<!--{$edit.id}-->},function(data) {

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