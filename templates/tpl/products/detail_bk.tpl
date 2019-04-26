<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">		
                <div class="breadcrumb">
                    <div class="breadcrumb flever_12">
                        <a href="<!--{$path_url}-->" title="Trang chủ">Trang chủ</a>
                    </div>
                    <div class="breadcrumbs_sepa">&gt;</div>
                    <!--{$linkTitle}-->
                    <div class="breadcrumb">
                        <span><!--{$detail.$name}--></span>
                    </div> 					
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt20">	
    <div class="row">
    	 <!--{include file="bannertop2.tpl"}-->
    </div>
</div>

<div class="container mt20">
		
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">
            <div class="product">
                <div class="bgheading clearfix mt20">
                    <div class="leftimg">
                        <div>
                        	<link rel="STYLESHEET" type="text/css" href="<!--{$path_url}-->/highslide/highslide.css" />
							<script type="text/javascript" src="<!--{$path_url}-->/highslide/highslide-with-gallery.js"></script>
                            
                            <script type="text/javascript">
                                hs.graphicsDir = '<!--{$path_url}-->/highslide/graphics/';
                                hs.align = 'center';
                                hs.transitions = ['expand', 'crossfade'];
                                hs.outlineType = 'rounded-white';
                                hs.wrapperClassName = 'controls-in-heading';
                                hs.fadeInOut = true;
                                hs.dimmingOpacity = 0.3;
                            
                                // Add the controlbar
                                hs.addSlideshow({
                                    //slideshowGroup: 'group1',
                                    interval: 3500,
                                    repeat: false,
                                    useControls: true,
                                    fixedControls: false,
                                    overlayOptions: {
                                        opacity: 1,
                                        position: 'top right',
                                        hideOnMouseOut: false
                                    }
                                });
								
								function showImage(img){
									
									$('#viewImg').fadeOut(600, function() {
										$('#viewImg').attr("src",img);
										$('#viewImg').fadeIn(1000);
									});
								}  
                            </script>
                            <a class="MagicZoomPlus" href="<!--{$path_url}-->/<!--{$detail.img_vn}-->" onclick='return hs.expand(this,{ autoplay:true })'>
                                <img src="<!--{$path_url}-->/<!--{$detail.img_vn}-->" id="viewImg" />
                            </a>
                        </div>
                        
                        <div>
                            <div class="jcarousel-wrapper">
                              	<a class="jcarousel-control-next"></a>
                                    <div data-jcarousel="true" class="jcarousel">
                                        <ul>
                                        	<!--{if $detail.img_vn neq ''}-->
                                                <li>
                                                    <a onclick="showImage('<!--{$path_url}-->/<!--{$detail.img_vn}-->')" href="javascript:void(0)" class="Selector MagicThumb-swap">
                                                        <img width="126" src="<!--{$path_url}-->/<!--{$detail.img_vn}-->" class="img-thumb"/>
                                                    </a>
                                                </li> 
                                            <!--{/if}-->
                                            
                                            <!--{if $detail.img2_vn neq ''}-->
                                                <li>
                                                    <a onclick="showImage('<!--{$path_url}-->/<!--{$detail.img2_vn}-->')" href="javascript:void(0)" class="Selector MagicThumb-swap">
                                                        <img width="126" src="<!--{$path_url}-->/<!--{$detail.img2_vn}-->" class="img-thumb"/>
                                                    </a>
                                                </li> 
                                                <a class='highslide' href='<!--{$path_url}-->/<!--{$detail.img2_vn}-->' onclick='return hs.expand(this)'></a>
                                            <!--{/if}-->
                                            
                                            
                                            <!--{if $detail.img3_vn neq ''}-->
                                                <li>
                                                    <a onclick="showImage('<!--{$path_url}-->/<!--{$detail.img3_vn}-->')" href="javascript:void(0)" class="Selector MagicThumb-swap">
                                                        <img width="126" src="<!--{$path_url}-->/<!--{$detail.img3_vn}-->" class="img-thumb"/>
                                                    </a>
                                                </li> 
                                                <a class='highslide' href='<!--{$path_url}-->/<!--{$detail.img3_vn}-->' onclick='return hs.expand(this)'></a>
                                            <!--{/if}-->
                                            
                                            <!--{if $detail.img4_vn neq ''}-->
                                                <li>
                                                    <a onclick="showImage('<!--{$path_url}-->/<!--{$detail.img4_vn}-->')" href="javascript:void(0)" class="Selector MagicThumb-swap">
                                                        <img width="126" src="<!--{$path_url}-->/<!--{$detail.img4_vn}-->" class="img-thumb"/>
                                                    </a>
                                                </li> 
                                                <a class='highslide' href='<!--{$path_url}-->/<!--{$detail.img4_vn}-->' onclick='return hs.expand(this)'></a>
                                            <!--{/if}-->
                                            
                                            <!--{if $detail.img5_vn neq ''}-->
                                                <li>
                                                    <a onclick="showImage('<!--{$path_url}-->/<!--{$detail.img5_vn}-->')" href="javascript:void(0)">
                                                        <img width="126" src="<!--{$path_url}-->/<!--{$detail.img5_vn}-->" class="img-thumb"/>
                                                    </a>
                                                    <a class='highslide' href='<!--{$path_url}-->/<!--{$detail.img5_vn}-->' onclick='return hs.expand(this)'></a>
                                                </li> 
                                            <!--{/if}-->
                                            
                                        </ul>
                                    </div>
                                <a class="jcarousel-control-prev"></a>    
                            </div>
                        </div>

                        <div class="inner_bottom clearfix">
                            <div class="pull-left mt10">
                               
                            </div>
                            
                            <div class="pull-right ">
                            	<div class="faceshare">	
                                    <a class="btn-comment mt10" href="#frame_commnet">Bình luận về  sản phẩm</a>
                                 	<!--{if $smarty.session.VIETANHMOBILE_MEMBER_ID neq ''}-->
                                    	<a class="btn-favourites mt10"  href="javascript:void(0)" onclick="favourite(<!--{$detail.idsp}-->)">
                                    <!--{else}-->  
                                    	<a class="btn-favourites mt10" href="javascript: commition()">
                                    <!--{/if}-->  
                                        	Yêu thích sản phẩm
                                        </a>
                                 <script  type="text/javascript">
								 	function commition(idpr){
										alert('Bạn phải đăng nhập để sử dụng chức năng này.');
									}
									function favourite(idpr){
										jQuery.post('<!--{$path_url}-->/loading/thanhvien.php',{
											type: 'like',
											idpr:idpr
										},function(data) {
										 var obj = jQuery.parseJSON(data);
											if(obj.status == 'success'){
												alert('Bạn đã lưu thành công vào danh mục yêu thích');
											}
											else{
												alert('Sản phẩm này đã tồn tại trong danh mục yêu thích của bạn.')	
											}
										});
										
										return false;
									}
								 </script>      
                                </div>
                            </div>
                
            			</div>	
                        
                        <div class="accessories mt20">
                            <label class="color">Chế độ bảo hành</label><br>
                            <!--{if $detail.typebaove gt 0}-->
                            	<!--{insert name='getChedobaohanh' cid = $detail.typebaove}-->	
                            <!--{else}-->
                            	<!--{if $smarty.session.showCity eq 1}-->
                                	<!--{$detail.chedobaohanh_vn}-->
                                 <!--{else}-->
                                    <!--{$detail.chedobaohanh_en}-->
                                <!--{/if}-->    
                            <!--{/if}-->		
                       </div>
                       	
                    </div>
                    
                    <div class="righttext">
                        <h1><span><!--{$detail.$name}--></span></h1>
                        <div class="PriceDt">
                        	<!--{insert name="tinhtranghang" active=$detail.typepr assign="tinhtrangdt"}-->
                            <span class="price_ez"> <!--{if ($detail.$price eq 0) || ($tinhtrangdt neq '') }--><!--{$tinhtrangdt}--><!--{else}--> <!--{$detail.$price|number_format:0:",":"."}--> VNĐ<!--{/if}-->   </span>
                            <!--{if $checkPhuKien neq 1}-->
                            	<br /><strong class="colo-white" style="text-transform:uppercase;">Giá Đã Gồm Bảo Hành Nguồn, Màn Hình, Cảm Ứng</strong>
                            <!--{/if}-->
                        </div>
                       
                       <div style="margin:5px 0 8px 0;">
                            <p class="color" style="font-size:1.4em">Sản Phẩm Đầy Đủ Phụ Kiện Kèm Theo:</p>
                            <!--{if $detail.typebspchuan gt 0}-->
                            	<!--{insert name='getChedobaohanh' cid = $detail.typebspchuan}-->	
                            <!--{else}-->
                            	<!--{if $smarty.session.showCity eq 1}-->
                                	<!--{$detail.bosanphamchuan_vn}-->
                                 <!--{else}-->
                                    <!--{$detail.bosanphamchuan_en}-->
                                <!--{/if}-->    
                            	
                            <!--{/if}-->	
                            		
                       </div>
                       
                        <div class="clear"></div>
                        <div style="width:100%;">
                       		<div class="wrap-buy">
                                <!--{if $checkSoluong eq 1}-->
                                    <a data-toggle="modal" title="ĐẶT HÀNG NGAY" href="#quick_order">
                                    	<div class="btn_buy_big">
                                           ĐẶT GIỮ HÀNG TẠI SHOP <br />
											<span class="fonttextctpr">(08)6685.1666 - (0511)655.8855</span>
                                        </div>
                                    </a>
                                <!--{else}-->
                                    <a data-toggle="modal" title="ĐẶT HÀNG NGAY" href="#no_quick_order">
                                    	<div class="btn_buy_big">
                                        	 ĐẶT GIỮ HÀNG TẠI SHOP <br />
											<span class="fonttextctpr">(08)6685.1666 - (0511)655.8855</span>
                                        </div>
                                    </a>
                                <!--{/if}-->
                                <p class="panel1">
                                    <span class="panel_icon"></span><span class="panel_text"><!--{$detail.view}--></span><br>
                                    <span class="panel_text1">người xem</span>
                                </p>
                                
                            </div>
                            
                            <div class="wrap-buy" style="float:right;">
                              
                                <!--{if $checkPhuKien neq 1}--> 
                                    <!--{if $checkSoluong eq 1}-->
                                        <a title="TÍNH TRẢ GÓP" href="<!--{$path_url}-->/tra-gop/<!--{$detail.idsp}-->/">
                                            <div class="btn_buy_big tragop">
                                                MUA TRẢ GÓP <br />
                                                <span class="fonttextctpr">Góp mỗi tháng chỉ: <span id="showTratruoc"></span> vnđ</span>
                                            </div>
                                        </a>
                                    <!--{else}-->
                                        <a title="TÍNH TRẢ GÓP" data-toggle="modal" href="#no_quick_order">
                                            <div class="btn_buy_big tragop">
                                                MUA TRẢ GÓP
                                                <span class="fonttextctpr">Góp mỗi tháng chỉ: <span id="showTratruoc"></span> vnđ</span>
                                            </div>
                                        </a>
                                    <!--{/if}-->
                                <!--{else}-->  
                                	<div style="height:62px;"></div> 
                                <!--{/if}--> 
                           
                                <p class="panel2">
                                    <span class="pane2_icon_delivery"></span>
                                    <span class="panel_text">Giao hàng</span>
                                    <br>
                                    <span class="panel_text1">miễn phí toàn quốc</span>
                                </p>
                                
                            </div>
                            
                            <script type="text/javascript">
								var price = '<!--{$detail.$price}-->';
								var slmonth = 12;
								<!--{if $checkisIphone eq 1}-->
									var slpercent = 40;
								<!--{else}-->
									var slpercent = 20; 
								<!--{/if}-->
								
								var tratruoc, sotienvay, laihangthang, gochangthang, sotienhangthang;
								tratruoc = Math.round(Math.round(price) * Math.round(slpercent))/100;
								sotienvay = Math.round(Math.round(price) - Math.round(tratruoc));
								sotienhangthang =  getsotienhangthang(slmonth,price,sotienvay);
								
								
								$("#showTratruoc").html(formatNumber(sotienhangthang));
								
								function getsotienhangthang(slmonth,price,sotienvay){
									var	sotienhangthang
									if(slmonth == 6){
										sotienhangthang = Math.round(Math.round(sotienvay) * 0.198);
									}
									else if (slmonth == 9){
										sotienhangthang = Math.round(Math.round(sotienvay) * 0.1417);
									}
									else{
										if(price <= 7000000 )
											sotienhangthang = Math.round(Math.round(Math.round(sotienvay) * 0.116) - Math.round(35000));
										else if((price > 7000000) &&(price < 16000000))
											sotienhangthang = Math.round(Math.round(Math.round(sotienvay) * 0.116) - Math.round(60000));
										else
											sotienhangthang = Math.round(Math.round(Math.round(sotienvay) * 0.116) - Math.round(120000));
									}
									return sotienhangthang;
								}
											
								function formatNumber(num) {
									return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
								}
							</script>
                       </div>
                        <div class="clear"></div>
                        
                        <div style="margin-bottom:5px;">
                        	<!--{if $smarty.session.showCity eq 1}-->
                            	<!--{$hotlineTuVan.content_vn}-->
                            <!--{else}-->
                            	<!--{$hotlineTuVan.content_en}-->
                            <!--{/if}-->		
                       </div>
                        <div class="accessories mt20">
                            <label class="color">Khuyến mãi ưu đãi:</label><br>
                            <!--{if $detail.typeiphone gt 0}-->
                            	<!--{insert name='getChedobaohanh' cid = $detail.typeiphone}-->	
                            <!--{else}-->
                            	<!--{if $smarty.session.showCity eq 1}-->
                                	<!--{$detail.promotion_vn}-->
                                 <!--{else}-->
                                    <!--{$detail.promotion_en}-->
                                <!--{/if}-->    
                            <!--{/if}-->		
                       </div>
                       
                       
                       
                       <div class="clear">
                       		
                            <!-- AddThis Button BEGIN -->
                            <!--{include file="faceshare.tpl"}-->
                            <!-- AddThis Button END -->  
                           
                      </div>       
                        
                        
                        <div class="modal fade in" id="no_quick_order" aria-hidden="false">
                             <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                         <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <div class="modal-title" style="color:#FFF;"><span>Sản Phẩm Này <!--{if $checkSoluong eq 2}-->
                                            	NGỪNG KINH DOANH
                                            <!--{else}-->
                                           		TẠM HẾT HÀNG 
                                            <!--{/if}--></span></div>
                                    </div>
                                    
                                </div>
                            </div>		
                        </div>
                        
                        <div class="modal fade in" id="quick_order" aria-hidden="false">
                             <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                         <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <div class="modal-title">
                                        	<div class="modal-dialog-top">
                                            	ĐẶT HÀNG - NGHE TƯ VẤN MIỄN PHÍ
                                            </div>
                                            <div class="modal-dialog-top2">
                                            	(Không mua không sao)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body" style="padding:0;">
                                    
                                    	<form id="eshopcart_info" name="postbuy" action="<!--{$path_url}-->/gio-hang/thanh-toan/" method="post">
                                        	<div class="clear title-buy"> 
                                            	<span>
                                                	<input class="checkboxBuy" type="radio" checked="checked" name="checkmod" value="Đặt Giữ hàng tại shop" /> Đặt Giữ hàng tại shop
                                                </span>	
                                                <span>
                                                	<input class="checkboxBuy" type="radio" name="checkmod" value="Giao hàng miễn phí toàn quốc" /> Giao hàng miễn phí toàn quốc
                                                </span>	
                                            </div>
                                            <div style="padding:0 20px 20px 20px;">
                                                <div class="DialogLeft">
                                                    <div class="media-box clearfix" style="border:none;">
                                                         <div class="name"><!--{$detail.$name}--></div>
                                                        <div class="media-img pull-left">
                                                             <img width="140px" alt="<!--{$detail.alt_img}-->" src="<!--{$path_url}-->/<!--{$detail.img_thumb_vn}-->" class="img-responsive ">
                                                             <div class="price" style="text-align:center">
                                                                <span id="showPrice"><!--{$detail.$price|number_format:0:",":"."}--></span> vnđ									   	
                                                             </div>
                                                             
                                                             <div>
                                                             	
                                                                <input type="hidden" name="priceTotal" id="priceTotal" value="<!--{$detail.$price}-->" />
                                                                <!--{insert name="getPhuKienGiamGia" idpromotion=$detail.idpromotion price=$detail.$price}-->
                                                            </div>
                                                        </div>                                                    
                                                    </div>
                                                </div>
                                                    
                                                <div class="DialogRight">
                                                    <table width="100%" cellpadding="0" border="0" class="modal-table">
                                                      <tbody><tr>
                                                      
                                                        <td colspan="2">`
                                                            <input type="text" placeholder="Họ tên của  bạn" class="input_text" value="<!--{$memberCar.name}-->" id="sender_name" name="sender_name" />
                                                            <div class="label_error" id="error_name"></div>
                                                        </td>
                                                        <td><font style="color:red">*</font></td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                            <input type="text" placeholder="Số di động" class="input_text" value="<!--{$memberCar.phone}-->" id="sender_telephone" name="sender_telephone" />
                                                            <div class="label_error" id="error_telephone"></div>
                                                        </td>
                                                        <td><font style="color:red">*</font></td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                            <input type="text" placeholder="Email" class="input_text" value="<!--{$memberCar.email}-->" id="sender_email" name="sender_email" />
                                                            <div class="label_error" id="error_email"></div>
                                                        </td>
                                                        <td></td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                            <input type="text" placeholder="Địa chỉ " class="input_text" value="<!--{$memberCar.address}-->" id="sender_address" name="sender_address" />
                                                            <div class="label_error" id="error_address"></div>
                                                        </td>
                                                        <td></td>
                                                      </tr>
                                                      
                                                      <tr>
                                                        <td colspan="2">
                                                           <select name="tinhthanh" id="tinhthanh" class="ChosceDd" onchange="loadQuanHuyen(this.value)">
                                                                <option value="">Tỉnh thành</option>
                                                                <!--{section name=i loop=$tinhthanh}-->
                                                                    <!--{if $memberCar.tinhthanh eq $tinhthanh[i].id}-->selected="selected"<!--{/if}--> value="<!--{$tinhthanh[i].id}-->"> 
                                                                        <!--{$tinhthanh[i].name}--> 
                                                                    <option <!--{if $memberCar.tinhthanh eq $tinhthanh[i].id}-->selected="selected"<!--{/if}--> value="<!--{$tinhthanh[i].id}-->"> 
                                                                        <!--{$tinhthanh[i].name}--> 
                                                                    </option>
                                                                <!--{/section}-->
                                                            </select>
                                                            <span id="showQuanHuyen">
                                                                <select name="quanhuyen" id="quanhuyen" class="ChosceDd">
                                                                    <option value="">Quận/Huyện</option>
                                                                </select>
                                                            </span>
                                                            <span id="showPhuongXa">
                                                                <select name="phuongxa" id="phuongxa" class="ChosceDd">
                                                                    <option value=""> Phường/xã </option>   
                                                                </select>
                                                           </span>
                                                            <div class="label_error" id="error_tinhthanh"></div>
                                                        </td>
                                                        <td></td>
                                                      </tr>
                                                      <!--
                                                      <tr>
                                                        <td>
                                                            <input type="text" placeholder="Mã Giảm Giá " class="input_text" value="" name="sender_code" />
                                                        </td>
                                                        <td> <a href="javascript: void(0)" class="CodePromotion">
                                                                <span>Sử Dụng</span>
                                                            </a></td>
                                                      </tr>
                                                      -->
                                                      <tr>
                                                        <td>
                                                            <textarea placeholder="Lời nhắn" class="input_text" name="sender_msg" id="sender_msg"></textarea>
                                                            <div class="label_error" id="error_msg"></div>
                                                        </td>
                                                        <td> </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="3">
                                                            <a id="submitbt" href="javascript:void(0)" onclick="return buynow()" class="btn btn-default">
                                                                <span>Hoàn thành đặt hàng</span>
                                                            </a>
                                                            <div class="label_error" id="error_vcare"></div>
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                 </table>
                                                 
                                                    <input type="hidden" name="idpr" value="<!--{$detail.idsp}-->" />
                                                    <script type="text/javascript">
                                                        function buynow(){
                                                            var name = $("#sender_name").val();
                                                            var phone = $("#sender_telephone").val();
															var checkPhone = phone.match(/^0/i);
															var phoneLength = phone.length;
                                                            var email = $("#sender_email").val();
                                                           // var address = $("#sender_address").val();
															var tinhthanh = $("#tinhthanh").val();
                                                            var r = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
															var flag = 0;
															var checkstr = $("#sender_msg").val(); 

																											
                                                            
															if($('#Vcare').is(":checked") && $('#Vcare12').is(":checked")){
																$("#error_vcare").attr("style", "display:block");
                                                                $("#error_vcare").html('Bạn chỉ chọn duy nhất một gói bảo hành Vcare.');
                                                                flag = 1;
																
															}
															
															else{
                                                                $("#error_vcare").attr("style", "display:none");
                                                            }
															
                                                            if (name==""){
                                                                $("#error_name").attr("style", "display:block");
                                                                $("#error_name").html('Bạn phải nhập họ tên');
                                                                flag = 1;
                                                            }
                                                            else{
                                                                $("#error_name").attr("style", "display:none");
                                                            }
                                                            
                                                            if (phone==""){
                                                                $("#error_telephone").attr("style", "display:block");
                                                                $("#error_telephone").html('Bạn phải nhập số điện thoại');
                                                                flag = 1;
                                                            }
															else if( (phone!="") && (checkPhone!=0)){
																$("#error_telephone").attr("style", "display:block");
                                                                $("#error_telephone").html('Số điện thoại không đúng (vd:0xxxxxxxx)');
                                                                flag = 1;
															}
															else if ( (phone!="") && (isNaN(phone) == true)){
                                                                $("#error_telephone").attr("style", "display:block");
                                                                $("#error_telephone").html('Số điện thoại không hợp lệ (vd:0909999999)');
                                                                flag = 1;
                                                            }
															else if(phoneLength < 10 || phoneLength>11){
																$("#error_telephone").attr("style", "display:block");
                                                                $("#error_telephone").html('Số điện thoại phải là 10 hoặc 11 số');
                                                                flag = 1;
															}
                                                            else{
                                                                $("#error_telephone").attr("style", "display:none");
                                                            }
															
															if (checkstr.indexOf("www.") >= 0){
																$("#error_msg").attr("style", "display:block");
                                                                 $("#error_msg").html('Lời nhắn không cho nhập có đường link.');
                                                                flag = 1;
															}	
															else if (checkstr.indexOf("http:") >= 0){
																$("#error_msg").attr("style", "display:block");
                                                                $("#error_msg").html('Lời nhắn không cho nhập có đường link.');
                                                                flag = 1;
															}
															else if (checkstr.indexOf("https:") >= 0){
																$("#error_msg").attr("style", "display:block");
                                                                $("#error_msg").html('Lời nhắn không cho nhập có đường link.');
                                                                flag = 1;
															}
															else{
                                                                $("#error_msg").attr("style", "display:none");
                                                            }	
															 
															/*
															if (email==''){
                                                                $("#error_email").attr("style", "display:block");
                                                                $("#error_email").html('Bạn phải nhập email');
                                                                flag = 1;
                                                            }
                                                            else if (r.test(email)==false){
                                                                $("#error_email").attr("style", "display:block");
                                                                $("#error_email").html('Email không đúng định dạng');
                                                                flag = 1;
                                                            }
                                                            else{
                                                                $("#error_email").attr("style", "display:none");
                                                            }
                                                            
                                                             
                                                            
                                                            if (address==""){
                                                                $("#error_address").attr("style", "display:block");
                                                                $("#error_address").html('Bạn phải nhập địa chỉ.');
                                                                flag = 1;
                                                            }
                                                            else{
                                                                $("#error_address").attr("style", "display:none");
                                                            }
															
															if (tinhthanh==""){
                                                                $("#error_tinhthanh").attr("style", "display:block");
                                                                $("#error_tinhthanh").html('Bạn phải chọn Tỉnh Thành.');
                                                                flag = 1;
                                                            }
                                                            else{
                                                                $("#error_tinhthanh").attr("style", "display:none");
                                                            }
                                                            */
                                                            if(flag == 1)
                                                                return false;
                                                            else{
																$("#submitbt").hide();
                                                                $("#loadingAjax").show();
                                                                document.postbuy.submit();	
                                                            }
                                                        }
														
														function loadQuanHuyen(id,idq){
															jQuery.post('<!--{$path_url}-->/loading/loadQuanHuyen.php',{id:id,idq:idq,type:'add'},function(data) {
																 var obj = jQuery.parseJSON(data);
																 $('#showQuanHuyen').html(obj.status);
																  //$('#phiship').html(obj.ship);
																 
															});
															return false;
														}
														function loadPhuongXa(id,idx){
															jQuery.post('<!--{$path_url}-->/loading/loadPhuongXa.php',{id:id,idx:idx,type:'add'},function(data) {
															 var obj = jQuery.parseJSON(data);
															 $('#showPhuongXa').html(obj.status);
															 //$('#phiship').html(obj.ship);
																 
															});
															return false;
														}
														
														jQuery(document).ready(function() {
															<!--{if $memberCar.quanhuyen neq ''}-->
																loadQuanHuyen(<!--{$memberCar.tinhthanh}-->,<!--{$memberCar.quanhuyen}-->)
															<!--{/if}-->
															
															<!--{if $memberCar.phuongxa neq ''}-->
																loadPhuongXa(<!--{$memberCar.quanhuyen}-->,<!--{$memberCar.phuongxa}-->)
															<!--{/if}-->
														});
														
														function getVcare()
														{
															var Total;
															//var priceTotal = $('#priceTotal').val();
															var vcare = <!--{$detail.vcare}-->;
															var price = $('#priceTotal').val();
															if($('#Vcare').is(":checked")){   
																Total = Math.round(price) + Math.round(vcare);
																Totalshow = formatNumber(Total);
																$('#priceTotal').val(Total);
																$('#showPrice').html(Totalshow);
																
															}
															else{
																Total = Math.round(price)- Math.round(vcare);
																Totalshow = formatNumber(Total);
																$('#priceTotal').val(Total);
																$('#showPrice').html(Totalshow);
															}
														}
														
														function getVcare12()
														{
															var Total;
															var vcare12 = <!--{$detail.vcare12}-->;
															var price = $('#priceTotal').val();
															if($('#Vcare12').is(":checked")){   
																Total = Math.round(price) + Math.round(vcare12);
																Totalshow = formatNumber(Total);
																$('#priceTotal').val(Total);
																$('#showPrice').html(Totalshow);
																
															}
															else{
																Total = Math.round(price)- Math.round(vcare12);
																Totalshow = formatNumber(Total);
																$('#priceTotal').val(Total);
																$('#showPrice').html(Totalshow);
															}
														}
														
														function formatNumber (num) {
															return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
														}
                                                   </script>
                                                
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>		
                        </div>

                    </div>
                </div>
                
                <div class="para_wrap" id="boxspecification">
                    <h4>Thông số kỹ thuật <!--{$detail.$name}--></h4>
                    <div class="clearfix mt20">
                        <div class="col-xs-12 mt10">	
                           <!--{$detail.thongsokythuat_vn}-->
                        </div>
                        
                    </div>
                </div>
				
                <div class="para_wrap clearfix" id="box_botom">
    				<div class="left_box">
        				<h4>Đánh giá chi tiết</h4>
                        <div class="description">
                             <!--{$detail.$content}-->
                        </div>
            
        				<div id="frame_commnet">
            				<div class="comments">
                            <!--{if $commentCount gt 0}-->
                               <div class="add-task" id="goToComment">
                                	<div class="comment_form_title_send">Ý kiến bạn đọc</div>
                                    <div class="clear"> </div>
                                </div>
                                
                               <div class="comments_contents"> 
                                	<!--{section name=i loop=$viewComment}-->
                                        <div class="comment-item">
                                            <span class="name"><!--{$viewComment[i].name}--></span> 
                                            <span class="date">(nhận xét lúc:<!--{$viewComment[i].dated|date_format:"%d/%m/%Y"}--> <!--{$viewComment[i].timed}-->)</span> 
                                            <div class="comment_content "> 
                                                <!--{$viewComment[i].content}-->
                                               <!-- <a href="javascript: void(0)" class="button_reply">Trả lời</a>-->	
                                            </div>
                                            <!--{if $viewComment[i].name_tl neq ''}-->
                                            <div class="comment-item comment-item1">
                                                <span class="name"><!--{$viewComment[i].name_tl}--></span> <span class="date">(Trả lời lúc:<!--{$viewComment[i].dated_tl|date_format:"%d/%m/%Y"}--> <!--{$viewComment[i].timed_tl}-->)</span> 
                                                <div class="comment_content "> 
                                                    <!--{$viewComment[i].content_tl}-->
                                                </div>
                                             </div>
                                             <!--{/if}-->
                                        </div>
                                  <!--{/section}-->

                                </div>
                            <!--{/if}-->
               					 <!-- FORM COMMENT	-->
                				<div class="comment_form_title">Gửi bình luận</div>
                				<form class="form_comment" id="comment_add_form">
                                    <p class="name_email">
                                        <input type="text" placeholder="Họ tên (*)"  name="namecom"  id="namecom" class="CommentText" />
                                        <input type="text" placeholder="Điện thoại (*)" name="phonecom"  id="phonecom" class="CommentText" />
                                    </p>
                                    <div class="clear"></div>
                                    <textarea class="CommentContent" placeholder="Nội dung (*)"  name="contentcom" id="contentcom"></textarea>
                                     <p class="captcha">
                                     	<input type="hidden" id="getcode" name="getcode" value="<!--{$security}-->" />
                                        <input type="text" placeholder="Mã kiểm tra (*)" size="23" maxlength="10" name="cdoecom" id="cdoecom" />
                                        <img name="captcha"  alt="captcha" src="<!--{$path_url}-->/random_img.php?characters=6&code=<!--{$security}-->" />
                                        <a class="code-view" onclick="reload('captcha'); return false;" href="javascript:void(0)">
                                           <img width="25" src="<!--{$path_url}-->/images/rest.png" />
                                        </a> 
                                        </p><div class="clear"></div>
                                    <p></p>
                                    <p class="button_area" >
                                        <span id="commentSubmit">
                                            <a href="javascript: void(0)" class="button submitbt" onclick="return CommentSubmit();">
                                                <span>Gửi</span>
                                            </a>
                                            <a id="resetbt" href="javascript: void(0)" class="button" onclick="resetbt();">
                                                <span>Làm lại</span>
                                            </a>
                                        </span>
                                        <span id="ajax_load"></span>
                                        
                                    </p>
                                    
                                    <div class="clear"></div>
                                    
                                    <script language="javascript">
                                        function reload(imageName)
                                          {
                                             var randomnumber=makeid(); // generate a random number to add to image url to prevent caching
											 $('#getcode').val(randomnumber);
                                             document.images[imageName].src = '<!--{$path_url}-->/random_img.php?characters=6&code=' + randomnumber; // change image src to the same url but with the random number on the end
                                          }
										 function makeid()
										 {
											var text = "";
											var possible = "23456789bcdfghjkmnpqrstvwxyz";
										
											for( var i=0; i < 6; i++ )
												text += possible.charAt(Math.floor(Math.random() * possible.length));
										
											return text;
										 }
										
										  function resetbt(){
										  	  	$("#namecom").val('');
												$("#emailcom").val('');
												$("#contentcom").val('');
												$("#cdoecom").val('');
                                                
										  }
                                          function CommentSubmit(){
                                                var name = document.getElementById("namecom");
                                                var phone = document.getElementById("phonecom");
                                                var content = document.getElementById("contentcom");
                                                var code = document.getElementById("cdoecom");
												var getcode = document.getElementById("getcode");
                                                var r = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                                                
                                                if (name.value=="") {
                                                    alert( "Nhập vào họ tên đầy đủ." );
                                                    name.focus();
                                                    return false;
                                                }
                                                else if(phone.value==""){
                                                    alert( "Nhập vào số điện thoại." );
                                                    phone.focus();
                                                    return false;
                                                }
                                                else if ( (phone.value!="") && (isNaN(phone.value) == true)){
													alert( "Số điện thoại không hợp lệ (vd:0909999999)" );
												}
                                                else if(content.value==""){
                                                    alert( "Nhập vào nộ dung." );
                                                    content.focus();
                                                    return false;
                                                }
                                                else if(code.value==""){
                                                    alert( "Nhập vào mã kiểm tra." );
                                                    code.focus();
                                                    return false;
                                                }
												else if(code.value != getcode.value){
                                                    alert( "Mã kiểm tra không đúng." );
                                                    code.focus();
                                                    return false;
                                                }
                                                else{
                                                    $('#commentSubmit').hide();
                                                    $('#ajax_load').html('<img src="<!--{$path_url}-->/ajax-loader.gif" />');
                                                    
                                                    $.post('<!--{$path_url}-->/loading/comment.php',{
                                                        name:name.value,
                                                        phone:phone.value,
                                                        content:content.value,
                                                        code:code.value,
														session:getcode.value,
                                                        idpr:<!--{$detail.idsp}-->
                                                        },function(data) {
                                                             var obj = jQuery.parseJSON(data);
                                                             if(obj.status == 'success'){
                                                                $('#commentSubmit').show();
                                                                $('#ajax_load').html('');
                                                                 alert(obj.msg);
																 location.reload();
                                                            }else{
                                                                $('#commentSubmit').show();
                                                                $('#ajax_load').html('');
                                                                alert(obj.msg);
                                                            }
                                                            
                                                    });
                                                    
                                                }
                                          }
                                    </script>   
                                </form>
                
                                <div class="comment_form_title" style="margin-top:20px;">Gửi bình luận trên Facebook</div>
                                 <div id="fb-root"></div>
                                    <script>(function(d, s, id) {
                                      var js, fjs = d.getElementsByTagName(s)[0];
                                      if (d.getElementById(id)) return;
                                      js = d.createElement(s); js.id = id;
                                      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=567589320047215";
                                      fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                   <div class="fb-comments" data-href="<!--{$path_url}--><!--{$smarty.server.REQUEST_URI}-->" data-width="100%" data-numposts="20"></div>
                                        
                             </div>
                   		 </div>
               		 </div>
                    
                    <div class="right_box">
                        <h5>Sản phẩm tương tự</h5>
                        <div class="box_content">
                        	<!--{section name=i loop=$view}-->
                            	<!--{insert name="GetLinkDetail" cat=$view[i]  lang=$lang  assign="link" }-->
                                <div class="media-box clearfix">
                                	<a class="pull-left" href="<!--{$path_url}-->/<!--{$view[i].unique_key}-->.html" title="<!--{$view[i].title_link}-->">	
                                       <img class="img-responsive" src="<!--{$path_url}-->/<!--{$view[i].img_thumb_vn}-->" alt="<!--{$view[i].alt_img}-->" title="<!--{$newsHome1[i].title_img}-->" />
                                    </a>
                                    <h2 class="media-heading">
                                    	<a href="<!--{$path_url}-->/<!--{$view[i].unique_key}-->.html" title="<!--{$view[i].title_link}-->"><strong><!--{$view[i].$name}--></strong> </a> 
                                    </h2>	
                                    <div class="price"><span><!--{if $view[i].$price eq 0}-->Giá liên hệ<!--{else}--><!--{$view[i].$price|number_format:0:",":"."}--> VNĐ<!--{/if}--> <!--{insert name="tinhtranghang" active=$view[i].typepr}--></span></div>
                                </div><!--end item-->	        
                            <!--{/section}-->                            
                        </div>
                                    
                    </div>
				</div>

			</div>	

       </div>
   </div>
    
</div>