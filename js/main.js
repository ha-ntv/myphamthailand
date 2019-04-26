var is_rewrite = 1;
var root = '/';
(function() {
	if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
		  var msViewportStyle = document.createElement("style");
		  msViewportStyle.appendChild(
		    document.createTextNode(
		      "@-ms-viewport{width:auto!important}"
		    )
		  );
		  document.getElementsByTagName("head")[0].
		    appendChild(msViewportStyle);
		}
})();

function changeCaptcha(){
	var date = new Date();
	var captcha_time = date.getTime();
	$("#imgCaptcha").attr({src:'/libraries/jquery/ajax_captcha/create_image.php?'+captcha_time});
}	
//$("img")
//  .error(function(){
//	  $(this).attr("src", "../images/no-img.png");
//  });  

/* CHECK CAPTCHA AJAX */
function check_captcha(){
	$('#txtCaptcha').blur(function(){
		if($(this).val() != ''){
			$.ajax({url: "/index.php?module=users&task=ajax_check_captcha&raw=1",
				data: {txtCaptcha: $(this).val()},
				dataType: "text",
				success: function(result) {
					$('label.username_check').prev().remove();
					$('label.username_check').remove();
					if(result == 0){
						invalid('txtCaptcha','Báº¡n nháº­p sai mĂ£ hiá»ƒn thá»‹');
					} else {
						valid('txtCaptcha');
						$('<br/><div class=\'label_success username_check\'>'+'Báº¡n Ä‘Ă£ nháº­p Ä‘Ăºng mĂ£ hiá»ƒn thá»‹'+'</div>').insertAfter($('#username').parent().children(':last'));
					}
				}
			});
		}
	});
}
$(function () {
//	  $("#fixed-bar")
//	    .css({position:'fixed',bottom:'0px'})
//	    .hide();
//	  $(window).scroll(function () {
//	    if ($(this).scrollTop() > 400) {
//	      $('#fixed-bar').fadeIn(200);
//	    } else {
//	      $('#fixed-bar').fadeOut(200);
//	    }
//	  });
	  $('.go-top').click(function () {
	    $('html,body').animate({
	      scrollTop: 0
	    }, 1000);
	    return false;
	  });
	});
//$(document).ready(function(){
//    $(document).bind("contextmenu",function(){
//    	alert('Báº¡n khĂ´ng Ä‘Æ°á»£c dĂ¹ng chuá»™t pháº£i');
//        return false;
//    });
//});


//$(document).ready(function(){
//	var top_footer = $('.footer').position().top;
//    /* ÄĂ­nh menu xuá»‘ng footer náº¿u scrollbar kĂ©o xuá»‘ng dÆ°á»›i footer */
//	$(window).scroll(function () {
//		var top_footer_menu = $('.footer_t').offset().top;
//		if(top_footer_menu >= top_footer ){
//			$('.footer_menu').css('position','inherit')
//		}else{
//			$('.footer_menu').css('position','fixed')
//		}
//	});
//
//});
function openPopupWindow(obj) { 
    var wID = $(obj).attr('data-id');
    var url = $(obj).attr('data-url')+'&display=popup';
    var width = $(obj).attr('data-width');
    var height = $(obj).attr('data-height');
    var w = window.open(url,wID, 'width='+width+',height='+height+',location=1,status=1,resizable=yes');
    var coords = getCenteredCoords(width,height);
    w.moveTo(coords[0],coords[1]);
}
function login_facebook(data){
	$(window.location).attr('href', data.url);
}