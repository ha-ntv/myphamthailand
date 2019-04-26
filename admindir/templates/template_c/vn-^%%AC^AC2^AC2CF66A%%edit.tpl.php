<?php /* Smarty version 2.6.6, created on 2019-03-18 10:04:17
         compiled from city/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'city/edit.tpl', 30, false),)), $this); ?>
<div class="conten_body">
    <div class="conten margin10">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">
                    <span class="subconten">
                    	<a title="Menu" href="index.php?do=city">		
                        Tỉnh thành
                    	</a> 
                    </span> 
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>	
                   	<span class="subconten"><?php if ($_REQUEST['act'] == 'add'): ?>Add<?php else: ?>Edit<?php endif; ?></span>      
                 </div>
          </div>
        </div>              	
    <form name="allsubmit" id="frmEdit" action="index.php?do=city&act=
		<?php if ($_REQUEST['act'] == 'add'): ?>
			addsm
		<?php else: ?>
			editsm
		<?php endif; ?>
		" method="post" enctype="multipart/form-data">
        <table  width="100%" border="0" cellspacing="15" cellpadding="0">
            
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Name</strong> 
                   </td>
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8")); ?>
" name="name" class="InputText" />
                    </td>
              </tr>
              
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Phí Ship</strong> 
                   </td>
                   
                    <td valign="top" width="70%" align="left"> 
                        <input type="text" value="<?php echo $this->_tpl_vars['edit']['price']; ?>
" name="price" class="InputPrice" />                        
                    </td>
              </tr>	
             
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Số Thứ Tự</strong> 
                   </td>
                   
                    <td valign="top" width="70%" align="left">                          
                        <input type="text" value="<?php if ($this->_tpl_vars['edit']['num'] == ""): ?>0<?php else:  echo $this->_tpl_vars['edit']['num'];  endif; ?>" name="num" class="InputNum" />          
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
                                <input type="hidden" name="cat" value="1" />
								<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />
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
		var name = document.allsubmit.name;
		
		if(name.value.length == ''){
			alert('Vui lòng nhập vào tên');
			name.focus();
			return false;
		}
		else{
			document.allsubmit.submit();
		}
	}
</script>