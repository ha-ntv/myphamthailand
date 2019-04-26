<?php /* Smarty version 2.6.6, created on 2016-02-24 12:11:06
         compiled from products/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'products/list.tpl', 5, false),array('insert', 'countNhapKho', 'products/list.tpl', 25, false),array('insert', 'tbcongHangTon', 'products/list.tpl', 47, false),array('function', 'cycle', 'products/list.tpl', 26, false),)), $this); ?>
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'HearderCat', 'cid' => $_REQUEST['cat1'], 'act' => $_REQUEST['do'], 'root' => 1)), $this); ?>

            </div>
            <div class="TitleRight">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./thongkekho.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
            <div class="Clear"></div>
       </div>
       <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/tab-menu.css" />  
       <table width="100%" border="0">
            <tr>
                <td class="k-header First"></td>
                <td class="k-header First">Mã sản phẩm </td>
                <td class="k-header">Tên sản phẩm</td>
                <td class="k-header">SL-Nhập</td>
                <td class="k-header">SL-Bán</td>
                <td class="k-header">Tồn-kho</td>
                <td class="k-header">TB-Cộng/vnđ</td>
                <td class="k-header">Bảo-hành</td>
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
                 <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'countNhapKho', 'idpr' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['id'], 'act' => 'soluongtonkho', 'assign' => 'soluongtonkho')), $this); ?>

                 <tr <?php if ($this->_tpl_vars['soluongtonkho'] <= 5): ?>class="trColorNone"<?php else: ?> class="<?php echo smarty_function_cycle(array('values' => 'trColorOne,trColorTwo'), $this);?>
" <?php endif; ?>>
                    <td align="center" style="padding-right:2px;">
                    	<a  href="javascript:void(0)" onclick="showtb(<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
);" id="class<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
" class="fa fa-caret-right k-plus"></a>
                    </td>
                    <td onclick="location.href='<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/'">
                        <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['codesp1']; ?>

                    </td>
                    <td onclick="location.href='<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/'">
                        <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['name_vn']; ?>

                    </td>
                    
                    <td align="center" onclick="location.href='<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/'">
                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'countNhapKho', 'idpr' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['id'], 'act' => 'soluongnhap')), $this); ?>

                    </td>
                    <td align="center" onclick="location.href='<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/'">
                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'countNhapKho', 'idpr' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['id'], 'act' => 'soluongban')), $this); ?>

                    </td>
                    <td align="center" onclick="location.href='<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/'">
                     	<?php echo $this->_tpl_vars['soluongtonkho']; ?>
  
                    </td>
                    <td align="center" onclick="location.href='<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/'">
                       <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'tbcongHangTon', 'idpr' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['id'], 'act' => 'trungBinhCong')), $this); ?>

                    </td>
                    
                    <td align="center" onclick="location.href='<?php echo $this->_tpl_vars['path_url']; ?>
/serial/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/'">
                       <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'countNhapKho', 'idpr' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['id'], 'act' => 'soluongbaohang')), $this); ?>

                    </td>
                </tr>
                <tr style="display:none;" class="tableshow" id="tb<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
">
                    <td colspan="8" style="padding:0;">
                        <div class="tdshowtabmenu" id="tdshow<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
" ></div>
                    </td>
                </tr>
            <?php endfor; endif; ?>
            <script>
            	function showtb(id){
					if($('#tb'+id).css('display')=='none'){
						$('.tableshow').hide();
						$('#tb'+id).show();
						$('.tdshowtabmenu').html('');
						$(".fa").removeClass("fa-caret-down");
						$("#class"+id).addClass("fa-caret-down");
						$.post('<?php echo $this->_tpl_vars['path_url']; ?>
/ajax/Checkip.php',{act:'tablePr',id:id},function(data) {
							 var obj = jQuery.parseJSON(data);
							 $('#tdshow'+id).html(obj.status);
						});
					}
					else{
						$('#tb'+id).hide();
						$("#class"+id).removeClass("fa-caret-down");
						$('#tdshow'+id).html('');	
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