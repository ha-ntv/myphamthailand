<?php /* Smarty version 2.6.6, created on 2019-03-20 08:09:29
         compiled from footer.tpl */ ?>
<!-- Footer -->



    </div>

</div>

<div class="footer">

&copy; 2019 DEV.</div>

<!--// Footer -->

<script type="text/javascript">

if($('#editor1').length)

	CKEDITOR.replace( 'editor1',

			{

				skin : 'kama',

				language: 'vi'

	});

</script>



<script type="text/javascript">
if($('#editor2').length)

	CKEDITOR.replace( 'editor2',

			{

				skin : 'kama',

				language: 'vi'

	});

</script>



<script type="text/javascript">
if($('#editor3').length)

	CKEDITOR.replace( 'editor3',

			{

				skin : 'kama',

				language: 'vi'

	});

</script>



<script type="text/javascript">
if($('#editor4').length)

	CKEDITOR.replace( 'editor4',

			{

				skin : 'kama',

				language: 'vi'

	});

</script>



<script type="text/javascript">
if($('#editor5').length)

	CKEDITOR.replace( 'editor5',

			{

				skin : 'kama',

				language: 'vi'

	});

</script>



<script type="text/javascript">
if($('#editor6').length)

	CKEDITOR.replace( 'editor6',

			{

				skin : 'kama',

				language: 'vi'

	});

</script>



<script type="text/javascript">
if($('#editor7').length)

	CKEDITOR.replace( 'editor7',

			{

				skin : 'kama',

				language: 'vi'

	});

</script>



<script type="text/javascript">
if($('#editor8').length)

	CKEDITOR.replace( 'editor8',

			{

				skin : 'kama',

				language: 'vi'

	});

</script>



<?php if ($_REQUEST['do'] != 'orders' && $_REQUEST['do'] != 'competitors'): ?>

<script type="text/javascript" src="js/autoNumeric.js"></script>

<script>

	$(document).ready(function() { 
		if($('#inputTitle').length) {
			var numLen = $("#inputTitle").val().length;	

			$("#showNumTitle").text(numLen);
		}
		

		
		if($('#inputTitle').length) {
		var numLen1 = $("#inputDesc").val().length;	

		$("#showNumDesc").text(numLen1);

		

		$("#inputTitle").keyup(function() {  

			var len = this.value.length;  

			$("#showNumTitle").text(len);  

		});  
		}

		if($('#inputDesc').length) {

		$("#inputDesc").keyup(function() {  

			var len1 = this.value.length;  

			$("#showNumDesc").text(len1);  

		});  
		}
	});

	$('.autoNumeric').autoNumeric('init', {aSep: '.', aDec: 'none'});

</script>

<?php endif; ?>

</body>

</html>