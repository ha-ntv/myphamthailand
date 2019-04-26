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
                <td class="k-header">Đối tác</td>
                <td class="k-header">Ngày nhập</td>
                <td class="k-header">Ngày bán</td>
               <!--{if $viewbanhang eq 1}-->
                <td class="k-header">Chi tiết</td>
               <!--{/if}-->
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
                        <!--{insert name="getName" id=$view[i].idpartner table='partner'}-->
                    </td>
                    <td>
                        <!--{$view[i].dated}-->
                    </td>
                     <td>
                        <!--{$view[i].datesell}-->
                    </td>
                    
                    <!--{if $viewbanhang eq 1}-->
                		<td align="center">
                             <a href="javascript:void(0)" onclick="window.open('<!--{$path_url}-->/print.php?serial=<!--{$view[i].code}-->','mywindow','width=1000,height=800,scrollbars=yes')" title="View">
                                <i class="fa a-file-text-o"></i>
                            </a>
                        </td>
               		<!--{/if}-->
               
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