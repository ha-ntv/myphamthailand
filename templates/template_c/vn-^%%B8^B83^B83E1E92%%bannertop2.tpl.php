<?php /* Smarty version 2.6.6, created on 2017-06-27 09:20:04
         compiled from bannertop2.tpl */ ?>
<div class="bannerprtop">
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['bannerpr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <div class="bannerprtop-left">	
            <a <?php if ($this->_tpl_vars['bannerpr'][$this->_sections['i']['index']]['link'] != ''): ?>href="<?php echo $this->_tpl_vars['bannerpr'][$this->_sections['i']['index']]['link'];  endif; ?>" >
                <img src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['bannerpr'][$this->_sections['i']['index']]['img_vn']; ?>
" alt="<?php echo $this->_tpl_vars['bannerpr'][$this->_sections['i']['index']]['alt_img']; ?>
" title="<?php echo $this->_tpl_vars['bannerpr'][$this->_sections['i']['index']]['title_img']; ?>
"  />
            </a>
        </div>  
    <?php endfor; endif; ?>
    
</div>