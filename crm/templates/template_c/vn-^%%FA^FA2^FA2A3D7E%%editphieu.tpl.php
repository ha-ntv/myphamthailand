<?php /* Smarty version 2.6.6, created on 2016-01-30 10:30:30
         compiled from phieu-nhap-hang/editphieu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'HearderCat', 'phieu-nhap-hang/editphieu.tpl', 5, false),)), $this); ?>
<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
               <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'HearderCat', 'cid' => 2, 'act' => $_REQUEST['do'], 'root' => 1)), $this); ?>

                <span class="subconten"><img style="margin-top:9px" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon.gif"></span>
                <span class="subconten">
                	<a href="<?php echo $this->_tpl_vars['path_url']; ?>
/phieu-nhap-hang/<?php echo $_REQUEST['cat1']; ?>
/view-dt/">		
						Phiếu nhập hàng
                    </a>
				</span>
                <span class="subconten"><img style="margin-top:9px" src="<?php echo $this->_tpl_vars['path_url']; ?>
/images/icon.gif"></span>
                <span class="subconten">		
					Edit 
				</span>
            </div>
            <div class="Clear"></div>
       	</div>
     <form name="allsubmit" id="frmEdit" action="<?php echo $this->_tpl_vars['path_url']; ?>
/phieu-nhap-hang/<?php echo $_REQUEST['cat1']; ?>
/editphieusm/" method="post" enctype="multipart/form-data">
		<div class="FormBox">
        	 <div class="SubBox" id="showcid">
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
                        <option <?php if ($this->_tpl_vars['catPr'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['edit']['cid']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['catPr'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['catPr'][$this->_sections['i']['index']]['name_vn']; ?>
</option>
                    <?php endfor; endif; ?>    
                </select>
                <script>
					function loadpr(cid){
						var idprphieu =  <?php echo $this->_tpl_vars['edit']['idpr']; ?>

						$.post('<?php echo $this->_tpl_vars['path_url']; ?>
/ajax/product.php',{type:'editpr',cid:cid,idprphieu:idprphieu},function(data) {
						 var obj = jQuery.parseJSON(data);
						 jQuery('#showidpr').html(obj.status);
							 
						});
						return false;
					}
					$(document).ready(function() {
						loadpr(<?php echo $this->_tpl_vars['edit']['cid']; ?>
)
					});
				</script>
             </div>
             <div class="SubBox" id="showidpr"></div>
              <div class="SubBox">
                <span class="titleFr ng-binding">Số Serial</span>
                <input type="text" class="FrText" name="code" id="code" value="<?php echo $this->_tpl_vars['edit']['code']; ?>
" />
             </div>
             <div class="SubBox">
                <span class="titleFr ng-binding">Ngày nhập</span>
                <input type="text" class="FrText" name="dated" id="dated" readonly="readonly" value="<?php echo $this->_tpl_vars['edit']['dated']; ?>
"/>
             </div>
             
             <div class="SubBox">
                <span class="titleFr ng-binding">Giá nhập</span>
                <input type="text" class="FrText autoNumeric" name="pricenhap" id="pricenhap" value="<?php echo $this->_tpl_vars['edit']['pricenhap']; ?>
"/>
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
                        <option <?php if ($this->_tpl_vars['partnerList'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['edit']['idpartner']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['partnerList'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['partnerList'][$this->_sections['i']['index']]['name']; ?>
</option>
                    <?php endfor; endif; ?>    
                </select>
             </div>

             <div class="BtSummit">
                <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['edit']['id']; ?>
" />
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
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
			jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/ajax/Checkip.php',{code:code.val(),act:'checkSerial',id:<?php echo $this->_tpl_vars['edit']['id']; ?>
},function(data) {																				
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