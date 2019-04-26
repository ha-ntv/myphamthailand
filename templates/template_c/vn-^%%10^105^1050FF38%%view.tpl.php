<?php /* Smarty version 2.6.6, created on 2019-03-20 15:10:51
         compiled from contact/view.tpl */ ?>
<!---Content-->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">		
                <div class="breadcrumb">
                    <div class="breadcrumb flever_12">
                        <a title="Trang chủ" href="<?php echo $this->_tpl_vars['path_url']; ?>
">Trang chủ</a>
                    </div>
					<div class="breadcrumbs_sepa">&gt;</div>
                    <div class="breadcrumb">
                        <span><?php echo $this->_tpl_vars['seo'][$this->_tpl_vars['name']]; ?>
</span>
                    </div>
			
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt20">
    
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">      
            <div class="contact">
                <div class="row">
                    <div class="col-lg-r col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <h1 class="content_title">
                            <span><?php echo $this->_tpl_vars['seo'][$this->_tpl_vars['name']]; ?>
</span>
                        </h1>
                        
                        <div class="contact_form">
                            <form  name="formcontact" action="" method="post">
                                <table width="100%" cellpadding="5" align="center" class="contact_table">
                                    <tbody>		
                                        <tr>
                                            <td class="form_name">Họ và tên<span class="red">* </span></td>
                                            
                                        </tr>
                                        <tr>
                                            <td class="form_text">
                                                <input type="text" class="form_control" title="Họ và tên" id="name" name="name" value="" maxlength="255">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form_name">Email<span class="red">* </span></td>
                                        </tr>
                                        <tr>
                                            <td class="form_text">
                                                <input type="text" class="form_control" title="Email" id="email" name="email" value="" maxlength="255">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form_name">
                                                Địa chỉ<span class="red">* </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form_text">
                                                <input type="text" class="form_control" title="Địa chỉ" id="address" name="address" value="" maxlength="255">
                                            </td>
                                        </tr>		
                                        <tr>
                                            <td class="form_name">
                                                Điện thoại<span class="red">* </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form_text">
                                                <input type="text" class="form_control" title="Điện thoại" id="phone" name="phone" value="" maxlength="255">
                                            </td>
                                        </tr>				
                                        
                                        <tr>
                                            <td class="form_name">Nội dung :</td>
                                        </tr>
                                        <tr>
                                            <td class="form_text">
                                                <textarea id="message" name="message" cols="30" rows="6"></textarea>
                                            </td>
                                        </tr>
                                        
                                         <tr>
                                            <td class="form_name">
                                                Mã kiểm tra<span class="red">* </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form_text">
                                            	<input type="hidden" id="getcode" name="getcode" value="<?php echo $this->_tpl_vars['security']; ?>
" />
                                                <input type="text" style="width:30%" class="form_control" size="23" maxlength="10" name="cdoecom" id="cdoecom" />
                                                <img name="captcha"  alt="captcha" src="<?php echo $this->_tpl_vars['path_url']; ?>
