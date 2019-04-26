<div class="Clear"></div>
    <footer class="mainFooter">
    	Copyright © 2014 Vietanhmobile. All rights reserved, Công ty TNHH THƯƠNG MẠI VÀ DỊCH VỤ VIỆT ANH NGUYỄN, Mã số thuế: 0106062662 - Ngày cấp ĐKKD/QĐTL:17/12/2012
    </footer>
</div>
<script>
	<!--{if $smarty.session.countSapHetHang gt 0}-->
		$(document).ready(function(){
			$("#countSapHetHang").html(<!--{$smarty.session.countSapHetHang}-->);
		});
	<!--{/if}-->
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