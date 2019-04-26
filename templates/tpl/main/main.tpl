<div class="index_middle" >

    <div class="ContainerHeader" style="top:-4px; position:relative; z-index:100;">

        <div class="menu_cate" id="MenuBannerTop">

		<!-- MainMenu-->

			<ul class="menu_ver">

            	<!--{$ListMenu}-->

			</ul>

        </div>

       

		<div class="banner_home">

    		<div id="owl-demo" class="owl-carousel">

                    <!--{section name=i loop=$BannerLeft1}-->

                    <div class="item">	

                        <a <!--{if $BannerLeft1[i].link neq ''}-->href="<!--{$BannerLeft1[i].link}--><!--{/if}-->" >

                            <img src="<!--{$path_url}-->/<!--{$BannerLeft1[i].img_vn}-->"/>

                        </a>

                        <!-- <h3>BannerLeft1[i].name</h3>-->

                    </div>

                   

                <!--{/section}-->

                

            </div>

            

            <div class="Banner2All">

            	<div class="BannerLeft2">

                    <a <!--{if $BannerLeft2[0].link neq ''}-->href="<!--{$BannerLeft2[0].link}-->"<!--{/if}--> >

                        <img src="<!--{$path_url}-->/<!--{$BannerLeft2[0].img_vn}-->"  class="img-responsive"  />

                    </a>

   				</div>

                

                <div class="BannerRight2">

                    <a <!--{if $BannerRight2[0].link neq ''}-->href="<!--{$BannerRight2[0].link}-->" <!--{/if}-->>

                        <img src="<!--{$path_url}-->/<!--{$BannerRight2[0].img_vn}-->" class="img-responsive"/>

                    </a>

   				</div>

                

                

            </div>

            

		</div>

    </div>

</div> 

 

