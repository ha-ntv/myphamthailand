<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.1.css" media="screen" />
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <!--{insert name="HearderCat" cid=2 act=$smarty.request.do root=1}-->
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">
                	<a href="<!--{$path_url}-->/phieu-xuat-hang/">		
						Phiếu xuất hàng
                    </a>
				</span>
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					Chi tiết 
				</span>
            </div>
            <div class="Clear"></div>
       </div>
       
       <!--{section name=i loop=$view}-->  
           <table width="100%" border="0">
                <tr class="<!--{cycle values='trColorOne,trColorTwo'}-->">
                    <td class="k-header First" colspan="2" style="background:none;"> <!--{insert name="getNameWeb" table='categories' typename='name_vn' id=$view[i].cid}--></td>
                    <td class="k-header" colspan="4" style="background:none";><!--{insert name="getNameWeb" table='products' typename='name_vn' id=$view[i].idpr}--> </td>
                </tr>
                <tr>
                    <td class="k-header First">Stt</td>
                    <td class="k-header">Số Serial </td>
                    <td class="k-header">Giá Bán</td>
                    <td class="k-header">Ngày nhập</td>
                    <td class="k-header">Đối tác</td>
                    <td class="k-header" align="center">Del/View</td>
                </tr> 
                <!--{insert name="getViewDtPhieuXuatKho" maphieu=$view[i].maphieu cid=$view[i].cid}--> 
               
            </table>
        <br /><br />
       <!--{/section}-->
   
    </div>
    <!--{include file="./left.tpl"}-->
</div>