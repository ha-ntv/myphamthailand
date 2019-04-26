<!--{insert name="tinhtranghang" active=$view[i].in_stock assign="tinhtrang"}-->

<li class="product">

    <div class="frame_inner">
    <!--{if $view[i].discount neq 0}-->
    <div class="discount"><!--{$view[i].discount}-->%</div>
    <!--{/if}-->

        <div class="frame_img_cat ">

           

           <!--{if $tinhtrang neq ''}--><div class="hethang"></div><!--{/if}-->

           <a href="<!--{$path_url}-->/<!--{$view[i].unique_key}-->.html" title="<!--{$view[i].title_link}-->">

                <img class="img-responsive <!--{if $tinhtrang neq ''}-->opacity<!--{/if}-->" src="<!--{$path_url}-->/<!--{$view[i].img_thumb_vn}-->" alt="<!--{$view[i].alt_img}-->" title="<!--{$newsHome1[i].title_img}-->" />

           </a>

            

        </div>

        <div class="frame_title">

            <h3 class="name" >

                <a href="<!--{$path_url}-->/<!--{$view[i].unique_key}-->.html" title="<!--{$view[i].title_link}-->"><!--{$view[i].$name}--></a> 

            </h3>

        </div>

        <div class="frame_price">

            <div class="price">

                <span><!--{if ($view[i].price eq 0) || $tinhtrang neq ''}--><!--{$tinhtrang}--><!--{else}--><!--{$view[i].price|number_format:0:",":"."}--> VNĐ<!--{/if}--></span>

            </div>

            

        </div>

    </div>

    <div class="frame-hover" >

        <div class="frame_title">

            <div class="name" >

                <a href="<!--{$path_url}-->/<!--{$view[i].unique_key}-->.html" title="<!--{$view[i].title_link}-->"><!--{$view[i].$name}--></a> 

            </div>

        </div>

        

        <div class="frame_price">

            <div class="price">

                <span><!--{if ($view[i].price eq 0) || $view[i].in_stock neq ''}--><!--{$tinhtrang}--><!--{else}--><!--{$view[i].price|number_format:0:",":"."}--> VNĐ<!--{/if}--></span>

            </div>

        </div>

        <div class="divider"></div>

        <div class="frame_description" style="height:60px;"></div>

       <div class="frame_accessories button clearfix" style="text-align:center;">
            <a href="javascript:void(0);" class="button__item button--left"  data-id="<!--{$view[i].idpr}-->" onclick="add_cart(1,<!--{$view[i].idpr}-->)"><img src="<!--{$path_url}-->/images/icon/cart.png" title="Mua hàng"></a>
            <a href="<!--{$path_url}-->/<!--{$view[i].unique_key}-->.html" class="button__item button--right" ><img src="<!--{$path_url}-->/images/icon/search.png" title="Chi tiết"></a>
        </div>

    </div>

</li>