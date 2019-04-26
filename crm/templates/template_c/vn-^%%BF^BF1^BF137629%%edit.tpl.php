<?php /* Smarty version 2.6.6, created on 2016-03-11 09:00:19
         compiled from nha-cung-cap/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'nha-cung-cap/edit.tpl', 10, false),)), $this); ?>
<link type="text/css" href="<?php echo $this->_tpl_vars['path_url']; ?>
/calendar/themes/ui-lightness/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/calendar/ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/calendar/ui/ui.dialog.js"></script>
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'HearderCat', 'cid' => $_REQUEST['cat1'], 'act' => $_REQUEST['do'], 'root' => 1)), $this); ?>

                <span class="subconten"><img style="margin-top:9px" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon.gif"></span>
                <span class="subconten">		
					<a href="<?php echo $this->_tpl_vars['path_url']; ?>
/nha-cung-cap/<?php echo $_REQUEST['cat1']; ?>
/0/">Nhà cung cấp</a> 
				</span>
                <span class="subconten"><img style="margin-top:9px" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon.gif"></span>
                <span class="subconten">		
					<?php echo $_REQUEST['cat3']; ?>

				</span>
            </div>
            <div class="Clear"></div>
       	</div>
     <form name="allsubmit" id="frmEdit" action="<?php echo $this->_tpl_vars['path_url']; ?>
/nha-cung-cap/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $_REQUEST['cat2']; ?>
/<?php if ($_REQUEST['cat3'] == 'add'): ?>addsm<?php else: ?>editsm<?php endif; ?>/" method="post" enctype="multipart/form-data">
		<div class="FormBox">
        	<div class="SubBox">
                <span class="titleFr ng-binding">Tên</span>
                <input type="text" class="FrText" name="name" id="name" value="<?php echo $this->_tpl_vars['edit']['name']; ?>
" />
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Điện thoại</span>
                <input type="text" class="FrText" name="phone" id="phone" value="<?php echo $this->_tpl_vars['edit']['phone']; ?>
" />
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Email</span>
                <input type="text" class="FrText" name="email" id="email" value="<?php echo $this->_tpl_vars['edit']['email']; ?>
" />
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Địa chỉ</span>
                <textarea class="FrText TextareaHeight" id="address" name="address"><?php echo $this->_tpl_vars['edit']['address']; ?>
</textarea>
             </div>
             
             <div class="BtSummit">
             	<input type="hidden" id="id" name="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
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
		$("#name").val('');
		$("#phone").val('');
		$("#email").val('');
		$("#address").val('');
	}
	function SubmitFrom(){
		var name = $("#name");
		var email = $("#email");
		var r = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(name.val().length == ''){
			alert('Vui lòng nhập vào tên nhà cung cấp.');
			name.focus();
			return false;
		}
		else if(email.val().length != '' && r.test(email.val())==false){
			alert('Địa chỉ email không đúng định dạng.');
			email.focus();
			return false;
		}
		else{
			var id = $("#id").val();
			jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/ajax/Checkip.php',{name:name.val(),act:'checkPartner',id:id},function(data) {																				
				 var obj = jQuery.parseJSON(data);
				 if(obj.status != ''){
					 alert(obj.status);
					 name.focus();
					 return false;
				 }
				 else{
				 	document.allsubmit.submit(); 
				 } 
			});
		}
	}
</script> 
