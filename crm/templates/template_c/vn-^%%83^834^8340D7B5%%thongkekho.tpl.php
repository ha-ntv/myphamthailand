<?php /* Smarty version 2.6.6, created on 2016-02-02 15:48:30
         compiled from ./thongkekho.tpl */ ?>
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