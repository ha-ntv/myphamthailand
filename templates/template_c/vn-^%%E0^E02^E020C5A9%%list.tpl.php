<?php /* Smarty version 2.6.6, created on 2019-03-23 08:07:34
         compiled from products/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'tinhtranghang', 'products/list.tpl', 1, false),array('modifier', 'number_format', 'products/list.tpl', 40, false),)), $this); ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'tinhtranghang', 'active' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['in_stock'], 'assign' => 'tinhtrang')), $this); ?>


<li class="product">

    <div class="frame_inner">
    <?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['discount'] != 0): ?>
    <div class="discount"><?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['discount']; ?>
%</div>
    <?php endif; ?>

        <div class="frame_img_cat ">

           

           <?php if ($this->_tpl_vars['tinhtrang'] != ''): ?><div class="hethang"></div><?php endif; ?>

           <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['unique_key']; ?>
.html" title="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['title_link']; ?>
">

                <img class="img-responsive <?php if ($this->_tpl_vars['tinhtrang'] != ''): ?>opacity<?php endif; ?>" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['img_thumb_vn']; ?>
" alt="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['alt_img']; ?>
" title="<?php echo $this->_tpl_vars['newsHome1'][$this->_sections['i']['index']]['title_img']; ?>
" />

           </a>

            

        </div>

        <div class="frame_title">

            <h3 class="name" >

                <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['unique_key']; ?>
.html" title="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['title_link']; ?>
"><?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
</a> 

            </h3>

        </div>

        <div class="frame_price">

            <div class="price">

                <span><?php if (( $this->_tpl_vars['view'][$this->_sections['i']['index']]['price'] == 0 ) || $this->_tpl_vars['tinhtrang'] != ''):  echo $this->_tpl_vars['tinhtrang'];  else:  echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']]['price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>
 VNĐ<?php endif; ?></span>

            </div>

            

        </div>

    </div>

    <div class="frame-hover" >

        <div class="frame_title">

            <div class="name" >

                <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['unique_key']; ?>
.html" title="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['title_link']; ?>
"><?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
</a> 

            </div>

        </div>

        

        <div class="frame_price">

            <div class="price">

                <span><?php if (( $this->_tpl_vars['view'][$this->_sections['i']['index']]['price'] == 0 ) || $this->_tpl_vars['view'][$this->_sections['i']['index']]['in_stock'] != ''):  echo $this->_tpl_vars['tinhtrang'];  else:  echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']]['price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>
 VNĐ<?php endif; ?></span>

            </div>

        </div>

        <div class="divider"></div>

        <div class="frame_description" style="height:60px;"></div>

       <div class="frame_accessories button clearfix" style="text-align:center;">
            <a href="javascript:void(0);" class="button__item button--left"  data-id="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['idpr']; ?>
" onclick="add_cart(1,<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['idpr']; ?>
)"><img src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon/cart.png" title="Mua hàng"></a>
            <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['unique_key']; ?>
.html" class="button__item button--right" ><img src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon/search.png" title="Chi tiết"></a>
        </div>

    </div>

</li>