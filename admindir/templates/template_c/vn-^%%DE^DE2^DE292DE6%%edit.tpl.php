<?php /* Smarty version 2.6.6, created on 2019-03-19 16:40:58
         compiled from member/edit.tpl */ ?>
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
                           <?php echo $_REQUEST['act']; ?>
 
                        </a> 
                    </span>
                 </div>
          </div>
        </div>              	
    <form name="allsubmit" id="frm" action="index.php?do=member&act=
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
                       <strong>Full Name</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<?php echo $this->_tpl_vars['edit']['name']; ?>
" name="name" class="InputText" />
                    </td>
              </tr>
             
              <?php if ($_REQUEST['act'] == 'add'): ?>
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
             <?php endif; ?> 
             <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Ngày</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <select name="day" id="day" >
                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)1;
$this->_sections['i']['loop'] = is_array($_loop=32) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                <option <?php if ($this->_sections['i']['index'] == $this->_tpl_vars['edit']['day']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_sections['i']['index']; ?>
"> <?php echo $this->_sections['i']['index']; ?>
 </option>
                            <?php endfor; endif; ?>
                        </select>
                         &nbsp;&nbsp;&nbsp;<strong>Tháng</strong>
                          <select name="month" id="month">
                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)1;
$this->_sections['i']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                <option <?php if ($this->_sections['i']['index'] == $this->_tpl_vars['edit']['month']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_sections['i']['index']; ?>
"> <?php echo $this->_sections['i']['index']; ?>
 </option>
                            <?php endfor; endif; ?>
                        </select>
                        &nbsp;&nbsp;&nbsp;<strong>Năm</strong>
                           <select name="year" id="year" style="width:62px;">
                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)1950;
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['yearView']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                <option <?php if ($this->_sections['i']['index'] == $this->_tpl_vars['edit']['year']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_sections['i']['index']; ?>
"> <?php echo $this->_sections['i']['index']; ?>
 </option>
                            <?php endfor; endif; ?>
                        </select>
                    </td>
              </tr>
              
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Phone</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<?php echo $this->_tpl_vars['edit']['phone']; ?>
" name="phone" class="InputText" />
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
                   <td width="30%"  valign="top" align="right">
                       <strong>Địa chỉ</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<?php echo $this->_tpl_vars['edit']['address']; ?>
" name="address" class="InputText" />
                    </td>
              </tr>
              
               <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Là nhân viên công ty</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="checkbox" class="CheckBox"  value="nhanvienct" name="type"  <?php if ($this->_tpl_vars['edit']['type'] == 1): ?>checked<?php endif; ?>/>
                    </td>
              </tr>
             
              <tr>
                   
                  <td valign="top" width="70%" align="center" colspan="2">
                    <div class="divtitle">
                        <div class="divleft">
                            <div class="divright divseo">
                                <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />
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
		<?php if ($_REQUEST['act'] == 'editsm'): ?>
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
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['edit']['id'] == ''): ?>
		jQuery.post('ajax/member.php',{email:email.value,table:'member'},function(data) {
		<?php else: ?>
		jQuery.post('ajax/member.php',{email:email.value,table:'member',id:<?php echo $this->_tpl_vars['edit']['id']; ?>
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