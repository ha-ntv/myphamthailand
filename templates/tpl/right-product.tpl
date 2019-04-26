<div class="col-lg-r col-lg-3 col-md-6 col-sm-6 col-xs-12 hidden-xs  hidden-sm hidden-md">
    <div class="block_newslist  block block_newslist_list">
        <h2 class="block_title">
            <span><!--{if $rightCheckNew eq 1}-->Sản phẩm tương tự<!--{else}-->Sản Phẩm Hot<!--{/if}--></span>
        </h2>
        <div class="block_content">
            <ul class="media-list">
            	<!--{section name=i loop=$rightProductHot}-->
                    <li class="media">
                        <a class="pull-left" href="<!--{$path_url}-->/<!--{$rightProductHot[i].unique_key}-->.html" title="<!--{$rightProductHot[i].title_link}-->">
                             <img width="102" height="102" src="<!--{$path_url}-->/<!--{$rightProductHot[i].img_thumb_vn}-->" alt="<!--{$rightProductHot[i].alt_img}-->" title="<!--{$newsHome1[i].title_img}-->" />
                       </a>
                        <div class="media-body">
                            <div class="media-heading">
                                <a href="<!--{$path_url}-->/<!--{$rightProductHot[i].unique_key}-->.html" title="<!--{$rightProductHot[i].title_link}-->"><!--{$rightProductHot[i].$name}--></a>
                            </div>
                            <div class="price"><span><!--{if $rightProductHot[i].$price eq 0}-->Giá liên hệ<!--{else}--><!--{$rightProductHot[i].$price|number_format:0:",":"."}--> VNĐ<!--{/if}--></span></div>
                        </div>
                    </li>
                <!--{/section}-->
                
               
			</ul>
        </div>				
    </div>
</div>