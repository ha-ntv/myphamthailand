<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.1.css" media="screen" />
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <!--{insert name="HearderCat" cid=$smarty.request.cat1 act=$smarty.request.do root=1}-->
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					<!--{$namePr.name_vn}--> 
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
                <td class="k-header" align="center">Del/edit/View</td>
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
                             <a href="javascript:void(0)" title="Bán hàng">  
                                Chưa bán
                             </a>
                         <!--{else}--> 
                         	 <a href="javascript:void(0)" onclick="banTra('<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/trahang/<!--{$view[i].id}-->/<!--{$maphieu}-->/')"  title="Trả hàng">
                            	Đã bán
                             </a>
                         <!--{/if}-->
                    </td>
                    
                    <td align="center">
                    	 <!--{if $checkPer2 eq "true" }-->
                             <!--{if $view[i].baohanh eq "1"}-->
                                <a href="javascript:void(0)" onclick="domainHide('<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/baohanhxong/<!--{$view[i].id}-->/<!--{$maphieu}-->/')"  title="Bảo hành xong"> 
                                    <i class="fa fa-home"></i>
                                </a>
                             <!--{elseif  $view[i].baohanh eq "2"}--> 
                                <a href="javascript:void(0)" onclick="domainHide('<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/baohanhxong/<!--{$view[i].id}-->/<!--{$maphieu}-->/')" title="Bảo hành xong"> 
                                    <i class="fa fa-user"></i>
                                </a>
                             <!--{else}--> 
                                <a href="javascript:void(0)" onclick="domainShow(<!--{$view[i].id}-->)" id="btnshow<!--{$view[i].id}-->"  title="Bảo hành xong">
                                    <img src="<!--{$path_url}-->/images/hide.png" />
                                </a>
                             <!--{/if}-->
                         <!--{else}-->
                         	<img src="<!--{$path_url}-->/images/hide-no.png" />
                         <!--{/if}-->
                         <div id="showbaohanh<!--{$view[i].id}-->" style="display: none;">
                            <select name="baohanh" id="baohanh" onchange="getBaohanh(<!--{$view[i].id}-->,this.value)">
                                <option value="0">--Chọn Bảo hành--</option>
                                <option value="1"> Bảo hành kho </option>
                                <option value="2"> Bảo hành khách </option>
                            </select>   
                        </div>
                        
                    </td>
                    
                    <td align="center">
                    	<!--{if $checkPer3 eq "true" }-->	
                            <a title="Xóa" href="javascript:void(0)" onclick="Dele('<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/delete/<!--{$view[i].id}-->/<!--{$maphieu}-->/');">
                                <i class="fa fa-trashlist"></i>
                            </a>
                         <!--{else}-->
                            <i class="fa fa-trashlist colorxam"></i>
                        <!--{/if}--> 
                      	<!--{if $checkPer2 eq "true" }-->      
                            <a href="<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/edit/<!--{$view[i].id}-->/<!--{$maphieu}-->/" title="Sửa">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                             
                        <!--{else}-->
                            <i class="fa fa-pencil-square-o colorxam"></i>
                        <!--{/if}-->
                        <a href="<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/view/<!--{$view[i].id}-->/<!--{$maphieu}-->/" title="View">
                            <i class="fa a-file-text-o"></i>
                        </a>  
                    </td>
                </tr>
            <!--{/section}-->
            <script>
				function getBaohanh(id,idbaohanh){
				
					var answer = confirm("Bạn chất muốn thực hiện không?");
					if (answer)
					{
						var url = '<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/baohanh/'+id+'/'+idbaohanh+'/<!--{$maphieu}-->/';
						window.location.href = url;
					}
					else{
						$('#showbaohanh'+id).hide();
						$('#btnshow'+id).show();
					}
				}
				function domainShow(a){
					
					$('#showbaohanh'+a).show();
					$('#btnshow'+a).hide();
					$('#btnhide'+a).show();
				}	
				function domainHide(url){
					var answer = confirm("Bạn chất muốn thực hiện không?");
					if (answer)
					{
						window.location.href = url;
					}
				}
				
				function banTra(url){
					var answer = confirm("Bạn chất muốn thực hiện không?");
					if (answer)
					{
						window.location.href = url;
					}
				}
				
			</script>
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