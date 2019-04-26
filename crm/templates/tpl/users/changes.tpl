<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
            	<span class="subconten">
                	<a title="Danh mục" href="<!--{$path_url}-->/users/">		
                        Quảng lý người dùng 
                    </a>
                	
                </span>
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					Thay đổi mật khẩu
				</span>
            </div>
            <div class="Clear"></div>
       	</div>
     <form name="allsubmit" id="frm" action="" method="post" enctype="multipart/form-data">
		<div class="FormBox">
        	 
             <div class="SubBox">
                <span class="titleFr ng-binding">Password old</span>
                <input type="password" class="FrText" name="pwold"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Password new</span>
                <input type="password" class="FrText" name="password"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Cfirm Password</span>
                <input type="password" class="FrText" name="password_conf"/>
             </div>

             <div class="BtSummit">
                <input type="hidden" name="viewmaphieu" value="<!--{$edit.maphieu}-->" />
                <input type="hidden" name="id" value="<!--{$edit.id}-->" />
                <a title="Lưu" class="kv2Btn kvsaveBtn" href="javascript:void(0)" onclick="return CheckPass();">
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
		location.reload();
	}
	
	function CheckPass(){
		var pwold = document.allsubmit.pwold;
		var password = document.allsubmit.password;
		if(pwold.value.length == ""){
			alert('Vui lòng nhập vào mật khẩu cũ.');
			pwold.focus();
			return false;
		}
		else if(password.value.length == ""){
			alert('Vui long nhập vào mật khẩu mới.');
			password.focus();
			return false;
		}
		
		else if(document.allsubmit.password.value != document.allsubmit.password_conf.value){
			alert('Mật khẩu nhập lại không đúng.');
			return false;
		}
		else{
			var pwold = pwold.value;
			jQuery.post('<!--{$path_url}-->/ajax/member.php',{pwold:pwold,type:'changes'},function(data) {
				var obj = jQuery.parseJSON(data);
				 if(obj.status != ''){ //loi 
					 alert(obj.status);
					 return false;
				 }
				 else{
					alert('Thay đổi mật khẩu thành công.');
					document.allsubmit.submit();
				 }
			});	
		}
		
	}
</script>