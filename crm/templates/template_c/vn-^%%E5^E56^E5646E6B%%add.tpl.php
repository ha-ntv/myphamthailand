<?php /* Smarty version 2.6.6, created on 2016-02-25 10:43:11
         compiled from phieu-nhap-hang/add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'phieu-nhap-hang/add.tpl', 5, false),)), $this); ?>
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'HearderCat', 'cid' => $_REQUEST['cat1'], 'act' => $_REQUEST['do'], 'root' => 1)), $this); ?>

                <span class="subconten"><img style="margin-top:9px" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon.gif"></span>
                <span class="subconten">
                	<a href="<?php echo $this->_tpl_vars['path_url']; ?>
/phieu-nhap-hang/">		
						Phiếu nhập hàng
                    </a>
				</span>
                <span class="subconten"><img style="margin-top:9px" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon.gif"></span>
                <span class="subconten">		
					Thêm
				</span>
            </div>
            <div class="Clear"></div>
       	</div>
<form name="allsubmit" id="frmEdit" action="<?php echo $this->_tpl_vars['path_url']; ?>
/phieu-nhap-hang/<?php echo $_REQUEST['cat1']; ?>
/<?php echo $this->_tpl_vars['editadd']; ?>
/" method="post" enctype="multipart/form-data">     
		<div class="FormBox">
        	<div class="SubBox" style=" color:#d64457; text-align:center; font-size:1.6em;">Phiếu Nhập Hàng</div>
        <span  id="addnew1">    
        	<div class="SubBox">
                <span class="titleFr ng-binding">Danh mục SP</span>
                <select id="cidphieu" name="cidphieu" onchange="loadpr(this.value)">
                    <option value="0">----Chọn Danh mục sản phẩm----</option>
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['catPr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                        <option value="<?php echo $this->_tpl_vars['catPr'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['catPr'][$this->_sections['i']['index']]['name_vn']; ?>
</option>
                    <?php endfor; endif; ?>    
                </select>
                <script>
					function loadpr(cid,num){
						jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/ajax/product.php',{cid:cid,type:'addpr',num:num},function(data) {
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
                <input type="text" class="FrText" name="dated" id="dated" value="<?php echo $this->_tpl_vars['viewphieu']['datedphieu']; ?>
" readonly="readonly"/>
             </div>
             
            <div class="SubBox">
                <span class="titleFr ng-binding">Giá nhập</span>
                <input type="text" class="FrText autoNumeric" name="pricenhap" id="pricenhap"/>
             </div>
             
            <div class="SubBox">
                <span class="titleFr ng-binding">Nhà cung cấp</span>
                <select id="idpartner" name="idpartner">
                    <option value="0">----Chọn đối tác----</option>
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['partnerList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                        <option value="<?php echo $this->_tpl_vars['partnerList'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['partnerList'][$this->_sections['i']['index']]['name']; ?>
</option>
                    <?php endfor; endif; ?>    
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
                <input type="hidden" name='viewmaphieu' id='viewmaphieu' value="<?php echo $this->_tpl_vars['viewphieu']['maphieu']; ?>
" />
                <input type="hidden" name='numname_vn' id='numname_vn' value="1" />
            </div> 
       	</div>
</form>    
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<script language="javascript">
	function addname_vn(){
		var numname_vn = $("#numname_vn").val();
		numname_vn = parseInt(numname_vn) + 1;
		$("#numname_vn").val(numname_vn);
		jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/ajax/Checkip.php',{numname:numname_vn,act:'addSeriaPhieuNhap'},function(data) {																				
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
			jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/ajax/Checkip.php',{code:code.val(),act:'checkSerial'},function(data) {																				
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

<script type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/js/autoNumeric.js"></script>
<script>
	function formatNumber (num) {
		return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
	}
	$('.autoNumeric').autoNumeric('init', {aSep: '.', aDec: 'none'});
</script>