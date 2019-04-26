<?php /* Smarty version 2.6.6, created on 2018-12-09 15:04:25
         compiled from users/edit.tpl */ ?>
<div class="conten_body">
    <div class="conten margin10">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">
                   <span class="subconten">
                        <a title="Admin" href="index.php?do=users">		
                            QUẢN LÝ ACCOUNT
                        </a> 
                    </span>  
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span> 
                    <span class="subconten">
                        <a>		
                           <?php echo $_REQUEST['act']; ?>
 
                        </a> 
                    </span>
                 </div>
          </div>
        </div>              	
    <form name="allsubmit" id="frm" action="index.php?do=users&act=
		<?php if ($_REQUEST['act'] == 'add'): ?>
			addsm
		<?php else: ?>
			editsm
		<?php endif; ?>
		&cid=<?php echo $_REQUEST['cid']; ?>
&p=<?php echo $_REQUEST['p']; ?>
" method="post" enctype="multipart/form-data">
        <table  width="100%" border="0" cellspacing="15" cellpadding="0">
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Username</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<?php echo $this->_tpl_vars['edit']['username']; ?>
" name="username" class="InputText" />
                    </td>
              </tr>
              
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
              
               <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Email</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<?php echo $this->_tpl_vars['edit']['email']; ?>
" name="email" class="InputText" />
                    </td>
              </tr>
              
             
              
              <tr>
                   
                  <td valign="top" width="70%" align="center" colspan="2">
                    <div class="divtitle">
                        <div class="divleft">
                            <div class="divright divseo">
                                <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />
                                <input type="button" onclick="CheckPass();" value="  Save " />
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
function CheckPass(){
	var username = document.allsubmit.username;
	var password = document.allsubmit.password;
	if(username.value.length == ""){
		alert('please enter User Name');
		username.focus();
		return false;
	}
	else if(password.value.length == ""){
		alert('please enter Password');
		password.focus();
		return false;
	}
	
	else if(document.allsubmit.password.value != document.allsubmit.password_conf.value){
		alert('Password and Confirm is not same');
		return false;
	}
	
	<?php if ($this->_tpl_vars['edit']['id'] == ''): ?>
	jQuery.post('ajax/member.php',{username:username.value,table:'admin'},function(data) {
	<?php else: ?>
	jQuery.post('ajax/member.php',{username:username.value,table:'admin',id:<?php echo $this->_tpl_vars['edit']['id']; ?>
},function(data) {
	<?php endif; ?>
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