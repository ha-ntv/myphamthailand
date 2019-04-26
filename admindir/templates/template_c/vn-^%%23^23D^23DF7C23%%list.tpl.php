<?php /* Smarty version 2.6.6, created on 2019-03-18 15:56:07
         compiled from categories/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'categories/list.tpl', 16, false),array('insert', 'GetNameComponent', 'categories/list.tpl', 625, false),array('function', 'cycle', 'categories/list.tpl', 541, false),)), $this); ?>
 <div class="conten_body">


   <div class="conten">


        <div class="divtitle">


            <div class="divleft">


                <div class="divright">      


                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'HearderCat', 'cid' => $_REQUEST['cid'], 'root' => $_REQUEST['root'], 'act' => $_REQUEST['act'])), $this); ?>
                


                </div>


          </div>


        </div>


        <div class="raised"> 


            <b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b></b>           


            <div class="boxcontent">


            	<form name="search" action="index.php?do=products" method="post" enctype="multipart/form-data"> 


                    <table width="100%" border="0" cellspacing="4" cellpadding="0">


                      <tr>


                        <td width="15%" align="left" valign="bottom">


                            Mã SP:


                          <input type="text" style="width:120px;" name="codes" value="<?php echo $this->_tpl_vars['codes']; ?>
"  />


                        </td>


                        <td width="20%" align="left" valign="bottom">


                           Show/Hide : 


                           <select name="showhide">


                                <option value="">-----------All-----------</option>


                                <option value="1" <?php if ($this->_tpl_vars['showhide'] == 1): ?> selected="selected" <?php endif; ?> >Hoạt động</option>


                                <option value="2" <?php if ($this->_tpl_vars['showhide'] == 2): ?> selected="selected" <?php endif; ?>>Không hoạt động</option>


                                


                           </select>


                           


                        </td>


                        


                         <td width="20%" align="left" valign="bottom">


                           Tình trạng : 


                           <select name="types">


                                <option value="">-----------All-----------</option>


                                <option value="1" <?php if ($this->_tpl_vars['types'] == 1): ?> selected="selected" <?php endif; ?> >Còn hàng</option>


                                <option value="2" <?php if ($this->_tpl_vars['types'] == 2): ?> selected="selected" <?php endif; ?> >Hết hàng</option>   


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


                   <?php if ($this->_tpl_vars['checkPer1'] == 'true'): ?>


                      <div class="acti2"><img src="images/add.png" /> 


                            <a href="javascript:void(0)" title="Add" onclick="return check_cat('index.php?do=categories&act=add&cid=<?php echo $_REQUEST['cid']; ?>
&root=<?php echo $_REQUEST['root']; ?>
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


                           <a href="javascript:void(0)" title="Delete" onclick="ChangeAction('index.php?do=categories&act=dellist&cid=<?php echo $_REQUEST['cid']; ?>
&root=<?php echo $_REQUEST['root']; ?>
');">


                                Xóa


                            </a> 


                        </div>


                    <?php else: ?>  


                        <div class="acti2"><img src="images/delete-no.png" /> 


                           <a>


                                Xóa


                            </a> 


                    <?php endif; ?> 


                    


                    <?php if ($this->_tpl_vars['checkPer2'] == 'true'): ?>


                        <div class="acti2"><img src="images/active.png" /> 


                           <a href="javascript:void(0)" title="Show" onclick="ChangeAction('index.php?do=categories&act=show&cid=<?php echo $_REQUEST['cid']; ?>
&root=<?php echo $_REQUEST['root']; ?>
')" >


                                Hoạt Động


                            </a> 


                        </div>


                        


                        <div class="acti2"><img src="images/inactive.png" /> 


                            <a href="javascript:void(0)" title="Hide" onclick="ChangeAction('index.php?do=categories&act=hide&cid=<?php echo $_REQUEST['cid']; ?>
&root=<?php echo $_REQUEST['root']; ?>
');">


                                Không Hoạt Động


                            </a> 


                                      


                        </div>


                                                 


                        <div class="acti2"><img src="images/order.png" /> 


                          <a href="javascript:void(0)" title="Order" onclick="ChangeAction('index.php?do=categories&act=order&cid=<?php echo $_REQUEST['cid']; ?>
&root=<?php echo $_REQUEST['root']; ?>
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


                    <?php endif; ?> 


                   


                     


              </div>


            </div>


        </div>


      <div class="tbtitle2 link00" >


        <div class="left"></div> 


          <div class="right"></div>


          <form name="f" id="f" method="post"  action="index.php?do=categories&act=dellist&cid=1&root=1"  >


                <table width="100%" border="0" cellspacing="0" cellpadding="0">


                  <tr>


                    <td>


                        <table class="br1"  style="border-bottom:0px" width="100%" border="0" cellspacing="0" cellpadding="0">


                            <tr>


                                <td width="3%" height="25" align="center" class="brbottom">


                                	<input type="checkbox" onclick="checkAll();"  name="all"/>                                  


                                </td>


                                <td width="4%" height="25" align="center" class="brbottom brleft">


                                    <strong>STT</strong>


                                </td>


                                


                                <td width="8%" height="25"  align="center" class="brbottom brleft">


                                    <strong>ORDER</strong>


                                </td>


                                


                                <td height="25"  align="center" class="brbottom brleft">


                                    <strong>NAME </strong>


                                </td>


                                


                                <td width="18%" height="25" align="center" class="brbottom brleft">


                                    <strong> COMPONENT </strong>


                                </td>


                                <td width="15%" height="25" align="center" class="brbottom brleft">


                                    <strong>SubMenu</strong>


                                </td>


                                <td width="15%" height="25" align="center" class="brbottom brleft">


                                    <strong>Menu Thuộc Loại</strong>


                                </td>


                                <td width="8%" height="25" align="center" class="brbottom brleft">


                                    <strong>Home</strong>


                                </td>  


                                


                                <td width="10%" height="25" align="center" class="brbottom brleft">


                                    <strong>SHOW/HIDE </strong>


                                </td>                                     


                                <td width="8%" height="25" align="center" class="brbottom brleft">


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


                            


                           


                               <?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['has_child'] == 1): ?>


                               <td align="left" class="brleft paleft pa_t_b  brbottom linkblack TextUppercase">


                                   <a href="index.php?do=categories&cid=<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
&root=<?php echo $_REQUEST['root']; ?>
" border="0">


                                        <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['name_vn']; ?>



                                    </a>


                                <?php else: ?>


                                <td align="left" class="brleft paleft pa_t_b  brbottom linkblack">


                                    <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['name_vn']; ?>



                                <?php endif; ?>	


                            </td> 


                            


                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack TextComent">


                             	<?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['has_child'] == '0'): ?>


                                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'GetNameComponent', 'comp' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['comp'], 'assign' => 'comp')), $this); ?>



                                    <a href="index.php<?php echo $this->_tpl_vars['comp']['back_link']; ?>
&cid=<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
">


                                        <?php echo $this->_tpl_vars['comp']['name']; ?>



                                    </a>


                                <?php endif; ?>


                               


                            </td>


                            


                            


                            <td  align="center" class="brleft pa_t_b  brbottom">


                            	<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['has_menu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>


                                     <?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['has_menu'] == $this->_tpl_vars['has_menu'][$this->_sections['j']['index']]['id']): ?>


                                        <?php echo $this->_tpl_vars['has_menu'][$this->_sections['j']['index']]['name']; ?>



                                    <?php endif; ?>


                                 <?php endfor; endif; ?>


                               


                            </td>


                            


                            <td  align="center" class="brleft pa_t_b  brbottom">


                                 <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['type']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>


                                     <?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['type'] == $this->_tpl_vars['type'][$this->_sections['j']['index']]['id']): ?>


                                        <?php echo $this->_tpl_vars['type'][$this->_sections['j']['index']]['name']; ?>



                                    <?php endif; ?>


                                 <?php endfor; endif; ?>


                            </td>   


                             <td  align="center" class="brleft pa_t_b  brbottom">


                               <?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['home'] == '1'): ?>


                                    <img src="images/active.png" alt="Show\Hide"  />


                                 <?php else: ?> 


                                    <img src="images/hide.png" alt="Show\Hide"  />


                                 <?php endif; ?>


                            </td>  


                            <td  align="center" class="brleft pa_t_b  brbottom">


                               <?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['active'] == '1'): ?>


                                    <img src="images/active.png" alt="Show\Hide"  />


                                 <?php else: ?> 


                                    <img src="images/hide.png" alt="Show\Hide"  />


                                 <?php endif; ?>


                            </td>


                            <td  align="center" class="brleft paleft pa_t_b  brbottom">





                            <div class="acti">


                               <?php if ($this->_tpl_vars['checkPer2'] == 'true'): ?>


                                    <img src="images/icon3.gif"  align="left"/> 


                                  <a href="index.php?do=categories&act=edit&id=<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
&cid=<?php echo $_REQUEST['cid']; ?>
&root=<?php echo $_REQUEST['root']; ?>
&p=<?php echo $_REQUEST['p']; ?>
" title="Eidt"> Sửa</a>


                                <?php else: ?>


                                     <img src="images/icon3-no.png"  align="left"/> 


                                  <a> Sửa</a>


                                <?php endif; ?>  


                             </div>


                           


                                           


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








<script language="javascript">


	function check_cat(url){


		jQuery.post('ajax/checkCat.php',{ 


		action: 'f',


		cid: <?php echo $_REQUEST['cid']; ?>



		},function(data){


			var obj = jQuery.parseJSON(data);


			if(obj.status == 'success'){


				document.location.href = url;


				return true;


			}


			else{


				alert('Không Thêm được nữa tạo tối đa là 2 cấp.');


			}


		});


		


	return false;


}


</script>




