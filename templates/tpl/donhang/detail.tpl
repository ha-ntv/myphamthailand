<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfPZhOobyQI9SCUhFCAxO7FaSBWIKTrRQ&amp;sensor=false&amp;libraries=places&amp;language=vi&amp;callback=initMap"></script>
<div id="map"></div>
<div class="index_middle contentpd">

    <div class="row container" style="margin: 0 auto;">

		<div class="content" id="divCart">

    		<div class="Col_CC">

                <p class="title_inside1" style="padding:20px 0; text-align:center;">Thông tin của khách hàng</p>

                <div class="woocommerce" id="cart-wrapper">
                    <form name="checkout" method="post" class="checkout woocommerce-checkout" id="_frm_order" action="/check-out/"
                        enctype="multipart/form-data" novalidate="novalidate">
                        <input type="hidden" id="coupon_applied" name="order_coupon_code" class="input-text" placeholder="Mã ưu đãi" value="" />
							<div class="row pt-0 ">
							<div class="large-7 col  ">
                                <div class="woocommerce-billing-fields">
                                    <h3>Thông tin thanh toán</h3>
                                    <div class="woocommerce-billing-fields__field-wrapper">
                                        <p class="form-row form-row-wide validate-required validate-required" id="billing_first_name_field">
                                            <label for="billing_first_name" class="">Tên Của Bạn
                                                <span class="required">*</span></label>
                                            <input type="text" class="input-text" name="billing_first_name" id="billing_first_name"
                                                placeholder="" value="" autocomplete="given-name" />
                                                 <div class="label_error" id="error_name"></div>
                                        </p>
                                        <p class="form-row form-row-wide validate-required validate-phone validate-required validate-phone"
                                            id="billing_phone_field">
                                            <label for="billing_phone" class="">Số Điện Thoại
                                                <span class="required">*</span></label>
                                            <input type="text" class="input-text" name="billing_phone" id="billing_phone"
                                                placeholder="" value="" autocomplete="tel" />
                                                 <div class="label_error" id="error_phone"></div>
                                        </p>
                                        <p class="form-row form-row-wide address-field validate-required validate-required"
                                            id="billing_address_1_field">
                                            <label for="billing_address_1" class="">Địa Chỉ
                                                <span class="required">*</span></label>
                                            <input type="text" class="input-text" name="billing_address_1" id="billing_address_1"
                                                placeholder="Street address" value="" autocomplete="address-line1" />
                                                 <div class="label_error" id="error_address"></div>
                                        </p>
                                    </div>
                                </div>
                                <div class="woocommerce-additional-fields">
                                    <div class="woocommerce-additional-fields__field-wrapper">
                                        <p class="form-row notes" id="order_comments_field" data-priority="">
                                            <label for="order_comments" class="">Ghi chú đơn hàng<span class="optional">(tuỳ
                                                    chọn)</span></label>
                                            <span class="woocommerce-input-wrapper">
                                                <textarea name="order_comments" class="input-text" id="order_comments"
                                                    placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."
                                                    rows="2" cols="5">
							                    </textarea>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="woocommerce-additional-fields">
                                    <div class="woocommerce-additional-fields__field-wrapper">
                                       <label class="">Quãng đường</label>
                                        <input type="text" name="shipping_distance" value="0" id="shipping_distance" placeholder="KM">
                                    </div>
                                </div>
                                <div class="woocommerce-additional-fields">
                                    <div class="woocommerce-additional-fields__field-wrapper">
                                       <label class="">Phí vận chuyển</label>
                                        <input type="text" name="shipping_fees" value="0" id="cost_shipping">
                                    </div>
                                </div>
                             </div>
                             <div class="large-5 col">
                                 <!--{insert name="getCartPayment"}-->        
                                

                             
    		    </div>             

            </div>   		

		</div>

    </div>

