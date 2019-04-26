$(document).ready(function() {
	$('.searchbt').click(function(){
		itemid = 10; 
		url = '';
		var keyword = $(this).prev('.keyword').val();
		keyword = encodeURIComponent(encodeURIComponent(keyword));
		var link_search = $('#link_search').val();
		if( keyword != '')	{
			url += 	'&keyword='+keyword;
			var check = 1;
		}else{
			var check =0;
		}
		if(check == 0){
			alert('Báº¡n pháº£i nháº­p tham sá»‘ tĂ¬m kiáº¿m');
			return false;
		}
			var link = link_search+'/'+keyword+'.html';

 
	    window.location.href=link;
	    return false;
		});
	$(".keyword").bind("keypress", {}, keypressInBox);
});



function keypressInBox(e) {
    var code = (e.keyCode ? e.keyCode : e.which);
    if (code == 13) { //Enter keycode                        
        e.preventDefault();
        itemid = 10; 
		url = '';
        var keyword  = $(this).val();
    	keyword = encodeURIComponent(encodeURIComponent(keyword));
		var link_search = $('#link_search').val();
		if( keyword != '')	{
			url += 	'&keyword='+keyword;
			var check = 1;
		}else{
			var check =0;
		}
		if(check == 0){
			alert('Báº¡n pháº£i nháº­p tham sá»‘ tĂ¬m kiáº¿m');
			return false;
		}
			var link = link_search+'/'+keyword+'.html';

 
	    window.location.href=link;
	    return false;
    }
};
