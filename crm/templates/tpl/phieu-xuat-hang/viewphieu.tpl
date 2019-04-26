<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
               <!--{insert name="HearderCat" cid=2 act=$smarty.request.do root=1}-->
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">
                	<a href="<!--{$path_url}-->/phieu-xuat-hang/<!--{$smarty.request.cat1}-->/view-dt/">		
						Phiếu Xuất hàng
                    </a>
				</span>
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					View 
				</span>
            </div>
            <div class="Clear"></div>
       	</div>
		<div class="FormBox">
        	 <div class="SubBox" id="showcid">
                <span class="titleFr ng-binding">Danh mục SP</span>
                <select id="cidphieu" name="cidphieu" disabled="disabled">
                    <option value="0">----Chọn Danh mục sản phẩm----</option>
                    <!--{section name=i loop=$catPr}-->
                        <option <!--{if $catPr[i].id eq $edit.cid}-->selected="selected"<!--{/if}--> value="<!--{$catPr[i].id}-->"><!--{$catPr[i].name_vn}--></option>
                    <!--{/section}-->    
                </select>
                <script>
					function loadpr(cid,num){
						var idprphieu =  <!--{$edit.idpr}-->
						jQuery.post('<!--{$path_url}-->/ajax/product.php',{cid:cid,type:'addprxuatkho',idprphieu:idprphieu},function(data) {
						 var obj = jQuery.parseJSON(data);
						 if(num > 0)
						 	jQuery('#showidpr'+num).html(obj.status);
						  else
						  	jQuery('#showidpr').html(obj.status); 
						});
						return false;
					}
					$(document).ready(function() {
						loadpr(<!--{$edit.cid}-->)
					});
				</script>
             </div>
             <div class="SubBox" id="showidpr"></div>
              <div class="SubBox">
                <span class="titleFr ng-binding">Số Serial</span>
                <input type="text" class="FrText" name="code" id="code" value="<!--{$edit.code}-->" />
             </div>
             <div class="SubBox">
                <span class="titleFr ng-binding">Ngày nhập</span>
                <input type="text" class="FrText" name="dated" id="dated" readonly="readonly" value="<!--{$edit.dated}-->"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Giá nhập</span>
                <input type="text" class="FrText autoNumeric" name="priceban" id="priceban" value="<!--{$edit.priceban}-->"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Nhà cung cấp</span>
                <select id="idpartner" name="idpartner">
                    <option value="0">----Chọn đối tác----</option>
                    <!--{section name=i loop=$khachhangList}-->
                        <option <!--{if $khachhangList[i].id eq $edit.idpartner}-->selected="selected"<!--{/if}--> value="<!--{$khachhangList[i].id}-->"><!--{$khachhangList[i].name}--></option>
                    <!--{/section}-->    
                </select>
             </div>

             
       </div>
  
   </div>
    <!--{include file="./left.tpl"}-->
</div>


<script type="text/javascript" src="<!--{$path_url}-->/js/autoNumeric.js"></script>
<script>
	function formatNumber (num) {
		return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
	}
	$('.autoNumeric').autoNumeric('init', {aSep: '.', aDec: 'none'});
</script>