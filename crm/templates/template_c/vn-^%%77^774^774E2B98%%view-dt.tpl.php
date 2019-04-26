<?php /* Smarty version 2.6.6, created on 2016-03-09 06:03:34
         compiled from phieu-nhap-hang/view-dt.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'phieu-nhap-hang/view-dt.tpl', 7, false),array('insert', 'getNameWeb', 'phieu-nhap-hang/view-dt.tpl', 25, false),array('insert', 'getViewDtPhieuNhapKho', 'phieu-nhap-hang/view-dt.tpl', 36, false),array('function', 'cycle', 'phieu-nhap-hang/view-dt.tpl', 24, false),)), $this); ?>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.1.css" media="screen" />
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'HearderCat', 'cid' => 2, 'act' => $_REQUEST['do'], 'root' => 1)), $this); ?>

                <span class="subconten"><img style="margin-top:9px" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon.gif"></span>
                <span class="subconten">
                	<a href="<?php echo $this->_tpl_vars['path_url']; ?>
/phieu-nhap-hang/">		
						Phiếu nhập hàng
                    </a>
				</span>
                <span class="subconten"><img style="margin-top:9px" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon.gif"></span>
                <span class="subconten">		
					Chi tiết 
				</span>
            </div>
            <div class="Clear"></div>
       </div>
       
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
           <table width="100%" border="0">
                <tr class="<?php echo smarty_function_cycle(array('values' => 'trColorOne,trColorTwo'), $this);?>
">
                    <td class="k-header First" colspan="2" style="background:none;"> <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getNameWeb', 'table' => 'categories', 'typename' => 'name_vn', 'id' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['cid'])), $this); ?>
</td>
                    <td class="k-header" colspan="4" style="background:none";><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getNameWeb', 'table' => 'products', 'typename' => 'name_vn', 'id' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['idpr'])), $this); ?>
 </td>
                </tr>
                <tr>
                    <td class="k-header First">Stt</td>
                    <td class="k-header">Số Serial </td>
                    <td class="k-header">Giá nhập</td>
                    <td class="k-header">Ngày nhập</td>
                    <td class="k-header">Đối tác</td>
                    <td class="k-header" align="center">Del/edit</td>
                </tr> 
                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getViewDtPhieuNhapKho', 'maphieu' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['maphieu'], 'cid' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['cid'])), $this); ?>
 
               
            </table>
        <br /><br />
       <?php endfor; endif; ?>
   
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>