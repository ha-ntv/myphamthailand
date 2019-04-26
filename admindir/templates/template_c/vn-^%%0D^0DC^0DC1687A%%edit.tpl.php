<?php /* Smarty version 2.6.6, created on 2017-09-13 11:59:19
         compiled from masanpham/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'masanpham/edit.tpl', 6, false),)), $this); ?>
<div class="conten_body">
    <div class="conten margin10">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright"> 
                      <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'HearderCat', 'cid' => $_REQUEST['cid'], 'act' => $_REQUEST['act'])), $this); ?>
 
                    <span class="subconten"><?php echo $this->_tpl_vars['view']['name_vn']; ?>
</span>
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                    <span class="subconten">
                    	<a href="index.php?do=masanpham&act=list&idpr=<?php echo $_REQUEST['idpr']; ?>
&cid=<?php echo $_REQUEST['cid']; ?>
&p=<?php echo $_REQUEST['p']; ?>
">		
                           Mã sản phẩm 
                        </a>
                        
                    </span> 
                     
                 </div>
          </div>
        </div>              	
    <form name="allsubmit" id="frmEdit" action="index.php?do=masanpham&act=
		<?php if ($_REQUEST['act'] == 'add'): ?>
			addsm
		<?php else: ?>
			editsm
		<?php endif; ?>&idpr=<?php echo $_REQUEST['idpr']; ?>
&cid=<?php echo $_REQUEST['cid']; ?>
&p=<?php echo $_REQUEST['p']; ?>

		" method="post" enctype="multipart/form-data">
        <table  width="100%" border="0" cellspacing="15" cellpadding="0">
        	 
               <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Tên Sản Phẩm</strong> 
                   </td>
                    <td valign="top" width="70%" align="left"> 
                        <input type="text" value="<?php echo $this->_tpl_vars['edit']['name_vn']; ?>
" name="name_vn" class="InputText"/>
                    </td>
              </tr>
              
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Mã Sản Phẩm</strong> 
                   </td>
                    <td valign="top" width="70%" align="left"> 
                        <input type="text" value="<?php echo $this->_tpl_vars['edit']['code']; ?>
" name="code" class="InputText"/>
                    </td>
              </tr>
              
             
               <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Show</strong> 
                   </td>
                   
                    <td valign="top" width="70%" align="left">                          
                    	<input type="checkbox" class="CheckBox" name="active" value="active" <?php if ($this->_tpl_vars['edit']['active'] == 1 || $_REQUEST['act'] == 'add'): ?>checked<?php endif; ?> />     
                    </td>
              </tr>

              <tr>
                   
                  <td valign="top" width="70%" align="center" colspan="2">
                    <div class="divtitle">
                        <div class="divleft">
                            <div class="divright divseo">
                                <input type="hidden" name="cid" value="<?php echo $_REQUEST['cid']; ?>
" />
								<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />
                                <input type="button" onclick=" return SubmitFromCode();" value="  Save " />
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
	function SubmitFromCode(){
		var code = document.allsubmit.code;
		
		if(code.value==''){
			alert('Vui lòng nhập vào mã sản phẩm.');
			code.focus();
			return false;
		}
		else{
			<?php if ($this->_tpl_vars['edit']['id'] == ''): ?>
			jQuery.post('ajax/Checkip.php',{code:code.value,cid:<?php echo $_REQUEST['cid']; ?>
,act:'masanpham'},function(data) {
			<?php else: ?>
			jQuery.post('ajax/Checkip.php',{code:code.value,cid:<?php echo $_REQUEST['cid']; ?>
,act:'masanpham',id:<?php echo $this->_tpl_vars['edit']['id']; ?>
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
	}
</script>