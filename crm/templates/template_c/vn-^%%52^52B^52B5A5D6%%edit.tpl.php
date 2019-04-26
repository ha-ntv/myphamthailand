<?php /* Smarty version 2.6.6, created on 2016-03-03 02:19:21
         compiled from users/edit.tpl */ ?>
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
            	<span class="subconten">
                	<a title="Danh mục" href="<?php echo $this->_tpl_vars['path_url']; ?>
/users/">		
                        Quảng lý người dùng 
                    </a>
                	
                </span>
                <span class="subconten"><img style="margin-top:9px" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon.gif"></span>
                <span class="subconten">		
					Edit 
				</span>
            </div>
            <div class="Clear"></div>
       	</div>
     <form name="allsubmit" id="frm" action="<?php echo $this->_tpl_vars['path_url']; ?>
/users/<?php if ($_REQUEST['cat1'] == 'add'): ?>addsm<?php else: ?>editsm<?php endif; ?>/" method="post" enctype="multipart/form-data">
		<div class="FormBox">
        	<div class="SubBox">
                <span class="titleFr ng-binding">Địa điểm</span>
                <select name="city" id="city"  style="width:150px; height:24px">
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['cityHome']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
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
                        <option <?php if ($this->_tpl_vars['edit']['idcity'] == $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['id']): ?>selected<?php endif; ?> value="<?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['id']; ?>
"> 
                            <?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['name']; ?>
 
                        </option>   
                    <?php endfor; endif; ?>
                </select>
             </div>
             
        	 <div class="SubBox">
                <span class="titleFr ng-binding">Full name</span>
                <input type="text" class="FrText" name="name" value="<?php echo $this->_tpl_vars['edit']['name']; ?>
"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Username</span>
                <input type="text" class="FrText" name="username" value="<?php echo $this->_tpl_vars['edit']['username']; ?>
"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Password</span>
                <input type="password" class="FrText" name="password"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Cfirm Password</span>
                <input type="password" class="FrText" name="password_conf"/>
             </div>

             <div class="BtSummit">
                <input type="hidden" name="viewmaphieu" value="<?php echo $this->_tpl_vars['edit']['maphieu']; ?>
" />
                <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />
                <a title="Lưu" class="kv2Btn kvsaveBtn" href="javascript:void(0)" onclick="return SubmitFrom();">
                    <i class="fa fa-floppy-o"></i> Lưu 
                </a>
                
                <a title="Bỏ qua" class="kv2Btn kvsaveBtn" href="javascript:void(0)" onclick="Reset();">
                    <i class="fa fa-ban"></i> Bỏ qua 
                </a>
       		</div>
       </div>
    </form>   
   </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<script language="javascript">
	function Reset(){
		location.reload();
	}
	
	function SubmitFrom(){
		var username = document.allsubmit.username;
		var name = document.allsubmit.name;
		var password = document.allsubmit.password;
		var password_conf = document.allsubmit.password_conf;
		if(name.value.length == ""){
			alert('Vui lòng nhập họ và tên.');
			name.focus();
			return false;
		}
		else if(username.value.length == ""){
			alert('Vui lòng nhập username.');
			username.focus();
			return false;
		}
		<?php if ($this->_tpl_vars['edit']['id'] != ''): ?>
			else if( (password.value.length != "") && (document.allsubmit.password.value != document.allsubmit.password_conf.value) ){
					alert('Mật khẩu nhập lại không đúng.');
					return false;
			}	
		<?php else: ?>
			else if(password.value.length == ""){
				alert('Vui lòng nhập mật khẩu.');
				password.focus();
				return false;
			}
			
			else if(document.allsubmit.password.value != document.allsubmit.password_conf.value){
				alert('Mật khẩu nhập lại không đúng.');
				password_conf.focus();
				return false;
			}
		<?php endif; ?>
		else{
			<?php if ($this->_tpl_vars['edit']['id'] == ''): ?>
			jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/ajax/member.php',{username:username.value,type:'addmember'},function(data) {
			<?php else: ?>
			jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/ajax/member.php',{username:username.value,type:'addmember',id:<?php echo $this->_tpl_vars['edit']['id']; ?>
},function(data) {
			<?php endif; ?>
				var obj = jQuery.parseJSON(data);
				 if(obj.status != ''){ //loi 
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