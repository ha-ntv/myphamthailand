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

        </div>

    </div>



    <div class="container mt20">

		<div class="row">

        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">

            	<div class="content_detail">

					<div class="row mt20" id="news_contents">

						<div class="col-lg-r col-lg-9 col-md-12 col-sm-12 col-xs-12">

                        	<h1 class="content_title">

                                <span><!--{$detail.$name}--></span> <span style="font-size:18px; color:#0069b8">(<!--{$detail.view}--> lượt xem)</span>

                            </h1>

                            <div class="description">

                            	<!--{if $detail.$content eq ""}-->

                                    <p class="nodate">##No_date##</p>

                                <!--{else}-->

                                    <!--{$detail.$content}-->

                                <!--{/if}-->

                            </div>

                            

                            <!--{if $checkTragop eq 1}-->

                            	<!--{include file="articles/tra-gop.tpl"}-->

                            <!--{/if}-->

                            

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

                        

                         <!--{include file="right-product.tpl"}-->

					</div>



				</div>

            </div>

         </div><!-- end.row -->

	</div>

<!---End Content-->