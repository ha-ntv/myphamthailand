<?php /* Smarty version 2.6.6, created on 2019-03-20 15:10:53
         compiled from member-left.tpl */ ?>
<div class="menu_users col-lg-2">
    <div class="title_menu">
        <span>Tài khoản của tôi</span>
        <i>&nbsp;</i>
    </div>
    <ul>
    	<?php if ($_SESSION['VIETANHMOBILE_MEMBER_ID'] != ''): ?>
            <li class="menu-item">
                <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/thanh-vien/thong-tin-tai-khoan/" >Thông tin tài khoản</a>
            </li>
            <li class="menu-item">
                <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/thanh-vien/thay-doi-mat-khau/" >Thay đổi mật khẩu</a>
            </li>
            
            <li class="menu-item">
               <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/thanh-vien/danh-sach-yeu-thich/" >Danh sách yêu thích</a>
            </li>
            <?php if ($_SESSION['VIETANHMOBILE_MEMBER_TYPE'] == 1): ?> 
                <li class="menu-item">
                   <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/thanh-vien/don-hang-tu-van/" >Đơn hàng tư vấn</a>
                </li>
    		<?php endif; ?> 
            
            <li class="menu-item menu-item-last">
                <a onclick="return signout();" href="javascript:void(0)" >Thoát</a>
            </li>
        <?php else: ?>
        	<li class="menu-item">
                <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/thanh-vien/dang-nhap/" >Đăng nhập</a>
            </li>
            <li class="menu-item">
                <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/thanh-vien/dang-ky/" >Đăng ký</a>
            </li>
        <?php endif; ?>
    </ul>
</div>