<div class="clear"></div> 

 <div class="container" style="margin-top:10px;">

		<div class="row">

       		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">	

				<div class="home">

					<div class="row">

						<div class="col-sm-12">			

                            <div class="block_content newslist_tabs">

                                <ul class="nav nav-tabs">

                                     <li class="active">

                                        <a data-toggle="tab" href="javascript:void(0)" onclick="getNewHomeKhuyenMai(11);"  title="Tin Mới Nhất">Tin Tức</a>

                                     </li>

                                      

                                     <li>

                                        <a data-toggle="tab" href="javascript:void(0)" onclick="getNewHomeKhuyenMai(91);" title="Tin Khuyến Mãi">Tin Khuyến Mãi</a>

                                     </li>

                                                

                                     <script language="javascript">

                                     	function getNewHomeKhuyenMai(cid){

											$.post('<!--{$path_url}-->/loading/getPage.php',{type:'newsHome',cid:cid},function(data) {

												 var obj = jQuery.parseJSON(data);

												 $('#myCarouselnews0').html(obj.view);

											});

											

										} 

                                     </script>

                                </ul>

                                

                                <!--slider banner 3-->

                                <div class="tab-content">

                                    <div id="section" class="tab-pane fade in active">

                                        <div id="myCarouselnews0" class="carousel slide">

                                            <!-- Carousel items -->

                                            <div class="carousel-inner">            			                		                																										

                                                <div class="row item active">

                                                <!--{section name=i loop=$newsHome}-->

                                                	<!--{insert name="GetLinkDetail" cat=$newsHome[i]  lang=$lang  assign="newHomeLink" }-->

                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt10">

                                                        <div class="media-box">

                                                             <a class="pull-left" href="<!--{$path_url}-->/<!--{$newHomeLink}-->" title="<!--{$newsHome[i].title_link}-->">

                                                             	<img width="102" height="102" src="<!--{$path_url}-->/<!--{$newsHome[i].img_thumb_vn}-->" alt="<!--{$newsHome[i].alt_img}-->" title="<!--{$newsHome[i].title_img}-->" />

                                                            </a>

                                                            <div class="media-body">

                                                                <h4 class="media-heading">

                                                                    <a href="<!--{$path_url}-->/<!--{$newHomeLink}-->" title="<!--{$newsHome[i].title_link}-->"><!--{$newsHome[i].$name}--> </a> <br /> <span class="dated">(<!--{$newsHome[i].dated|date_format:"%d-%m-%Y"}-->)</span> 

                                                                </h4>

                                                                <div style="height:55px;"><!--{$newsHome[i].$short}--></div>

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

                                                             	<img width="102" height="102" src="<!--{$path_url}-->/<!--{$newsHome1[i].img_thumb_vn}-->" alt="<!--{$newsHome1[i].alt_img}-->" title="<!--{$newsHome1[i].title_img}-->" />

                                                            </a>

                                                            <div class="media-body">

                                                                <h4 class="media-heading">

                                                                    <a href="<!--{$path_url}-->/<!--{$newHomeLink1}-->" title="<!--{$newsHome1[i].title_link}-->"><!--{$newsHome1[i].$name}--></a>

                                                                    <br /> <span class="dated">(<!--{$newsHome1[i].dated|date_format:"%d-%m-%Y"}-->)</span>

                                                                </h4>

                                                                <div style="height:55px;"><!--{$newsHome1[i].$short}--></div>

                                                            </div>

                                                            <div class="clear"></div>

                                                        </div>

                                                    </div>                                                                                                                                                                               				

                                                <!--{/section}-->		

                                                </div>

                                                

                                                <div class="row item">

                                                    

                                                <!--{section name=i loop=$newsHome2}-->

                                                	<!--{insert name="GetLinkDetail" cat=$newsHome2[i]  lang=$lang  assign="newHomeLink2" }-->

                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt10">

                                                        <div class="media-box">

                                                             <a class="pull-left" href="<!--{$path_url}-->/<!--{$newHomeLink2}-->" title="<!--{$newsHome2[i].title_link}-->">

                                                             	<img width="102" height="102" src="<!--{$path_url}-->/<!--{$newsHome2[i].img_thumb_vn}-->" alt="<!--{$newsHome2[i].alt_img}-->" title="<!--{$newsHome2[i].title_img}-->" />

                                                            </a>

                                                            <div class="media-body">

                                                                <h4 class="media-heading">

                                                                    <a href="<!--{$path_url}-->/<!--{$newHomeLink2}-->" title="<!--{$newsHome2[i].title_link}-->"><!--{$newsHome2[i].$name}--></a>

                                                                    <br /> <span class="dated">(<!--{$newsHome2[i].dated|date_format:"%d-%m-%Y"}-->)</span>

                                                                </h4>

                                                                <div style="height:55px;"><!--{$newsHome2[i].$short}--></div>

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

                    	<!--{section name=i loop=$nameCatPr}-->

                            <div class="col-sm-12">

                                <div class="LineNgang" <!--{if $smarty.section.i.index neq 0}-->style="margin-top:25px;" <!--{/if}-->>

                                    <p class="bg_ic ic_text">
                                        <!--{$nameCatPr[i].name_vn}-->
                                    	<!--<img class="img-responsive" src="<!--{$path_url}-->/<!--{$nameCatPr[i].img_thumb_vn}-->"/>-->

                                    </p>

                                    <!--<a class="title_home_text" title="{$nameCatPr[i].title_link}" href="{$path_url}/<{$nameCatPr[i].unique_key}/">Điện thoại {$nameCatPr[i].$name}</a>-->

                                </div>

                                

                                <div class="box">	

                                    <div class="productbox">

                                    

                                        <div class="productlist">

                                            <div class="border-right"></div>
                                        
                                            <ul class="clearfix list-product-hot">

                                            	<!--{insert name="getProductHome" cat=$nameCatPr[i]}-->

                                            </ul>
                                        
                                        </div>	 

                                                 

                                     </div>	  

                                </div>

                                           

                            </div>	

                        <!--{/section}-->

                        

                    </div>		

			    </div>

			</div>                

    	</div>

    </div>

    

 <!-- end.row -->