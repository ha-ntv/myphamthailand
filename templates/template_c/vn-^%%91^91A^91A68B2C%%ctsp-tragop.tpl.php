<?php /* Smarty version 2.6.6, created on 2017-06-27 09:56:39
         compiled from tragop/ctsp-tragop.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getChedobaohanh', 'tragop/ctsp-tragop.tpl', 66, false),array('insert', 'getPhuKienGiamGia', 'tragop/ctsp-tragop.tpl', 289, false),array('modifier', 'number_format', 'tragop/ctsp-tragop.tpl', 166, false),)), $this); ?>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">		
                <div class="breadcrumb">
                    <div class="breadcrumb flever_12">
                        <a href="<?php echo $this->_tpl_vars['path_url']; ?>
" title="Trang chủ">Trang chủ</a>
                    </div>
              
                    <div class="breadcrumbs_sepa">&gt;</div>
                    <div class="breadcrumb">
                        <span><?php echo $this->_tpl_vars['seo'][$this->_tpl_vars['name']]; ?>
</span>
                    </div> 					
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['path_url']; ?>
/css/ctspTraGop.css" />
<div class="container mt20">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">
        <form id="eshopcart_info" name="postbuy" action="<?php echo $this->_tpl_vars['path_url']; ?>
/gio-hang/thanh-toan/" method="post">        	
			<div class="product_instalment">
            
                <table width="100%" cellpadding="0" border="0" class="table-instalment-pack mt20">
                	
                    <thead>
                        <tr> 
                            <td align="left" colspan="2">
                            	<h1 class="tragop"><?php echo $this->_tpl_vars['view'][$this->_tpl_vars['name']]; ?>
</h1>
                            </td>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr> 
                            <td align="center" colspan="2">
                            	<span class="LabelTraGopCtsp colors1">
                                	Không thế chấp tài sản
                                </span>
                                <span class="LabelTraGopCtsp colors2">
                                	Không chứng minh thu nhập
                                </span>
                                <span class="LabelTraGopCtsp colors3">
                                	Không công chứng giấy tờ
                                </span>
                            </td>
                        </tr>
                    </tbody>
                    
                    <tbody>
                        <tr>
                        	<td valign="top" colspan="2"> 
                                <div class="TragopProductsctL">
                                    <div class="content">
                                        <div id="product-content">
                                            <div class="product-img-tragop">
                                                <img class="img-responsive" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view']['img_vn']; ?>
" >
                                            </div>
                                            <div class="descriptiontgctsp">
                                                <label class="color">Khuyến mãi ưu đãi:</label><br>
                                                <?php if ($this->_tpl_vars['view']['typeiphone'] > 0): ?>
                                                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getChedobaohanh', 'cid' => $this->_tpl_vars['view']['typeiphone'])), $this); ?>
	
                                                <?php else: ?>
                                                    <?php if ($_SESSION['showCity'] == 1): ?>
                                                        <?php echo $this->_tpl_vars['view']['promotion_vn']; ?>

                                                     <?php else: ?>
                                                        <?php echo $this->_tpl_vars['view']['promotion_en']; ?>

                                                    <?php endif; ?>    
                                                <?php endif; ?>			
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="TragopProductsctR">
                                    <div class="content">
                                    	<input type="hidden" id="idbonho" />
                                    	<input type="hidden" value="<?php echo $this->_tpl_vars['priceBonho']; ?>
"  name="priceBonho" id="priceBonho" />
                                        <input type="hidden" name="idcolorsize" id="idcolorsize" value="<?php echo $this->_tpl_vars['viewcolorpr']['idcolorsize']; ?>
" />
                                        <input type="hidden" name="idcolor" id="idcolor" value="<?php echo $this->_tpl_vars['viewcolorpr']['idcolor']; ?>
" />
                                        <input type="hidden" value="<?php echo $this->_tpl_vars['priceshow']; ?>
" id="pricepr" />
                                        <input type="hidden" name="priceTotal" value="<?php echo $this->_tpl_vars['priceshow']; ?>
" id="priceTotal" />
                                        <input type="hidden" name="showTratruocInput" id="showTratruocInput" />
                                        <input type="hidden" name="showGopMoiThangInput" id="showGopMoiThangInput" />
                                        <input type="hidden" name="tragop" id="tragop" value="tragop" />
                                        <input type="hidden" name="idpr" id="idpr" value="<?php echo $this->_tpl_vars['view']['idsp']; ?>
" />
                                        <input type="hidden" name="banking" id="banking" value=""  />
                                        <!--
                                        <div class="tragop-right">
                                        	{insert name="tinhtranghang" active=$view.typepr assign="tinhtrang"}
                                        	<label>Trạng thái</label>:
                                            <strong><span class="status">{if $tinhtrang eq ''}CÒN HÀNG{else}{$tinhtrang}{/if}</span></strong>
                                        </div>
                                        -->
                                         <div class="tragop-right">
                                         	<p><strong class="color">Sản Phẩm Chuẩn Bao Gồm Đầy Đủ Phụ Kiện:</strong></p>
                                            <?php if ($this->_tpl_vars['view']['typebspchuan'] > 0): ?>
                                                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getChedobaohanh', 'cid' => $this->_tpl_vars['view']['typebspchuan'])), $this); ?>
	
                                            <?php else: ?>
                                                <?php if ($_SESSION['showCity'] == 1): ?>
                                                    <?php echo $this->_tpl_vars['view']['bosanphamchuan_vn']; ?>

                                                 <?php else: ?>
                                                    <?php echo $this->_tpl_vars['view']['bosanphamchuan_en']; ?>

                                                <?php endif; ?>    
                                                
                                            <?php endif; ?>
                                            
                                        </div>
                                        <?php if ($this->_tpl_vars['checkBonho'] == 1): ?>
                                        <div class="tragop-right all-bonho">
                                        	<label>Chọn bộ nhớ</label>:
                                            <select name="idbonho" onchange="priceBonhoLoad(this.value,<?php echo $this->_tpl_vars['view']['idsp']; ?>
)">	
                                                 <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['bonho']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                    <option class="option" value="<?php echo $this->_tpl_vars['bonho'][$this->_sections['i']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['idbonho'] == $this->_tpl_vars['bonho'][$this->_sections['i']['index']]['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['bonho'][$this->_sections['i']['index']]['name_vn']; ?>
</option>
                                                 <?php endfor; endif; ?>
                                            </select> 
                                            
                                             <script>
												function priceBonhoLoad(idbonho,idpr){
													$.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/getPage.php',{idbonho:idbonho,idpr:idpr,type:'priceBonho'},function(data) {
														 var obj = jQuery.parseJSON(data);
														 $('#pricepr').val(obj.priceBonho);
														 $('#idbonho').val(idbonho); 
														 $('#nameBonho').html(obj.nameBonho);
														 $('#priceBonho').val(obj.priceBonho);
														 $('#priceTotal').val(obj.priceBonho); 
														 $('#showcolor').html(obj.color);
														 getCountPercent();
													});
													return false;
												}
											</script>
                                        </div>
                                        <?php endif; ?>
                                        <?php if ($this->_tpl_vars['view']['luuysanpham_vn'] != ''): ?>
                                            <div class="all-bonho chuysanpham">
                                                <strong>Lưu ý: </strong><?php echo $this->_tpl_vars['view']['luuysanpham_vn']; ?>

                                            </div>
                                        <?php endif; ?>
                                        <span id="showcolor"><?php echo $this->_tpl_vars['showcolor']; ?>
</span>
										<script>
                                        	function priceColor(idcolorsize,idcolor){
												$('.tootip_price').hide();
												$(".list_color a").removeClass("active");
												$('#idcolorsize').val(idcolorsize);
												$('#idcolor').val(idcolor);
												$.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/getPage.php',{idcolorsize:idcolorsize,idcolor:idcolor,type:'priceColor'},function(data) {
													 var obj = jQuery.parseJSON(data);
													 $('#pricepr').val(obj.priceBonho);
													  $('#priceBonho').val(obj.priceBonho);
													 $('#priceTotal').val(obj.priceBonho);
													 $('#nameColor').html(obj.nameColor);
													 getCountPercent();
												});
												return false;	 
											} 
									   </script>
                                        <div class="tragop-right">
                                        	<label>Giá bán</label>:
                                            <strong><span class="status" id="priceShow">
                                            	<?php if ($this->_tpl_vars['viewcolorpr']['price_vn'] > 0): ?>
                                            		<?php echo ((is_array($_tmp=$this->_tpl_vars['viewcolorpr']['price_vn'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>
 
                                                <?php else: ?>    
                                                   	<?php echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_tpl_vars['price']])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>
 
                                                <?php endif; ?>
                                            </span> <span class="status1">VNĐ</span></strong>
                                        </div>
                                        
                                        <div class="tragop-right">
                                        	<label>Trả trước</label>:
                                            <strong><span class="tgprice"><span id="showTratruoc"></span> </span><span class="tgpricevnd">VNĐ</span></strong>
                                        </div>
                                        
                                         <div class="tragop-right">
                                        	<label>Khoản vay</label>:
                                            <strong><span class="tgprice"><span id="showKhoanVai"></span> </span><span class="tgpricevnd">VNĐ</span></strong>
                                        </div>
                                        
                                        <div class="tragop-right">
                                        	<label>Góp mỗi tháng</label>:
                                            <strong><span class="tgprice"><span id="showGopMoiThang"></span> </span><span class="tgpricevnd">VNĐ</span></strong>
                                        </div>

                                        <label>Chọn số tiền trả góp</label>
                                        <div class=" select-box mt10">
                                            <select name="slpercent" onchange="getCountPercent()" id="slpercent">
                                            	<!--<option value="10">Trả trước 10%</option>-->
                                                <option value="20" <?php if ($this->_tpl_vars['slpercent'] == 20): ?>selected="selected"<?php endif; ?> >Trả trước 20%</option>
                                                <option value="30" <?php if ($this->_tpl_vars['slpercent'] == 30): ?>selected="selected"<?php endif; ?>>Trả trước 30%</option>
                                                <option value="40" <?php if ($this->_tpl_vars['slpercent'] == 40): ?>selected="selected"<?php endif; ?>>Trả trước 40%</option>
                                                <option value="50" <?php if ($this->_tpl_vars['slpercent'] == 50): ?>selected="selected"<?php endif; ?>>Trả trước 50%</option>
                                                <option value="60" <?php if ($this->_tpl_vars['slpercent'] == 60): ?>selected="selected"<?php endif; ?>>Trả trước 60%</option>
                                                <option value="70" <?php if ($this->_tpl_vars['slpercent'] == 70): ?>selected="selected"<?php endif; ?>>Trả trước 70%</option>
                                            </select>
                                        </div>
                                        <div class="select-box">
                                            <select name="slmonth" onchange="getCountPercent()" id="slmonth">
                                                <option value="6" <?php if ($this->_tpl_vars['slmonth'] == 6): ?>selected="selected"<?php endif; ?>>Thời gian vay 6 tháng</option>
                                                <option value="9" <?php if ($this->_tpl_vars['slmonth'] == 9): ?>selected="selected"<?php endif; ?>>Thời gian vay 9 tháng</option>
                                                <option value="12" <?php if ($this->_tpl_vars['slmonth'] == 12): ?>selected="selected"<?php endif; ?>>Thời gian vay 12 tháng</option>
                                            </select>
                                        </div>
                                        
                                        <p><strong class="color">Giá Góp Mỗi Tháng Có Thể Chênh Lệch 50,000đ - 100,000đ Tùy Lãi Suất.</strong></p>	
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" id="result" colspan="2">
                            	<div class="tragopbank-title">
                                	<strong>MỜI CHỌN NGÂN HÀNG TRẢ GÓP</strong>
                                </div>
                            	<div class="tragopbank">
                                	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['bannerBank']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                         <a class="mortgage-bank" onclick="btn_tragop(<?php echo $this->_tpl_vars['bannerBank'][$this->_sections['i']['index']]['id']; ?>
)" href="#quick_order" data-toggle="modal">
                                            <div class="logo-item">
                                            	<?php echo $this->_tpl_vars['bannerBank'][$this->_sections['i']['index']]['title_vn']; ?>

                                                <div class="tgbutton"><span><?php echo $this->_tpl_vars['bannerBank'][$this->_sections['i']['index']]['nameshort_vn']; ?>
</span></div>
                                                <img class="img-responsive" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['bannerBank'][$this->_sections['i']['index']]['img_vn']; ?>
" alt="<?php echo $this->_tpl_vars['bannerBank'][$this->_sections['i']['index']]['alt_img']; ?>
" title="<?php echo $this->_tpl_vars['bannerBank'][$this->_sections['i']['index']]['title_img']; ?>
" />
                                                
                                            </div>
                                         </a>   
                                    <?php endfor; endif; ?>    
                                </div>
            					<div class="content description">                                    
                                    <div class="td-note" style="width:100%;text-align:center;">
                                        <?php echo $this->_tpl_vars['seo']['content_en']; ?>

                                    </div> 
                                </div>
                                 
                            </td>
                        </tr>
                    </tbody>
                </table>
                
               <?php echo $this->_tpl_vars['seo'][$this->_tpl_vars['content']]; ?>

			</div>
			
            <div  class="product">
            	<div class="modal fade in" id="quick_order" aria-hidden="false">
                 <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                             <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                            <div class="modal-title">
                                <div class="modal-dialog-top">
                                    ĐẶT HÀNG - NGHE TƯ VẤN MIỄN PHÍ
                                </div>
                                <div class="modal-dialog-top2">
                                    (Không mua không sao)
                                </div>
                            </div>
                        </div>
                        <div class="modal-body" style="padding:0;">

                                <div class="clear title-buy"> 
                                    <span>
                                        <input class="checkboxBuy" type="radio" checked="checked" name="checkmod" value="Đặt Giữ hàng tại shop" /> Đặt Giữ hàng tại shop
                                    </span>	
                                    <span>
                                        <input class="checkboxBuy" type="radio" name="checkmod" value="Giao hàng toàn quốc" /> Giao hàng toàn quốc
                                    </span>	
                                </div>
                                <div style="padding:0 20px 20px 20px;">
                                    <div class="DialogLeft">
                                        <div class="media-box clearfix" style="border:none;">
                                             <div class="name" id="nameSearchPrBuyNow"><?php echo $this->_tpl_vars['view'][$this->_tpl_vars['name']]; ?>
 <span id="nameBonho"><?php echo $this->_tpl_vars['nameBonho']; ?>
</span> <span id="nameColor"> - <?php echo $this->_tpl_vars['nameColor']; ?>
</span></div>
                                            <div class="media-img pull-left">
                                            	<span id="searchPrBuyNow">
                                                     <img width="140px" alt="<?php echo $this->_tpl_vars['view']['alt_img']; ?>
" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view']['img_thumb_vn']; ?>
" class="img-responsive ">
                                                     <div class="price" style="text-align:center">
                                                        <span id="priceBuyNow"></span> vnđ									   	
                                                     </div>
                                                 </span>
                                                 
                                                 <div>
                                                  	<strong>Trả trước</strong> <span class="priceGop" id="showTratruoc1"></span> <span class="priceGop">vnđ</span> <br />
                                                    <strong>Khoản vay</strong> <span class="priceGop" id="showKhoanVai1"></span> <span class="priceGop">vnđ</span> <br />
                                                    <strong>Góp mỗi tháng</strong> <span  class="priceGop" id="showGopMoiThang1"></span> <span class="priceGop"> vnđ</span>
                                                </div>
                                                
                                                <div>
                                                    <?php if ($this->_tpl_vars['view']['price'] != 0): ?>
                                                    	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getPhuKienGiamGia', 'idpromotion' => $this->_tpl_vars['view']['idpromotion'], 'price' => $this->_tpl_vars['view'][$this->_tpl_vars['price']])), $this); ?>

                                                    <?php endif; ?>
                                                </div>
                                                
                                            </div>                                                    
                                        </div>
                                    </div>
                                        
                                    <div class="DialogRight">
                                        <table width="100%" cellpadding="0" border="0" class="modal-table">
                                          <tbody><tr>
                                          
                                            <td colspan="2">`
                                                <input type="text" placeholder="Họ tên của  bạn" class="input_text" value="<?php echo $this->_tpl_vars['memberCar']['name']; ?>
" id="sender_name" name="sender_name" />
                                                <div class="label_error" id="error_name"></div>
                                            </td>
                                            <td><font style="color:red">*</font></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">
                                                <input type="text" placeholder="Số di động" class="input_text" value="<?php echo $this->_tpl_vars['memberCar']['phone']; ?>
" id="sender_telephone" name="sender_telephone" />
                                                <div class="label_error" id="error_telephone"></div>
                                            </td>
                                            <td><font style="color:red">*</font></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">
                                                <input type="text" placeholder="Email" class="input_text" value="<?php echo $this->_tpl_vars['memberCar']['email']; ?>
" id="sender_email" name="sender_email" />
                                                <div class="label_error" id="error_email"></div>
                                            </td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">
                                                <input type="text" placeholder="Địa chỉ " class="input_text" value="<?php echo $this->_tpl_vars['memberCar']['address']; ?>
" id="sender_address" name="sender_address" />
                                                <div class="label_error" id="error_address"></div>
                                            </td>
                                            <td></td>
                                          </tr>
                                          
                                          <tr>
                                            <td colspan="2">
                                               <select name="tinhthanh" id="tinhthanh" class="ChosceDd" onchange="loadQuanHuyen(this.value)">
                                                    <option value="">Tỉnh thành</option>
                                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['tinhthanh']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                        <option <?php if ($this->_tpl_vars['memberCar']['tinhthanh'] == $this->_tpl_vars['tinhthanh'][$this->_sections['i']['index']]['id']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['tinhthanh'][$this->_sections['i']['index']]['id']; ?>
"> 
                                                            <?php echo $this->_tpl_vars['tinhthanh'][$this->_sections['i']['index']]['name']; ?>
 
                                                        </option>
                                                    <?php endfor; endif; ?>
                                                </select>
                                                <span id="showQuanHuyen">
                                                    <select name="quanhuyen" id="quanhuyen" class="ChosceDd">
                                                        <option value="">Quận/Huyện</option>
                                                    </select>
                                                </span>
                                                <span id="showPhuongXa">
                                                    <select name="phuongxa" id="phuongxa" class="ChosceDd">
                                                        <option value=""> Phường/xã </option>   
                                                    </select>
                                               </span>
                                                <div class="label_error" id="error_tinhthanh"></div>
                                            </td>
                                            <td><font style="color:red"></font></td>
                                          </tr>
                                          
                                          <tr>
                                            <td>
                                                <textarea placeholder="Lời nhắn" class="input_text" name="sender_msg" id="sender_msg"></textarea>
                                                <div class="label_error" id="error_msg"></div>
                                            </td>
                                            <td> </td>
                                          </tr>
                                         
                                          <tr>
                                            <td colspan="3">
                                                <a id="submitbt" href="javascript:void(0)" onclick="return buynow()" class="btn btn-default">
                                                    <span>Hoàn thành đặt hàng</span>
                                                </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                     </table>
                                                                        
                                        <script type="text/javascript">
                                        	var priceProduct = document.getElementById('priceShow').innerHTML;
												var productIDSP ='<?php echo $this->_tpl_vars['view']['idsp']; ?>';
											
											function btn_tragop(idbank){
												$("#banking").val(idbank);
											

                                             fbq('track', 'AddToCart',{
                               value: parseInt(priceProduct.split('.').join('')),
                               currency: 'VND',
                               content_ids: productIDSP,
                              content_type: 'product',
                               })
											}
											
                                            function buynow(){
                                                var name = $("#sender_name").val();
                                                var phone = $("#sender_telephone").val();
												var checkPhone = phone.match(/^0/i);
												var phoneLength = phone.length;
                                                var email = $("#sender_email").val();
                                               // var address = $("#sender_address").val();
                                                var tinhthanh = $("#tinhthanh").val();
                                                var r = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                                                var flag = 0;
												var checkstr = $("#sender_msg").val();
                                                if (name==""){
                                                    $("#error_name").attr("style", "display:block");
                                                    $("#error_name").html('Bạn phải nhập họ tên');
                                                    flag = 1;
                                                }
                                                else{
                                                    $("#error_name").attr("style", "display:none");
                                                }
                                                
                                                if (phone==""){
													$("#error_telephone").attr("style", "display:block");
													$("#error_telephone").html('Bạn phải nhập số điện thoại');
													flag = 1;
												}
												else if( (phone!="") && (checkPhone!=0)){
													$("#error_telephone").attr("style", "display:block");
													$("#error_telephone").html('Số điện thoại không đúng (vd:0xxxxxxxx)');
													flag = 1;
												}
												else if ( (phone!="") && (isNaN(phone) == true)){
													$("#error_telephone").attr("style", "display:block");
													$("#error_telephone").html('Số điện thoại không hợp lệ (vd:0909999999)');
													flag = 1;
												}
												else if(phoneLength < 10 || phoneLength>11){
													$("#error_telephone").attr("style", "display:block");
													$("#error_telephone").html('Số điện thoại phải là 10 hoặc 11 số');
													flag = 1;
												}
												else{
													$("#error_telephone").attr("style", "display:none");
												}
												if (checkstr.indexOf("www.") >= 0){
													$("#error_msg").attr("style", "display:block");
													 $("#error_msg").html('Lời nhắn không cho nhập có đường link.');
													flag = 1;
												}	
												else if (checkstr.indexOf("http:") >= 0){
													$("#error_msg").attr("style", "display:block");
													$("#error_msg").html('Lời nhắn không cho nhập có đường link.');
													flag = 1;
												}
												else if (checkstr.indexOf("https:") >= 0){
													$("#error_msg").attr("style", "display:block");
													$("#error_msg").html('Lời nhắn không cho nhập có đường link.');
													flag = 1;
												}
												else{
													$("#error_msg").attr("style", "display:none");
												}
												/*
												if (email==''){
													$("#error_email").attr("style", "display:block");
													$("#error_email").html('Bạn phải nhập email');
													flag = 1;
												}
												else if (r.test(email)==false){
													$("#error_email").attr("style", "display:block");
													$("#error_email").html('Email không đúng định dạng');
													flag = 1;
												}
												else{
													$("#error_email").attr("style", "display:none");
												}
                                                if (tinhthanh==""){
                                                    $("#error_tinhthanh").attr("style", "display:block");
                                                    $("#error_tinhthanh").html('Bạn phải chọn Tỉnh Thành.');
                                                    flag = 1;
                                                }
                                                else{
                                                    $("#error_tinhthanh").attr("style", "display:none");
                                                }
                                                */
                                                if(flag == 1)
                                                    return false;
                                                else{
                                                    $("#submitbt").hide();
                                                    $("#loadingAjax").show();
                                                    document.postbuy.submit();	
                                                }
                                            }
                                            
                                            function loadQuanHuyen(id,idq){
                                                jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/loadQuanHuyen.php',{id:id,idq:idq,type:'add'},function(data) {
                                                     var obj = jQuery.parseJSON(data);
                                                     $('#showQuanHuyen').html(obj.status);
                                                      //$('#phiship').html(obj.ship);
                                                     
                                                });
                                                return false;
                                            }
                                            function loadPhuongXa(id,idx){
                                                jQuery.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/loadPhuongXa.php',{id:id,idx:idx,type:'add'},function(data) {
                                                 var obj = jQuery.parseJSON(data);
                                                 $('#showPhuongXa').html(obj.status);
                                                 //$('#phiship').html(obj.ship);
                                                     
                                                });
                                                return false;
                                            }
                                            
                                            jQuery(document).ready(function() {
                                                <?php if ($this->_tpl_vars['memberCar']['quanhuyen'] != ''): ?>
                                                    loadQuanHuyen(<?php echo $this->_tpl_vars['memberCar']['tinhthanh']; ?>
,<?php echo $this->_tpl_vars['memberCar']['quanhuyen']; ?>
)
                                                <?php endif; ?>
                                                
                                                <?php if ($this->_tpl_vars['memberCar']['phuongxa'] != ''): ?>
                                                    loadPhuongXa(<?php echo $this->_tpl_vars['memberCar']['quanhuyen']; ?>
,<?php echo $this->_tpl_vars['memberCar']['phuongxa']; ?>
)
                                                <?php endif; ?>
                                            });
											
											 
											function getSprTragop(id){

												$('#product-description').show();
												$('#noid-tragop').show();
												
											 	$.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/getPage.php',{id:id,type:'searchTragop'},function(data) {
													 var obj = jQuery.parseJSON(data);
													 $('#searchPrBuyNow').html(obj.buynow);
													 $('#nameSearchPrBuyNow').html(obj.name);
													 $('#product-content').html(obj.view);
													 $('#inputStringtragop').val(obj.name);
													 $('#pricepr').val(obj.price);
													 $('#priceTotal').val(obj.price);
													 $('#idpr').val(id);
													 getCountPercent();
                                                     
                                                });
											 } 
											 
											 jQuery(document).ready(function() {
												 getCountPercent();
											 });
											
											
											function getVcare()
											{
												var Total;
												//var priceTotal = $('#priceTotal').val();
												<?php if ($this->_tpl_vars['view']['vcare'] == ''): ?>
													var vcare = 0;
												<?php else: ?>
													var vcare = <?php echo $this->_tpl_vars['view']['vcare']; ?>
;
												<?php endif; ?>
												var price = $('#priceTotal').val();
												if($('#Vcare').is(":checked")){   
													Total = Math.round(price) + Math.round(vcare);
													Totalshow = formatNumber(Total);
													$('#priceTotal').val(Total);
													$('#showPrice').html(Totalshow);
													
												}
												else{
													Total = Math.round(price)- Math.round(vcare);
													Totalshow = formatNumber(Total);
													$('#priceTotal').val(Total);
													$('#showPrice').html(Totalshow);
												}
											}
											
											function getVcare12()
											{
												var Total;
												
												<?php if ($this->_tpl_vars['view']['vcare12'] == ''): ?>
													var vcare12 = 0;
												<?php else: ?>
													var vcare12 = <?php echo $this->_tpl_vars['view']['vcare12']; ?>
;
												<?php endif; ?>
												var price = $('#priceTotal').val();
												if($('#Vcare12').is(":checked")){   
													Total = Math.round(price) + Math.round(vcare12);
													Totalshow = formatNumber(Total);
													$('#priceTotal').val(Total);
													$('#showPrice').html(Totalshow);
													
												}
												else{
													Total = Math.round(price)- Math.round(vcare12);
													Totalshow = formatNumber(Total);
													$('#priceTotal').val(Total);
													$('#showPrice').html(Totalshow);
												}
											}
														
											//getCountPercent();
											function getsotienhangthang(slmonth,price,sotienvay){
												var	sotienhangthang
												if(slmonth == 6){
													sotienhangthang = Math.round(Math.round(Math.round(sotienvay) * 0.202) + Math.round(12000));
												}
												else if (slmonth == 9){
													sotienhangthang = Math.round(Math.round(Math.round(sotienvay) * 0.146) + Math.round(12000));
												}
												else{
													if( (sotienvay >= 2000000) && (sotienvay < 5000000) )
														sotienhangthang = Math.round(Math.round(Math.round(Math.round(sotienvay) * 0.1202) + Math.round(12000)) - Math.round(35000));
													else if((sotienvay >= 5000000) && (sotienvay < 10000000))
														sotienhangthang = Math.round(Math.round(Math.round(Math.round(sotienvay) *  0.1202) + Math.round(12000)) - Math.round(60000));
													else if((sotienvay >= 10000000) && (sotienvay < 15000000))
														sotienhangthang = Math.round(Math.round(Math.round(Math.round(sotienvay) *  0.1202) + Math.round(12000)) - Math.round(120000));
													else
														sotienhangthang = Math.round(Math.round(Math.round(Math.round(sotienvay) *  0.1202) + Math.round(12000)) - Math.round(120000));	
												}
												return sotienhangthang;
											}
											function getCountPercent(){
												var price = $("#pricepr").val();
												var priceBonho = $("#priceBonho").val(); 
												//var price = Math.round(Math.round(price) + Math.round(priceBonho));
												var slmonth = $("#slmonth").val();
												var slpercent = $("#slpercent").val();
												var tratruoc, sotienvay, laihangthang, gochangthang, sotienhangthang;
	
												tratruoc = Math.round(Math.round(price) * Math.round(slpercent))/100;
												sotienvay = Math.round(Math.round(price) - Math.round(tratruoc));
												sotienhangthang =  getsotienhangthang(slmonth,price,sotienvay);
												
												$("#priceBuyNow").html(formatNumber(price));
												$("#priceShow").html(formatNumber(price));
												$("#showKhoanVai").html(formatNumber(sotienvay));
												$("#showKhoanVai1").html(formatNumber(sotienvay));
												$("#showTratruoc").html(formatNumber(tratruoc));
												$("#showTratruoc1").html(formatNumber(tratruoc));
												$("#showTratruocInput").val(tratruoc);
												
												$("#showGopMoiThang").html(formatNumber(sotienhangthang));
												$("#showGopMoiThang1").html(formatNumber(sotienhangthang));
												$("#showGopMoiThangInput").val(sotienhangthang);
											}
											
											function formatNumber(num) {
												return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
											}
                                       </script>
                                    
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>		
            </div>
            
			 </div>  
       </form>      
		</div>
	</div><!-- end.row -->
</div>