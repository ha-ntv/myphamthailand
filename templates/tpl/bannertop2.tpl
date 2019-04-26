<div class="bannerprtop">
    <!--{section name=i loop=$bannerpr}-->
        <div class="bannerprtop-left">	
            <a <!--{if $bannerpr[i].link neq ''}-->href="<!--{$bannerpr[i].link}--><!--{/if}-->" >
                <img src="<!--{$path_url}-->/<!--{$bannerpr[i].img_vn}-->" alt="<!--{$bannerpr[i].alt_img}-->" title="<!--{$bannerpr[i].title_img}-->"  />
            </a>
        </div>  
    <!--{/section}-->
    
</div>