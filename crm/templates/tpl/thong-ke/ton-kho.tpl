<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
            	<span class="subconten">		
					<!--{$Title}-->
				</span>
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					View
				</span>
            </div>
            
            <div class="Clear"></div>
       </div>
        
       <table width="100%" border="0">
            <tr>
               <td class="k-header First">Stt</td>
                <td class="k-header">Số Serial </td>
                <td class="k-header">Giá nhập</td>
                <td class="k-header">Giá bán</td>
                <td class="k-header">Ngày nhập</td>
                <td class="k-header">Đối tác</td>
                <td class="k-header" align="center">TT Hàng</td>
                <td class="k-header" align="center">Bảo Hành</td>
            </tr>
            <!--{section name=i loop=$view}--> 
                 
                <tr class="<!--{cycle values='trColorOne,trColorTwo'}-->">
                     <td>
                        <!--{$smarty.section.i.index+1+$number}-->
                    </td>
                    <td>
                        <!--{$view[i].code}-->
                    </td>
                    <td>
                        <!--{$view[i].pricenhap|number_format:0:",":"."}-->
                    </td>
                    
                    <td>
                         <!--{$view[i].priceban|number_format:0:",":"."}-->
                    </td>
                    <td>
                        <!--{$view[i].dated}-->
                    </td>
                    <td>
                        <!--{insert name="getName" id=$view[i].idpartner table='partner'}-->
                    </td>
                    <td align="center">
                         <!--{if $view[i].active eq "1"}-->	 
                         	 Chưa bán
                         <!--{else}--> 
                            Đã bán
                         <!--{/if}-->
                    </td>
                    
                    <td align="center">
                         <!--{if $view[i].baohanh eq "1"}-->
                            <i class="fa fa-home"></i>
                         <!--{elseif  $view[i].baohanh eq "2"}--> 
                            <i class="fa fa-user"></i>
                         <!--{else}--> 
                            <img src="<!--{$path_url}-->/images/hide.png" />
                         <!--{/if}-->
                    </td>
                    
                    
                </tr>
            <!--{/section}-->
        </table>
     <!--{if $link_url neq ''}-->
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr>
                <td align="right" class="k-header-page"> <!--{$link_url}--> </td>
            </tr>
        </table>
    <!--{/if}-->
    </div>
    <!--{include file="./left.tpl"}-->
</div>