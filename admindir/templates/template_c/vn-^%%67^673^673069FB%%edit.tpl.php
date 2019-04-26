<?php /* Smarty version 2.6.6, created on 2017-10-11 00:18:34
         compiled from thongtinchung/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'thongtinchung/edit.tpl', 6, false),array('modifier', 'escape', 'thongtinchung/edit.tpl', 39, false),)), $this); ?>
<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'HearderCat', 'cid' => $_REQUEST['cid'], 'root' => $_REQUEST['root'], 'act' => $_REQUEST['act'])), $this); ?>

                     </div>
              </div>
            </div>              	
        <form name="allsubmit" id="frmEdit" action="index.php?do=thongtinchung&act=
		<?php if ($_REQUEST['act'] == 'add'): ?>
			addsm
		<?php else: ?>
			editsm
		<?php endif; ?>
		&cid=<?php echo $_REQUEST['cid']; ?>
&p=<?php echo $_REQUEST['p']; ?>
" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
                 <input type="hidden" value="<?php echo $_REQUEST['cid']; ?>
" name="cat">
                 <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Địa điểm</strong> 
                       </td>
                        <td valign="top" width="70%" align="left"> 
                            <select name="idcity"  style="width:100px;">                        
                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['city']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <option  <?php if ($this->_tpl_vars['edit']['idcity'] == $this->_tpl_vars['city'][$this->_sections['i']['index']]['id']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['city'][$this->_sections['i']['index']]['id']; ?>
">
                                        <?php echo $this->_tpl_vars['city'][$this->_sections['i']['index']]['name']; ?>

                                    </option>
                                <?php endfor; endif; ?>
                            </select>
                        </td>
                  </tr>
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Tiêu đề</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']['name_vn'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', "UTF-8") : smarty_modifier_escape($_tmp, 'html', "UTF-8")); ?>
" name="name_vn" class="InputText" />
                        </td>
                  </tr>
                  
                 
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Mô Tả </strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                            <textarea  id="editor1" name="content_vn" ><?php echo $this->_tpl_vars['edit']['content_vn']; ?>
</textarea>
                        </td>
                  </tr>

                  <tr>
                       
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                                	<input type="hidden" name="id" id="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
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
		var idcity = document.allsubmit.idcity.value;
		if(idcity==''){
			alert('Vui lòng chọn địa điểm.');
			return false;
		}
		
		else{
			<?php if ($this->_tpl_vars['edit']['id'] == ''): ?>
			jQuery.post('ajax/Checkip.php',{idcity:idcity,cid:<?php echo $_REQUEST['cid']; ?>
,act:'noidungkn'},function(data) {
			<?php else: ?>
			jQuery.post('ajax/Checkip.php',{idcity:idcity,cid:<?php echo $_REQUEST['cid']; ?>
,act:'noidungkn',id:<?php echo $this->_tpl_vars['edit']['id']; ?>
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