<!--Address footer 1--> 
    <div class="hidden-xs  hidden-sm hidden-md mt20" id="randomNews">
	    <div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="block_content newslist_style1">
                        <div class="item">
                            <h2 class="block_title pull-left">
                                <span>Có thể bạn quan tâm</span>
                            </h2>
                            <div class="arrow-right pull-left"></div>
                        </div>
                        <!--{section name=i loop=$newsNoibat}-->
            				<!--{insert name="GetLinkDetail" cat=$newsNoibat[i]  lang=$lang  assign="linkNewNoibat" }-->
                        	<div class="item">
                                <h4 class="item-title">
                                    <span class="btn-info iconbox pull-left"><i class="fa fa-bookmark"></i></span>
                                    <a href="<!--{$path_url}-->/<!--{$linkNewNoibat}-->" title="<!--{$newsNoibat[i].title_link}-->" class="flever_15">                              	<!--{insert name="SubStrEx" str=$newsNoibat[i].$name length=40}--></a>
                                </h4>
                            </div>	
                       <!--{/section}--> 	
                       
    				</div>				
                </div>
			</div>
		</div>
	</div>
    
    
 

<!--Slide Script-->
	<link href="<!--{$path_url}-->/js/slide/jquery.flexisel.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<!--{$path_url}-->/js/slide/jquery.flexisel.js" ></script>

    <div class="container mt20" >
        <div id="centerHead">
            <ul id="flexiselDemo3">
            	<!--{section name=i loop=$partnerFooterSlider}-->    
                    <li>
                        <a <!--{if $partnerFooterSlider[i].link neq ''}-->href="<!--{$partnerFooterSlider[i].link}-->" <!--{/if}--> title="<!--{$partnerFooterSlider[i].$name}-->">
                            <img src="<!--{$path_url}-->/<!--{$partnerFooterSlider[i].img_vn}-->" title="<!--{$partnerFooterSlider[i].$name}-->" />
                        </a>
                    </li>
                <!--{/section}-->                                               
            </ul>   
        </div>
        
    </div>
    
   <script type="text/javascript">

        $(window).load(function() {
            $("#flexiselDemo3").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                setMaxWidthAndHeight : false,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    landscape: { 
                        changePoint:768,
                        visibleItems: 3
                    },
                    
                    tablet: { 
                        changePoint:900,
                        visibleItems: 4
                    }
                }
            });
            
        });
     </script>
<!--End Slide Script-->
    
    <div id="footer">
    	<div class="container">
         	<div class="footer_defaut hidden-xs">
            	<div class="row">
					<div class="col-lg-5 col-md-12">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 ">
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
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6 ">
                            	<!--{$khuvucFooter.$content}-->

                            </div>
						</div>
					</div>

					<div class="col-lg-7 col-md-12">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 ">
								<p style="margin-bottom:7px;"><strong><!--{$danhmucsanphmFooter.$name}--></strong></p>
								<!--{$danhmucsanphmFooter.$content}-->
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6">
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
                                 <a href="http://www.online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=2163" rel="nofollow" target="_blank">
                                	<img style="margin:10px 20px 0 0;" align="right" width="80" src="<!--{$path_url}-->/images/congthuong.png" alt="Sở Công Thương">
                                </a>
							</div>
						</div>
					</div>
				</div>

				<address style="border-top-width: 1px; border-top-style: solid; border-top-color: rgb(220, 220, 220);" class="about_footer"><br>
					<span style="font-family:arial,helvetica,sans-serif;">
                    	<!--{$addressFooter.$content}-->
                    </span>
                </address>

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
					<!--{$addressFooter.$content}-->
                <table cellspacing="1" cellpadding="1" border="0" style="width: 100%;">
                    <tbody>
                        <tr>
                            <td>
                            	<a href="<!--{$path_url}-->" title="Về trang chủ">
                                	<span style="color:#ed1b24;">
                                    	<span style="line-height: 20.7999992370605px;">
                                        	<img style="width: 20px; height: 20px;" src="<!--{$path_url}-->/images/home.png" alt="">Về trang chủ
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
    
</div> <!-- end.container -->

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
	createCookie('showCity',city,7)
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


function showMenu1(type){
	if(type=='menuPhone'){
		$("#menuComputer").hide();
		var flag = $("#menuPhone").css('display');
		if(flag == 'none'){
			$("#menuPhone").show(); //Drop down the subnav on click	
		}else{
			$("#menuPhone").hide();
		}
	}
	else{
		$("#menuPhone").hide();
		var flag = $("#menuComputer").css('display');
		if(flag == 'none'){
			$("#menuComputer").show(); //Drop down the subnav on click	
		}else{
			$("#menuComputer").hide();
		}
	}
}
</script>

<script type="text/javascript">
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

</body>
</html>