$(document).ready(function(){
	var slpercent = $( "#slpercent option:selected" ).val();
	var slmonth = $( "#slmonth option:selected" ).val();
	var product_id = $( "#product-id" ).val();
	var product_price = $( "#product-price" ).val();
	$.get("/index.php?module=products&view=instalment&task=calculator&raw=1",{slpercent:slpercent,slmonth:slmonth,product_id:product_id,product_price:product_price}, function(html){ 
		$('#result').html(html);
		$('.table-instalment-procedures').css("display", "table");
	});
	if(product_id){
		$.get("/index.php?module=products&view=instalment&task=load_data&raw=1",{product_id:product_id}, function(html){ 
			$('#product-content').html(html);
		});
	}
	/* FORM CONTACT */
	$('#submitbt_instalment').click(function(){
		if(checkFormsubmit())
			document.instalment_form.submit();
	})
}); 
//$(function() {
//	var products = $("#list_products").val();
//	products = JSON.parse(products);
//	$( "#product_text" ).autocomplete({
//			minLength: 0,
//			source: products,
//			focus: function( event, ui ) {
//				$( "#product" ).val( ui.item.label );
//				return false;
//			},
//			select: function( event, ui ) {
//				$( "#product_text" ).val( ui.item.label );
//				$( "#product-id" ).val( ui.item.value );
//				$( "#product-price" ).val( ui.item.d_price);
//				$( "#product-content" ).html( '<div class="product-img"><img  width="100px"  id="product-icon" src="'+ui.item.image+'"  alt=""></div><div id="product-description"><h2 class="name"><a href="'+ui.item.link+'" title = "'+ ui.item.label+'" >'+ ui.item.label+'</a></h2><div class="price"><span>'+ui.item.price+'</span></div><div class="discount">Khuyến mại: <span>'+ui.item.discount+'</span></div></div>');
//				return false;
//			}
//	}).autocomplete( "instance" )._renderItem = function( ul, item ) {
//		return $( "<li>" ).append( "<a>" + item.label + "<br>" + item.desc + "</a>" ).appendTo( ul );
//	};
//});
$(function() {
	var products = $("#list_products").val();
	products = JSON.parse(products);
	$( "#product_text" ).autocomplete({
			minLength: 0,
			source: products,
			focus: function( event, ui ) {
				$( "#product" ).val( ui.item.label );
				return false;
			},
			select: function( event, ui ) {
				$( "#product_text" ).val( ui.item.label );
				$( "#product-id" ).val( ui.item.value );
				$( "#product-price" ).val( ui.item.d_price);
				$( "#product-content" ).html( '<div class="product-img"><img  width="100px"  id="product-icon" src="'+ui.item.image+'"  alt=""></div><div id="product-description"><h2 class="name"><a href="'+ui.item.link+'" title = "'+ ui.item.label+'" >'+ ui.item.label+'</a></h2><div class="price"><span>'+ui.item.price+'</span></div><div class="discount">Khuyến mại: <span>'+ui.item.discount+'</span></div></div>');
				CalculateInstallmentByMonth();
				return false;
			}
	});
});
function CalculateInstallmentByMonth(){
	var slpercent = $( "#slpercent option:selected" ).val();
	var slmonth = $( "#slmonth option:selected" ).val();
	var product_id = $( "#product-id" ).val();
	var product_price = $( "#product-price" ).val();
	$.get("/index.php?module=products&view=instalment&task=calculator&raw=1",{slpercent:slpercent,slmonth:slmonth,product_id:product_id,product_price:product_price}, function(html){ 
		$('#result').html(html);
		$('.table-instalment-procedures').css("display", "table");
	});
}
function checkFormsubmit()
{
	$('label.label_error').prev().remove();
	$('label.label_error').remove();
	if(!madeCheckbox("checkbox","Bạn chưa đủ 18 tuổi nA�n khA�ng thể đặt hA ng trả gA�p")){
		return false;
	}
	if(!notEmpty("sender_name","Bạn phải nhập họ vA  tA�n"))
	{
		return false;
	}
	if(!notEmpty("sender_telephone","Bạn phải nhập số điện thoại"))
	{
		return false;
	}
	return true;
}