</div>
<script type="text/javascript">
			 jQuery('#payment_method_bacs').click(function() {
                jQuery('.payment_box.payment_method_bacs').slideToggle();
                })
            jQuery('#payment_method_cod').click(function() {
                jQuery('.payment_box.payment_method_cod').slideToggle();
            })
            function sendOrder(e) {
                e.preventDefault();
                var name,address,phone,flag;
                flag = true;
                name = jQuery("#billing_first_name").val();
                address = jQuery("#billing_address_1").val();
                phone =  jQuery("#billing_phone").val().trim();
                var testphone =  /^0[1-9][0-9]{8}/;
                if(!name) {
                     $("#error_name").attr("style", "display:block");

                    $("#error_name").html('Bạn phải nhập họ tên');

                    flag = false;

                } else {
                    $("#error_name").attr("style", "display:none");
                }
                if(!address) {
                     $("#error_address").attr("style", "display:block");

                    $("#error_address").html('Bạn phải nhập địa chỉ');

                    flag = false;
                }
                else {

                     $("#error_address").attr("style", "display:none");

                }
                 if(!phone ) {

                     $("#error_phone").attr("style", "display:block");

                    $("#error_phone").html('Bạn phải nhập số điện thoại');

                    flag = false;
                }
                else if( (phone!="") &&  !testphone.test(phone))
                {

                    $("#error_telephone").attr("style", "display:block");

                    $("#error_telephone").html('Số điện thoại không đúng (vd:0xxxxxxxx)');

                    flag = false;

                }
                if($flag) {
                    document.checkout.submit();	
                }
                
            }
              function calculateAndDisplayRoute(directionsService, directionsDisplay) {
                    directionsService.route({
                    origin: "59 Tôn Thất Đạm, Xuân Hà, Thanh Khê, Đà Nẵng",
                    destination: document.getElementById('billing_address_1').value,
                    travelMode: google.maps.TravelMode.DRIVING
                    }, function(response, status) {
                    if (status === google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                        var htmlReturn = '';
                        var route = response.routes[0];
                        var km = route.legs[0].distance.text;
                        km = km.split(" ")[0];
                        km = km.replace(',', '.');
                        if (km <= 2){
                        var tien = 10000;
                        }else{
                        var km1 = km;
                        var tien = km1*5000;
                    }
                   
                       // htmlReturn += "Số KM: <strong>" + route.legs[0].distance.text + "</strong> -  Phí vận chuyển: <strong>" + tien.toLocaleString("de-DE") + "</strong> vnđ" + ' Tổng cộng:<strong> '+ tong.toLocaleString("de-DE") +' vnđ</strong>';   
                        document.getElementById("shipping_distance").value =  route.legs[0].distance.text
                        document.getElementById("cost_shipping").value = tien.toLocaleString("de-DE");
                    }
                    });
                }
                function initMap() {
                    var directionsService = new google.maps.DirectionsService;
                    var directionsDisplay = new google.maps.DirectionsRenderer;
                    var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: {lat: 16.0717516, lng: 108.200348}
                    });
                    directionsDisplay.setMap(map);
                    var searchBox = new google.maps.places.SearchBox(document.getElementById('billing_address_1'));
                google.maps.event.addListener(searchBox, 'places_changed', function(){
                    var places = searchBox.getPlaces();
                    if (places.length == 0) {
                        return;
                    }
                    markers = [];
                    var bounds = new google.maps.LatLngBounds();
                    for (var i = 0, place; place = places[i]; i++) {
                        var marker = new google.maps.Marker({
                            map: map,
                            position: place.geometry.location,
                            draggable: true,
                            animation: google.maps.Animation.DROP
                        });

                        markers.push(marker);
                        bounds.extend(place.geometry.location);
                    }
                    map.fitBounds(bounds);

                    calculateAndDisplayRoute(directionsService, directionsDisplay);
                });
                    var onChangeHandler = function() {
                    calculateAndDisplayRoute(directionsService, directionsDisplay);
                };
                    document.getElementById('billing_address_1').addEventListener('keydown', onChangeHandler);
                    calculateAndDisplayRoute(directionsService, directionsDisplay);
                function initialize(){
                var marker = new google.maps.Marker({
                    position: myCenter,
                });
                marker.setMap(map);
                }
                }

				
</script>