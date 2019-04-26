<div class="WrapContent">
	<div class="dashboardBox">
		<div class="homeTtile">Sản phẩm sắp hết hàng </div>
       
        <table width="100%" border="0">
           	<!--{section name=i loop=$view}-->
            	<!--{insert name="getSapHetHang" id=$view[i].id  assign="checkSapHetHang"}-->
                <!--{if $checkSapHetHang neq ''}-->
                    <tr>
                        <td class="k-header First"><!--{$view[i].name_vn}--></td>
                        <td class="k-header">Tên sản phẩm</td>
                        <td class="k-header">Số lượng</td>
                    </tr>
                    <!--{$checkSapHetHang}-->
                <!--{/if}-->
             <!--{/section}-->
         </table>
       
                    
         <!--           
          <table width="100%" cellspacing="0" cellpadding="0" border="0">
        	<tbody><tr>
                <td align="right" class="k-header-page"> <span>&nbsp;Đầu&nbsp;</span><span>&nbsp;&lt;&lt;&nbsp;</span><span><font color="#0066FF" style="font-family:Arial, Helvetica, sans-serif">&nbsp;1&nbsp;</font></span><a href="http://localhost/crm_new/products/82/0/0/2/">&nbsp;2&nbsp;</a><span>&nbsp;&gt;&gt;&nbsp;</span><span>&nbsp;Cuối&nbsp;</span> </td>
            </tr>
         </tbody></table>    
         -->
    </div> 
    
    <div class="dashboardBox">
		<div class="homeTtile">Kết quả bán hàng hôm nay</div> 
        <div class="uln dashboardStatistic">
            <ul>
                <li class="total ng-binding">
                    <label class="dash_icon"><i class="fa fa-usd-home"></i></label>
                    <label class="dash_title ng-binding">0 Hóa đơn</label>
                    <span class="ng-binding">0</span>
                    Doanh số
                </li>
                <li class="vote ng-binding">
                    <label class="dash_icon"><i class="fa fa-reply-all"></i></label>
                    <label class="dash_title ng-binding">0 phiếu</label>
                    <span class="ng-binding">0</span>
                    Trả hàng                        
                </li>
               
            </ul>
       </div>
    </div>  
</div>