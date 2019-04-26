<?php /* Smarty version 2.6.6, created on 2016-04-24 09:08:39
         compiled from serial/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'serial/list.tpl', 7, false),array('insert', 'getName', 'serial/list.tpl', 49, false),array('function', 'cycle', 'serial/list.tpl', 31, false),array('modifier', 'number_format', 'serial/list.tpl', 39, false),)), $this); ?>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.1.css" media="screen" />
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'HearderCat', 'cid' => $_REQUEST['cat1'], 'act' => $_REQUEST['do'], 'root' => 1)), $this); ?>

                <span class="subconten"><img style="margin-top:9px" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon.gif"></span>
                <span class="subconten">		
					<?php echo $this->_tpl_vars['namePr']['name_vn']; ?>
 
				</span>
            </div>
            
            <div class="Clear"></div>
       </div>
        
       <table width="100%" border="0">
            <tr>
                <td class="k-header First">Stt</td>
                <td class="k-header">Số Serial </td>
                <td class="k-header">Giá nhập</td>
                <td class="k-header">Giá bán</td>
                <td class="k-header">Ngày nhập</td>
                <td class="k-header">Đối tác</td>
                <td class="k-header" align="center">TT Hàng</td>
                <td class="k-header" align="center">Bảo Hành</td>
                <td class="k-header" align="center">Del/edit/View</td>
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
                 
                <tr class="<?php echo smarty_function_cycle(array('values' => 'trColorOne,trColorTwo'), $this);?>
">
                    <td>
                        <?php echo $this->_sections['i']['index']+1+$this->_tpl_vars['number']; ?>

                    </td>
                    <td>
                        <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['code']; ?>

                    </td>
                    <td>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']]['pricenhap'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>

                    </td>
                    
                    <td>
                         <?php echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']]['priceban'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>

                    </td>
                    <td>
                        <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['dated']; ?>

                    </td>
                    <td>
                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getName', 'id' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['idpartner'], 'table' => 'partner')), $this); ?>

                    </td>
                    <td align="center">
                         <?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['active'] == '1'): ?>	
                             <a href="javascript:void(0)" title="Bán hàng">  
                                Chưa bán
                             </a>
                         <?php else: ?> 
                         	 <a href="javascript:void(0)" onclick="banTra('<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $_REQUEST['cat2']; ?>
/trahang/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['maphieu']; ?>
/')"  title="Trả hàng">
                            	Đã bán
                             </a>
                         <?php endif; ?>
                    </td>
                    
                    <td align="center">
                    	 <?php if ($this->_tpl_vars['checkPer2'] == 'true'): ?>
                             <?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['baohanh'] == '1'): ?>
                                <a href="javascript:void(0)" onclick="domainHide('<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $_REQUEST['cat2']; ?>
/baohanhxong/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['maphieu']; ?>
/')"  title="Bảo hành xong"> 
                                    <i class="fa fa-home"></i>
                                </a>
                             <?php elseif ($this->_tpl_vars['view'][$this->_sections['i']['index']]['baohanh'] == '2'): ?> 
                                <a href="javascript:void(0)" onclick="domainHide('<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $_REQUEST['cat2']; ?>
/baohanhxong/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['maphieu']; ?>
/')" title="Bảo hành xong"> 
                                    <i class="fa fa-user"></i>
                                </a>
                             <?php else: ?> 
                                <a href="javascript:void(0)" onclick="domainShow(<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
)" id="btnshow<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
"  title="Bảo hành xong">
                                    <img src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/hide.png" />
                                </a>
                             <?php endif; ?>
                         <?php else: ?>
                         	<img src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/hide-no.png" />
                         <?php endif; ?>
                         <div id="showbaohanh<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
" style="display: none;">
                            <select name="baohanh" id="baohanh" onchange="getBaohanh(<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
,this.value)">
                                <option value="0">--Chọn Bảo hành--</option>
                                <option value="1"> Bảo hành kho </option>
                                <option value="2"> Bảo hành khách </option>
                            </select>   
                        </div>
                        
                    </td>
                    
                    <td align="center">
                    	<?php if ($this->_tpl_vars['checkPer3'] == 'true'): ?>	
                            <a title="Xóa" href="javascript:void(0)" onclick="Dele('<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $_REQUEST['cat2']; ?>
/delete/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['maphieu']; ?>
/');">
                                <i class="fa fa-trashlist"></i>
                            </a>
                         <?php else: ?>
                            <i class="fa fa-trashlist colorxam"></i>
                        <?php endif; ?> 
                      	<?php if ($this->_tpl_vars['checkPer2'] == 'true'): ?>      
                            <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $_REQUEST['cat2']; ?>
/edit/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['maphieu']; ?>
/" title="Sửa">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                             
                        <?php else: ?>
                            <i class="fa fa-pencil-square-o colorxam"></i>
                        <?php endif; ?>
                        <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $_REQUEST['cat2']; ?>
/view/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/<?php echo $this->_tpl_vars['maphieu']; ?>
/" title="View">
                            <i class="fa a-file-text-o"></i>
                        </a>  
                    </td>
                </tr>
            <?php endfor; endif; ?>
            <script>
				function getBaohanh(id,idbaohanh){
				
					var answer = confirm("Bạn chất muốn thực hiện không?");
					if (answer)
					{
						var url = '<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $_REQUEST['cat2']; ?>
/baohanh/'+id+'/'+idbaohanh+'/<?php echo $this->_tpl_vars['maphieu']; ?>
/';
						window.location.href = url;
					}
					else{
						$('#showbaohanh'+id).hide();
						$('#btnshow'+id).show();
					}
				}
				function domainShow(a){
					
					$('#showbaohanh'+a).show();
					$('#btnshow'+a).hide();
					$('#btnhide'+a).show();
				}	
				function domainHide(url){
					var answer = confirm("Bạn chất muốn thực hiện không?");
					if (answer)
					{
						window.location.href = url;
					}
				}
				
				function banTra(url){
					var answer = confirm("Bạn chất muốn thực hiện không?");
					if (answer)
					{
						window.location.href = url;
					}
				}
				
			</script>
        </table>
     <?php if ($this->_tpl_vars['link_url'] != ''): ?>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr>
                <td align="right" class="k-header-page"> <?php echo $this->_tpl_vars['link_url']; ?>
 </td>
            </tr>
        </table>
    <?php endif; ?>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>