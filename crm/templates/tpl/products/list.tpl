<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <!--{insert name="HearderCat" cid=$smarty.request.cat1 act=$smarty.request.do root=1}-->
            </div>
            <div class="TitleRight">
                <!--{include file="./thongkekho.tpl"}-->
            </div>
            <div class="Clear"></div>
       </div>
       <link rel="stylesheet" type="text/css" media="screen" href="<!--{$path_url}-->/css/tab-menu.css" />  
       <table width="100%" border="0">
            <tr>
                <td class="k-header First"></td>
                <td class="k-header First">Mã sản phẩm </td>
                <td class="k-header">Tên sản phẩm</td>
                <td class="k-header">SL-Nhập</td>
                <td class="k-header">SL-Bán</td>
                <td class="k-header">Tồn-kho</td>
                <td class="k-header">TB-Cộng/vnđ</td>
                <td class="k-header">Bảo-hành</td>
            </tr>
            <!--{section name=i loop=$view}--> 
                 <!--{insert name="countNhapKho" idpr=$view[i].id act='soluongtonkho' assign="soluongtonkho"}-->
                 <tr <!--{if $soluongtonkho le 5}-->class="trColorNone"<!--{else}--> class="<!--{cycle values='trColorOne,trColorTwo'}-->" <!--{/if}-->>
                    <td align="center" style="padding-right:2px;">
                    	<a  href="javascript:void(0)" onclick="showtb(<!--{$view[i].id}-->);" id="class<!--{$view[i].id}-->" class="fa fa-caret-right k-plus"></a>
                    </td>
                    <td onclick="location.href='<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$view[i].id}-->/'">
                        <!--{$view[i].codesp1}-->
                    </td>
                    <td onclick="location.href='<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$view[i].id}-->/'">
                        <!--{$view[i].name_vn}-->
                    </td>
                    
                    <td align="center" onclick="location.href='<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$view[i].id}-->/'">
                        <!--{insert name="countNhapKho" idpr=$view[i].id act='soluongnhap'}-->
                    </td>
                    <td align="center" onclick="location.href='<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$view[i].id}-->/'">
                        <!--{insert name="countNhapKho" idpr=$view[i].id act='soluongban'}-->
                    </td>
                    <td align="center" onclick="location.href='<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$view[i].id}-->/'">
                     	<!--{$soluongtonkho}-->  
                    </td>
                    <td align="center" onclick="location.href='<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$view[i].id}-->/'">
                       <!--{insert name="tbcongHangTon" idpr=$view[i].id act='trungBinhCong'}-->
                    </td>
                    
                    <td align="center" onclick="location.href='<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$view[i].id}-->/'">
                       <!--{insert name="countNhapKho" idpr=$view[i].id act='soluongbaohang'}-->
                    </td>
                </tr>
                <tr style="display:none;" class="tableshow" id="tb<!--{$view[i].id}-->">
                    <td colspan="8" style="padding:0;">
                        <div class="tdshowtabmenu" id="tdshow<!--{$view[i].id}-->" ></div>
                    </td>
                </tr>
            <!--{/section}-->
            <script>
            	function showtb(id){
					if($('#tb'+id).css('display')=='none'){
						$('.tableshow').hide();
						$('#tb'+id).show();
						$('.tdshowtabmenu').html('');
						$(".fa").removeClass("fa-caret-down");
						$("#class"+id).addClass("fa-caret-down");
						$.post('<!--{$path_url}-->/ajax/Checkip.php',{act:'tablePr',id:id},function(data) {
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