/random_img.php?characters=4&code=<?php echo $this->_tpl_vars['security']; ?>
" />
                                                <a onclick="reload('captcha'); return false;" href="javascript:void(0)">
                                                   <img width="25" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/rest.png" />
                                                </a> 
                                                
                                            </td>
                                        </tr>		
                                       
                                        <tr>
                                            <td class="form_text">&nbsp</td>
                                        </tr>
                                        <tr>
                                            <td class="form_text button_area">
                                                <a id="submitbt" href="javascript: void(0)" onclick="return Register();" class="button">
                                                    <span>&nbsp;Gửi&nbsp;</span>
                                                </a>
                                                <a id="resetbt" href="javascript: void(0)" onclick="return ResetFr();" class="button">
                                                    <span>Làm lại</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                            <div class="clear"></div>
                        </div>		
                    </div>
                    
                    <div class="col-lg-r col-lg-7 col-md-6 col-sm-6 col-xs-12 hidden-xs  hidden-sm">
                    	<?php if ($_REQUEST['cat2'] != '' || $_SESSION['showCity'] != 1): ?> 
            				<div class="address">
                                <div class="address_wapper row">
                                    <div class="w100">
                                        <h2 class="name">
                                            <span>Khu Vực Đà Nẵng </span>
                                        </h2>
                                        <div class="adrress-box">
                                            <span class="btn-info iconbox pull-left"><i class="fa fa-map-marker"></i></span>
                                            <div class="media-body">
                                               <?php echo $this->_tpl_vars['addressContact']['content_en']; ?>
			
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="clear"></div>
                                 </div>
                            </div>
                        <?php else: ?>
                        	<div class="address">
                            <div class="address_wapper row">
                                <div class="w100">
                                    <h2 class="name">
                                        <span>Khu Vực TP. Hồ Chí Minh </span>
                                    </h2>
                                    <div class="adrress-box">
                            			<span class="btn-info iconbox pull-left"><i class="fa fa-map-marker"></i></span>
                            			<div class="media-body">
                                			<?php echo $this->_tpl_vars['addressContact']['content_vn']; ?>
			
                                        </div>
                        			</div>
                                </div>
                    			
                    			<div class="clear"></div>
               				 </div>
           			 	</div>
                        <?php endif; ?>
                    </div> 
                </div>
			</div>
        </div>
     </div>

</div>

<script language="javascript" type="text/javascript">
	function reload(imageName)
  {
	 var randomnumber=makeid(); // generate a random number to add to image url to prevent caching
	 $('#getcode').val(randomnumber);
	 document.images[imageName].src = '<?php echo $this->_tpl_vars['path_url']; ?>
/random_img.php?characters=4&code=' + randomnumber; // change image src to the same url but with the random number on the end
  }
 function makeid()
 {
	var text = "";
	var possible = "23456789bcdfghjkmnpqrstvwxyz";

	for( var i=0; i < 4; i++ )
		text += possible.charAt(Math.floor(Math.random() * possible.length));

	return text;
 }
	function ResetFr() {
		$("#name").val('');
		$("#address").val('');
		$("#phone").val('');
		$("#email").val('');
		$("#message").val('');
		return false;
	}
	function Register() {
		var name = document.getElementById("name");
		var email = document.getElementById("email");
		var address = document.getElementById("address");
		var phone = document.getElementById("phone");
		var company = document.getElementById("company");
		var code = document.getElementById("cdoecom");
		var getcode = document.getElementById("getcode");
		var phoneNum = phone.value;
		var phoneLength = phone.value.length;
		
		//alert(phoneNum);		
		var r = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var flag = 0;
		
		//document.write(s.match(/^Thu/i)); //Kết quả: Thu, vì chữ Thu nằm ở đầu chuỗi s
		var checkPhone = phoneNum.match(/^0/i);
		
		if (name.value=="") {
			alert( "Mời bạn nhập họ tên" );
			name.focus();
			return false;
		}else if(email.value==""){
			alert( "Mời bạn nhập email" );
			email.focus();
			return false;
		}else if(r.test(email.value)==false){
			alert( "Email không đúng định dạng" );
			email.focus();
			return false;
		}else if(address.value==""){
			alert( "Mời bạn nhập địa chỉ" );
			address.focus();
			return false;
		}else if(phone.value==""){
			alert( "Mời bạn nhập số điện thoại" );
			phone.focus();
			return false;
		}else if(checkPhone!=0){
			alert( "Số điện thoại không đúng Ex:0xxxxxxxx");
			phone.focus();
			return false;
		}
		else if(isNaN(phone.value) == true){
			alert( "Số điện thoại không hợp lệ (vd:0909999999)");
			phone.focus();
			return false;
		}
		else if(phoneLength < 10 || phoneLength>11){
			alert( "Số điện thoại phải là 10 hoặc 11 số Ex:0xxxxxxxx");
			phone.focus();
			return false;
		}
		else if(code.value != getcode.value){
			alert( "Mã kiểm tra không đúng." );
			code.focus();
			return false;
		}
		else{
			document.formcontact.submit();
		} 
	}		
</script>