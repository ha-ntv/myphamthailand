<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.1.css" media="screen" />
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <!--{insert name="HearderCat" cid=2 act=$smarty.request.do root=1}-->
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					Phiếu xuất hàng
				</span>
            </div>
            <div class="TitleRight">
            	<!--{if $checkPer1 eq "true" }-->
                    <a title="Thêm mới" class="kv2Btn" href="<!--{$path_url}-->/phieu-xuat-hang/2/add/">
                        <i class="fa fa-plus"></i> Thêm mới 
                    </a>
                <!--{else}-->
                	 <a class="kv2Btn colorxam">
                        <i class="fa fa-plus colorxam"></i> Thêm mới 
                    </a>
                <!--{/if}--> 
                <a title="Thêm mới" class="kv2Btn" href="javascript:void(0)">
                    : &nbsp; &nbsp; &nbsp;  
                </a>
            </div>
            <div class="Clear"></div>
       </div>
        <link rel="stylesheet" type="text/css" media="screen" href="<!--{$path_url}-->/css/tab-menu.css" /> 
       <table width="100%" border="0">
            <tr>
            	<td class="k-header First"></td>
                <td class="k-header First">Stt</td>
                <td class="k-header">Mã xuất hàng </td>
                <td class="k-header">Thời gian xuất</td>
                <td class="k-header">Số lượng máy</td>
                <td class="k-header" align="center">Del</td>
            </tr>
            <!--{section name=i loop=$view}-->   
                <tr class="<!--{cycle values='trColorOne,trColorTwo'}-->">
                	<td align="center" style="padding-right:2px;">
                    	<a href="javascript:void(0)" onclick="showtb(<!--{$view[i].id}-->,<!--{$view[i].idprphieu}-->,'<!--{$view[i].maphieu}-->');" id="class<!--{$view[i].id}-->" class="fa fa-caret-right k-plus"></a>
                    </td>
                    <td onclick="location.href='<!--{$path_url}-->/phieu-xuat-hang/<!--{$view[i].maphieu}-->/view-dt/'">
                        <!--{$smarty.section.i.index+1+$number}-->
                    </td>
                     <td onclick="location.href='<!--{$path_url}-->/phieu-xuat-hang/<!--{$view[i].maphieu}-->/view-dt/'">
                        <!--{$view[i].maphieu}-->
                    </td>
                    
                      <td onclick="location.href='<!--{$path_url}-->/phieu-xuat-hang/<!--{$view[i].maphieu}-->/view-dt/'">
                        <!--{$view[i].datedphieu}-->
                    </td>
             
                     <td onclick="location.href='<!--{$path_url}-->/phieu-xuat-hang/<!--{$view[i].maphieu}-->/view-dt/'">
                    	<!--{insert name="countXuatKho" act='soluongnhapPhieuXuatHang' maphieu=$view[i].maphieu}-->
                    </td>
                    
                    <td align="center">
                    	<!--{if $checkPer3 eq "true" }-->	
                            <a title="Xóa" href="javascript:void(0)" onclick="Dele('<!--{$path_url}-->/phieu-xuat-hang/<!--{$smarty.request.cat1}-->/delete/<!--{$view[i].id}-->/');">
                                <i class="fa fa-trashlist"></i>
                            </a>
                        <!--{else}-->
                             <i class="fa fa-trashlist colorxam"></i>
                        <!--{/if}-->
                    </td>
                </tr>
                <tr style="display:none;" class="tableshow" id="tb<!--{$view[i].id}-->">
                    <td colspan="8" style="padding:0;">
                        <div class="tdshowtabmenu" id="tdshow<!--{$view[i].id}-->" ></div>
                    </td>
                </tr>
            <!--{/section}-->
            <script>
            	function showtb(id,idprphieu,maphieu){
					if($('#tb'+id).css('display')=='none'){
						$('.tableshow').hide();
						$('#tb'+id).show();
						$('.tdshowtabmenu').html('');
						$(".fa").removeClass("fa-caret-down");
						$("#class"+id).addClass("fa-caret-down");
						$.post('<!--{$path_url}-->/ajax/Checkip.php',{act:'tablePrPhieuXuat',id:idprphieu,maphieu:maphieu},function(data) {
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