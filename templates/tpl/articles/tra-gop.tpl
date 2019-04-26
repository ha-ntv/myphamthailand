<link rel="stylesheet" type="text/css" href="<!--{$path_url}-->/css/ctspTraGop.css" />
<form id="eshopcart_info" name="postbuy" action="<!--{$path_url}-->/gio-hang/thanh-toan/" method="post">        	
    <div class="product_instalment">
    
        <table width="100%" cellpadding="0" border="0" class="table-instalment-pack mt20">
            <thead>
                <tr> 
                    <td align="center" colspan="2">
                        <span class="LabelTraGopCtsp colors1">
                            Không thế chấp tài sản
                        </span>
                        <span class="LabelTraGopCtsp colors2">
                            Không chứng minh thu nhập
                        </span>
                        <span class="LabelTraGopCtsp colors3">
                            Không công chứng giấy tờ
                        </span>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td valign="top" colspan="2"> 
                        <div class="TragopProducts TragopFl">
                            <div class="content">
                                <label class="mt10">Sản phẩm trả góp</label>
                                <div class="clearfix"></div>

                                <div id="product-content">
                                    <div class="product-img">
                                        <!--{if $view.id eq ''}--> 
                                            <img width="50px" src="<!--{$path_url}-->/images/tragop_sp.png" />
                                        <!--{else}-->
                                            <img width="100px" src="<!--{$path_url}-->/<!--{$view.img_thumb_vn}-->" >
                                        <!--{/if}-->
                                    </div>
                                    <div id="product-description" <!--{if $view.id eq ''}-->style="display:none;" <!--{/if}-->>
                                        <h2 class="name">
                                            <a title="<!--{$view.$name}-->"><!--{$view.$name}--></a>
                                        </h2>
                                        <div class="price">
                                            <span><!--{$view.$price|number_format:0:",":"."}-->  VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="clearfix"></div>
                                
                                <br>
                                <!--{if $smarty.request.cat2 eq ''}-->
                                    <input placeholder="Nhập tên sản phẩm cần mua" id="inputStringtragop" onkeyup="lookuptragop(this.value);" class="ui-autocomplete-input" />
                                    <div id="suggestionstragop"></div>
                                <!--{/if}-->
                                <input type="hidden" value="<!--{$view.$price}-->" id="pricepr" />
                                <input type="hidden" value="<!--{$view.$price}-->" name="priceTotal" id="priceTotal" />
                                <input type="hidden" name="showTratruocInput" id="showTratruocInput" />
                                <input type="hidden" name="showGopMoiThangInput" id="showGopMoiThangInput" />
                                <input type="hidden" name="tragop" id="tragop" value="tragop" />
                                <input type="hidden" name="idpr" id="idpr" value="<!--{$view.idsp}-->" />
                                
                            </div>
                        </div>
                        
                        <div class="TragopProducts TragopFl">
                            <div class="content">
                                <label class="mt20">Chọn số tiền trả góp</label>
                                <div class=" select-box mt10">
                                    <select name="slpercent" onchange="getCountPercent()" id="slpercent">
                                        <!--<option value="10">Trả trước 10%</option>-->
                                        <option value="20">Trả trước 20%</option>
                                        <option value="30">Trả trước 30%</option>
                                        <option value="40" <!--{if $slpercent eq 40}-->selected="selected"<!--{/if}-->>Trả trước 40%</option>
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
                    <span id="noid-tragop" <!--{if $view.id eq ''}-->style="display:none;" <!--{/if}-->>
                        <div class="content">
                            <!--
                            <img alt="" src="/images/home_credit.png" id="product-icon" />
                            -->
                            <div class="clearfix"></div>
                            <br>
                            <div class="td-left">
                                <b>Trả trước</b>
                            </div>
                            <div class="td-right"><span id="showTratruoc"></span>  VNĐ</div>
                            <div class="clearfix"></div>
                            <div class="td-left">
                                <b>Góp mỗi tháng</b>
                            </div>
                            <div class="td-right"><span id="showGopMoiThang"></span>  VNĐ</div>
                            <div class="clearfix"></div>
                            
                            <div class="td-note" style="width:100%;text-align:center;">
                                <!--{$seo.content_en}-->
                            </div>
                         
                        </div>
                        <div class="td-hotline">
                            <a href="#quick_order" data-toggle="modal" class="">
                                <span>Đặt hàng trả góp</span>
                            </a>
                        </div>
                    </span>    
                    </td>
                </tr>
            </tbody>
        </table>
        
       <!--{$tragop.$content}-->
    </div>
    
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
				laihangthang = Math.round(Math.round(sotienvay) *3.05 )/100;
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
				laihangthang = Math.round(Math.round(sotienvay) *3.05 )/100;
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
</form>      