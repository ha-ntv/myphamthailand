<?php /* Smarty version 2.6.6, created on 2017-09-11 16:05:31
         compiled from competitorslink/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getNamePrSearch', 'competitorslink/edit.tpl', 21, false),)), $this); ?>
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
                       
                       <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                       <span class="subconten"> 
                            <a href="index.php?do=competitorslink&act=list&cid=<?php echo $_REQUEST['cid']; ?>
&type=<?php echo $_REQUEST['type']; ?>
">		
                               <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getNamePrSearch', 'idpr' => $this->_tpl_vars['viewidpr']['idpr'], 'type' => 'name')), $this); ?>

                            </a> 
                       </span> 
                     </div>
              </div>
            </div>              	
        <form name="allsubmit" id="frmEdit" action="index.php?do=competitorslink&act=
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
                           <strong>Tên sản phẩm</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">              
                           <input type="text" name="name_vn" class="InputText"  id="name_vn" value="<?php echo $this->_tpl_vars['edit']['name_vn']; ?>
" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Giá sản phẩm</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">              
                           <input type="text" value="<?php echo $this->_tpl_vars['edit']['price']; ?>
" name="price" class="autoNumeric InputPrice" />
                        </td>
                  </tr>
                  
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Link</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">              
                           <input type="text" name="links" class="InputText"  id="links" value="<?php echo $this->_tpl_vars['edit']['links']; ?>
" />
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
                                    <input type="hidden" name="cid" value="<?php echo $_REQUEST['cid']; ?>
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
	//var links = document.allsubmit.links;
	var name = document.allsubmit.name_vn;
	<?php if ($this->_tpl_vars['edit']['id'] > 0): ?>
		var id = <?php echo $this->_tpl_vars['edit']['id']; ?>
;
	<?php else: ?>
		var id = 0;
	<?php endif; ?>
	if(name.value.length == ''){
		alert('Vui lòng nhập tên.');
		name.focus();
		return false;
	}
	
	else{
		
		jQuery.post('ajax/searchAjax.php',{
			name:name.value,
			links:links.value,
			cid:<?php echo $_REQUEST['cid']; ?>
,
			id:id,
			act:'checkNameprLink'
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