<?php /* Smarty version 2.6.6, created on 2019-03-18 10:50:47
         compiled from right-product.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'right-product.tpl', 17, false),)), $this); ?>
<div class="col-lg-r col-lg-3 col-md-6 col-sm-6 col-xs-12 hidden-xs  hidden-sm hidden-md">
    <div class="block_newslist  block block_newslist_list">
        <h2 class="block_title">
            <span><?php if ($this->_tpl_vars['rightCheckNew'] == 1): ?>Sản phẩm tương tự<?php else: ?>Sản Phẩm Hot<?php endif; ?></span>
        </h2>
        <div class="block_content">
            <ul class="media-list">
            	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['rightProductHot']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <li class="media">
                        <a class="pull-left" href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['rightProductHot'][$this->_sections['i']['index']]['unique_key']; ?>
.html" title="<?php echo $this->_tpl_vars['rightProductHot'][$this->_sections['i']['index']]['title_link']; ?>
">
                             <img width="102" height="102" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['rightProductHot'][$this->_sections['i']['index']]['img_thumb_vn']; ?>
" alt="<?php echo $this->_tpl_vars['rightProductHot'][$this->_sections['i']['index']]['alt_img']; ?>
" title="<?php echo $this->_tpl_vars['newsHome1'][$this->_sections['i']['index']]['title_img']; ?>
" />
                       </a>
                        <div class="media-body">
                            <div class="media-heading">
                                <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['rightProductHot'][$this->_sections['i']['index']]['unique_key']; ?>
.html" title="<?php echo $this->_tpl_vars['rightProductHot'][$this->_sections['i']['index']]['title_link']; ?>
"><?php echo $this->_tpl_vars['rightProductHot'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
</a>
                            </div>
                            <div class="price"><span><?php if ($this->_tpl_vars['rightProductHot'][$this->_sections['i']['index']][$this->_tpl_vars['price']] == 0): ?>Giá liên hệ<?php else:  echo ((is_array($_tmp=$this->_tpl_vars['rightProductHot'][$this->_sections['i']['index']][$this->_tpl_vars['price']])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>
 VNĐ<?php endif; ?></span></div>
                        </div>
                    </li>
                <?php endfor; endif; ?>
                
               
			</ul>
        </div>				
    </div>
</div>