 <div class="container mt20">
		<div class="row">
       		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">	
				<div class="home">
					<div id="silde_video">
						<div class="row mt20">
							<div class="col-lg-l col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div id="pav-slideShow">
						 			<div id="owl-demo" class="owl-carousel">
                                        <!--{section name=i loop=$BannerLeft1}-->
                                            <div class="item">	
                                                <a <!--{if $BannerLeft1[i].link neq ''}-->href="<!--{$BannerLeft1[i].link}--><!--{/if}-->" title="<!--{$BannerLeft1[i].title_link}-->">
                                                	<img src="<!--{$path_url}-->/<!--{$BannerLeft1[i].img_vn}-->" alt="<!--{$BannerLeft1[i].alt_img}-->" title="<!--{$BannerLeft1[i].title_img}-->" />
                                                </a>
                                                 <h3><!--{$BannerLeft1[i].$name}--></h3>
                                            </div>
                                           
										<!--{/section}-->
                                        
									</div>
				    			</div>  
								
                                <div id="pav-banner" class="hidden-md hidden-sm hidden-xs">
									<div class='banners  banners-default block_inner block_banner'  >
                                    	<!--{section name=i loop=$BannerLeft2}-->
                                        	<a <!--{if $BannerLeft2[i].link neq ''}-->href="<!--{$BannerLeft2[i].link}--><!--{/if}-->" title="<!--{$BannerLeft2[i].title_link}-->">
                                            	<img src="<!--{$path_url}-->/<!--{$BannerLeft2[i].img_vn}-->" alt="<!--{$BannerLeft2[i].alt_img}-->" class="img-old img-responsive" title="<!--{$BannerLeft2[i].title_img}-->" />
                                            </a>
                                        <!--{/section}-->
										<div class="clear"></div>     	
									</div>
									<div class="clear"></div>     	
 				    			</div>  				    
				 			</div>
                            
				 			<div class="col-lg-r col-lg-6 col-md-6 col-sm-6 col-xs-12">					
								<div id="pav-video">
	    						<!-- main slider carousel -->
        							<div id="owl-video" class="owl-carousel mt20">
                					<!-- main slider carousel items -->
                                    	<!--{section name=i loop=$BannerRight1}-->
                                            <div class="item">
                                                <a <!--{if $BannerRight1[i].link neq ''}-->href="<!--{$BannerRight1[i].link}--><!--{/if}-->" title="<!--{$BannerRight1[i].title_link}-->">
                                                    <img src="<!--{$path_url}-->/<!--{$BannerRight1[i].img_vn}-->" alt="<!--{$BannerRight1[i].alt_img}-->" class="img-responsive" title="<!--{$BannerRight1[i].title_img}-->" />
                                                </a>
                                            </div>
                                        <!--{/section}-->
                                        
                 					</div>
		            			<!-- thumb navigation carousel items -->
	          						<ul class="list-inline  hidden-sm hidden-xs hidden-md">
                                    	<!--{section name=i loop=$BannerRight2}-->
                                             <li>
                                                <a <!--{if $BannerRight2[i].link neq ''}-->href="<!--{$BannerRight2[i].link}--><!--{/if}-->" title="<!--{$BannerRight2[i].title_link}-->">
                                                    <img src="<!--{$path_url}-->/<!--{$BannerRight2[i].img_vn}-->" alt="<!--{$BannerRight2[i].alt_img}-->" title="<!--{$BannerRight2[i].title_img}-->" />
                                                </a>
                                            </li>
                                        <!--{/section}-->
                                         

	           						</ul>

								</div>
				 			</div>
						</div>
					</div>
				
                	<div class="row mt20">
						<div class="col-sm-12">			
                            <div class="block_content newslist_tabs">
                                <ul class="nav nav-tabs">
                                     <li class="active">
                                        <a title="Sản phẩm mới - Reviews">Tin Khuyến Mãi</a>
                                      </li>
                                </ul>
                                
                                <!--slider banner 3-->
                                <div class="tab-content">
                                    <div id="section0" class="tab-pane fade in active">
                                        <div id="myCarouselnews0" class="carousel slide">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">            			                		                																										
                                                <div class="row item active">
                                                <!--{section name=i loop=$newsHome}-->
                                                	<!--{insert name="GetLinkDetail" cat=$newsHome[i]  lang=$lang  assign="newHomeLink" }-->
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt10">
                                                        <div class="media-box">
                                                             <a class="pull-left" href="<!--{$path_url}-->/<!--{$newHomeLink}-->" title="<!--{$newsHome[i].title_link}-->">
                                                             	<img width="102" src="<!--{$path_url}-->/<!--{$newsHome[i].img_thumb_vn}-->" alt="<!--{$newsHome[i].alt_img}-->" title="<!--{$newsHome[i].title_img}-->" />
                                                            </a>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">
                                                                    <a href="<!--{$path_url}-->/<!--{$newHomeLink}-->" title="<!--{$newsHome[i].title_link}-->">
                                                                    	<!--{$newsHome[i].$name}-->
                                                                    </a>
                                                                </h4>
                                                                <div style="height:44px; overflow:hidden;"><!--{$newsHome[i].$short}--></div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>                                                                                                                                                                               				
                                                <!--{/section}-->	
                                                </div>
                                                
                                                <div class="row item">
                                                    
                                                <!--{section name=i loop=$newsHome1}-->
                                                	<!--{insert name="GetLinkDetail" cat=$newsHome1[i]  lang=$lang  assign="newHomeLink1" }-->
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt10">
                                                        <div class="media-box">
                                                             <a class="pull-left" href="<!--{$path_url}-->/<!--{$newHomeLink1}-->" title="<!--{$newsHome1[i].title_link}-->">
                                                             	<img width="102" src="<!--{$path_url}-->/<!--{$newsHome1[i].img_thumb_vn}-->" alt="<!--{$newsHome1[i].alt_img}-->" title="<!--{$newsHome1[i].title_img}-->" />
                                                            </a>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">
                                                                    <a href="<!--{$path_url}-->/<!--{$newHomeLink}-->" title="<!--{$newsHome1[i].title_link}-->">
                                                                    	<!--{$newsHome1[i].$name}-->
                                                                    </a>
                                                                </h4>
                                                                <div style="height:44px; overflow:hidden;"><!--{$newsHome1[i].$short}--></div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>                                                                                                                                                                               				
                                                <!--{/section}-->		
                                                </div>
                                            </div>
                                            <!--/carousel-inner--> 
                                            <a class=" carousel-control left " href="#myCarouselnews0" data-slide="prev">
                                                <i class="glyphicon glyphicon-chevron-left fa fa-chevron-left"></i>
                                            </a>
                                            <a class=" carousel-control right" href="#myCarouselnews0" data-slide="next">
                                                <i class="glyphicon glyphicon-chevron-right fa fa-chevron-right"></i>
                                            </a>
                                        </div>
                                        <!--/myCarousel-->
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                   
					</div>
		
        		    <div class="row">
                        <div class="col-sm-12">
                            <div class="box_manf clearfix">
                                <h2 class="block_title">
                                    <a href="javascript:void(0);">Sản phẩm HOT</a>
                                </h2>
                                <div class="jcarousel-wrapper">
                                    <a class="jcarousel-control-prev" href="#" data-jcarouselcontrol="true">&nbsp;</a>
                                    <div class="jcarousel"  data-jcarousel="true">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="Apple" src="<!--{$path_url}-->/images/hang-san-xuat/apple_hsx.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="Sony" src="<!--{$path_url}-->/images/hang-san-xuat/sony_1426670692.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="Samsung" src="<!--{$path_url}-->/images/hang-san-xuat/samsung_1426056218.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="Pantech SKY" src="<!--{$path_url}-->/images/hang-san-xuat/pantech_1426056057.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="LG" src="<!--{$path_url}-->/images/hang-san-xuat/lg_1426056364_1426670730.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="Oppo" src="<!--{$path_url}-->/images/hang-san-xuat/oppo_1426671012.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="Lenovo" src="<!--{$path_url}-->/images/hang-san-xuat/lenovo_1426671264.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="Asus" src="<!--{$path_url}-->/images/hang-san-xuat/asus_1426056574_1426670948.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="Wiko" src="<!--{$path_url}-->/images/hang-san-xuat/wiko_1426671192.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="Xiaomi" src="<!--{$path_url}-->/images/hang-san-xuat/xiaomi_1426672120.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="HTC" src="<!--{$path_url}-->/images/hang-san-xuat/htc_1426056438.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="BlackBerry" src="<!--{$path_url}-->/images/hang-san-xuat/bb_1426672104.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="Gionee" src="<!--{$path_url}-->/images/hang-san-xuat/gionee_1426056510_1426670903.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="Motorola" src="<!--{$path_url}-->/images/hang-san-xuat/motorola_1426671316.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="Hp" src="<!--{$path_url}-->/images/hang-san-xuat/hp_1426671096.png"  />
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="javascript:void(0);" >
                                                    <img alt="Philips" src="<!--{$path_url}-->/images/hang-san-xuat/philips_1426672114.png"  />
                                                </a>
                                            </li> 
                                            
                                        </ul>
                                    </div>
                                    <a class="jcarousel-control-next" href="#" data-jcarouselcontrol="true">&nbsp;</a>
                                </div>
                            </div>
    
                            <!--Danh sách sản phẩm-->
                            <div class="box">	
                                <div class="productbox">
                                
                                    <div class="productlist">
                                        <div class="border-right"></div>
                                        <ul class="clearfix list-product-hot" id="view">
                                        	<!--{section name=i loop=$homeProduct}-->
                                            	<li class="product <!--{if $homeProduct[i].img_thumb_en neq ''}-->promotion<!--{/if}-->">
                                                    <div class="frame_inner">
                                                        <div class="frame_img_cat ">
                                                            <a href="<!--{$path_url}-->/<!--{$homeProduct[i].unique_key}-->.html" title="<!--{$homeProduct[i].title_link}-->">
                                                            	<!--{if $homeProduct[i].img_thumb_en neq ''}-->
                                                                	<img class="img-responsive" src="<!--{$path_url}-->/<!--{$homeProduct[i].img_thumb_en}-->" alt="<!--{$homeProduct[i].alt_img}-->" title="<!--{$newsHome1[i].title_img}-->" />
                                                                <!--{else}-->
                                                                	<img class="img-responsive" src="<!--{$path_url}-->/<!--{$homeProduct[i].img_thumb_vn}-->" alt="<!--{$homeProduct[i].alt_img}-->" title="<!--{$newsHome1[i].title_img}-->" />
                                                               	<!--{/if}-->
                                                           </a>
                                                        </div>
                                                        <div class="frame_title">
                                                            <h3 class="name" >
                                                                <a href="<!--{$path_url}-->/<!--{$homeProduct[i].unique_key}-->.html" title="<!--{$homeProduct[i].title_link}-->">
                                                                   <!--{$homeProduct[i].$name}-->
                                                                </a> 
                                                            </h3>
                                                        </div>
                                                        <div class="frame_price">
                                                            <div class="price">
                                                                <span><!--{$homeProduct[i].$price|number_format:0:",":"."}--> VNĐ</span>
                                                            </div>
                                                            <div class="discount">&nbsp;</div>
                                                        </div>
                                                    </div>
                                                    <div class="frame-hover" onclick="location.href='<!--{$path_url}-->/<!--{$homeProduct[i].unique_key}-->.html'">
                                                        <div class="frame_title">
                                                            <div class="name" >
                                                                <a href="<!--{$path_url}-->/<!--{$homeProduct[i].unique_key}-->.html" title="<!--{$homeProduct[i].title_link}-->">
                                                                   <!--{$homeProduct[i].$name}-->
                                                                </a> 
                                                            </div>
                                                        </div>
                                                        <div class="frame_color">
                                                        	
                                                        </div>
                                                        <div class="frame_price">
                                                            <div class="price">
                                                                <span><!--{$homeProduct[i].$price|number_format:0:",":"."}--> VNĐ</span>
                                                            </div>
                                                        </div>
                                                        <div class="divider"></div>
                                                        <div class="frame_discount"></div>
                                                        <div class="frame_accessories">
                                                            <!--{$homeProduct[i].$promotion}-->
                                                        </div>
                                                    </div>
                                            </li>
                                            <!--{/section}-->
                                        </ul>
                                    </div>	 
                                    		 
                                 </div>	  
                                 
                                  <!--{if $Checkpg eq 1 }--> 
                                    <span id="showPaging">
                                        <!--{$linkpg}-->
                                    </span>
                                   <!--{/if}--> 	
                                     
                            </div>
                                       
                        </div>	  
                    </div>		
			    </div>
			</div>                
    	</div>
    </div>
    
 <!-- end.row -->