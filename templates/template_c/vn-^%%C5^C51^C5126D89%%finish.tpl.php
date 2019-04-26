<?php /* Smarty version 2.6.6, created on 2019-04-13 11:11:29
         compiled from gio-hang/finish.tpl */ ?>
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
            	<div class="content_detail">
					<div class="row mt20" id="news_contents">
						<div class="col-lg-r col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        	<h1 class="content_title">
                                <span>Cảm ơn khách hàng</span>
                            </h1>
                            <div class="description ThankYou">
                            	<?php echo $this->_tpl_vars['thanksyou'][$this->_tpl_vars['content']]; ?>

                            </div>	
						</div>
                        
                         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right-product.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
				</div>
            </div>
         </div><!-- end.row -->
	</div>
<!---End Content-->
<script type="text/javascript">
    var mortgage_code = localStorage.getItem('id_tragop');
    var proId = localStorage.getItem('productID');
    var priceP = localStorage.getItem('price_total');
    fbq('track', 'Purchase',{
    value: parseInt(priceP),
    currency: 'VND',
    content_ids: proId,
    content_type: 'product',
  })
//	$("#codeNum").html('<?php echo $_REQUEST['id']; ?>
');
	$("#codeNum").html(mortgage_code);
</script>
