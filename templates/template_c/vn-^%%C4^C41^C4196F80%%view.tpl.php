<?php /* Smarty version 2.6.6, created on 2019-03-23 09:54:47
         compiled from donhang/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getCartDetail', 'donhang/view.tpl', 12, false),)), $this); ?>
<div class="index_middle contentpd">

    <div class="row container" style="margin: 0 auto;">

		<div class="content" id="divCart">

    		<div class="Col_CC">

                <p class="title_inside1" style="padding:20px 0; text-align:center;">Chi tiết đơn hàng của khách hàng</p>

                <div class="woocommerce" id="cart-wrapper">
                   <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getCartDetail')), $this); ?>
                   
    		    </div>             

            </div>   		

		</div>

    </div>

</div>
<script type="text/javascript">
				jQuery('body').on('click','.plus', function(){
					var cur = jQuery(this).siblings('.qty').val();
					jQuery(this).siblings('.qty').val(Number(cur)+1);
				
				});
				jQuery('body').on('click','.minus',function(){
					var cur = jQuery(this).siblings('.qty').val();
					if(Number(cur) > 1)
					jQuery(this).siblings('.qty').val(Number(cur)-1);
				});
				jQuery('body').on('click','.remove',function(e){
					var proId = jQuery(this).data('productid');
					e.preventDefault();
					setTimeout(function(){
					jQuery('.woocommerce-cart-form').css('opacity','0.5');
					},2000);
					 jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/del_cart.php',{
                
                                id:proId,	
                    },function(data) {
                        var obj = jQuery.parseJSON(data);
                        if(obj.status == 'success'){
                           window.location.reload(false);	
                        }
                        else{
                            alert('Một số vấn đề từ server nên ko thể xóa món hàng được')
                        }
                    });
				});
				jQuery('button[name="update_cart"]').click(function(e){
					
					e.preventDefault();
					var list = "";
					var i = 0;
					jQuery('.cart_item').each(function(){
                        i++;						
						var id = jQuery(this).find('.remove').data('productid');
						var quantity =  jQuery(this).find('input.qty').val();
						list += id+ '-'+quantity;
						if(i < jQuery('.cart_item').length) list +=";";
					})
                    jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/update_cart.php',{
                
                                data:list,	
                    },function(data) {
                        var obj = jQuery.parseJSON(data);
                        if(obj.status == 'success'){
                          jQuery('#cart-wrapper').html(obj.html);	
                        }
                        else{
                            alert('Một số vấn đề từ server nên ko thể update giỏ hàng được')
                        }
                    });
					
				});
				
</script>