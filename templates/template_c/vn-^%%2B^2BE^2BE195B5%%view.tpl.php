<?php /* Smarty version 2.6.6, created on 2019-03-21 08:00:46
         compiled from articles/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'GetLinkDetail', 'articles/view.tpl', 28, false),array('modifier', 'date_format', 'articles/view.tpl', 40, false),)), $this); ?>
<!---Content-->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">		
                <div class="breadcrumb">
                    <?php echo $this->_tpl_vars['linkTitle']; ?>

                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="container mt20">
    
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">
                    
            <div class="news_home news_cat">
                <div class="row mt20" id="news_contents">
                    <div class="col-lg-r col-lg-9 col-md-12 col-sm-12 col-xs-12">
						<h1 class="content_title">
                            <span><?php echo $this->_tpl_vars['seo'][$this->_tpl_vars['name']]; ?>
</span>
                        </h1>
                        <div class="news-body" id="view">
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
echo smarty_core_run_insert_handler(array('args' => array('name' => 'GetLinkDetail', 'cat' => $this->_tpl_vars['view'][$this->_sections['i']['index']], 'lang' => $this->_tpl_vars['lang'], 'assign' => 'link')), $this); ?>

                            	<div class="item">
                                    <div class="frame_img pull-left mgright">
                                    	<a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['link']; ?>
" title="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['title_link']; ?>
">
                                           <img width="150" height="150" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['img_thumb_vn']; ?>
" alt="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['alt_img']; ?>
" title="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['title_img']; ?>
" class="img-responsive" />
                                         </a>
                                    </div>
                                    <div class="NewsLeft">
                                        <h3 class="item_title_new">
                                            <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['link']; ?>
" title="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['title_link']; ?>
"><strong><?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
</strong></a>
                                        </h3>
                                        <div class="news_datetime">
                                           Cập nhật: <?php echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']]['dated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>

                                        </div>
                                        
                                        <div class="new_short">
                                            <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']][$this->_tpl_vars['short']]; ?>
					
                                        </div>
                                  	</div>
                                </div>
                            <?php endfor; endif; ?>  
                        </div>
                        
                        <?php if ($this->_tpl_vars['Checkpg'] == 1): ?> 
                        	<span id="showPaging">
                            	<?php echo $this->_tpl_vars['linkpg']; ?>

                            </span>
                        <?php endif; ?> 	
                    </div>
                    
                   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right-product.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
            </div>
        </div>
     </div>

</div>