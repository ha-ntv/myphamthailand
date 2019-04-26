<div class="menu_users col-lg-2">
    <div class="title_menu">
        <span>Tài khoản của tôi</span>
        <i>&nbsp;</i>
    </div>
    <ul>
    	<!--{if $smarty.session.VIETANHMOBILE_MEMBER_ID neq ''}-->
            <li class="menu-item">
                <a href="<!--{$path_url}-->/thanh-vien/thong-tin-tai-khoan/" >Thông tin tài khoản</a>
            </li>
            <li class="menu-item">
                <a href="<!--{$path_url}-->/thanh-vien/thay-doi-mat-khau/" >Thay đổi mật khẩu</a>
            </li>
            
            <li class="menu-item">
               <a href="<!--{$path_url}-->/thanh-vien/danh-sach-yeu-thich/" >Danh sách yêu thích</a>
            </li>
            <!--{if $smarty.session.VIETANHMOBILE_MEMBER_TYPE eq 1}--> 
                <li class="menu-item">
                   <a href="<!--{$path_url}-->/thanh-vien/don-hang-tu-van/" >Đơn hàng tư vấn</a>
                </li>
    		<!--{/if}--> 
            
            <li class="menu-item menu-item-last">
                <a onclick="return signout();" href="javascript:void(0)" >Thoát</a>
            </li>
        <!--{else}-->
        	<li class="menu-item">
                <a href="<!--{$path_url}-->/thanh-vien/dang-nhap/" >Đăng nhập</a>
            </li>
            <li class="menu-item">
                <a href="<!--{$path_url}-->/thanh-vien/dang-ky/" >Đăng ký</a>
            </li>
        <!--{/if}-->
    </ul>
</div>