<?php /* Smarty version 2.6.6, created on 2016-02-24 09:05:05
         compiled from main/main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getSapHetHang', 'main/main.tpl', 7, false),)), $this); ?>
<div class="WrapContent">
	<div class="dashboardBox">
		<div class="homeTtile">Sản phẩm sắp hết hàng </div>
       
        <table width="100%" border="0">
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
            	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getSapHetHang', 'id' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['id'], 'assign' => 'checkSapHetHang')), $this); ?>

                <?php if ($this->_tpl_vars['checkSapHetHang'] != ''): ?>
                    <tr>
                        <td class="k-header First"><?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['name_vn']; ?>
</td>
                        <td class="k-header">Tên sản phẩm</td>
                        <td class="k-header">Số lượng</td>
                    </tr>
                    <?php echo $this->_tpl_vars['checkSapHetHang']; ?>

                <?php endif; ?>
             <?php endfor; endif; ?>
         </table>
       
                    
         <!--           
          <table width="100%" cellspacing="0" cellpadding="0" border="0">
        	<tbody><tr>
                <td align="right" class="k-header-page"> <span>&nbsp;Đầu&nbsp;</span><span>&nbsp;&lt;&lt;&nbsp;</span><span><font color="#0066FF" style="font-family:Arial, Helvetica, sans-serif">&nbsp;1&nbsp;</font></span><a href="http://localhost/crm_new/products/82/0/0/2/">&nbsp;2&nbsp;</a><span>&nbsp;&gt;&gt;&nbsp;</span><span>&nbsp;Cuối&nbsp;</span> </td>
            </tr>
         </tbody></table>    
         -->
    </div> 
    
    <div class="dashboardBox">
		<div class="homeTtile">Kết quả bán hàng hôm nay</div> 
        <div class="uln dashboardStatistic">
            <ul>
                <li class="total ng-binding">
                    <label class="dash_icon"><i class="fa fa-usd-home"></i></label>
                    <label class="dash_title ng-binding">0 Hóa đơn</label>
                    <span class="ng-binding">0</span>
                    Doanh số
                </li>
                <li class="vote ng-binding">
                    <label class="dash_icon"><i class="fa fa-reply-all"></i></label>
                    <label class="dash_title ng-binding">0 phiếu</label>
                    <span class="ng-binding">0</span>
                    Trả hàng                        
                </li>
               
            </ul>
       </div>
    </div>  
</div>