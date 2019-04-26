<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <!--{insert name="HearderCat" cid=$smarty.request.cat1 act=$smarty.request.do root=1}-->
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">
                	<a href="<!--{$path_url}-->/phieu-nhap-hang/">		
						Phiếu nhập hàng
                    </a>
				</span>
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					Thêm
				</span>
            </div>
            <div class="Clear"></div>
       	</div>
<form name="allsubmit" id="frmEdit" action="<!--{$path_url}-->/phieu-nhap-hang/<!--{$smarty.request.cat1}-->/<!--{$editadd}-->/" method="post" enctype="multipart/form-data">     
		<div class="FormBox">
        	<div class="SubBox" style=" color:#d64457; text-align:center; font-size:1.6em;">Phiếu Nhập Hàng</div>
        <span  id="addnew1">    
        	<div class="SubBox">
                <span class="titleFr ng-binding">Danh mục SP</span>
                <select id="cidphieu" name="cidphieu" onchange="loadpr(this.value)">
                    <option value="0">----Chọn Danh mục sản phẩm----</option>
                    <!--{section name=i loop=$catPr}-->
                        <option value="<!--{$catPr[i].id}-->"><!--{$catPr[i].name_vn}--></option>
                    <!--{/section}-->    
                </select>
                <script>
					function loadpr(cid,num){
						jQuery.post('<!--{$path_url}-->/ajax/product.php',{cid:cid,type:'addpr',num:num},function(data) {
						 var obj = jQuery.parseJSON(data);
						 if(num > 0)
						 	jQuery('#showidpr'+num).html(obj.status);
						  else
						  	jQuery('#showidpr').html(obj.status);
							 
						});
						return false;
					}
				</script>
             </div>
            <div class="SubBox" id="showidpr"></div>       	
            <div class="SubBox">
                <span class="titleFr ng-binding">Số Serial</span>
                <input type="text" class="FrText" name="code" id="code" />
             </div>
             
            <div class="SubBox">
                <span class="titleFr ng-binding">Ngày nhập</span>
                <input type="text" class="FrText" name="dated" id="dated" value="<!--{$viewphieu.datedphieu}-->" readonly="readonly"/>
             </div>
             
            <div class="SubBox">
                <span class="titleFr ng-binding">Giá nhập</span>
                <input type="text" class="FrText autoNumeric" name="pricenhap" id="pricenhap"/>
             </div>
             
            <div class="SubBox">
                <span class="titleFr ng-binding">Nhà cung cấp</span>
                <select id="idpartner" name="idpartner">
                    <option value="0">----Chọn đối tác----</option>
                    <!--{section name=i loop=$partnerList}-->
                        <option value="<!--{$partnerList[i].id}-->"><!--{$partnerList[i].name}--></option>
                    <!--{/section}-->    
                </select>
             </div>
         </span>
             
             <div class="BtSummit">
             	<a title="Lưu" class="kv2Btn kvsaveBtn" href="javascript:void(0)" onclick="return SubmitFrom();">
                	<i class="fa fa-floppy-o"></i> Lưu 
            	</a>
                
                <a title="Lưu" class="kv2Btn kvsaveBtn" href="javascript:void(0)" onclick="Reset();">
                	<i class="fa fa-ban"></i> Bỏ qua 
            	</a>
                
                <a title="Thêm" class="kv2Btn kvsaveAdd" href="javascript:void(0)" onclick="addname_vn('answerTab1')" >
                	<i class="fa fa-plus"></i>
                </a>
                <input type="hidden" name='viewmaphieu' id='viewmaphieu' value="<!--{$viewphieu.maphieu}-->" />
                <input type="hidden" name='numname_vn' id='numname_vn' value="1" />
            </div> 
       	</div>
</form>    
    </div>
    <!--{include file="./left.tpl"}-->
</div>

<script language="javascript">
	function addname_vn(){
		var numname_vn = $("#numname_vn").val();
		numname_vn = parseInt(numname_vn) + 1;
		$("#numname_vn").val(numname_vn);
		jQuery.post('<!--{$path_url}-->/ajax/Checkip.php',{numname:numname_vn,act:'addSeriaPhieuNhap'},function(data) {																				
			 var obj = jQuery.parseJSON(data);
			 $("#addnew1").append(obj.status);
		});	
	}
	function deletename_vn(a){
		$("#"+a).hide(1200);
	}
</script> 

<script language="javascript">
	function Reset(){
		$("#cidphieu").val('');
		$("#idprphieu").val('');
		$("#dated").val('');
		$("#idpartnerphieu").val('');
		$("#code").val('');
		$("#dated").val('');
		$("#pricenhap").val('');
		$("#idpartner").val('');
	}
	function SubmitFrom(){
		var cidphieu = $("#cidphieu");
		var idprphieu = $("#idprphieu");
		var code = $("#code");
		var dated = $("#dated");
		var pricenhap = $("#pricenhap");
		var idpartner = $("#idpartner");
		if(cidphieu.val() <= 0){
			alert('Vui lòng chọn danh mục sản phẩm.');
			return false;
		}
		else if(code.val().length == ''){
			alert('Vui lòng nhập vào số Seria.');
			code.focus();
			return false;
		}
		else if(dated.val().length == ''){
			alert('Vui lòng chọn ngày  phiếu nhập hàng.');
			datedphieu.focus();
			return false;
		}
		else if(pricenhap.val().length == ''){
			alert('Vui lòng nhập vào giá nhập hàng.');
			pricenhap.focus();
			return false;
		}
		else if(idpartner.val() == 0){
			alert('Vui lòng chọn nhà cung cấp.');
			idpartner.focus();
			return false;
		}
		else{
			jQuery.post('<!--{$path_url}-->/ajax/Checkip.php',{code:code.val(),act:'checkSerial'},function(data) {																				
				 var obj = jQuery.parseJSON(data);
				 if(obj.status != ''){
					 alert(obj.status);
					 code.focus();
					 return false;
				 }
				 else{
				 	document.allsubmit.submit(); 
				 } 
			});
		}
	}	
	$(document).ready(function(){	
		$("#datedphieu").datepicker({dateFormat:"yy-mm-dd"});
		$("#dated").datepicker({dateFormat:"yy-mm-dd"});
	});
</script> 

<script type="text/javascript" src="<!--{$path_url}-->/js/autoNumeric.js"></script>
<script>
	function formatNumber (num) {
		return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
	}
	$('.autoNumeric').autoNumeric('init', {aSep: '.', aDec: 'none'});
</script>