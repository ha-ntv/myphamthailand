/*

* Author:      Marco Kuiper (http://www.marcofolio.net/)

*/



google.setOnLoadCallback(function()

{

	// Safely inject CSS3 and give the search results a shadow

	var cssObj = { 'box-shadow' : '#888 0px', // Added when CSS3 is standard

		'-webkit-box-shadow' : '#888 0px', // Safari

		'-moz-box-shadow' : '#888 0px'}; // Firefox 3.5+

	$("#suggestions").css(cssObj);

	// Fade out the suggestions box when not active

	 $("input").blur(function(){

	 	$('#suggestions').fadeOut();

	 });

	 

	 $("#suggestions1").css(cssObj);

	// Fade out the suggestions box when not active

	 $("input").blur(function(){

	 	$('#suggestions1').fadeOut();

	 });

	 

	 $("#suggestionstragop").css(cssObj);

	// Fade out the suggestions box when not active

	 $("input").blur(function(){

	 	$('#suggestionstragop').fadeOut();

	 });

});





function lookup(inputString) {

	if(inputString.length == 0) {

		$('#suggestions').fadeOut(); // Hide the suggestions box

	} else {

		$.post("/loading/rpc.php", {queryString: ""+inputString+""}, function(data) { // Do an AJAX call

			$('#suggestions').fadeIn(); // Show the suggestions box

			$('#suggestions').html(data); // Fill the suggestions box

		});

	}

}



function lookup1(inputString) {

	if(inputString.length == 0) {

		$('#suggestions1').fadeOut(); // Hide the suggestions box

	} else {

		$.post("/loading/rpc.php", {queryString: ""+inputString+""}, function(data) { // Do an AJAX call

			$('#suggestions1').fadeIn(); // Show the suggestions box

			$('#suggestions1').html(data); // Fill the suggestions box

		});

	}

}



function lookuptragop(inputString) {

	if(inputString.length == 0) {

		$('#suggestionstragop').fadeOut(); // Hide the suggestions box

	} else {

		$.post("/loading/rpc.php?type=tragop", {queryString: ""+inputString+""}, function(data) { // Do an AJAX call

			$('#suggestionstragop').fadeIn(); // Show the suggestions box

			$('#suggestionstragop').html(data); // Fill the suggestions box

		});

	}

}

