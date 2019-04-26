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

    	<div class="bannerprtop">

        	<!--{section name=i loop=$bannerpr}-->

                <div class="bannerprtop-left">	

                    <a <!--{if $bannerpr[i].link neq ''}-->href="<!--{$bannerpr[i].link}--><!--{/if}-->" >

                        <img src="<!--{$path_url}-->/<!--{$bannerpr[i].img_vn}-->" alt="<!--{$bannerpr[i].alt_img}-->" title="<!--{$bannerpr[i].title_img}-->"  />

                    </a>

                </div>  

            <!--{/section}-->

            

        </div>

    	<div class="description" style="margin-left:10px;">

         <!--{$contentTop.$content}-->

        </div>

    </div>

</div>





<div class="container mt20">

	 <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">

            <div class="block_products_filter  block">

                <h2 class="block_title pull-left">

                    <span>Tìm theo</span>

                </h2>

                <div class="arrow-right pull-left"></div>

                <div class="block_product_filter">

                    <div class="pull-left">

                        
                   <!--
                        <div class="field_item">

                        	<div class="field_name normal">Hãng sản xuất</div>

                            <div class="field_label">

                            	<!--{section name=i loop=$searchHang}-->

                            	<div class="search_title">

                                	<a title="<!--{$searchHang[i].$name}-->" href="<!--{$path_url}-->/<!--{$searchHang[i].unique_key}-->/"><!--{$searchHang[i].$name}--></a> (<span><!--{insert name="countSearchPr" id=$searchHang[i].id}--></span>)

                                </div>

                                <!--{/section}-->

                            </div>

                        </div>
                       -->
                        

                        <div class="field_item">

                            <div class="field_name normal">Giá</div>

                                <div class="field_label">

                                	<!--{section name=i loop=$searchPrice}-->

                                        <div class="searchPrice">

                                            <a href="javascript:void(0)" onclick="searchPrice('<!--{$searchPrice[i].unique_key}-->','<!--{$seo.id}-->')" title="<!--{$searchPrice[i].title}-->"><!--{$searchPrice[i].$name}--></a>

                                        </div>

                                    <!--{/section}-->

                               </div>

                          </div>

                          
                    <!--
                        <div class="field_item">

                            <div class="field_label_checkbox">

                                <h3 id="newCheck">

                                    <a onclick="searchPrice('moi','<!--{$seo.id}-->')" href="javascript:void(0)">

                                        <span><i class="caret"></i>Mới</span>

                                    </a>

                               </h3>

                               <h3 id="oldCheck">

                                    <a onclick="searchPrice('cu','<!--{$seo.id}-->')" href="javascript:void(0)">

                                        <span><i class="caret"></i>Hàng trưng bày</span>

                                    </a>

                               </h3>

                               

                               <h3 id="quocteCheck">

                                    <a onclick="searchPrice('quocte','<!--{$seo.id}-->')" href="javascript:void(0)">

                                        <span><i class="caret"></i>Quốc tế</span>

                                    </a>

                               </h3>

                               <h3 id="lockCheck">

                                    <a onclick="searchPrice('lock','<!--{$seo.id}-->')" href="javascript:void(0)">

                                        <span><i class="caret"></i>Lock</span>

                                    </a>

                               </h3>

                            </div>

                      	</div>
                        -->

                       

                        <div class="pull-right sort-follow">

                            <div class="sort-follow-active">

                                <span>Sắp xếp theo</span>                                                                  

                            </div>

                            <ul>	

                                <li>

                                	<a onclick="searchPrice('desc','<!--{$seo.id}-->')" href="javascript:void(0)">

                                    	Giá cao đến thấp

                                    </a>

                                </li>

                                

                                <li>

                                	<a onclick="searchPrice('asc','<!--{$seo.id}-->')" href="javascript:void(0)">

                                    	Giá thấp đến cao

                                    </a>

                                </li> 

                            </ul>		

                        </div>

                        <div class="clear"></div>

                        <script type="text/javascript">

							function searchPrice(strPrice,cid){

								if(strPrice=='cu'){

									$('#oldCheck').addClass("active");

									$('#newCheck').removeClass("active");

									$('#quocteCheck').removeClass("active");

									$('#lockCheck').removeClass("active");

								}

								else if(strPrice=='moi'){

									$('#newCheck').addClass("active");

									$('#oldCheck').removeClass("active");

									$('#quocteCheck').removeClass("active");

									$('#lockCheck').removeClass("active");

								}

								else if(strPrice=='quocte'){

									$('#newCheck').removeClass("active");

									$('#oldCheck').removeClass("active");

									$('#quocteCheck').addClass("active");

									$('#lockCheck').removeClass("active");

								}

								else if(strPrice=='lock'){

									$('#newCheck').removeClass("active");

									$('#oldCheck').removeClass("active");

									$('#quocteCheck').removeClass("active");

									$('#lockCheck').addClass("active");

								}

								else{

									$('#newCheck').removeClass("active");

									$('#oldCheck').removeClass("active");

									$('#quocteCheck').removeClass("active");

									$('#lockCheck').removeClass("active");

								}

								

								$("#loadingAjax").show();

								$.post('<!--{$path_url}-->/loading/getPage.php',{

									strPrice:strPrice,

									cid:cid,

									type:'searchSubmenuApple'

								},function(data) {

								var obj = jQuery.parseJSON(data);

								

								 if(obj.view != ''){ //loi 

								 	$("#loadingAjax").hide();

									$("#view").html(obj.view);

									$("#showPaging").html(obj.Pagelink);

									 return false;

								 }

								

								});

								return false;	

							}

						</script>

                    </div>

                </div>

            </div><!-- end tim kiem -->		

        </div>

    </div>

    

    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">	

            <div class="product_manufactory mt40">

            	<div class="wrapper_content" id="view">

                    <!--{section name=i loop=$view}-->

                        <div class="group-title">

                        	 <a class="menu-name hot_item" href="<!--{$path_url}-->/<!--{insert name='GetLinkCat' cat=$view[i] lang=$lang }-->" title="<!--{$view[i].title_link}-->"><!--{$view[i].$name}--></a>

                        </div>

                        <ul class="products_list clearfix">

                            <!--{insert name="getProductApple" cid=$view[i].id}-->

                        </ul>

                        

                    <!--{/section}-->    

	 	 		</div>

            </div>

        </div>                

    </div>

</div>

<!---End Content-->