<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
               <!--{insert name="HearderCat" cid=2 act=$smarty.request.do root=1}-->
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">
                	<a href="<!--{$path_url}-->/phieu-nhap-hang/<!--{$smarty.request.cat1}-->/view-dt/">		
						Phiếu nhập hàng
                    </a>
				</span>
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					Edit 
				</span>
            </div>
            <div class="Clear"></div>
       	</div>
     <form name="allsubmit" id="frmEdit" action="<!--{$path_url}-->/phieu-nhap-hang/<!--{$smarty.request.cat1}-->/editphieusm/" method="post" enctype="multipart/form-data">
		<div class="FormBox">
        	 <div class="SubBox" id="showcid">
                <span class="titleFr ng-binding">Danh mục SP</span>
                <select id="cidphieu" name="cidphieu" onchange="loadpr(this.value)">
                    <option value="0">----Chọn Danh mục sản phẩm----</option>
                    <!--{section name=i loop=$catPr}-->
                        <option <!--{if $catPr[i].id eq $edit.cid}-->selected="selected"<!--{/if}--> value="<!--{$catPr[i].id}-->"><!--{$catPr[i].name_vn}--></option>
                    <!--{/section}-->    
                </select>
                <script>
					function loadpr(cid){
						var idprphieu =  <!--{$edit.idpr}-->
						$.post('<!--{$path_url}-->/ajax/product.php',{type:'editpr',cid:cid,idprphieu:idprphieu},function(data) {
						 var obj = jQuery.parseJSON(data);
						 jQuery('#showidpr').html(obj.status);
							 
						});
						return false;
					}
					$(document).ready(function() {
						loadpr(<!--{$edit.cid}-->)
					});
				</script>
             </div>
             <div class="SubBox" id="showidpr"></div>
              <div class="SubBox">
                <span class="titleFr ng-binding">Số Serial</span>
                <input type="text" class="FrText" name="code" id="code" value="<!--{$edit.code}-->" />
             </div>
             <div class="SubBox">
                <span class="titleFr ng-binding">Ngày nhập</span>
                <input type="text" class="FrText" name="dated" id="dated" readonly="readonly" value="<!--{$edit.dated}-->"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Giá nhập</span>
                <input type="text" class="FrText autoNumeric" name="pricenhap" id="pricenhap" value="<!--{$edit.pricenhap}-->"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Nhà cung cấp</span>
                <select id="idpartner" name="idpartner">
                    <option value="0">----Chọn đối tác----</option>
                    <!--{section name=i loop=$partnerList}-->
                        <option <!--{if $partnerList[i].id eq $edit.idpartner}-->selected="selected"<!--{/if}--> value="<!--{$partnerList[i].id}-->"><!--{$partnerList[i].name}--></option>
                    <!--{/section}-->    
                </select>
             </div>

             <div class="BtSummit">
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
			jQuery.post('<!--{$path_url}-->/ajax/Checkip.php',{code:code.val(),act:'checkSerial',id:<!--{$edit.id}-->},function(data) {																				
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