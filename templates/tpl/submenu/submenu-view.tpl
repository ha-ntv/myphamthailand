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
						
                        <div class="news-body" id="pageContainer">
                        	<!--{section name=i loop=$view}-->
            					<!--{insert name='GetLinkCat' cat=$view[i] lang=$lang assign="linkSubmenu"}-->
                            	<div class="item">
                                    <div class="NewsLeft">
                                        <h3 class="item_title_new">
                                            <a href="<!--{$path_url}-->/<!--{$linkSubmenu}-->" title="<!--{$view[i].title_link}-->"><strong><!--{$view[i].$name}--></strong></a>
                                        </h3>
                                        
                                        <div class="new_short">
                                            <!--{$view[i].$content}-->					
                                        </div>
                                  	</div>
                                </div>
                            <!--{/section}-->  
                        </div>
                        
                    </div>
                    
                   <!--{include file="right-product.tpl"}-->
                </div>
            </div>
        </div>
     </div>

</div>