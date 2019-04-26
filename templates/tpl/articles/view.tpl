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
                    
            <div class="news_home news_cat">
                <div class="row mt20" id="news_contents">
                    <div class="col-lg-r col-lg-9 col-md-12 col-sm-12 col-xs-12">
						<h1 class="content_title">
                            <span><!--{$seo.$name}--></span>
                        </h1>
                        <div class="news-body" id="view">
                        	<!--{section name=i loop=$view}-->
            					<!--{insert name="GetLinkDetail" cat=$view[i]  lang=$lang  assign="link" }-->
                            	<div class="item">
                                    <div class="frame_img pull-left mgright">
                                    	<a href="<!--{$path_url}-->/<!--{$link}-->" title="<!--{$view[i].title_link}-->">
                                           <img width="150" height="150" src="<!--{$path_url}-->/<!--{$view[i].img_thumb_vn}-->" alt="<!--{$view[i].alt_img}-->" title="<!--{$view[i].title_img}-->" class="img-responsive" />
                                         </a>
                                    </div>
                                    <div class="NewsLeft">
                                        <h3 class="item_title_new">
                                            <a href="<!--{$path_url}-->/<!--{$link}-->" title="<!--{$view[i].title_link}-->"><strong><!--{$view[i].$name}--></strong></a>
                                        </h3>
                                        <div class="news_datetime">
                                           Cập nhật: <!--{$view[i].dated|date_format:"%d-%m-%Y"}-->
                                        </div>
                                        
                                        <div class="new_short">
                                            <!--{$view[i].$short}-->					
                                        </div>
                                  	</div>
                                </div>
                            <!--{/section}-->  
                        </div>
                        
                        <!--{if $Checkpg eq 1 }--> 
                        	<span id="showPaging">
                            	<!--{$linkpg}-->
                            </span>
                        <!--{/if}--> 	
                    </div>
                    
                   <!--{include file="right-product.tpl"}-->
                </div>
            </div>
        </div>
     </div>

</div>