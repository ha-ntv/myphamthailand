<?php /* Smarty version 2.6.6, created on 2016-03-18 02:01:28
         compiled from khach-hang/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'khach-hang/list.tpl', 5, false),array('function', 'cycle', 'khach-hang/list.tpl', 40, false),)), $this); ?>
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'HearderCat', 'cid' => $_REQUEST['cat1'], 'act' => $_REQUEST['do'], 'root' => 1)), $this); ?>

                <span class="subconten"><img style="margin-top:9px" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon.gif"></span>
                 <span class="subconten">		
					<a href="<?php echo $this->_tpl_vars['path_url']; ?>
/khach-hang/<?php echo $_REQUEST['cat1']; ?>
/0/">Nhà cung cấp</a> 
				</span>
            </div>
            <div class="TitleRight">
            	<?php if ($this->_tpl_vars['checkPer1'] == 'true'): ?>
                    <a title="Thêm mới" class="kv2Btn" href="<?php echo $this->_tpl_vars['path_url']; ?>
/khach-hang/<?php echo $_REQUEST['cat1']; ?>
/0/add/">
                        <i class="fa fa-plus"></i> Thêm mới 
                    </a>
                <?php else: ?>
                	 <a class="kv2Btn colorxam">
                        <i class="fa fa-plus colorxam"></i> Thêm mới 
                    </a>
                <?php endif; ?> 
                
                
                <a title="Thêm mới" class="kv2Btn" href="javascript:void(0)">
                    : &nbsp; &nbsp; &nbsp;  
                </a>
            </div>
            <div class="Clear"></div>
       </div>
        
       <table width="100%" border="0">
            <tr>
                <td class="k-header First">Stt</td>
                <td class="k-header">Tên</td>
                <td class="k-header">Phone</td>
                <td class="k-header">Email</td>
                <td class="k-header" align="center">Del/edit</td>
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
                        <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['name']; ?>

                    </td>
                    <td>
                        <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['phone']; ?>

                    </td>
                    
                    <td>
                         <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['email']; ?>

                    </td>
                    
                    <td align="center">
                    	<?php if ($this->_tpl_vars['checkPer3'] == 'true'): ?>	
                            <a title="Xóa" href="javascript:void(0)" onclick="Dele('<?php echo $this->_tpl_vars['path_url']; ?>
/khach-hang/<?php echo $_REQUEST['cat1']; ?>
/0/delete/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/');">
                                <i class="fa fa-trashlist"></i>
                            </a>
                         <?php else: ?>
                            <i class="fa fa-trashlist colorxam"></i>
                        <?php endif; ?> 
                   		
                        <?php if ($this->_tpl_vars['checkPer2'] == 'true'): ?>      
                            <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/khach-hang/<?php echo $_REQUEST['cat1']; ?>
/0/edit/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/" title="Sửa">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>   
                        <?php else: ?>
                            <i class="fa fa-pencil-square-o colorxam"></i>
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