<?php /* Smarty version 2.6.6, created on 2016-03-03 02:19:03
         compiled from users/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'users/list.tpl', 35, false),array('insert', 'getNameWeb', 'users/list.tpl', 46, false),)), $this); ?>
<div class="WrapContent">
	<div class="dashboardBox">
		<div class="homeTtile">
        	Quảng lý người dùng
            <div class="TitleRight Fr">
                <a title="Thêm mới" class="kv2Btn" style="font-size:11px; line-height:23px !important; right:-8px; top:-5px;" href="<?php echo $this->_tpl_vars['path_url']; ?>
/users/add/">
                    <i class="fa fa-plus"></i> Thêm mới 
                </a>
            </div>
        
        </div>
       	<form name="f" id="f" method="post">
            <table width="100%" border="0">
                <tr>
                    <td class="k-header First">STT</td>
                    <td class="k-header">Username</td>
                    <td class="k-header">Full Name</td>
                    <td class="k-header">
                    	<select name="idCity" style="width:100%; text-transform:capitalize" onchange="showCity(this.value)">
                            <option value="">----Khu Vực----</option>
                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['cityHome']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <option <?php if ($this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['cityShow']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['name']; ?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                        <script type="text/javascript">
                            function showCity(id){
                                $(location).attr('href','<?php echo $this->_tpl_vars['path_url']; ?>
/users/'+id+'/');   
                            }
                        </script>
                    </td>
                    <td class="k-header">Permission</td>
                    <td class="k-header" align="center">Edit/Del</td>
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
                            <?php echo $this->_sections['i']['index']+1; ?>

                        </td>
                        <td>
                            <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['username']; ?>

                        </td>
                        <td>
                            <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['name']; ?>

                        </td>
                        <td>
                            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getNameWeb', 'id' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['idcity'], 'table' => 'city', 'typename' => 'name')), $this); ?>

                        </td>
                        <td align="center"> 
                            <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/permission/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/" title="Edit"> 
                            	<i class="fa fa-lock"></i> 
                            </a>
                        </td>
                        <td align="center">
                            <a title="Xóa" href="javascript:void(0)" onclick="Dele('<?php echo $this->_tpl_vars['path_url']; ?>
/users/dellist/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/');">
                                <i class="fa fa-trashlist"></i>
                            </a>
                        
                            <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/users/edit/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
/" title="Edit"> 
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                            
                        </td>
                    </tr>
                <?php endfor; endif; ?>                   
             </table>
       
         </form>                     
          <?php if ($this->_tpl_vars['link_url'] != ''): ?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="right" class="k-header-page"> <?php echo $this->_tpl_vars['link_url']; ?>
 </td>
                </tr>
             </table>
          <?php endif; ?>  
    </div>   
</div>