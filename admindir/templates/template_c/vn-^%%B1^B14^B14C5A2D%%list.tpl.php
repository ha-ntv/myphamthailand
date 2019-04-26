<?php /* Smarty version 2.6.6, created on 2017-10-25 14:26:46
         compiled from saleup/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'saleup/list.tpl', 123, false),array('modifier', 'date_format', 'saleup/list.tpl', 132, false),array('insert', 'NameCity', 'saleup/list.tpl', 143, false),)), $this); ?>
<link type="text/css" href="calendar/themes/ui-lightness/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="calendar/ui/ui.datepicker.js"></script>
<script type="text/javascript" src="calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="calendar/ui/ui.dialog.js"></script>
 <div class="conten_body">
   <div class="conten">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">      
                   <span class="subconten"><a title="VietAnhMobile" href="index.php?do=categories&cid=1&root=1">		
                        VietAnhMobile 
                    </a> </span>  <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                
                    <span class="subconten"><a title="Menu" href="index.php?do=categories&cid=2&root=1">		
                        Menu 
                    </a> </span>  <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                
                    <span class="subconten">
                    	Poup Sale Up
                    </span>                
                </div>
          </div>
        </div>
        <div class="raised"> 
            <b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b></b>           
            <div class="boxcontent">
            	<form name="search" action="" method="post" enctype="multipart/form-data"> 
                    <table width="60%" border="0" cellspacing="4" cellpadding="0">
                      <tr>
                        <td width="15%" align="left" valign="bottom">
                            Ngày:
                          <input type="text" style="width:140px;" name="dateds" id="dateds" value="<?php echo $this->_tpl_vars['dateds']; ?>
"  />
                        </td>
                        <td width="20%" align="left" valign="bottom">
                           Điện thoại : 
                           <input type="text" style="width:180px;" name="phones" value="<?php echo $this->_tpl_vars['phones']; ?>
"  />
                        </td>
                        
                         <td width="20%" align="left" valign="bottom">
                           <select name="idCity">
                               <option value=""> Khu Vực </option>
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
                                    <option <?php if ($this->_tpl_vars['city'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['cityShow']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['city'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['city'][$this->_sections['i']['index']]['name']; ?>
</option>
                                <?php endfor; endif; ?>
                           </select>
                        </td>

                        <td width="47%" align="left" valign="bottom">
                            <input type="submit" name="button" id="button" value=" Search " />
                        </td>
                      </tr>
                    </table>
                </form> 
          	</div>
            <b class="top"><b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b></b>
        </div>
         <div class="divtitle margin5">
            <div class="divleft">
                <div class="divright link00">
                    
                    <span style="float:left">
                        <strong>Tác Dụng:</strong> 
                    </span>

                     <?php if ($this->_tpl_vars['checkPer3'] == 'true'): ?> 
                        <div class="acti2"><img src="images/delete.png" /> 
                           <a href="javascript:void(0)" title="Delete" onclick="ChangeAction('index.php?do=saleup&act=dellist&cid=<?php echo $_REQUEST['cid']; ?>
');">
                                Xóa
                            </a> 
                        </div>
                      <?php else: ?>  
                         <div class="acti2"><img src="images/delete-no.png" /> 
                           <a>
                                Xóa
                            </a> 
                        </div>
                     <?php endif; ?> 
              </div>
            </div>
        </div>
      <div class="tbtitle2 link00" >
        <div class="left"></div> 
          <div class="right"></div>
         <form name="f" id="f" method="post"  action="index.php?do=saleup&act=dellist&cid=1">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>
                        <table class="br1"  style="border-bottom:0px" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="5%" height="25" align="center" class="brbottom">
                                	<input type="checkbox" onclick="checkAll();"  name="all"/>                                  
                                </td>
                                <td width="7%" height="25" align="center" class="brbottom brleft">
                                    <strong>STT</strong>
                                </td>
                                
                                <td height="25"  align="center" class="brbottom brleft">
                                    <strong> Ngày </strong>
                                </td>
                                
                                <td height="25"  align="center" class="brbottom brleft">
                                    <strong> Họ tên </strong>
                                </td>
                                
                                <td height="25"  align="center" class="brbottom brleft">
                                    <strong> Điện thoại </strong>
                                </td>
                                
                                <td width="10%" height="25" align="center" class="brbottom brleft">
                                    Khu Vực
                                </td>
                               
                          </tr>
                         
                          <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['view']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <?php if ($this->_sections['i']['index']%2 == 0): ?>
                               <?php $this->assign('class', 'bgno'); ?> 
                            <?php else: ?>
                                <?php $this->assign('class', 'bgf2'); ?>
                           <?php endif; ?>      
                        <tr class="<?php echo smarty_function_cycle(array('values' => 'bgno,bgf2'), $this);?>
"  onmouseout="this.className='<?php echo $this->_tpl_vars['class']; ?>
'" onmouseover="this.className='bgonmose'" id="g<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['mspid']; ?>
">
                            <td class="pa_t_b brbottom"  align="center">
                               <input type="checkbox" value="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
" name="iddel[]" id="check<?php echo $this->_sections['i']['index']; ?>
">
                            </td>
                            <td  align="center" class="brleft pa_t_b  brbottom">
                                <?php echo $this->_sections['i']['index']+1+$this->_tpl_vars['number']; ?>

                            </td>
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	 <?php echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']]['dated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>

                            </td>
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	 <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['name']; ?>

                            </td>
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	 <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['phone']; ?>

                            </td>
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	 <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'NameCity', 'city_id' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['idcity'])), $this); ?>

                            </td>
                          </tr> 
                         <?php endfor; endif; ?> 
                                                        
                      </table>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        
                    </td>
                  </tr>
                </table>
             </form>
      </div>
      
      <div class="tbtitle2">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="25" align="left">&nbsp;&nbsp;<strong>Tổng Số <?php echo $this->_tpl_vars['total']; ?>
 Trang</strong></td>
                <td height="25" align="right" class="link00"><?php echo $this->_tpl_vars['link_url']; ?>
&nbsp;&nbsp;</td>
              </tr>
          </table>
        </div> 
        
      <div class="clear"></div>
    </div>
    
</div>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#dateds").datepicker({dateFormat:"yy-mm-dd"});
	 });
</script>