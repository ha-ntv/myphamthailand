<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <!--{insert name="HearderCat" cid=$smarty.request.cat1 act=$smarty.request.do root=1}-->
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					Tìm kiếm 
				</span>
            </div>
            
            <div class="Clear"></div>
       </div>
       <link rel="stylesheet" type="text/css" media="screen" href="<!--{$path_url}-->/css/tab-menu.css" />  
       <table width="100%" border="0">
            <tr>
                <td class="k-header First">Stt</td>
                <td class="k-header">Số Serial </td>
                <td class="k-header">Giá nhập</td>
                <td class="k-header">Giá bán</td>
                <td class="k-header">Ngày nhập</td>
                <td class="k-header">Đối tác</td>
                <td class="k-header" align="center">TT Hàng</td>
                <td class="k-header" align="center">History</td>
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
                         <a href="javascript:void(0)"  title="Bán hàng">  
                         	 Chưa bán
                         </a>
                         <!--{else}--> 
                         	 <a href="javascript:void(0)" onclick="banTra('<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/trahang/<!--{$view[i].id}-->/search/')"  title="Trả hàng">
                            	Đã bán
                             </a>
                         <!--{/if}-->
                    </td>
                    <td align="center">
                    	<!--{if $view[i].history neq ''}-->
                        <a href="javascript:void(0)" onclick="showtb(<!--{$view[i].id}-->,'<!--{$view[i].history}-->');" id="class<!--{$view[i].id}-->" class="fa fa-caret-right k-plus"></a>
                        <!--{/if}-->
                    </td>
                    <td align="center">
                         <!--{if $view[i].baohanh eq "1"}-->
                         	<a href="javascript:void(0)" onclick="domainHide('<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/baohanhxong/<!--{$view[i].id}-->/search/')"  title="Bảo hành xong"> 
                            	<i class="fa fa-home"></i>
                            </a>
                         <!--{elseif  $view[i].baohanh eq "2"}--> 
                         	<a href="javascript:void(0)" onclick="domainHide('<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/baohanhxong/<!--{$view[i].id}-->/search/')" title="Bảo hành xong"> 
                            	<i class="fa fa-user"></i>
                            </a>
                         <!--{else}--> 
                            <a href="javascript:void(0)" onclick="domainShow(<!--{$view[i].id}-->)" id="btnshow<!--{$view[i].id}-->"  title="Bảo hành xong">
                            	<img src="<!--{$path_url}-->/images/hide.png" />
                            </a>
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
                            <a title="Xóa" href="javascript:void(0)" onclick="Dele('<!--{$path_url}-->/serial/<!--{insert name='getidr' idpr=$view[i].idpr}-->/<!--{$view[i].idpr}-->/delete/<!--{$view[i].id}-->/search/');">
                                <i class="fa fa-trashlist"></i>
                            </a>
                         <!--{else}-->
                            <i class="fa fa-trashlist colorxam"></i>
                        <!--{/if}--> 
                        <!--{if $checkPer2 eq "true" }-->      
                             <a href="<!--{$path_url}-->/serial/<!--{insert name='getidr' idpr=$view[i].idpr}-->/<!--{$view[i].idpr}-->/edit/<!--{$view[i].id}-->/search/" title="Sửa">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                        <!--{else}-->
                            <i class="fa fa-pencil-square-o colorxam"></i>
                        <!--{/if}-->
                        <a href="<!--{$path_url}-->/serial/<!--{insert name='getidr' idpr=$view[i].idpr}-->/<!--{$view[i].idpr}-->/view/<!--{$view[i].id}-->/" title="View">
                       		<i class="fa a-file-text-o"></i>
                        </a>
                    </td>
                </tr>
                <tr style="display:none;" class="tableshow" id="tb<!--{$view[i].id}-->">
                    <td colspan="10" style="padding:0;">
                        <div class="tdshowtabmenu" id="tdshow<!--{$view[i].id}-->" ></div>
                    </td>
                </tr>
            <!--{/section}-->
            
            <script>
				function showtb(id,history){
					if($('#tb'+id).css('display')=='none'){
						$('.tableshow').hide();
						$('#tb'+id).show();
						$('.tdshowtabmenu').html('');
						$(".fa").removeClass("fa-caret-down");
						$("#class"+id).addClass("fa-caret-down");
						$.post('<!--{$path_url}-->/ajax/Checkip.php',{act:'tableHistory',id:id,history:history},function(data) {
							 var obj = jQuery.parseJSON(data);
							 $('#tdshow'+id).html(obj.status);
						});
					}
					else{
						$('#tb'+id).hide();
						$("#class"+id).removeClass("fa-caret-down");
						$('#tdshow'+id).html('');	
					}
				}	
				
				function getBaohanh(id,idbaohanh){
				
					var answer = confirm("Bạn chất muốn thực hiện không?");
					if (answer)
					{
						var url = '<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/baohanh/'+id+'/'+idbaohanh+'/search/';
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