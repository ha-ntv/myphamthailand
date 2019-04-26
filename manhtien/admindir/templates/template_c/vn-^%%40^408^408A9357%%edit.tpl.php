<?php /* Smarty version 2.6.6, created on 2017-09-11 22:55:10
         compiled from competitors/edit.tpl */ ?>
<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                        <span class="subconten">
                            <a title="Menu" href="index.php?do=categories&cid=2&root=1&p=">		
                                Menu 
                            </a> 
                       </span>  
                       <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                       <span class="subconten">
                            <a title="So Sánh Giá Đối Thủ Cạnh Tranh" href="index.php?do=competitors&act=list&type=<?php echo $_REQUEST['type']; ?>
">		
                                So Sánh Giá Đối Thủ Cạnh Tranh
                            </a> 
                       </span> 
                     </div>
              </div>
            </div>              	
        <form name="allsubmit" id="frmEdit" action="index.php?do=competitors&act=
		<?php if ($_REQUEST['act'] == 'add'): ?>
			addsm
		<?php else: ?>
			editsm
		<?php endif; ?>
		&cid=<?php echo $_REQUEST['cid']; ?>
&type=<?php echo $_REQUEST['type']; ?>
&p=<?php echo $_REQUEST['p']; ?>
" method="post" enctype="multipart/form-data">
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
                  <tr>
                  		<td width="30%"  valign="top" align="right">
                           <strong>Danh mục sản phẩm</strong> 
                       </td>
                       <td valign="top" width="70%" align="left">
                        	<select id="cid" name="cid" onchange="loadpr(this.value)">
                                <option value="0">----Chọn Danh mục sản phẩm----</option>
                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['catPr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <option <?php if ($this->_tpl_vars['catPr'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['edit']['cid']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['catPr'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['catPr'][$this->_sections['i']['index']]['name_vn']; ?>
</option>
                                <?php endfor; endif; ?>    
                            </select>
                            
                            <script>
								function loadpr(cid){
									if(cid){
										var idpr =  <?php echo $this->_tpl_vars['edit']['idpr']; ?>

										$.post('../admindir/ajax/searchAjax.php',{act:'editpr',cid:cid,idpr:idpr},function(data) {
										 var obj = jQuery.parseJSON(data);
										 jQuery('#idpr').html(obj.status);
											 
										});
										return false;
									}
								}
								$(document).ready(function() {
									loadpr(<?php echo $this->_tpl_vars['edit']['cid']; ?>
)
								});
							</script>
                       </td>
                   </tr>
                   
                   <tr>    
                       <td width="30%"  valign="top" align="right">
                           <strong>Tên sản phẩm</strong> 
                       </td>
                       <td valign="top" width="70%" align="left">
                       		
                        	<select id="idpr" name="idpr">
                                <option value="0">----Chọn tên sản phẩm----</option>
                                <span id="showidpr"></span> 
                            </select>
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
                       
                      <td valign="top" width="70%" align="center" colspan="2">
                        <div class="divtitle">
                            <div class="divleft">
                                <div class="divright divseo">
                                	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />
                					<input type="button" onclick=" return SubmitAll('','');" value="  Save " />
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
function SubmitAll(){
	var idpr = document.allsubmit.idpr;
	<?php if ($this->_tpl_vars['edit']['id'] > 0): ?>
		var id = <?php echo $this->_tpl_vars['edit']['id']; ?>
;
	<?php else: ?>
		var id = 0;
	<?php endif; ?>
	if(idpr.value.length == ''){
		alert('Vui lòng chọn tên sản phẩm');
		name.focus();
		return false;
	}
	else{
		
		jQuery.post('ajax/searchAjax.php',{
			idpr:idpr.value,
			type:<?php echo $_REQUEST['type']; ?>
,
			id:id,
			act:'checkNamepr'
		},function(data) {
			var obj = jQuery.parseJSON(data);
			 if(obj.status != ''){ //loi 
				  alert(obj.status); 
				 return false;
			 }
			 else{
				document.allsubmit.submit();
			 }
		});	
		 return false;
							
		
	 }
}
</script>