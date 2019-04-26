<?php /* Smarty version 2.6.6, created on 2016-03-13 02:15:16
         compiled from thong-ke/ton-kho.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'thong-ke/ton-kho.tpl', 30, false),array('modifier', 'number_format', 'thong-ke/ton-kho.tpl', 38, false),array('insert', 'getName', 'thong-ke/ton-kho.tpl', 48, false),)), $this); ?>
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
            	<span class="subconten">		
					<?php echo $this->_tpl_vars['Title']; ?>

				</span>
                <span class="subconten"><img style="margin-top:9px" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon.gif"></span>
                <span class="subconten">		
					View
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
                         	 Chưa bán
                         <?php else: ?> 
                            Đã bán
                         <?php endif; ?>
                    </td>
                    
                    <td align="center">
                         <?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['baohanh'] == '1'): ?>
                            <i class="fa fa-home"></i>
                         <?php elseif ($this->_tpl_vars['view'][$this->_sections['i']['index']]['baohanh'] == '2'): ?> 
                            <i class="fa fa-user"></i>
                         <?php else: ?> 
                            <img src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/hide.png" />
                         <?php endif; ?>
                    </td>
                    
                    
                </tr>
            <?php endfor; endif; ?>
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