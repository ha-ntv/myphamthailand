<!--Slide Script-->
<div class="SlideFooter">
    <div class="container">
    	 <link rel="stylesheet" href="<!--{$path_url}-->/css/jquery.bxslider.css" type="text/css" />
		<script src="<!--{$path_url}-->/js/jquery.bxslider.js"></script>
        <script type="text/javascript">
			$(document).ready(function(){
			  $('.slider4').bxSlider({
				slideWidth: 276,
				minSlides: 2,
				maxSlides: 4,
				moveSlides: 1,
				slideMargin: 10
			  });
			});
			</script>
			
			<div class="slider4">
            	<!--{section name=i loop=$partnerFooterSlider}-->    
                     <div class="slide">
                        <a <!--{if $partnerFooterSlider[i].link neq ''}-->href="<!--{$partnerFooterSlider[i].link}-->" <!--{/if}--> title="<!--{$partnerFooterSlider[i].$name}-->">
                            <img src="<!--{$path_url}-->/<!--{$partnerFooterSlider[i].img_vn}-->" title="<!--{$partnerFooterSlider[i].$name}-->" />
                        </a>
                    </div>
                <!--{/section}-->	
			 
			</div>
    </div>
   
</div>
<!--End Slide Script-->
    
<div id="footer">
	<div class="SubFooter1">
    	<div class="container">
         	<div class="footer_defaut hidden-xs">
            	<div class="row">
					<div class="col-lg-5 col-md-12" style=" width:100%">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6" style="width:23%">
								<p>&#8203;<img style="line-height: 1.6em; width: 165px; height: 104px;" src="<!--{$path_url}-->/images/hinh/visa.png"></p>
								<p><strong>THANH TOÁN ĐƠN GIẢN VỚI</strong></p>
								<p>
                                	<img style="width: 50px; height: 32px;" src="<!--{$path_url}-->/images/hinh/visa_footer.png"> &nbsp;
									<img style="width: 50px; height: 32px;" src="<!--{$path_url}-->/images/hinh/pp.png"> &nbsp;
                                    <img style="width: 50px; height: 32px;" src="<!--{$path_url}-->/images/hinh/master.png">
                                </p>

								<p style="margin:5px 0;"><strong>Việt Anh Mobile</strong></p>

								<p>
                                	<!--{section name=i loop=$HoiDapFooter}-->
                                        <a class="menu-name" href="<!--{$path_url}-->/<!--{insert name='GetLinkCat' cat=$HoiDapFooter[i] lang=$lang }-->" title="<!--{$homeHoiDap[i].title_link}-->"><span style="color:#0066cc;"><!--{$HoiDapFooter[i].$name}--></span></a><br>
                                    <!--{/section}-->
									
                               	</p>
                                
                                <p style="margin:15px 0 7px 0; text-transform:uppercase"><strong>Kết Nối Cùng Việt Anh Mobile</strong></p>
                                <ul class="list_connect">
                                    <li><a href="https://www.facebook.com/VietAnhMobile.HCM" title="facebook" target="_blank" class="face"></a></li>
                                    <li><a href="javascript:void(0)" title="print" target="_blank" class="print"></a></li>
                                    <li><a href="https://youtube.com/vietanhmobilechannel" title="youtube" target="_blank" class="youtube"></a></li>
                                    <li><a href="https://google.com/+Vietanhmobile" target="_blank" title="google" class="google"></a></li>
                                </ul>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6" style="width:55%">
                                <div style="margin-bottom:7px;"><strong><!--{$danhmucsanphmFooter.$name}--></strong></div>
								<!--{$danhmucsanphmFooter.$content}-->
								<div class="clear"><br /></div>
                                <!--{$khuvucFooter.$content}-->
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6" style="width:22%">
                            
                            	<!--{if $smarty.session.showCity eq 1}-->
									<script language="javascript" type="text/javascript">(function(d, s, id) {
                                      var js, fjs = d.getElementsByTagName(s)[0];
                                      if (d.getElementById(id)) return;
                                      js = d.createElement(s); js.id = id;
                                      js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                                      fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                    <div class="fb-like-box" data-href="https://www.facebook.com/VietAnhMobile.HCM" data-width="100%" data-height="250" data-show-faces="true" data-stream="false" data-header="true">
                                <!--{else}-->
                                	<script language="javascript" type="text/javascript">(function(d, s, id) {
                                      var js, fjs = d.getElementsByTagName(s)[0];
                                      if (d.getElementById(id)) return;
                                      js = d.createElement(s); js.id = id;
                                      js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                                      fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                    <div class="fb-like-box" data-href="https://www.facebook.com/VietAnhMobile.DaNang" data-width="100%" data-height="250" data-show-faces="true" data-stream="false" data-header="true">
                                <!--{/if}-->
								</div>
                                
                                <a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=2163" rel="nofollow" target="_blank">
                                	<img style="margin:10px 20px 0 0;" align="right" src="<!--{$path_url}-->/images/congthuong.png" alt="Sở Công Thương">
                                </a>
							</div>
						</div>
                            
                            
						</div>
					</div>

            	</div>
                
                <!--Footer mobile-->    
                <div class="footer_molbile hidden-lg  hidden-sm hidden-md">
                    <div style="padding:10px 0;">
                    
                        <!--{section name=i loop=$partnerFooter}-->
                           
                            <div class="PartnerImg">
                               <a <!--{if $partnerFooter[i].link neq ''}-->href="<!--{$partnerFooter[i].link}-->" <!--{/if}--> title="<!--{$partnerFooter[i].title_link}-->">
                                    <img src="<!--{$path_url}-->/<!--{$partnerFooter[i].img_vn}-->" alt="<!--{$partnerFooter[i].alt_img}-->" class="img-responsive" title="<!--{$partnerFooter[i].title_img}-->" />
                                </a>
                            </div>
                        <!--{/section}-->
                        
                        <div style="clear:both;height:1px">&nbsp;</div>
                    </div>
                    
                    <!--{section name=i loop=$HoiDapFooter}-->
                        <p>
                            <a href="<!--{$path_url}-->/<!--{insert name='GetLinkCat' cat=$HoiDapFooter[i] lang=$lang }-->" title="<!--{$homeHoiDap[i].title_link}-->"><span style="color:#0066cc;"><!--{$HoiDapFooter[i].$name}--></span></a>
                        </p>
                        <hr>
                    <!--{/section}-->
                    <div class="clear"> <br /></div>
                    <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left:0; margin-bottom:7px; width:100%"><strong><!--{$danhmucsanphmFooter.$name}--></strong></div>
						<!--{$danhmucsanphmFooter.$content}-->
                    
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <!--{$khuvucFooter.$content}-->
                    </div>
                    
                    
                    <div class="clear"> <br /></div>    
                   <!--{$addressFooter.$content}-->
                    <table cellspacing="1" cellpadding="1" border="0" style="width: 100%;">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="<!--{$path_url}-->" title="Về trang chủ">
                                        <span style="color:#ed1b24;">
                                            <span style="line-height: 20.7999992370605px;">
                                                <img style="width: 20px; height: 20px;" src="<!--{$path_url}-->/images/home.png" alt="trang chủ">Về trang chủ
                                            </span>
                                        </span>
                                    </a>
                                </td>
                                <td style="text-align: right;">
                                    <a href="#" title="Về đầu trang">
                                        <span style="color:#ed1b24;">
                                            <img style="width: 17px; height: 8px;" src="<!--{$path_url}-->/images/arrow_bottom.png" alt="">&nbsp;Về đầu trang
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!--End Footer mobile--> 
            </div>
        </div>
    </div>
    
	<div class="SubFooter2">
    	<div class="container">
         	<div class="footer_defaut hidden-xs">
            	<div class="row">
                	<address class="about_footer"><br>
                        <span style="font-family:arial,helvetica,sans-serif;">
                            <!--{$addressFooter.$content}-->
                        </span>
                    </address>
                </div>
            </div>
         </div>
    </div>    
    
</div> 
<!-- end.container -->

<div class="modal fade" id="loginModal">
	<div class="modal-body">
          <div class="well">
                <button type="button" class="close" data-dismiss="modal">✕</button>	
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#login" data-toggle="tab">Đăng nhập tài khoản</a></li>
                    <li><a href="#create" data-toggle="tab">Đăng ký mới</a></li>
                </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="login">
                  <form class="" action="#" method="post" name="login_form">
                    <fieldset>
                        <!-- Username -->
                        <div class="controls">
                          <input type="text" id="email_login" name="email_login" placeholder="Email của bạn (*)" class="input-xlarge">
                        </div>
                        <div class="controls">
                          <input type="password" id="password_login" name="password_login" placeholder="Nhập mật khẩu (*)" class="input-xlarge">
                        </div>
                        <!-- Button -->
                        <div class="controls">
                          <a id="submitbt_login" href="javascript: void(0)" onclick="return login();" class="btn btn-success">Đăng nhập</a>
                        </div>
                         <div class="label_error" id="errromsglogin"></div>
                    </fieldset>
                     
                  </form>                
                </div>
                <div class="tab-pane fade" id="create">
                    <form  name="register_form" class="register_form" method="post">
                    	<div class="controls">
                            <input type="text" id="username_register" name="username_register" class="input-xlarge"  placeholder="Họ tên của bạn (*)"> 
                        </div>
                        <div class="controls">
                            <input type="text" id="email_register" name="email_register" class="input-xlarge" placeholder="Email của bạn (*)">
                        </div>
                        <div class="controls">
                            <input type=password id="password_register" name="password_register" class="input-xlarge" placeholder="Nhập mật khẩu (*)">
                        </div>	
                       
                        <div class="controls">
                          <a id="submitbt_register" href="javascript: void(0)" onclick="return registerHome();" class="btn btn-primary">Đăng ký thành viên</a>
                        </div>
                        <div class="label_error" id="errromsgregister"></div>
                        <script language="javascript" type="text/javascript">
							function signout(){
								 $.post('<!--{$path_url}-->/loading/thanhvien.php',{type:'signout'},function(data) {
									 document.location.href= '<!--{$path_url}-->'
								});
							
							}
							function login(){
								$("#errromsglogin").hide();
								var email_login = $('#email_login').val();
								var password_login = $('#password_login').val();
								
								if((email_login=="") || (password_login=="")){
									$("#errromsglogin").html('Vui lòng nhập đầy đủ thông tin, dấu (*) là bắt buộc nhập.');
									$("#errromsglogin").show(800);
									return false;
								}
								else{
									jQuery.post('<!--{$path_url}-->/loading/thanhvien.php',{
										type: 'login',
										email:email_login,
										password:password_login			
									},function(data) {
									 var obj = jQuery.parseJSON(data);
										if(obj.status == 'success'){
											alert('Bạn đã đăng nhập thành công.');
											//location.reload();
											$(location).attr('href','<!--{$path_url}-->/thanh-vien/thong-tin-tai-khoan/'); 
										}
										else{
											$("#errromsglogin").html(obj.errors);
											$("#errromsglogin").show(800);	
										}
									});
									return false;
								}
							}
							
							function registerHome(){
								$("#errromsgregister").hide();
								var username_register = $('#username_register').val();
								var email_register = $('#email_register').val();
								var password_register = $('#password_register').val();
								var r = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
								if((username_register=="") || (email_register=="") || (password_register=="")){
									$("#errromsgregister").html('Vui lòng nhập đầy đủ thông tin, dấu (*) là bắt buộc nhập.');
									$("#errromsgregister").show(800);
									return false;
								}
								else if(r.test(email_register)==false){
									$("#errromsgregister").html('Email không đúng định dạng.');
									$("#errromsgregister").show(800);
									return false;
								}
								else{
									jQuery.post('<!--{$path_url}-->/loading/thanhvien.php',{
										type: 'register',
										name:username_register,
										email:email_register,
										password:password_register				
									},function(data) {
									 var obj = jQuery.parseJSON(data);
										if(obj.status == 'success'){
											alert('Bạn đã đăng ký thành viên thành công.');
											//location.reload();
											$(location).attr('href','<!--{$path_url}-->/thanh-vien/thong-tin-tai-khoan/'); 
										}
										else{
											$("#errromsgregister").html(obj.errors);
											$("#errromsgregister").show(800);	
										}
									});
									return false;
								}
							}
						</script>
                    </form>
                </div>
              </div>
          </div>
    </div>
</div>
  
<div class="modal fade" id="modal_city">
 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span></span></h4>
            </div>
            
            <div class="modal-body">
                <div class="welcome-city"><!--{$popupHomeHome.$name}--></div>
                <div class="popupmiddle">
                    <div class="pupzbutton">
                        <!--{section name=i loop=$cityHome}-->
                        <a onclick="setCity(<!--{$cityHome[i].id}-->)" class="button"><span><!--{$cityHome[i].name}--></span></a>
                        <!--{/section}-->
                        
                    </div>
                    <div class="puzinfo"><!--{$popupHome.$title}--></div>
                </div>					
            </div>
                
            <div class="banners  banners-default block_inner block_banner_banner">
            	<a title="<!--{$popupHomeHome.$name}-->" href="<!--{$popupHome.link}-->" onclick="createCookie('showCity',1,7)">
                	<img src="<!--{$path_url}-->/<!--{$popupHome.img_vn}-->" alt="<!--{$popupHomeHome.$name}-->" class="img-old img-responsive">
                </a>              
    			<div class="clear"></div>     	
			</div>
			<div class="clear"></div>     	  
        </div>
     </div>
</div>



<div id="loadingAjax"><div></div></div>
	
    <script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/bootstrap.js"></script>
    
    <script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/owl.carousel.js"></script>
    <script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/progress_bar.js"></script>
    <script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/thumbail.js"></script>
    <script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/masonry.pkgd.min.js"></script>
 
 <!--{if $checkHome eq 1}-->   
    <script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/jquery.jcarousel.min.js"></script>
    <script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/jcarousel.vert.js"></script>
 <!--{/if}-->  
 	<script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/slidebars.js"></script>
    <script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/slidebars1.js"></script>  
   
   <!---Ct sản phẩm--->
   <!--{if $checkProductDt eq 1 }-->
    <script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/jquery.jcarousel.min.js"></script>
    <script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/jcarousel-product.js"></script>
    <script language="javascript" type="text/javascript" src="<!--{$path_url}-->/js/magiczoomplus.min.js"></script>
    <!--{/if}-->
 <!---End Ct sản phẩm--->

<script type="text/javascript">
function viewpg(p,cid,type,url,path_url,idd,num_rows_page,strPrice){
	$("#loadingAjax").show();
	//alert(price);
	 $.post(path_url+'/loading/getPage.php',{page:p,cid:cid, type:type,url:url,idd:idd,num_rows_page:num_rows_page,strPrice:strPrice},function(data) {
		 var obj = jQuery.parseJSON(data);
		  $('#view').append(obj.view);
		  $('#showPaging').html(obj.Pagelink);
		  $("#loadingAjax").hide();
	});
}

function setCity(city){
	createCookie('showCity',city,1)
	location.reload();
}

<!--{if $smarty.cookies.showCity eq 0}-->
$(document).ready(function(){
	$('#modal_city').modal(
		{
		  backdrop: 'static',
		  keyboard: false
		}
	)     
});
<!--{/if}-->


	(function() {
		var _fbq = window._fbq || (window._fbq = []);
		if (!_fbq.loaded) {
		var fbds = document.createElement('script');
		fbds.async = true;
		fbds.src = '//connect.facebook.net/en_US/fbds.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(fbds, s);
		_fbq.loaded = true;
		}
		_fbq.push(['addPixelId', '355845014615153']);
		})();
		window._fbq = window._fbq || [];
		window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=355845014615153&amp;ev=PixelInitialized" /></noscript>

<!--Chat facebook-->
<span id="chatFacebook">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <div style="position:fixed; z-index:9999999; right:10px; bottom:10px;" class="fb-page" data-tabs="messages" data-href="<!--{if $smarty.session.showCity eq 1}-->https://www.facebook.com/VietAnhMobile.HCM <!--{else}--> https://www.facebook.com/VietAnhMobile.DaNang <!--{/if}-->" data-width="250" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
</span>
 <!--End Chat facebook-->
 
 <script>
 function show(){
	 $('#home-newsletter').slideToggle(1200);
	 $('#show').slideToggle(1500);
	 document.getElementById('show').style.display='none';
	 document.getElementById('newsletter').style.display='inline';
	 
}
function hide(){
	 $('#home-newsletter').slideToggle(1200);
	 $('#show').slideToggle(1500);
	 document.getElementById('show').style.display='inline';
	 document.getElementById('newsletter').style.display='none';
}
</script>

<div id="show" class="newsletter">
    <div onclick="show();" class="close_boxtop fa fa-angle-up" style="display: block;"></div>
    <div class="newsletter-contenttop">
    	<div class="newsletterThanPhien"><i class="fa fa-envelope" style="font-size:16px; margin-right:5px;"></i> GÓP Ý DỊCH VỤ VIỆT ANH MOBILE</div>
    </div>
</div>

<div id="home-newsletter" class="newsletter some_div" style="display: none;">
        <div onclick="hide();" class="close_box fa fa-angle-down" style="display: block;"></div>
        <div class="newsletter-content">
            <div class="newsletterThanPhien">GÓP Ý DỊCH VỤ VIỆT ANH MOBILE</div>
            <form onsubmit="return false;" id="home-newsletter-form" method="post" action="http://zanado.com/home/index/subscribeemail/">
                <div class="control-email">
                    <input type="text" class="input-text required-entry validate-email newsletter_email" placeholder="Nhập email của bạn (*)" value="" id="txtSubscribeEmail" name="txtSubscribeEmail"/>
                    <input type="text" class="input-text required-entry validate-email newsletter_email" placeholder="Nhập số điện thoại của bạn (*)" value="" id="txtSubscribePhone" name="txtSubscribePhone">
                    <textarea class="input-text required-entry validate-email newsletter_email" placeholder="Nhập nội dung (*)" id="txtSubscribeMgs" name="txtSubscribeMgs"></textarea>
                </div>
                <div class="newsletterError" id="newsletterError"></div>
                <div class="control-button">
                    <input type="button" class="btn_dangkymail_men nav-sprite" value=" Gửi " onclick="return subscribeEmail()">
                </div>
            </form>
            <script type="text/javascript">
                /*
                function home_close_newsletter(day){
                    $('#home-newsletter').hide(600);
                    jQuery.post('<!--{$path_url}-->/loading/thanhvien.php',{
                        type: 'close-newsletter'	
                    },function(data) {
                     
                    });
                }
                */
                function subscribeEmail(){
                    var txtSubscribeEmail = $('#txtSubscribeEmail').val();
                    var txtSubscribePhone = $('#txtSubscribePhone').val();
                    var txtSubscribeMgs = $('#txtSubscribeMgs').val(); 
                    var checkPhone = txtSubscribePhone.match(/^0/i); 
                    var rnewletter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    $('#newsletterError').show(200);
                    if (txtSubscribeEmail==""){
                        $('#newsletterError').html('Vui lòng nhập Email');
                        return false;
                    } 
                    else if(rnewletter.test(txtSubscribeEmail)==false){
                        $('#newsletterError').show(200);
                        $('#newsletterError').html('Email không đúng định dạng.');
                        return false;
                    }
                    else if (txtSubscribePhone==""){
                        $('#newsletterError').html('Vui lòng nhập điện thoại.');
                        return false;
                    } 
                    else if(checkPhone!=0){
                        $('#newsletterError').html('Số điện thoại không đúng vd:0xxxxxxxx.');
                        return false;
                    }
                    else if(isNaN(txtSubscribePhone) == true){
                        $('#newsletterError').html('Số điện thoại không hợp lệ (vd:0909999999).');
                        return false;
                    }
                    else if(txtSubscribePhone.length < 10 || txtSubscribePhone.length>11){
                        $('#newsletterError').html('Số điện thoại phải là 10 hoặc 11 số.');
                        return false;
                    }
                    if (txtSubscribeMgs==""){
                        $('#newsletterError').html('Vui lòng nhập nội dung.');
                        return false;
                    } 
                    else{
                        $('#newsletterError').html('<img src="<!--{$path_url}-->/ajax-loader.gif">');
                        jQuery.post('<!--{$path_url}-->/loading/thanhvien.php',{
                            type: 'ykhachhang',
                            txtSubscribeEmail:txtSubscribeEmail,
                            txtSubscribePhone:txtSubscribePhone,
                            txtSubscribeMgs:txtSubscribeMgs				
                        },function(data) {
                         var obj = jQuery.parseJSON(data);
                            if(obj.status == 'success'){
                                alert('Cám ơn bạn đã đóng góp ý kiến.');
                                location.reload();
                            }
                            else{
                                alert('Lỗi gởi mail, bạn vui lòng quay lại sau.');
                            }
                            
                            
                        });
                    }
    
                }
            </script>
        </div>		
    </div>

<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
<script type="text/javascript">
/*Add class when scroll down*/
$(window).scroll(function(event){
  	var scroll = $(window).scrollTop();
    if (scroll >= 150) {
        $(".go-top").addClass("show");
    } else {
        $(".go-top").removeClass("show");
    }
});
/*Animation anchor
$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 1000);
});
*/
</script>

</body>
</html>