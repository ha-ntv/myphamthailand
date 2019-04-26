<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <!--{insert name="HearderCat" cid=$smarty.request.cat1 act=$smarty.request.do root=1}-->
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					<a href="<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/<!--{$smarty.request.cat5}-->/"><!--{$namePr.name_vn}--></a> 
				</span>
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					<!--{if $smarty.request.cat3 neq 'view'}-->Edit Serial<!--{else}-->View Serial<!--{/if}--> 
				</span>
            </div>
            <div class="Clear"></div>
       	</div>
     <form name="allsubmit" id="frmEdit" action="<!--{$path_url}-->/serial/<!--{$smarty.request.cat1}-->/<!--{$smarty.request.cat2}-->/editsm/<!--{$smarty.request.cat5}-->/" method="post" enctype="multipart/form-data">
		<div class="FormBox">
        	<div class="SubBox">
                <span class="titleFr ng-binding">Danh mục SP</span>
                <select id="cidphieu" name="cidphieu" onchange="loadpr(this.value)">
                    <option value="0">----Chọn Danh mục sản phẩm----</option>
                    <!--{section name=i loop=$catPr}-->
                        <option <!--{if $edit.cid eq $catPr[i].id}-->selected="selected"<!--{/if}--> value="<!--{$catPr[i].id}-->"><!--{$catPr[i].name_vn}--></option>
                    <!--{/section}-->    
                </select>
                <script>
					loadpr(<!--{$edit.cid}-->,<!--{$edit.idpr}-->)
					function loadpr(cid,idprphieu){
						$.post('<!--{$path_url}-->/ajax/product.php',{cid:cid,type:'editpr',idprphieu:idprphieu},function(data) {
						 	var obj = jQuery.parseJSON(data);
							jQuery('#showidpr').html(obj.status);
							 
						});
						return false;
					}
				</script>
             </div>
            <div class="SubBox" id="showidpr"></div>       	
            
        	<div class="SubBox">
                <span class="titleFr ng-binding">Số Serial</span>
                <input type="text" class="FrText" name="code" id="code" value="<!--{$edit.code}-->" />
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Ngày nhập</span>
                <input type="text" class="FrText" name="dated" id="dated" readonly="readonly" value="<!--{$edit.dated}-->" />
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Giá nhập</span>
                <input type="text" class="FrText autoNumeric" name="pricenhap" id="pricenhap" value="<!--{$edit.pricenhap}-->" />
             </div>
             <div class="SubBox">
                <span class="titleFr ng-binding">Nhà cung cấp</span>
                <select name="idpartner" id="idpartner">
                    <option value="0">----Chọn đối tác----</option>
                    <!--{section name=i loop=$partnerList}-->
                        <option <!--{if $partnerList[i].id eq $edit.idpartner}-->selected="selected"<!--{/if}--> value="<!--{$partnerList[i].id}-->"><!--{$partnerList[i].name}--></option>
                    <!--{/section}-->    
                </select>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Bảo hành</span>
                <select name="baohanh" id="baohanh">
                     <!--{section name=i loop=$baohanh}-->
                        <option <!--{if $baohanh[i].id eq $edit.baohanh}-->selected="selected"<!--{/if}--> value="<!--{$baohanh[i].id}-->"><!--{$baohanh[i].name}--></option>
                    <!--{/section}-->
                </select>
             </div>
             <div class="SubBox">
                <span class="titleFr ng-binding Fl">ND Bảo hành</span>
                <textarea name="content_baohanh" class="FrText TextareaHeight"><!--{$edit.content_baohanh}--></textarea>
             </div>
             <!--{if $smarty.request.cat3 neq 'view'}-->
                 <div class="BtSummit">
                    <input type="hidden" name="id" value="<!--{$edit.id}-->" />
                    <input type="hidden" name='maphieu' id='maphieu' value="<!--{$smarty.request.cat5}-->" />
                    <a title="Lưu" class="kv2Btn kvsaveBtn" href="javascript:void(0)" onclick="return SubmitFrom();">
                        <i class="fa fa-floppy-o"></i> Lưu 
                    </a>
                    
                    <a title="Bỏ qua" class="kv2Btn kvsaveBtn" href="javascript:void(0)" onclick="Reset();">
                        <i class="fa fa-ban"></i> Bỏ qua 
                    </a>
                </div>
            <!--{/if}--> 
       	</div>
    </form>   
    </div>
    <!--{include file="./left.tpl"}-->
</div>

<script type="text/javascript" src="<!--{$path_url}-->/js/autoNumeric.js"></script>
<script>
	function formatNumber (num) {
		return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
	}
	$('.autoNumeric').autoNumeric('init', {aSep: '.', aDec: 'none'});
</script>

<script language="javascript">
	$(document).ready(function(){
		$("#dated").datepicker({dateFormat:"yy-mm-dd"});
	});
	
	function Reset(){
		location.reload();
	}
	function SubmitFrom(){
		var code = $("#code");
		var pricenhap = $("#pricenhap");
		var idpartner = $("#idpartner");
		if(code.val().length == ''){
			alert('Vui lòng nhập vào số Serial.');
			code.focus();
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
			var id = <!--{$edit.id}-->;
			jQuery.post('<!--{$path_url}-->/ajax/Checkip.php',{code:code.val(),act:'checkSerial',id:id},function(data) {																				
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
</script> 

