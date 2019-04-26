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
					Edit 
				</span>
            </div>
            <div class="Clear"></div>
       	</div>
     <form name="allsubmit" id="frm" action="<!--{$path_url}-->/users/<!--{if $smarty.request.cat1 eq 'add' }-->addsm<!--{else}-->editsm<!--{/if}-->/" method="post" enctype="multipart/form-data">
		<div class="FormBox">
        	<div class="SubBox">
                <span class="titleFr ng-binding">Địa điểm</span>
                <select name="city" id="city"  style="width:150px; height:24px">
                    <!--{section name=i loop=$cityHome}-->
                        <option <!--{if $edit.idcity eq $cityHome[i].id}-->selected<!--{/if}--> value="<!--{$cityHome[i].id}-->"> 
                            <!--{$cityHome[i].name}--> 
                        </option>   
                    <!--{/section}-->
                </select>
             </div>
             
        	 <div class="SubBox">
                <span class="titleFr ng-binding">Full name</span>
                <input type="text" class="FrText" name="name" value="<!--{$edit.name}-->"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Username</span>
                <input type="text" class="FrText" name="username" value="<!--{$edit.username}-->"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Password</span>
                <input type="password" class="FrText" name="password"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Cfirm Password</span>
                <input type="password" class="FrText" name="password_conf"/>
             </div>

             <div class="BtSummit">
                <input type="hidden" name="viewmaphieu" value="<!--{$edit.maphieu}-->" />
                <input type="hidden" name="id" value="<!--{$edit.id}-->" />
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
		location.reload();
	}
	
	function SubmitFrom(){
		var username = document.allsubmit.username;
		var name = document.allsubmit.name;
		var password = document.allsubmit.password;
		var password_conf = document.allsubmit.password_conf;
		if(name.value.length == ""){
			alert('Vui lòng nhập họ và tên.');
			name.focus();
			return false;
		}
		else if(username.value.length == ""){
			alert('Vui lòng nhập username.');
			username.focus();
			return false;
		}
		<!--{if $edit.id neq ''}-->
			else if( (password.value.length != "") && (document.allsubmit.password.value != document.allsubmit.password_conf.value) ){
					alert('Mật khẩu nhập lại không đúng.');
					return false;
			}	
		<!--{else}-->
			else if(password.value.length == ""){
				alert('Vui lòng nhập mật khẩu.');
				password.focus();
				return false;
			}
			
			else if(document.allsubmit.password.value != document.allsubmit.password_conf.value){
				alert('Mật khẩu nhập lại không đúng.');
				password_conf.focus();
				return false;
			}
		<!--{/if}-->
		else{
			<!--{if $edit.id eq ''}-->
			jQuery.post('<!--{$path_url}-->/ajax/member.php',{username:username.value,type:'addmember'},function(data) {
			<!--{else}-->
			jQuery.post('<!--{$path_url}-->/ajax/member.php',{username:username.value,type:'addmember',id:<!--{$edit.id}-->},function(data) {
			<!--{/if}-->
				var obj = jQuery.parseJSON(data);
				 if(obj.status != ''){ //loi 
					 alert(obj.status);
					 return false;
				 }
				 else{
					document.allsubmit.submit();
				 }
			});	
		}
	}
</script>