<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.1.css" media="screen" />
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <!--{insert name="HearderCat" cid=2 act=$smarty.request.do root=1}-->
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">
					Máy bảo hành
				</span>
                
            </div>
            <div class="Clear"></div>
       </div>
       
       <!--{section name=i loop=$view}-->  
           <table width="100%" border="0">
                <tr class="<!--{cycle values='trColorOne,trColorTwo'}-->">
                    <td class="k-header First" colspan="3" style="background:none;"> <!--{insert name="getNameWeb" table='categories' typename='name_vn' id=$view[i].cid}--></td>
                    <td class="k-header" colspan="4" style="background:none";><!--{insert name="getNameWeb" table='products' typename='name_vn' id=$view[i].idpr}--> </td>
                </tr>
                <tr>
                   <td class="k-header First">Stt</td>
                    <td class="k-header">Số Serial </td>
                    <td class="k-header">Giá nhập</td>
                    <td class="k-header">Giá bán</td>
                    <td class="k-header">Ngày nhập</td>
                    <td class="k-header">Đối tác</td>
                    <td class="k-header" align="center">Bảo Hành</td>
                </tr> 
                <!--{insert name="getViewDtBaohanh" maphieu=$view[i].maphieu cid=$view[i].cid}--> 
               
            </table>
        <br /><br />
       <!--{/section}-->
       
       <script>
			function getBaohanh(id,idbaohanh){
			
				var answer = confirm("Bạn chất muốn thực hiện không?");
				if (answer)
				{
					var url = '<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/baohanh/'+id+'/'+idbaohanh+'/search/';
					window.location.href = url;
				}
				else{
					$('#showbaohanh'+id).hide();
					$('#btnshow'+id).show();
				}
			}
			function domainShow(a){
				
				$('#showbaohanh'+a).show();
				$('#btnshow'+a).hide();
				$('#btnhide'+a).show();
			}	
			function domainHide(url){
				var answer = confirm("Bạn chất muốn thực hiện không?");
				if (answer)
				{
					window.location.href = url;
				}
			}
			
			function banTra(url){
				var answer = confirm("Bạn chất muốn thực hiện không?");
				if (answer)
				{
					window.location.href = url;
				}
			}
			
		</script>
   
    </div>
    <!--{include file="./left.tpl"}-->
</div>