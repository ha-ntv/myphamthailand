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
            <div class="TitleSearch">
                Có <strong class="red"><!--{$total}--></strong> 
                sản phẩm <!--{if $checkSearch eq 11}--> với từ khóa: <strong class="red"><!--{$nameSe}--></strong><!--{/if}-->  
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
<!---End Content-->