<?php /* Smarty version 2.6.6, created on 2017-06-27 09:34:26
         compiled from search/view.tpl */ ?>
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
            <div class="TitleSearch">
                Có <strong class="red"><?php echo $this->_tpl_vars['total']; ?>
</strong> 
                sản phẩm <?php if ($this->_tpl_vars['checkSearch'] == 11): ?> với từ khóa: <strong class="red"><?php echo $this->_tpl_vars['nameSe']; ?>
</strong><?php endif; ?>  
            </div><!-- end tim kiem -->		
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">	
            <div class="home">
                <div class="row">
                    <div class="col-sm-12">
                        

                        <!--Danh sách sản phẩm-->
                        <div class="box">	
                            <div class="productbox">
                            
                                <div class="productlist">
                                    <div class="border-right"></div>
                                    <?php if ($this->_tpl_vars['CheckNull'] == 0): ?>
                                         <p class="nodate">  Thông tin đang cập nhập! </p>
                                    <?php else: ?>
                                    <ul class="clearfix list-product-hot" id="view">
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
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "products/list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        <?php endfor; endif; ?>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                                
                                <?php if ($this->_tpl_vars['Checkpg'] == 1): ?> 
                                    <span id="showPaging">
                                        <?php echo $this->_tpl_vars['linkpg']; ?>

                                    </span>
                                <?php endif; ?> 		 
                                		 
                             </div>	   
                        </div>
                                   
                    </div>	  
                </div>		
            </div>
        </div>                
    </div>
</div>
<!---End Content-->