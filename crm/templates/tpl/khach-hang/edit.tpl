<link type="text/css" href="<!--{$path_url}-->/calendar/themes/ui-lightness/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="<!--{$path_url}-->/calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="<!--{$path_url}-->/calendar/ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<!--{$path_url}-->/calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="<!--{$path_url}-->/calendar/ui/ui.dialog.js"></script>
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <!--{insert name="HearderCat" cid=$smarty.request.cat1 act=$smarty.request.do root=1}-->
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					<a href="<!--{$path_url}-->/khach-hang/<!--{$smarty.request.cat1}-->/0/">Nhà cung cấp</a> 
				</span>
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					<!--{$smarty.request.cat3}-->
				</span>
            </div>
            <div class="Clear"></div>
       	</div>
     <form name="allsubmit" id="frmEdit" action="<!--{$path_url}-->/khach-hang/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/<!--{if $smarty.request.cat3 eq 'add'}-->addsm<!--{else}-->editsm<!--{/if}-->/" method="post" enctype="multipart/form-data">
		<div class="FormBox">
        	<div class="SubBox">
                <span class="titleFr ng-binding">Tên</span>
                <input type="text" class="FrText" name="name" id="name" value="<!--{$edit.name}-->" />
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Điện thoại</span>
                <input type="text" class="FrText" name="phone" id="phone" value="<!--{$edit.phone}-->" />
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Email</span>
                <input type="text" class="FrText" name="email" id="email" value="<!--{$edit.email}-->" />
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Địa chỉ</span>
                <textarea class="FrText TextareaHeight" id="address" name="address"><!--{$edit.address}--></textarea>
             </div>
             
             <div class="BtSummit">
             	<input type="hidden" id="id" name="id" value="<!--{$edit.id}-->" />
             	<a title="Lưu" class="kv2Btn kvsaveBtn" href="javascript:void(0)" onclick="return SubmitFrom();">
                	<i class="fa fa-floppy-o"></i> Lưu 
            	</a>
                
                <a title="Bỏ qua" class="kv2Btn kvsaveBtn" href="javascript:void(0)" onclick="Reset();">
                	<i class="fa fa-ban"></i> Bỏ qua 
            	</a>
            </div> 
       	</div>
    </form>   
    </div>
    <!--{include file="./left.tpl"}-->
</div>

<script language="javascript">
	
	function Reset(){
		$("#name").val('');
		$("#phone").val('');
		$("#email").val('');
		$("#address").val('');
	}
	function SubmitFrom(){
		var name = $("#name");
		var email = $("#email");
		var r = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(name.val().length == ''){
			alert('Vui lòng nhập vào tên khách hàng.');
			name.focus();
			return false;
		}
		else if(email.val().length != '' && r.test(email.val())==false){
			alert('Địa chỉ email không đúng định dạng.');
			email.focus();
			return false;
		}
		else{
			var id = $("#id").val();
			jQuery.post('<!--{$path_url}-->/ajax/Checkip.php',{name:name.val(),act:'checkkhachhang',id:id},function(data) {																				
				 var obj = jQuery.parseJSON(data);
				 if(obj.status != ''){
					 alert(obj.status);
					 name.focus();
					 return false;
				 }
				 else{
				 	document.allsubmit.submit(); 
				 } 
			});
		}
	}
</script> 

