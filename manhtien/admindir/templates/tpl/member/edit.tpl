<div class="conten_body">
    <div class="conten margin10">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">
                   <span class="subconten">
                        <a title="member" href="index.php?do=member">		
                            Thành Viên
                        </a> 
                    </span>  
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span> 
                    <span class="subconten">
                        <a>		
                           <!--{$smarty.request.act}--> 
                        </a> 
                    </span>
                 </div>
          </div>
        </div>              	
    <form name="allsubmit" id="frm" action="index.php?do=member&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->
		&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->" method="post" enctype="multipart/form-data">
        <table  width="100%" border="0" cellspacing="15" cellpadding="0">
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Full Name</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<!--{$edit.name}-->" name="name" class="InputText" />
                    </td>
              </tr>
             
              <!--{if $smarty.request.act eq 'add' }-->
               <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Password</strong> 
                   </td>
                   
                    <td valign="top" width="70%" align="left">                          
                       <input type="password" value="" name="password" class="InputText" />        
                    </td>
                    
              </tr>
              
              
               <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Cfirm Password</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="password" value="" name="password_conf" class="InputText" />
                    </td>
              </tr>
             <!--{/if}--> 
             <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Ngày</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <select name="day" id="day" >
                            <!--{section name=i start=1 loop = 32}-->
                                <option <!--{if $smarty.section.i.index eq $edit.day}-->selected="selected"<!--{/if}--> value="<!--{$smarty.section.i.index}-->"> <!--{$smarty.section.i.index}--> </option>
                            <!--{/section}-->
                        </select>
                         &nbsp;&nbsp;&nbsp;<strong>Tháng</strong>
                          <select name="month" id="month">
                            <!--{section name=i start=1 loop = 13}-->
                                <option <!--{if $smarty.section.i.index eq $edit.month}-->selected="selected"<!--{/if}--> value="<!--{$smarty.section.i.index}-->"> <!--{$smarty.section.i.index}--> </option>
                            <!--{/section}-->
                        </select>
                        &nbsp;&nbsp;&nbsp;<strong>Năm</strong>
                           <select name="year" id="year" style="width:62px;">
                            <!--{section name=i start=1950 loop=$yearView}-->
                                <option <!--{if $smarty.section.i.index eq $edit.year}-->selected="selected"<!--{/if}--> value="<!--{$smarty.section.i.index}-->"> <!--{$smarty.section.i.index}--> </option>
                            <!--{/section}-->
                        </select>
                    </td>
              </tr>
              
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Phone</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<!--{$edit.phone}-->" name="phone" class="InputText" />
                    </td>
              </tr>
              	
               <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Email</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<!--{$edit.email}-->" name="email" class="InputText" />
                    </td>
              </tr>
              
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Địa chỉ</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<!--{$edit.address}-->" name="address" class="InputText" />
                    </td>
              </tr>
              
               <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Là nhân viên công ty</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="checkbox" class="CheckBox"  value="nhanvienct" name="type"  <!--{if $edit.type eq 1}-->checked<!--{/if}-->/>
                    </td>
              </tr>
             
              <tr>
                   
                  <td valign="top" width="70%" align="center" colspan="2">
                    <div class="divtitle">
                        <div class="divleft">
                            <div class="divright divseo">
                                <input type="hidden" name="id" value="<!--{$edit.id}-->" />
                                <input type="button" onclick="Checkmember();" value="  Save " />
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

<script language="javascript">	
	function Checkmember(){
		var name = document.allsubmit.name;
		var password = document.allsubmit.password;
		var password_conf = document.allsubmit.password_conf;
		var email = document.allsubmit.email;
		var r = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var flag = 0;
		if(name.value.length == ""){
			alert('please enter Full Name');
			name.focus();
			return false;
		}
		
		else if(email.value.length == ""){
			alert('please enter Email');
			username.focus();
			return false;
		}
		<!--{if $smarty.request.act eq 'editsm' }-->
		else if(password.value.length == ""){
			alert('please enter Password');
			password.focus();
			return false;
		}
		
		else if(document.allsubmit.password.value != document.allsubmit.password_conf.value){
			alert('Password and Confirm is not same');
			password_conf.focus();
			return false;
		}
		<!--{/if}-->
		
		<!--{if $edit.id eq ''}-->
		jQuery.post('ajax/member.php',{email:email.value,table:'member'},function(data) {
		<!--{else}-->
		jQuery.post('ajax/member.php',{email:email.value,table:'member',id:<!--{$edit.id}-->},function(data) {
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
</script>