<?php /* Smarty version 2.6.6, created on 2019-03-20 04:34:21
         compiled from colorsize/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'colorsize/edit.tpl', 11, false),)), $this); ?>
<div class="conten_body">

    <div class="conten margin10">

        <div class="divtitle">

            <div class="divleft">

                <div class="divright">

                     <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'HearderCat', 'cid' => $_REQUEST['cid'], 'act' => 'list')), $this); ?>
 

                    <span class="subconten"><?php echo $this->_tpl_vars['view']['name_vn']; ?>
</span>

                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>

                    <span class="subconten">

                    	<a href="index.php?do=colorsize&act=list&idpr=<?php echo $_REQUEST['idpr']; ?>
&cid=<?php echo $_REQUEST['cid']; ?>
&p=<?php echo $_REQUEST['p']; ?>
">		

                           Địa điểm 

                        </a>

                        

                    </span> 

                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>	

                   	<span class="subconten"><?php if ($_REQUEST['act'] == 'add'): ?>Add<?php else: ?>Edit<?php endif; ?></span>      

                 </div>

          </div>

        </div>              	

    <form name="allsubmit" id="frmEdit" action="index.php?do=colorsize&act=

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

                       <strong>Còn hàng</strong> 

                   </td>

                   

                    <td valign="top" width="70%" align="left">                          

                    	<input type="checkbox" class="CheckBox" name="in_stock" value="in_stock" <?php if ($this->_tpl_vars['edit']['in_stock'] == 1 || $_REQUEST['act'] == 'add'): ?>checked<?php endif; ?> />     

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

                                <input type="hidden" name="idpr" value="<?php echo $_REQUEST['idpr']; ?>
" />

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

		var idcity = document.allsubmit.idcity.value;

		var in_stock = document.allsubmit.in_stock.value;
		if(idcity==''){

			alert('Vui lòng chọn địa điểm.');

			return false;

		}


		else{

			<?php if ($this->_tpl_vars['edit']['id'] == ''): ?>

			jQuery.post('ajax/Checkip.php',{idcity:idcity,in_stock:in_stock,idpr:<?php echo $_REQUEST['idpr']; ?>
,act:'colorsize'},function(data) {

			<?php else: ?>

			jQuery.post('ajax/Checkip.php',{idcity:idcity,in_stock:in_stock,idpr:<?php echo $_REQUEST['idpr']; ?>
,act:'colorsize',id:<?php echo $this->_tpl_vars['edit']['id']; ?>
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