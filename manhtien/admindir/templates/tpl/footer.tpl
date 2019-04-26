<!-- Footer -->

    </div>
</div>
<div class="footer">
&copy; 2013  Developed by CTOPR.</div>
<!--// Footer -->
<script type="text/javascript">
	CKEDITOR.replace( 'editor1',
			{
				skin : 'kama',
				language: 'vi'
	});
</script>

<script type="text/javascript">
	CKEDITOR.replace( 'editor2',
			{
				skin : 'kama',
				language: 'vi'
	});
</script>

<script type="text/javascript">
	CKEDITOR.replace( 'editor3',
			{
				skin : 'kama',
				language: 'vi'
	});
</script>

<script type="text/javascript">
	CKEDITOR.replace( 'editor4',
			{
				skin : 'kama',
				language: 'vi'
	});
</script>

<script type="text/javascript">
	CKEDITOR.replace( 'editor5',
			{
				skin : 'kama',
				language: 'vi'
	});
</script>

<script type="text/javascript">
	CKEDITOR.replace( 'editor6',
			{
				skin : 'kama',
				language: 'vi'
	});
</script>

<script type="text/javascript">
	CKEDITOR.replace( 'editor7',
			{
				skin : 'kama',
				language: 'vi'
	});
</script>

<script type="text/javascript">
	CKEDITOR.replace( 'editor8',
			{
				skin : 'kama',
				language: 'vi'
	});
</script>

<script type="text/javascript">
	CKEDITOR.replace( 'editor9',
			{
				skin : 'kama',
				language: 'vi'
	});
</script>

<!--{if $smarty.request.do neq 'orders' &&  $smarty.request.do neq 'competitors'}-->
<script type="text/javascript" src="js/autoNumeric.js"></script>
<script>
	$(document).ready(function() { 
		var numLen = $("#inputTitle").val().length;	
		$("#showNumTitle").text(numLen);
		
		var numLen1 = $("#inputDesc").val().length;	
		$("#showNumDesc").text(numLen1);
		
		$("#inputTitle").keyup(function() {  
			var len = this.value.length;  
			$("#showNumTitle").text(len);  
		});  
		
		$("#inputDesc").keyup(function() {  
			var len1 = this.value.length;  
			$("#showNumDesc").text(len1);  
		});  
	});
	$('.autoNumeric').autoNumeric('init', {aSep: '.', aDec: 'none'});
</script>
<!--{/if}-->
</body>
</html>