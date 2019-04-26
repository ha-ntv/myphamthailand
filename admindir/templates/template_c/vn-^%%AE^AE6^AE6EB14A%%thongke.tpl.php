<?php /* Smarty version 2.6.6, created on 2017-09-11 16:05:41
         compiled from competitorslink/thongke.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getNamePrSearch', 'competitorslink/thongke.tpl', 20, false),array('insert', 'getPriceSoSanh', 'competitorslink/thongke.tpl', 106, false),array('modifier', 'number_format', 'competitorslink/thongke.tpl', 100, false),)), $this); ?>
 <div class="conten_body">
   <div class="conten">
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
        <div class="raised"> 
            <b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b></b>           
            <div class="boxcontent">
            
          </div>
            <b class="top"><b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b></b>
        </div>
         <div class="divtitle margin5">
            <div class="divleft">
                <div class="divright link00" style="text-align:center; font-size:26px;color: #005ebb;">
                    	So sánh giá tự động các đối thủ cạnh tranh
                    
              </div>
            </div>
        </div>
      <div class="tbtitle2 link00" >
        <div class="left"></div> 
          <div class="right"></div>
         <form name="f" id="f" method="post"  action="index.php?do=competitorslink&act=dellist&cid=1">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>
                        <table class="br1"  style="border-bottom:0px" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="3%" height="25" align="center" class="brbottom brleft">
                                    <strong>STT</strong>
                                </td>
                            
                                 <td  align="center" class="brbottom brleft">
                                    <strong> Tên sản phẩm </strong>
                                </td>
                                
                                <td  align="center" class="brbottom brleft">
                                    <strong> VAM </strong>
                                </td>
                                <?php if ($_REQUEST['type'] == 17): ?>
                                	<td  align="center" class="brbottom brleft">
                                        <strong> VAM TPHCM</strong>
                                    </td>
                                <?php endif; ?>
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
                                	<td  align="center" class="brbottom brleft">
                                        <strong>  <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['name_vn']; ?>
 </strong>
                                    </td>
                                <?php endfor; endif; ?>  
                          </tr>
                         
                        <tr class="bgno"  onmouseout="this.className='bgno'" onmouseover="this.className='bgonmose'">
                            <td  align="center" class="brleft pa_t_b  brbottom">
                                1
                            </td>
                            
                            <td align="center" class="brleft paleft pa_t_b  brbottom linkblack">
                                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getNamePrSearch', 'idpr' => $this->_tpl_vars['viewidpr']['idpr'], 'type' => 'name', 'idkhuvuc' => $_REQUEST['type'])), $this); ?>

                            </td>
                            
                            <td align="center" class="brleft paleft pa_t_b  brbottom linkblack">
                                <strong><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getNamePrSearch', 'idpr' => $this->_tpl_vars['viewidpr']['idpr'], 'type' => 'price', 'idkhuvuc' => $_REQUEST['type'])), $this); ?>
</strong>
                            </td>
                            
                            <?php if ($_REQUEST['type'] == 17): ?>
                                <td  align="center" class="brbottom brleft brbottom linkblack">
                                   <strong><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getNamePrSearch', 'idpr' => $this->_tpl_vars['viewidpr']['idpr'], 'type' => 'price', 'idkhuvuc' => 1)), $this); ?>
</strong>
                                </td>
                            <?php endif; ?>
                                
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
                                <td align="center" class="brleft paleft pa_t_b  brbottom linkblack">
                                	<strong>
                                    	<?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['price'] > 0): ?>
                                        	<?php if ($this->_tpl_vars['priceVam'] > $this->_tpl_vars['view'][$this->_sections['i']['index']]['price']): ?>
                                            	<span style="color:#ed1b24 ;">
                                    				<?php echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']]['price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>

                                                </span>
                                            <?php else: ?>  
                                            	<?php echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']]['price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>

                                            <?php endif; ?>  
                                        <?php else: ?>
                                        	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getPriceSoSanh', 'links' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['links'], 'price' => $this->_tpl_vars['priceVam'])), $this); ?>

                                        <?php endif; ?>
                                   </strong>
                                </td>
							<?php endfor; endif; ?> 
                          </tr> 
                          
                          <tr class="bgno"  onmouseout="this.className='bgno'" onmouseover="this.className='bgonmose'">
                            <td  align="center" class="brleft pa_t_b  brbottom"> </td>
                            
                            <td align="center" class="brleft paleft pa_t_b  brbottom linkblack"> </td>
                            
                            <td align="center" class="brleft paleft pa_t_b  brbottom linkblack"> 
                            	<a title="vietanhmobile" href="<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getNamePrSearch', 'idpr' => $this->_tpl_vars['viewidpr']['idpr'], 'type' => 'links')), $this); ?>
" target="_blank">View</a>	
                            </td>
                            
                            <?php if ($_REQUEST['type'] == 17): ?>
                                <td align="center" class="brleft paleft pa_t_b  brbottom linkblack"> 
                                    <a title="vietanhmobile" href="<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getNamePrSearch', 'idpr' => $this->_tpl_vars['viewidpr']['idpr'], 'type' => 'links')), $this); ?>
" target="_blank">View</a>	
                                </td>
                            <?php endif; ?>
                            
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
                                <td align="center" class="brleft paleft pa_t_b  brbottom linkblack">
                                	<a title="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['name_vn']; ?>
" href="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['links']; ?>
" target="_blank">View</a>
                                </td>
							<?php endfor; endif; ?> 
                          </tr> 
                         
                                                        
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
                <td height="25" align="left">&nbsp;&nbsp;</td>
                <td height="25" align="right" class="link00">&nbsp;&nbsp;</td>
              </tr>
          </table>
        </div> 
        
      <div class="clear"></div>
    </div>
    
</div>
