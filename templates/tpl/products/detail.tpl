<style type="text/css">
@-webkit-keyframes shake {
	0%, 100% {
		-webkit-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
	}

	10%, 30%, 50%, 70%, 90% {
		-webkit-transform: translate3d(-10px, 0, 0);
		transform: translate3d(-10px, 0, 0);
	}

	20%, 40%, 60%, 80% {
		-webkit-transform: translate3d(10px, 0, 0);
		transform: translate3d(10px, 0, 0);
	}
}

@keyframes shake {
	0%, 100% {
		-webkit-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
	}

	10%, 30%, 50%, 70%, 90% {
		-webkit-transform: translate3d(-10px, 0, 0);
		transform: translate3d(-10px, 0, 0);
	}

	20%, 40%, 60%, 80% {
		-webkit-transform: translate3d(10px, 0, 0);
		transform: translate3d(10px, 0, 0);
	}
}

.shake {
-webkit-animation-name: shake;
    animation-name: shake;
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
}
 #send_phone #submitbt1 {
    border: 1px solid #ed1b24;
    background: #ed1b24;
    border-radius: 4px;
    font-family: MyriadPro-BoldCond;
    color: #fff;
    display: inline-block;
    margin-bottom: 12px;
    text-transform: uppercase;
    width: 100%;
    height: 34px;
    font-size: 18px;
}
#send_phone .input_text {
    width: 100%;
    border: 1px solid #bdbdbd;
    margin-bottom: 10px;
    padding-left: 10px;
	margin-top:20px;
}
 #send_phone .name {
    font-weight: bold;
    margin: 0 0 5px 0;
    font-size: 13px;
    font-family: arial;
}
</style>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">		
                <div class="breadcrumb">
                    <div class="breadcrumb flever_12">
                        <a href="<!--{$path_url}-->" title="Trang chủ">Trang chủ</a>
                    </div>
                    <div class="breadcrumbs_sepa">&gt;</div>
                    <!--{$linkTitle}-->
                    <div class="breadcrumb">
                        <span><!--{$detail.$name}--></span>
                    </div> 					
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt20">	
    <div class="row">
    	 <!--{include file="bannertop2.tpl"}-->
    </div>
</div>

