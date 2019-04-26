<?php /* Smarty version 2.6.6, created on 2016-03-09 06:04:55
         compiled from thong-ke/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'thong-ke/list.tpl', 38, false),array('insert', 'getNameWeb', 'thong-ke/list.tpl', 39, false),array('insert', 'getThongKe', 'thong-ke/list.tpl', 58, false),)), $this); ?>
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <span class="subconten">		
					<?php echo $this->_tpl_vars['Title']; ?>

				</span>
            </div>
            <div class="TitleRight">
            	<form  name="thongke" method="post" action="<?php echo $this->_tpl_vars['path_url']; ?>
/thong-ke/" >
                	 <select id="actthongke" name="actthongke">
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['thongke']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    		<option <?php if ($this->_tpl_vars['thongke'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['idthongke']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['thongke'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['thongke'][$this->_sections['i']['index']]['name']; ?>
</option>
                        <?php endfor; endif; ?> 
                    </select>
                    
                    <input type="text" id="FromDate" name="FromDate" value="<?php echo $this->_tpl_vars['FromDate']; ?>
"  placeholder='Từ ngày' />
                    <input type="text" id="ToDate" name="ToDate" value="<?php echo $this->_tpl_vars['ToDate']; ?>
"  placeholder='Đến ngày'/>
                    <a title="Thêm mới" class="kv2Btn" href="javascript:void(0)" onclick="thongkeSubmit()">
                        <i class="fa fa-search"></i> Tìm kiếm   
                    </a>
                </form>
                <script language="javascript">
					$(document).ready(function(){
						$("#FromDate").datepicker({changeMonth: true, changeYear: true,dateFormat:"yy-mm-dd"});
						$("#ToDate").datepicker({changeMonth: true, changeYear: true,dateFormat:"yy-mm-dd"});
					});
					function thongkeSubmit(){
						document.thongke.submit();
					}
				</script>
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
                    <td class="k-header First" colspan="8" style="background:none;"> <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getNameWeb', 'table' => 'categories', 'typename' => 'name_vn', 'id' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['id'])), $this); ?>
</td>
                </tr>
                <tr>
                    <?php if ($this->_tpl_vars['checkBanhang'] == 1 || $this->_tpl_vars['checkBanhang'] == 2): ?>
                        <td class="k-header First">Stt</td>
                        <td class="k-header">Mã hàng </td>
                        <td class="k-header">Tên hàng</td>
                        <td class="k-header">Số lượng</td>
                        <td class="k-header" align="center">View</td>
                    <?php else: ?>
                        <td class="k-header First">Stt</td>
                        <td class="k-header">Mã hàng </td>
                        <td class="k-header">Tên hàng</td>
                        <td class="k-header">Tồn kho</td>
                        <td class="k-header">TB-Cộng/vnđ</td>
                        <td class="k-header">Bảo-hành</td>
                        <td class="k-header" align="center">View</td>
                    <?php endif; ?>
                </tr>
               	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getThongKe', 'FromDate' => $this->_tpl_vars['FromDate'], 'ToDate' => $this->_tpl_vars['ToDate'], 'cid' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['id'], 'checkBanhang' => $this->_tpl_vars['checkBanhang'], 'assign' => 'showThongKe')), $this); ?>
 
                <?php echo $this->_tpl_vars['showThongKe']['list']; ?>
 
               
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="93%" align="right" colspan="4" class="k-header-page"><strong> Tổng:  <?php echo $this->_tpl_vars['showThongKe']['countList']; ?>
</strong></td>
                    <td align="right" colspan="4" class="k-header-page"></td>
                </tr>
             </table>
        	<?php $this->assign('total', $this->_tpl_vars['total']+$this->_tpl_vars['showThongKe']['countList']); ?>
       <?php endfor; endif; ?>

        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr class="trColorOne">
            	<td width="93%" align="right" colspan="4" class="k-header-page" style="background:none;"><strong> Tổng cộng:  <?php echo $this->_tpl_vars['total']; ?>
</strong></td>
                <td align="right" colspan="4" class="k-header-page" style="background:none;"></td>
            </tr>
         </table>

    </div>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>