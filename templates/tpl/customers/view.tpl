 <!--center-->
<div id="maincontentall">
	<!--{include file="left.tpl"}-->
    <div class="mainright" style="margin-left:-11px;">
        <div class="contentcen" style="line-height:normal;">
        	<!--{section name=i loop=$view}-->
            	<!--{insert name="GetLinkDetail" cat=$view[i]  lang=$lang  assign="link" }-->
            	<!--{if $smarty.section.i.index%2 eq 0}-->
        		<div class="maincustomers">
                    <div class="imgtop"></div>
                 <!--{/if}--> 
                    <div class="subcustomers">
                        <div class="imgtopkep"></div>
                        <div class="left">
                        	<a href="<!--{$path_url}-->/<!--{$link}-->" title="<!--{$view[i].title_link}-->">
                            <!--{if $view[i].img_thumb_vn neq ''}-->
                                <img src="<!--{$path_url}-->/<!--{$view[i].img_thumb_vn}-->" alt="<!--{$view[i].alt_img}-->" title="<!--{$view[i].title_img}-->" />
                            <!--{else}-->
                                <img src="<!--{$path_url}-->/photo/no-img-new.jpg" alt="<!--{$view[i].alt_img}-->" title="<!--{$view[i].title_img}-->" />
                            <!--{/if}-->
                            </a>
                            <h4><strong><!--{$view[i].$name}--></strong></h4>
                        </div>
                        <div class="right">
                            <!--{$view[i].$content}-->
                        </div>
                    </div>
                <!--{if ($smarty.section.i.index neq 0) and (($smarty.section.i.index) %2 neq 0)}-->                    
                </div>
                <!--{/if}-->
        	<!--{/section}--> 
            <div class="clear"></div>	
        </div>
        <div class="contentbottom"></div>
        <div class="clear"></div>
    </div>
    
    <div class="clear"></div>
</div>
<!--End center-->