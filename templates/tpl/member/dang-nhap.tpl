<!---Content-->
    <div class="breadcrumbs">
 		<div class="container">
 			<div class="row">
 				<div class="col-xs-12">		
                	<div class="breadcrumb">
                        <div class="breadcrumb flever_12">
                            <a title="Trang chủ" href="<!--{$path_url}-->/">Trang chủ</a>
                        </div>
                        <div class="breadcrumbs_sepa">&gt;</div>
                        
                        <div class="breadcrumb">
                            <span><!--{$seo.title}--></span>
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
                <div class="row">
                    <!--{include file="member-left.tpl"}-->
                    
					<div class="users_info col-lg-9">
						<h1><span>Đăng nhập</span></h1>
						<form name="dangky" >
                        	<div class="MemberAll">
                            	<div class="MemberName"> 
                                	<strong>Email của bạn</strong>&nbsp;<font color="red">*</font> 
                                </div>
                                <div class="MemberText">
                                	<input type="text" id="email" name="email" class="txt-input" />
                                </div>
                            </div>
                            
                            <div class="MemberAll">
                            	
                                <div class="MemberName"> 
                                	<strong>Mật khẩu</strong>&nbsp;<font color="red">*</font>
                                </div>
                                <div class="MemberText">
                                	<input type="password" id="password" name="password" class="txt-input" />
                                </div>
                            </div>
                            
                             <div class="MemberAll">
                            	<div class="MemberName">&nbsp;</div>
                                <div class="MemberText">
                                	<input type="button" value="Đăng nhập" name="submit" onclick="return loginMember();" class="button-submit-edit button">
                                     <a class="link_register" href="<!--{$path_url}-->/thanh-vien/dang-ky/" >Bạn chưa có tài khoản?</a>
                                    <br /><br />
                                    <div class="field_btn" style="padding:0; color:#ed1b24; display:none;" id="errromsg"></div>
                                </div>
                            </div>
							
  						</form>
                    </div>
    
				</div>	                
            </div>
        </div><!-- end.row -->
	</div>
<!---End Content-->
<script language="javascript" type="text/javascript">
	function loginMember(){
		$("#errromsg").hide();
		var email = $('#email').val();
		var password = $('#password').val();
		if((email=="") || (password=="")){
			$("#errromsg").html('Vui lòng nhập đầy đủ thông tin, dấu (*) là bắt buộc nhập.');
			$("#errromsg").show();
			return false;
		}
		
		else{
			jQuery.post('<!--{$path_url}-->/loading/thanhvien.php',{
				type: 'login',
				email:email,
				password:password			
			},function(data) {
			 var obj = jQuery.parseJSON(data);
				if(obj.status == 'success'){
					alert('Bạn đã đăng nhập thành công.');
					$(location).attr('href','<!--{$path_url}-->/thanh-vien/thong-tin-tai-khoan/'); 
				}
				else{
					$("#errromsg").html(obj.errors);
					$("#errromsg").show();	
				}
			});
			return false;
		}
	}
</script>
