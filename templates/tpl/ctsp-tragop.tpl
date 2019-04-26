<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">		
                <div class="breadcrumb">
                    <div class="breadcrumb flever_12">
                        <a href="<!--{$path_url}-->" title="Trang chủ">Trang chủ</a>
                    </div>
              
                    <div class="breadcrumbs_sepa">&gt;</div>
                    <div class="breadcrumb">
                        <span><!--{$seo.$name}--></span>
                    </div> 					
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="<!--{$path_url}-->/css/ctspTraGop.css" />
<div class="container mt20">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">
        <form id="eshopcart_info" name="postbuy" action="<!--{$path_url}-->/gio-hang/thanh-toan/" method="post">        	
			<div class="product_instalment">
            
                <table width="100%" cellpadding="0" border="0" class="table-instalment-pack mt20">
                	
                    <thead>
                        <tr> 
                            <td align="left" colspan="2">
                            	<h1 class="tragop"><!--{$view.$name}--></h1>
                            </td>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr> 
                            <td align="center" colspan="2">
                            	<span class="LabelTraGopCtsp colors1">
                                	Không thế chấp tài khoản
                                </span>
                                <span class="LabelTraGopCtsp colors2">
                                	Không chứng minh toàn khoản
                                </span>
                                <span class="LabelTraGopCtsp colors3">
                                	Không cần công chứng giấy tờ
                                </span>
                            </td>
                        </tr>
                    </tbody>
                    
                    <tbody>
                        <tr>
                        	<td valign="top" colspan="2"> 
                                <div class="TragopProductsctL">
                                    <div class="content">
                                        <div id="product-content">
                                            <div class="product-img-tragop">
                                                <img class="img-responsive" src="<!--{$path_url}-->/<!--{$view.img_vn}-->" >
                                            </div>
                                            <div class="descriptiontgctsp">
                                                <label class="color">Khuyến mãi ưu đãi:</label><br>
                                                <!--{if $view.typeiphone gt 0}-->
                                                    <!--{insert name='getChedobaohanh' cid = $view.typeiphone}-->	
                                                <!--{else}-->
                                                    <!--{if $smarty.session.showCity eq 1}-->
                                                        <!--{$view.promotion_vn}-->
                                                     <!--{else}-->
                                                        <!--{$view.promotion_en}-->
                                                    <!--{/if}-->    
                                                <!--{/if}-->			
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="TragopProductsctR">
                                    <div class="content">
                                    	<input type="hidden" value="<!--{$view.$price}-->" id="pricepr" />
                                        <input type="hidden" value="<!--{$view.$price}-->" name="priceTotal" id="priceTotal" />
                                        <input type="hidden" name="showTratruocInput" id="showTratruocInput" />
                                        <input type="hidden" name="showGopMoiThangInput" id="showGopMoiThangInput" />
                                        <input type="hidden" name="tragop" id="tragop" value="tragop" />
                                        <input type="hidden" name="idpr" id="idpr" value="<!--{$view.idsp}-->" />
                                        <input type="hidden" name="banking" id="banking" value=""  />
                                        <div class="tragop-right">
                                        	<!--{insert name="tinhtranghang" active=$view.typepr assign="tinhtrang"}-->
                                        	<label>Trạng thái</label>:
                                            <strong><span class="status"><!--{if $tinhtrang eq ''}-->CÒN HÀNG<!--{else}--><!--{$tinhtrang}--><!--{/if}--></span></strong>
                                        </div>
                                        <div class="tragop-right">
                                        	<label>Giá bán</label>:
                                            <strong><span><!--{$view.$price|number_format:0:",":"."}-->  VNĐ</span></strong>
                                        </div>
                                        
                                        <div class="tragop-right">
                                        	<label>Trả trước</label>:
                                            <strong><span class="tgprice"><span id="showTratruoc"></span> </span><span class="tgpricevnd">VNĐ</span></strong>
                                        </div>
                                        
                                        <div class="tragop-right">
                                        	<label>Góp mỗi tháng</label>:
                                            <strong><span class="tgprice"><span id="showGopMoiThang"></span> </span><span class="tgpricevnd">VNĐ</span></strong>
                                        </div>

                                        <label>Chọn số tiền trả góp</label>
                                        <div class=" select-box mt10">
                                            <select name="slpercent" onchange="getCountPercent()" id="slpercent">
                                            	<!--<option value="10">Trả trước 10%</option>-->
                                                <option value="20">Trả trước 20%</option>
                                                <option value="30">Trả trước 30%</option>
                                                <option value="40">Trả trước 40%</option>
                                                <option value="50">Trả trước 50%</option>
                                                <option value="60">Trả trước 60%</option>
                                                <option value="70">Trả trước 70%</option>
                                            </select>
                                        </div>
                                        <div class="select-box">
                                            <select name="slmonth" onchange="getCountMonth()" id="slmonth">
                                                <option value="6">Thời gian vay 6 tháng</option>
                                                <option value="9">Thời gian vay 9 tháng</option>
                                                <option value="12">Thời gian vay 12 tháng</option>
                                            </select>
                                        </div>	
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" id="result" colspan="2">
                            	
                            	<div class="tragopbank">
                                	<!--{section name=i loop=$bannerBank}-->
                                        <div class="logo-item">
                                            <img class="img-responsive" src="<!--{$path_url}-->/<!--{$bannerBank[i].img_vn}-->" alt="<!--{$bannerBank[i].alt_img}-->" title="<!--{$bannerBank[i].title_img}-->" />
                                            <br><!--{$bannerBank[i].title_vn}-->
                                            <div class="tgbutton"><a onclick="btn_tragop(<!--{$bannerBank[i].id}-->)" href="#quick_order" data-toggle="modal"><!--{$bannerBank[i].nameshort_vn}--></a></div>
                                        </div>
                                    <!--{/section}-->    
                                </div>
                                
            					<div class="content">                                    
                                    <div class="td-note" style="width:100%;text-align:center;">
                                        <!--{$seo.content_en}-->
                                    </div>
                                 
                                </div>
                                 
                            </td>
                        </tr>
                    </tbody>
                </table>
                
               <!--{$seo.$content}-->
			</div>
			
            <div  class="product">
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

                                <div class="clear title-buy"> 
                                    <span>
                                        <input class="checkboxBuy" type="radio" checked="checked" name="checkmod" value="Đặt Giữ hàng tại shop" /> Đặt Giữ hàng tại shop
                                    </span>	
                                    <span>
                                        <input class="checkboxBuy" type="radio" name="checkmod" value="Giao hàng toàn quốc" /> Giao hàng toàn quốc
                                    </span>	
                                </div>
                                <div style="padding:0 20px 20px 20px;">
                                    <div class="DialogLeft">
                                        <div class="media-box clearfix" style="border:none;">
                                             <div class="name" id="nameSearchPrBuyNow"><!--{$view.$name}--></div>
                                            <div class="media-img pull-left">
                                            	<span id="searchPrBuyNow">
                                                     <img width="140px" alt="<!--{$view.alt_img}-->" src="<!--{$path_url}-->/<!--{$view.img_thumb_vn}-->" class="img-responsive ">
                                                     <div class="price" style="text-align:center">
                                                        <!--{$view.$price|number_format:0:",":"."}--> vnđ									   	
                                                     </div>
                                                 </span>
                                                 
                                                 <div>
                                                  	<strong>Trả trước</strong> <span class="priceGop" id="showTratruoc1"></span> <span class="priceGop">vnđ</span> <br />
                                                    <strong>Góp mỗi tháng</strong> <span  class="priceGop" id="showGopMoiThang1"></span> <span class="priceGop"> vnđ</span>
                                                </div>
                                                
                                                <div>
                                                    <!--{if $view.price neq 0}-->
                                                    	<!--{insert name="getPhuKienGiamGia" idpromotion=$view.idpromotion price=$view.$price}-->
                                                    <!--{/if}-->
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
                                            <td><font style="color:red">*</font></td>
                                          </tr>
                                          
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
                                            </td>
                                          </tr>
                                        </tbody>
                                     </table>
                                                                        
                                        <script type="text/javascript">
											function btn_tragop(idbank){
												$("#banking").val(idbank);
											}
											
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
											
											 
											function getSprTragop(id){

												$('#product-description').show();
												$('#noid-tragop').show();
												
											 	$.post('<!--{$path_url}-->/loading/getPage.php',{id:id,type:'searchTragop'},function(data) {
													 var obj = jQuery.parseJSON(data);
													 $('#searchPrBuyNow').html(obj.buynow);
													 $('#nameSearchPrBuyNow').html(obj.name);
													 $('#product-content').html(obj.view);
													 $('#inputStringtragop').val(obj.name);
													 $('#pricepr').val(obj.price);
													 $('#priceTotal').val(obj.price);
													 $('#idpr').val(id);
													 getCountPercent();
                                                     
                                                });
											 } 
											 
											 jQuery(document).ready(function() {
												   getCountPercent();
											});
											
											
											function getVcare()
											{
												var Total;
												//var priceTotal = $('#priceTotal').val();
												<!--{if $view.vcare eq ''}-->
													var vcare = 0;
												<!--{else}-->
													var vcare = <!--{$view.vcare}-->;
												<!--{/if}-->
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
												
												<!--{if $view.vcare12 eq ''}-->
													var vcare12 = 0;
												<!--{else}-->
													var vcare12 = <!--{$view.vcare12}-->;
												<!--{/if}-->
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
														
											//getCountPercent();
											function getCountPercent(){
												var price = $("#pricepr").val();
												var slmonth = $("#slmonth").val();
												var slpercent = $("#slpercent").val();
												var tratruoc, sotienvay, laihangthang, gochangthang, sotienhangthang;
												tratruoc = Math.round(Math.round(price) * Math.round(slpercent))/100;
												
												sotienvay = Math.round(Math.round(price) - Math.round(tratruoc));
												laihangthang = Math.round(Math.round(sotienvay) *2.9 )/100;
												gochangthang = Math.round(sotienvay)/slmonth;
												sotienhangthang = Math.round(gochangthang) + Math.round(laihangthang)
												
												$("#showTratruoc").html(formatNumber(tratruoc));
												$("#showTratruoc1").html(formatNumber(tratruoc));
												$("#showTratruocInput").val(tratruoc);
												
												
												$("#showGopMoiThang").html(formatNumber(sotienhangthang));
												$("#showGopMoiThang1").html(formatNumber(sotienhangthang));
												$("#showGopMoiThangInput").val(sotienhangthang);
											}
											
											function getCountMonth(){
												var price = $("#pricepr").val();
												var slmonth = $("#slmonth").val();
												var slpercent = $("#slpercent").val();
												
												var tratruoc, sotienvay, laihangthang, gochangthang, sotienhangthang;
												tratruoc = Math.round(Math.round(price) * Math.round(slpercent))/100;
												
												sotienvay = Math.round(Math.round(price) - Math.round(tratruoc));
												laihangthang = Math.round(Math.round(sotienvay) *2.9 )/100;
												gochangthang = Math.round(sotienvay)/slmonth;
												sotienhangthang = Math.round(gochangthang) + Math.round(laihangthang);
												
												$("#showTratruoc").html(formatNumber(tratruoc));
												$("#showTratruoc1").html(formatNumber(tratruoc));
												$("#showTratruocInput").val(tratruoc);
												
												
												$("#showGopMoiThang").html(formatNumber(sotienhangthang));
												$("#showGopMoiThang1").html(formatNumber(sotienhangthang));
												$("#showGopMoiThangInput").val(sotienhangthang);
											}
											
											function formatNumber(num) {
												return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
											}
                                       </script>
                                    
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>		
            </div>
            
			 </div>  
       </form>      
		</div>
	</div><!-- end.row -->
</div>