<!---Content-->
    <div class="breadcrumbs">
 		<div class="container">
 			<div class="row">
 				<div class="col-xs-12">		
                	<div class="breadcrumb">
                        <!--{$linkTitle}-->
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
                            	<!--{$thanksyou.$content}-->
                            </div>	
						</div>
                        
                         <!--{include file="right-product.tpl"}-->
					</div>
				</div>
            </div>
         </div><!-- end.row -->
	</div>

<script type="text/javascript">
  
    var proId = localStorage.getItem('productID');
    var priceP = localStorage.getItem('phone_price');
    fbq('track', 'Fone Complete',{
    value: parseInt(priceP),
    currency: 'VND',
    content_ids: proId,
    content_type: 'product',
  })

</script>

