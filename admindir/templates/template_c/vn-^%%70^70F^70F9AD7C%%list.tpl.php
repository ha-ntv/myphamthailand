<?php /* Smarty version 2.6.6, created on 2019-03-18 04:24:48
         compiled from city/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'city/list.tpl', 140, false),array('modifier', 'number_format', 'city/list.tpl', 162, false),)), $this); ?>
 <div class="conten_body">
   <div class="conten">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">
                    <span class="subconten">
                    	<a title="Menu" href="index.php?do=city">		
                        	Tỉnh thành
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
                <div class="divright link00">
                    
                    <span style="float:left">
                        <strong>Tác Dụng:</strong> 
                    </span>
                    <?php if ($this->_tpl_vars['checkPer1'] == 'true'): ?>
                        <div class="acti2"><img src="images/add.png" /> 
                            <a href="javascript:void(0)" title="Add" onclick="ChangeAdd('index.php?do=city&act=add&cid=<?php echo $_REQUEST['cid']; ?>
');">
                                Thêm mới
                            </a> 
                        </div>
                    <?php else: ?>  
                        <div class="acti2"><img src="images/add-no.png" /> 
                            <a>
                                Thêm mới
                            </a> 
                        </div>	
                    <?php endif; ?> 
                    
                     <?php if ($this->_tpl_vars['checkPer3'] == 'true'): ?> 
                        <div class="acti2"><img src="images/delete.png" /> 
                           <a href="javascript:void(0)" title="Delete" onclick="ChangeAction('index.php?do=city&act=dellist&cid=<?php echo $_REQUEST['cid']; ?>
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
                    
                     <?php if ($this->_tpl_vars['checkPer2'] == 'true'): ?>
                        <div class="acti2"><img src="images/active.png" /> 
                           <a href="javascript:void(0)" title="Show" onclick="ChangeAction('index.php?do=city&act=show&cid=<?php echo $_REQUEST['cid']; ?>
')" >
                                Hoạt Động
                            </a> 
                        </div>
                        
                        <div class="acti2"><img src="images/inactive.png" /> 
                            <a href="javascript:void(0)" title="Hide" onclick="ChangeAction('index.php?do=city&act=hide&cid=<?php echo $_REQUEST['cid']; ?>
');">
                                Không Hoạt Động
                            </a>           
                        </div>
                                                 
                        <div class="acti2"><img src="images/order.png" /> 
                          <a href="javascript:void(0)" title="Order" onclick="ChangeAction('index.php?do=city&act=order&cid=<?php echo $_REQUEST['cid']; ?>
');">
                                Order
                            </a>           
                        </div>
                   	<?php else: ?>  
                        <div class="acti2"><img src="images/active-no.png" /> 
                           <a>
                                Hoạt Động
                            </a> 
                        </div>
                        
                        <div class="acti2"><img src="images/inactive-no.png" /> 
                            <a>
                                Không Hoạt Động
                            </a> 
                                      
                        </div>
                                                 
                        <div class="acti2"><img src="images/order-no.png" /> 
                          <a>
                                Order
                            </a> 
                                      
                        </div>
                   <?php endif; ?>   
              </div>
            </div>
        </div>
      <div class="tbtitle2 link00" >
        <div class="left"></div> 
          <div class="right"></div>
         <form name="f" id="f" method="post"  action="index.php?do=city&act=dellist&cid=1">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>
                        <table class="br1"  style="border-bottom:0px" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="5%" height="25" align="center" class="brbottom">
                                	<input type="checkbox" onclick="checkAll();"  name="all"/>                                  
                                </td>
                                <td width="5%" height="25" align="center" class="brbottom brleft">
                                    <strong>STT</strong>
                                </td>
                                <td width="8%" height="25"  align="center" class="brbottom brleft">
                                    <strong>ORDER</strong>
                                </td>
                                
                                <td  height="25"  align="center" class="brbottom brleft">
                                    <strong> NAME  </strong>
                                </td>
                                
                                 <td  height="25" width="15%" align="center" class="brbottom brleft">
                                    <strong> Phí Ship </strong>
                                </td>
                                
                                <td width="10%" height="25" align="center" class="brbottom brleft">
                                    <strong>SHOW/HIDE </strong>
                                </td>                                     
                                <td width="7%" height="25" align="center" class="brbottom brleft">
                                    <strong>EDIT</strong>
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
                            
                            <td align="center" class="brleft paleft pa_t_b  brbottom linkblack">
                                <input type="text" name="ordering[]" class="InputOrder"  value="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['num']; ?>
" size="2">
								<input type="hidden" name="id[]" value="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
" />
                            </td>
                           
                           
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                                <a href="index.php?do=district&city_id=<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
&p=<?php echo $_REQUEST['p']; ?>
" border="0">
                                    <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['name']; ?>

                                </a>
                            </td>
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                            	<?php echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']]['price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>
 đ                            
                            </td>
                                                       
                            <td  align="center" class="brleft pa_t_b  brbottom">
                               <?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['active'] == '1'): ?>
                                    <img src="images/active.png" alt="Show\Hide"  />
                                 <?php else: ?> 
                                    <img src="images/hide.png" alt="Show\Hide"  />
                                 <?php endif; ?>
                            </td>
                            <td  align="center" class="brleft paleft pa_t_b  brbottom">
                            	<?php if ($this->_tpl_vars['checkPer2'] == 'true'): ?>
                                    <div class="acti">
                                        <img src="images/icon3.gif"  align="left"/> 
                                          <a href="index.php?do=city&act=edit&id=<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
&cid=<?php echo $_REQUEST['cid']; ?>
&p=<?php echo $_REQUEST['p']; ?>
" title="Eidt"> 
                                            Sửa
                                          </a>
                                     </div>
                                <?php else: ?>
                                     <div class="acti">
                                        <img src="images/icon3-no.png"  align="left"/> 
                                          <a> 
                                            Sửa
                                          </a>
                                     </div>
                                <?php endif; ?>  
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
