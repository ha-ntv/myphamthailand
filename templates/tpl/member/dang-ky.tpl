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
						<h1><span>Đăng ký thành viên</span></h1>
						<form name="dangnhap" >
                        	<div class="MemberAll">
                            	<div class="MemberName"> 
                                	<strong>Họ và tên của bạn</strong>&nbsp;<font color="red">*</font> 
                                </div>
                                <div class="MemberText">
                                	<input type="text" id="name" name="name" class="txt-input" />
                                </div>
                            </div>
                            
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
                                	<strong>Ngày sinh</strong>
                                </div>
                                <div class="MemberText">
                                    <div class="select-box pull-left">
                                        <select name="birth_day" id="birth_day">
                                            <option>Ngày</option>
                                            <!--{section name=i start=1 loop = 32}-->
                                                <option <!--{if $memberCar.day eq $smarty.section.i.index}-->selected="selected"<!--{/if}--> value="<!--{$smarty.section.i.index}-->"> <!--{$smarty.section.i.index}--> </option>
                                            <!--{/section}-->
                                        </select>
                                    </div>
                                    <div class="select-box pull-left">
                                        <select name="birth_month" id="birth_month">
                                            <option>Tháng</option>
                                            <!--{section name=i start=1 loop = 13}-->
                                                <option <!--{if $memberCar.month eq $smarty.section.i.index}-->selected="selected"<!--{/if}--> value="<!--{$smarty.section.i.index}-->"> <!--{$smarty.section.i.index}--> </option>
                                              <!--{/section}-->
                                        </select>
                                    </div>
                                    <div class="select-box pull-left">	
                                        <select name="birth_year" id="birth_year">
                                            <option>năm</option>
                                            <!--{section name=i start=1950 loop=$yearView}-->
                                                <option <!--{if $memberCar.year eq $smarty.section.i.index}-->selected="selected"<!--{/if}--> value="<!--{$smarty.section.i.index}-->" > <!--{$smarty.section.i.index}--> </option>
                                              <!--{/section}-->
                                    </select>
                                    </div>
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
                                	 <input type="button" value="Đăng ký" name="submit" onclick="return registerMenber();" class="button-submit-edit button">
                                    <input type="reset" value="Nhập lại" name="reset" class="button-reset-edit button">
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
	function registerMenber(){
		$("#errromsg").hide();
		var name = $('#name').val();
		var email = $('#email').val();
		var password = $('#password').val();
		var birth_day = $('#birth_day').val();
		var birth_month = $('#birth_month').val();
		var birth_year = $('#birth_year').val();
		var r = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if((email=="") || (password=="")){
			$("#errromsg").html('Vui lòng nhập đầy đủ thông tin, dấu (*) là bắt buộc nhập.');
			$("#errromsg").show();
			return false;
		}
		else if(r.test(email)==false){
			$("#errromsg").html('Email không đúng định dạng.');
			$("#errromsg").show();
			return false;
		}
		else{
			jQuery.post('<!--{$path_url}-->/loading/thanhvien.php',{
				type: 'register',
				name:name,
				email:email,
				birth_day:birth_day,
				birth_month:birth_month,
				birth_year:birth_year,
				password:password				
			},function(data) {
			 var obj = jQuery.parseJSON(data);
				if(obj.status == 'success'){
					alert('Bạn đã đăng ký thành viên thành công.');
					$(location).attr('href','<!--{$path_url}-->/thanh-vien/thong-tin-tai-khoan/'); 
				}
				else{
					$("#errromsgregister").html(obj.errors);
					$("#errromsgregister").show();	
				}
			});
			return false;
		}
	}
</script>
