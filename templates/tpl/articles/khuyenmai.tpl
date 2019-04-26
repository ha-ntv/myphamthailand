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
<link rel="stylesheet" type="text/css" media="screen" href="<!--{$path_url}-->/css/home.css" /> 
<div class="container mt20">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">
                
            <div class="promotion_home">
                <div class="frame_title">
                    <h2 class=" pull-left"><span><!--{$seo.$name}--></span></h2>
                    <div class="arrow-right pull-left"></div>
                    <div class="citation">
                        <span><!--{$seo.$title}--></span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="vertical" class="vertical">
                    <!--{section name=i loop=$view4}-->
                    	<!--{insert name="GetLinkDetail" cat=$view4[i]  lang=$lang  assign="link" }-->
                    	<div class="item">
                            <div class="frame_img">
                                <a href="<!--{$path_url}-->/<!--{$link}-->" title="<!--{$view4[i].title_link}-->">
                                   <img src="<!--{$path_url}-->/<!--{$view4[i].img_thumb_vn}-->" alt="<!--{$view4[i].alt_img}-->" title="<!--{$view4[i].title_img}-->" class="img-responsive" />
                                 </a>
                            </div>
                            <h2 class="title text-center"><a href="<!--{$path_url}-->/<!--{$link}-->" title="<!--{$view4[i].title_link}-->"><!--{$view4[i].$name}--></a> </h2>	
                            <!--{if $view4[i].promotion_vn neq ''}-->
                            <div class="frame_time text-center">
                                <span>Thời gian từ <!--{$view4[i].promotion_vn}--></span>
                            </div>
                            <!--{/if}-->
                        </div>
                    <!--{/section}-->
                    <div class="clear"></div>
    
                </div>
        
        		<!--{if $viewNews neq ''}-->
               		<div class="block_newslist block block_newslist_slide">
                    <h2 class="block_title">
                        <span>Tin khuyến mại</span>
                    </h2>
    
                    <div class="block_content newslist_tabs">
                        <div class="carousel slide" id="myCarouselnews">
                            <!-- Carousel items -->
                            <!--{$viewNews}-->
                        </div>
                        <!--/myCarousel-->
                    </div>
                
                </div>
               <!--{/if}-->
            </div>                
        </div>
    </div>

</div>
<!---End Content-->