<?php /* Smarty version 2.6.6, created on 2016-02-04 03:47:09
         compiled from footer.tpl */ ?>
<div class="Clear"></div>
    <footer class="mainFooter">
    	Copyright © 2014 Vietanhmobile. All rights reserved, Công ty TNHH THƯƠNG MẠI VÀ DỊCH VỤ VIỆT ANH NGUYỄN, Mã số thuế: 0106062662 - Ngày cấp ĐKKD/QĐTL:17/12/2012
    </footer>
</div>
<script>
	<?php if ($_SESSION['countSapHetHang'] > 0): ?>
		$(document).ready(function(){
			$("#countSapHetHang").html(<?php echo $_SESSION['countSapHetHang']; ?>
);
		});
	<?php endif; ?>
	function Dele(url){
		var answer = confirm("Bạn chất muốn xóa không?");
		if (answer)
		{
			document.location.href = url;
		}
	}
</script>

</body>
</html>