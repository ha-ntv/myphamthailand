<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <!--{insert name="HearderCat" cid=$smarty.request.cat1 act=$smarty.request.do root=1}-->
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                <span class="subconten">		
					Edit Phiếu nhập hàng
				</span>
            </div>
            <div class="Clear"></div>
       	</div>
     <form name="allsubmit" id="frmEdit" action="<!--{$path_url}-->/phieu-nhap-hang/<!--{$smarty.request.cat1}-->/editsm/" method="post" enctype="multipart/form-data">
		<div class="FormBox">
        	 <div class="SubBox" id="showcid">
                <span class="titleFr ng-binding">Danh mục SP</span>
                <select disabled="disabled" id="cidphieu" name="cidphieu">
                    <option value="0">----Chọn Danh mục sản phẩm----</option>
                    <!--{section name=i loop=$catPr}-->
                        <option <!--{if $catPr[i].id eq $edit.cidphieu}-->selected="selected"<!--{/if}--> value="<!--{$catPr[i].id}-->"><!--{$catPr[i].name_vn}--></option>
                    <!--{/section}-->    
                </select>
                <script>
					function loadpr(cid){
						var idprphieu =  <!--{$edit.idprphieu}-->
						$.post('<!--{$path_url}-->/ajax/product.php',{type:'editpr',cid:cid,idprphieu:idprphieu},function(data) {
						 var obj = jQuery.parseJSON(data);
						 jQuery('#showidpr').html(obj.status);
							 
						});
						return false;
					}
					$(document).ready(function() {
						loadpr(<!--{$edit.cidphieu}-->)
					});
				</script>
             </div>
             <div class="SubBox" id="showidpr"></div>
             <div class="SubBox">
                <span class="titleFr ng-binding">Ngày nhập</span>
                <input type="text" class="FrText" name="datedphieu" id="datedphieu" readonly="readonly" value="<!--{$edit.datedphieu}-->"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Nhà cung cấp</span>
                <select id="idpartnerphieu" name="idpartnerphieu">
                    <option value="0">----Chọn đối tác----</option>
                    <!--{section name=i loop=$partnerList}-->
                        <option <!--{if $partnerList[i].id eq $edit.idpartnerphieu}-->selected="selected"<!--{/if}--> value="<!--{$partnerList[i].id}-->"><!--{$partnerList[i].name}--></option>
                    <!--{/section}-->    
                </select>
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
		var cidphieu = $("#cidphieu");
		var idprphieu = $("#idprphieu");
		
		if(cidphieu.val() <= 0){
			alert('Vui lòng chọn danh mục sản phẩm.');
			return false;
		}
		else if(idprphieu.val() <= 0 ){
			alert('Vui lòng chọn Sản phẩm.');
			return false;
		}
		
		else{
			document.allsubmit.submit();
		}
	}	
	$(document).ready(function(){	
		$("#datedphieu").datepicker({dateFormat:"yy-mm-dd"});
	});
</script>