<div class="container mt20">
		
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">
            <div class="product">
                <div class="bgheading clearfix mt20">
                    <div class="leftimg">
                        <div>
                        	<link rel="STYLESHEET" type="text/css" href="<!--{$path_url}-->/highslide/highslide.css" />
							<script type="text/javascript" src="<!--{$path_url}-->/highslide/highslide-with-gallery.js"></script>
                            
                            <script type="text/javascript">
                                hs.graphicsDir = '<!--{$path_url}-->/highslide/graphics/';
                                hs.align = 'center';
                                hs.transitions = ['expand', 'crossfade'];
                                hs.outlineType = 'rounded-white';
                                hs.wrapperClassName = 'controls-in-heading';
                                hs.fadeInOut = true;
                                hs.dimmingOpacity = 0.3;
                            
                                // Add the controlbar
                                hs.addSlideshow({
                                    //slideshowGroup: 'group1',
                                    interval: 3500,
                                    repeat: false,
                                    useControls: true,
                                    fixedControls: false,
                                    overlayOptions: {
                                        opacity: 1,
                                        position: 'top right',
                                        hideOnMouseOut: false
                                    }
                                });
								
								function showImage(img){
									
									$('#viewImg').fadeOut(600, function() {
										$('#viewImg').attr("src",img);
										$('#viewImg').fadeIn(1000);
									});
								}  
                            </script>
                            <a class="MagicZoomPlus" href="<!--{$path_url}-->/<!--{$detail.img_vn}-->" onclick='return hs.expand(this,{ autoplay:true })'>
                                <img src="<!--{$path_url}-->/<!--{$detail.img_vn}-->" id="viewImg" />
                            </a>
                        </div>
                        
                        <div>
                            <div class="jcarousel-wrapper">
                              	<a class="jcarousel-control-next"></a>    
                                    <div class="artseedddpb">
                                        <ul>
                                        	<!--{if $detail.img_vn neq ''}-->
                                                <li>
                                                <div>
                                                    <a onclick="showImage('<!--{$path_url}-->/<!--{$detail.img_vn}-->')" href="javascript:void(0)" >
                                                        <img width="126" src="<!--{$path_url}-->/<!--{$detail.img_vn}-->" class="img-thumb"/>
                                                    </a>
                                                    </div>
                                                </li> 
                                            <!--{/if}-->
                                            
                                            <!--{if $detail.img2_vn neq ''}-->
                                                <li> <div>
                                                    <a onclick="showImage('<!--{$path_url}-->/<!--{$detail.img2_vn}-->')" href="javascript:void(0)" >
                                                        <img width="126" src="<!--{$path_url}-->/<!--{$detail.img2_vn}-->" class="img-thumb"/>
                                                    </a>
                                                
                                                <a class='highslide' href='<!--{$path_url}-->/<!--{$detail.img2_vn}-->' onclick='return hs.expand(this)'></a>
                                                </div></li> 
                                            <!--{/if}-->
                                            
                                            
                                            <!--{if $detail.img3_vn neq ''}-->
                                                <li> <div>
                                                    <a onclick="showImage('<!--{$path_url}-->/<!--{$detail.img3_vn}-->')" href="javascript:void(0)" >
                                                        <img width="126" src="<!--{$path_url}-->/<!--{$detail.img3_vn}-->" class="img-thumb"/>
                                                    </a>
                                               
                                                <a class='highslide' href='<!--{$path_url}-->/<!--{$detail.img3_vn}-->' onclick='return hs.expand(this)'></a>
                                                </div> </li> 
                                            <!--{/if}-->
                                            
                                            <!--{if $detail.img4_vn neq ''}-->
                                                <li> <div>
                                                    <a onclick="showImage('<!--{$path_url}-->/<!--{$detail.img4_vn}-->')" href="javascript:void(0)" >
                                                        <img width="126" src="<!--{$path_url}-->/<!--{$detail.img4_vn}-->" class="img-thumb"/>
                                                    </a>
                                               
                                                <a class='highslide' href='<!--{$path_url}-->/<!--{$detail.img4_vn}-->' onclick='return hs.expand(this)'></a>
                                                </div> </li> 
                                            <!--{/if}-->
                                            
                                            <!--{if $detail.img5_vn neq ''}-->
                                                <li> <div>
                                                    <a onclick="showImage('<!--{$path_url}-->/<!--{$detail.img5_vn}-->')" href="javascript:void(0)">
                                                        <img width="126" src="<!--{$path_url}-->/<!--{$detail.img5_vn}-->" class="img-thumb"/>
                                                    </a>
                                                    <a class='highslide' href='<!--{$path_url}-->/<!--{$detail.img5_vn}-->' onclick='return hs.expand(this)'></a>
                                                    </div>
                                                </li> 
                                            <!--{/if}-->
                                            
                                        </ul>
                                    </div>
                                <a class="jcarousel-control-prev"></a>
                                
                            </div>
                            
                            <script type="text/javascript">
								$(document).ready(function() {  
								  var carouseladdresspos = $(".artseedddpb ul");
								  carouseladdresspos.owlCarousel({
									  items : 5,
                                      autoPlay:3000,
									  itemsDesktop : [1000,4], 
									  itemsDesktopSmall : [900,4], 
									  itemsTablet: [600,3], 
									  itemsTablet: [480,2],
									  pagination : false,
       								  paginationNumbers : false,
									  itemsMobile : true,
									  stopOnHover:true,
									  });
									  $(".jcarousel-control-prev").click(function(){
										carouseladdresspos.trigger('owl.next');
									  });
									  $(".jcarousel-control-next").click(function(){
										carouseladdresspos.trigger('owl.prev');
								  
								  });
								});
							</script>    
                        </div>
                        
                        <div class="PriceDtMb">
                            <h1><span><!--{$detail.$name}--></span></h1>
                            <div class="PriceDt">
                                <!--{insert name="tinhtranghang" active=$detail.in_stock assign="tinhtrangdt"}-->
                                <span class="price_ez"> <span id="priceAllMb"><!--{if $detail.price neq 0}--><!--{$detail.price|number_format:0:",":"."}--> VNĐ<!--{else}--> Liên Hệ <!--{/if}--></span> </span>
                               
                            </div>
                            <!--{if $detail.luuysanpham_vn neq ''}-->
                                <div class="all-bonho chuysanpham">
                                     <strong>Lưu ý: </strong><!--{$detail.luuysanpham_vn}-->
                                </div>
                            <!--{/if}-->
                           <div class="cartForm">
                                <div class="cart" >
                
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus button is-form" onclick="decrease1(this)">
                                            <label class="screen-reader-text" for="quantity_5c945cd146ae8">Số lượng</label>
                                            <input type="number" id="quantity1" class="input-text qty text" step="1" min="1" max="9999" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="">
                                            <input type="button" value="+" class="plus button is-form"  onclick="increase1(this)">
                                        </div>
                                        
                                        <button type="button" name="add-to-cart" value="sendCart" onclick="add_cart($('#quantity1').val(),<!--{$detail.idsp}-->)" class="single_add_to_cart_button button alt">Thêm vào giỏ</button>

                                    </div>
                            </div>
                           <div class="clear"></div>
                           <div style="width:100%;">
								
                                <div class="wrap-buy">
                                   
                                    <p class="panel1">
                                        <span class="panel_icon"></span><span class="panel_text"><!--{$detail.view}--></span><br>
                                        <span class="panel_text1">người xem</span>
                                    </p>
                                    
                                </div>
                                
                                <div class="wrap-buy" style="float:right;">
                                  
                                   
                                        
                               
                                    <p class="panel2">
                                        <span class="pane2_icon_delivery"></span>
                                        <span class="panel_text">Giao hàng</span>
                                        <br>
                                    </p>
                                    
                                </div>
                                                                
                           </div>
                           <div class="clear"></div>
                        </div>
						
                        <div class="inner_bottom clearfix">
                            <div class="pull-left mt10">

                             
                               
                            </div>
                            
                            <div class="pull-right ">
                           
                            </div>
                
            			</div>	
                       
                       
                    </div>
                    
                    <div class="righttext">
                    	<div class="PriceDtPc">
                            <h1><span><!--{$detail.$name}--></span></h1>
                            <div class="PriceDt">
                                <!--{insert name="tinhtranghang" active=$detail.in_stock assign="tinhtrangdt"}-->
                                <span class="price_ez"> <span id="priceAll"><!--{if $detail.price neq 0}--><!--{$detail.price|number_format:0:",":"."}--> VNĐ<!--{else}--> Liên Hệ <!--{/if}--></span> </span>
                               
                            </div>
                            
                            <!--{if $detail.luuysanpham_vn neq ''}-->
                                <div class="all-bonho chuysanpham">
                                     <strong>Lưu ý: </strong><!--{$detail.luuysanpham_vn}-->
                                </div>
                            <!--{/if}-->
                           <span id="showcolor"></span>
                          
                           <div class="clear"></div>
                           <div class="cartForm">
                           <div class="cart" >
		
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus button is-form" onclick="decrease(this)">
                                    <label class="screen-reader-text" for="quantity_5c945cd146ae8">Số lượng</label>
                                    <input type="number" id="quantity" class="input-text qty text" step="1" min="1" max="9999" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="">
                                    <input type="button" value="+" class="plus button is-form"  onclick="increase(this)">
                            	</div>
                                
                                <button type="button" name="add-to-cart" value="sendCart" onclick="add_cart($('#quantity').val(),<!--{$detail.idsp}-->)" class="single_add_to_cart_button button alt">Thêm vào giỏ</button>

			                </div>
                           </div>
                           <div style="width:100%;">
								
                                
                                <div class="wrap-buy">

                                   
                                    <p class="panel1">

                                        <span class="panel_icon"></span><span class="panel_text"><!--{$detail.view}--></span><br>

                                        <span class="panel_text1">người xem</span>

                                    </p>

                                    

                                </div>

                                

                                <div class="wrap-buy" style="float:right;">
                               

                                    <p class="panel2">

                                        <span class="pane2_icon_delivery"></span>

                                        <span class="panel_text">Giao hàng</span>

                                        <br>

                                        <span class="panel_text1"></span>

                                    </p>
                                    

                                </div>
                                
                                <script type="text/javascript">
                                                
                                    function formatNumber(num) {
                                        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
                                    }
                                  
                                </script>
                                
                           </div>
                           <div class="clear"></div>
                        </div>
                        <div style="margin-bottom:5px;">
                        			
                       </div>
                        
                      
						<div class="clear">
                       		
                            <!-- AddThis Button BEGIN -->
                            <!--faceshare.tpl-->
                            <!-- AddThis Button END -->  
                           
                      </div>   
                        
                    </div>
                </div>
 				<div class="para_wrap original">
                	<div class="box_menu">
                        <ul class="list_tab nav nav-tabs " role="tablist" id="myTab">    
                            <li class="active"><a href="javascript:void(0)" onclick="scrollgoto('scrollgthongso')" data-toggle="tab">Thông số</a></li>                        
                            <li><a href="javascript:void(0)" onclick="scrollgoto('box_botom')" data-toggle="tab">Bài viết</a></li> 
                            <li><a href="javascript:void(0)" onclick="scrollgoto('video')" data-toggle="tab">Video</a></li>                                                                 
                            <li><a href="javascript:void(0)" onclick="scrollgoto('frame_commnet')" data-toggle="tab"><i></i>Nhận xét</a></li>
                        </ul>
                        <script>
							function scrollgoto(id){
								var $target = $("#"+id).offset().top - 120 ;
								$("html, body").animate({ scrollTop: $target}, 1000);	
							}
						</script>
                    </div>
                </div>
                
                <div class="para_wrap clearfix" id="box_botom">
    				<div class="left_box">
        				<h4>Đánh giá chi tiết</h4>
                        <div class="description border-bottom">
                             <!--{$detail.$content}--> 
                        </div>
                        <h4 id="video">Video</h4>
            			<div class="main-video border-bottom">
                        	<!--{if $detail.video neq ''}-->
                                <div class="video-container">
                                    <embed src="https://www.youtube.com/v/<!--{$detail.video}-->" frameborder="0" allowfullscreen/>
                                </div>
                            <!--{/if}-->
						</div>
                        
        				<div id="frame_commnet">
            				<div class="comments">
                            <!--{if $commentCount gt 0}-->
                               <div class="add-task" id="goToComment">
                                	<div class="comment_form_title_send">Ý kiến bạn đọc</div>
                                    <div class="clear"> </div>
                                </div>
                                
                               <div class="comments_contents"> 
                                	<!--{section name=i loop=$viewComment}-->
                                        <div class="comment-item">
                                            <span class="name"><!--{$viewComment[i].name}--></span> 
                                            <span class="date">(nhận xét lúc:<!--{$viewComment[i].dated|date_format:"%d/%m/%Y"}--> <!--{$viewComment[i].timed}-->)</span> 
                                            <div class="comment_content "> 
                                                <!--{$viewComment[i].content}-->
                                               <!-- <a href="javascript: void(0)" class="button_reply">Trả lời</a>-->	
                                            </div>
                                            <!--{if $viewComment[i].name_tl neq ''}-->
                                            <div class="comment-item comment-item1">
                                                <span class="name"><!--{$viewComment[i].name_tl}--></span> <span class="date">(Trả lời lúc:<!--{$viewComment[i].dated_tl|date_format:"%d/%m/%Y"}--> <!--{$viewComment[i].timed_tl}-->)</span> 
                                                <div class="comment_content "> 
                                                    <!--{$viewComment[i].content_tl}-->
                                                </div>
                                             </div>
                                             <!--{/if}-->
                                        </div>
                                  <!--{/section}-->

                                </div>
                            <!--{/if}-->
               					 <!-- FORM COMMENT	-->
                				
                
                                <div class="comment_form_title" style="margin-top:20px;">Gửi bình luận trên Facebook</div>
                                 <div id="fb-root"></div>
                                    <script>(function(d, s, id) {
                                      var js, fjs = d.getElementsByTagName(s)[0];
                                      if (d.getElementById(id)) return;
                                      js = d.createElement(s); js.id = id;
                                      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=567589320047215";
                                      fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                   <div class="fb-comments" data-href="<!--{$path_url}--><!--{$smarty.server.REQUEST_URI}-->" data-width="100%" data-numposts="20"></div>
                                        
                             </div>
                   		 </div>
               		 </div>
                    
                    <div class="right_box">
                        <h5>Sản phẩm tương tự</h5>
                        <div class="box_content">
                        	<!--{section name=i loop=$view}-->
                            	<!--{insert name="GetLinkDetail" cat=$view[i]  lang=$lang  assign="link" }-->
                                <div class="media-box clearfix">
                                	<a class="pull-left" href="<!--{$path_url}-->/<!--{$view[i].unique_key}-->.html" title="<!--{$view[i].title_link}-->">	
                                       <img class="img-responsive" src="<!--{$path_url}-->/<!--{$view[i].img_thumb_vn}-->" alt="<!--{$view[i].alt_img}-->" title="<!--{$newsHome1[i].title_img}-->" />
                                    </a>
                                    <h2 class="media-heading">
                                    	<a href="<!--{$path_url}-->/<!--{$view[i].unique_key}-->.html" title="<!--{$view[i].title_link}-->"><strong><!--{$view[i].$name}--></strong> </a> 
                                    </h2>	
                                    <div class="price"><span><!--{if $view[i].price eq 0}-->Giá liên hệ<!--{else}--><!--{$view[i].price|number_format:0:",":"."}--> VNĐ<!--{/if}--> <!--{insert name="tinhtranghang" active=$view[i].in_stock}--></span></div>
                                </div><!--end item-->	        
                            <!--{/section}-->                            
                        </div>
                                    
                    </div>
				</div>

			</div>	

       </div>
   </div>
    
</div>
<script>

var priceProduct = document.getElementById('priceAll').innerHTML;
var lastIndex = priceProduct.lastIndexOf(" ");

priceProduct = priceProduct.substring(0, lastIndex);
/* fbq('track', 'ViewContent',{
    value: parseInt(priceProduct.split('.').join('')),
    currency: 'VND',
    content_ids: '<!--{$detail.idsp}-->',
    content_type: 'product',
  });
  function trackAddToCart() {
    
    fbq('track', 'AddToCart',{
    value: parseInt(priceProduct.split('.').join('')),
    currency: 'VND',
    content_ids: '<!--{$detail.idsp}-->',
    content_type: 'product',
  })
} */
    function decrease(oj) {        
        var current = Number($('#quantity').val());
        if(current > 1) {
           
              $('#quantity').val(current - 1);
        
        }
    } 
    function decrease1(oj) {        
        var current = Number($('#quantity1').val());
        if(current > 1) {
           
              $('#quantity1').val(current - 1);
        
        }
    } 
        
   
       function increase(oj) {
           var current = Number($('#quantity').val());
            $('#quantity').val(current + 1);
       }
         function increase1(oj) {
           var current = Number($('#quantity1').val());
            $('#quantity1').val(current + 1);
       }
       
 </script>