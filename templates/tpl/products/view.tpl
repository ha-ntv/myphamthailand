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

    	<!--{include file="bannertop2.tpl"}-->

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

                            <div class="actived  field_label">

                            	<h3>

                                	<a title="<!--{$contentTop.$name}-->" href="<!--{$path_url}-->/<!--{$searchHang.unique_key}-->/"><!--{$searchName.$name}--></a>

                                </h3>

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

                                <h3 id="newCheck" <!--{$classnew}-->>

                                    <a onclick="searchprSubmit('new')" href="javascript:void(0)">

                                        <span><i class="caret"></i>Mới</span>

                                    </a>

                               </h3>

                               <h3 id="oldCheck" <!--{$classold}-->>

                                    <a onclick="searchprSubmit('likenew')" href="javascript:void(0)">

                                        <span><i class="caret"></i>Hàng trưng bày</span>

                                    </a>

                               </h3>

                               

                               <h3 id="quocteCheck" <!--{$classworld}-->>

                                    <a onclick="searchprSubmit('world')" href="javascript:void(0)">

                                        <span><i class="caret"></i>Quốc tế</span>

                                    </a>

                               </h3>

                               <h3 id="lockCheck" <!--{$classlock}-->>

                                    <a onclick="searchprSubmit('lock')" href="javascript:void(0)">

                                        <span><i class="caret"></i>Lock</span>

                                    </a>

                               </h3>

                               <script type="text/javascript">

							   		function searchprSubmit(a){

										var url = '<!--{$path_url}-->/<!--{$seo.unique_key}-->/'+a+'/';

										$(location).attr('href',url);

									}	

							   </script>

                            </div>

                      	</div> -->

                       

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

									num_rows_page:<!--{$num_rows_page}-->,

									type:'searchProduct'

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

            <div class="home">

        		    <div class="row">

                        <div class="col-sm-12">

                            <!--Danh sách sản phẩm-->

                            <div class="box">	

                                <div class="productbox">

                                

                                    <div class="productlist">

                                        <div class="border-right"></div>

                                        <!--{if $CheckNull eq 0}-->

                                             <p class="nodate"> ##No_date## </p>

                                        <!--{else}-->

                                            <ul class="clearfix list-product-hot" id="view">

                                                <!--{section name=i loop=$view}-->

                                                    <!--{include file="products/list.tpl"}-->

                                                <!--{/section}-->

                                            </ul>

                                        <!--{/if}-->



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



</div>