<?php /* Smarty version 2.6.6, created on 2019-04-13 10:46:24
         compiled from orders/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'orders/list.tpl', 769, false),array('modifier', 'date_format', 'orders/list.tpl', 799, false),array('modifier', 'number_format', 'orders/list.tpl', 833, false),array('insert', 'getNamenv', 'orders/list.tpl', 809, false),array('insert', 'NameCity', 'orders/list.tpl', 841, false),)), $this); ?>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.js"></script>

<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.1.css" media="screen" />

 <div class="conten_body">

   <div class="conten">

        <div class="divtitle">

            <div class="divleft">

               <div class="divright">  

                    <span class="subconten">

                     <a href="index.php?do=orders" class="First">Đơn hàng</a>   

                    </span>

              </div>

          </div>

        </div>

        <div class="raised"> 

            <b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b></b>           

            <div class="boxcontent">

            	<form name="search" action="" method="post" enctype="multipart/form-data"> 

                    <table width="40%" border="0" cellspacing="4" cellpadding="0">

                      <tr>

                        <td  align="left" valign="bottom">

                            Mã Số:

                          <input type="text" style="width:120px;" name="codes" value="<?php echo $this->_tpl_vars['codes']; ?>
"  />

                        </td>

                        <td  align="left" valign="bottom">

                           Tên : 

                           <input type="text" style="width:120px;" name="names" value="<?php echo $this->_tpl_vars['names']; ?>
"  />

                        </td>

                        

                        <td  align="left" valign="bottom">

                           Điện thọai : 

                           <input type="text" style="width:120px;" name="phones" value="<?php echo $this->_tpl_vars['phones']; ?>
"  />

                        </td>

                        



                        <td  align="left" valign="bottom">

                            <input type="submit" name="button" id="button" value=" Search " />

                        </td>

                      </tr>

                    </table>

                </form> 

          </div>

            <b class="top"><b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b></b>

        </div>

         <div class="divtitle margin5">

            <div class="divleft">

                <div class="divright link00">

                    

                    <span style="float:left">

                        <strong>Tác Dụng:</strong> 

                    </span>

                     

                    <?php if ($_REQUEST['s'] == 1): ?>                        

                        <?php if ($this->_tpl_vars['checkPer2'] == 'true'): ?>

                            <div class="acti2"><img src="images/active.png" /> 

                                <a href="javascript:void(0)" title="Hide" onclick="ChangeAction('index.php?do=orders&act=donhang&s=<?php echo $_REQUEST['s']; ?>
');">

                                   Đơn hàng trả lại

                                </a>         

                            </div> 

                        <?php else: ?> 

                         	<div class="acti2"><img src="images/active-no.png" /> 

                               <a>

                                    Đơn hàng trả lại 

                                </a> 

                            </div>

                        <?php endif; ?>  

					<?php elseif ($_REQUEST['s'] == 2): ?> 

                    	 <?php if ($_SESSION['group_artseed_user'] == -1): ?>

                       

                        <?php endif; ?>	

                    <?php else: ?> 

                    	<?php if ($this->_tpl_vars['checkPer3'] == 'true'): ?>

                            <div class="acti2"><img src="images/delete.png" /> 

                               <a href="javascript:void(0)" title="Delete" onclick="ChangeAction('index.php?do=orders&act=dellist&s=<?php echo $_REQUEST['s']; ?>
');">

                                    Xóa

                                </a> 

                            </div>  

                        <?php else: ?>  

                            <div class="acti2"><img src="images/active-no.png" /> 

                               <a>

                                     Xóa

                                </a> 

                            </div>

                         <?php endif; ?>

                         

                         <?php if ($this->_tpl_vars['checkPer2'] == 'true'): ?>                            

                             <div class="acti2"><img src="images/active.png" /> 

                                <a href="javascript:void(0)" title="Hide" onclick="ChangeAction('index.php?do=orders&act=lienhe&s=<?php echo $_REQUEST['s']; ?>
');">

                                   Đơn đã liên hệ

                                </a> 

                                        

                            </div>

                         <?php else: ?> 

                            <div class="acti2"><img src="images/active-no.png" /> 

                               <a>

                                     Đơn đã liên hệ

                                </a> 

                            </div>

                        <?php endif; ?>

                         

                         <?php if ($_SESSION['group_artseed_user'] == -1): ?>

                      

                        <?php endif; ?>

                         

                    <?php endif; ?>

                    

                    

                  

                    <script type="text/javascript">



						jQuery(document).ready(function() {

							$("#serial").fancybox({

									'titleShow'		: false,

									'transitionIn'	: 'none',

									'transitionOut'	: 'none'

								});

						});

						function submitSerialgo(){

							var idmember = $("#idmember").val();

							var txtserial = $("#txtserial").val();

							var txthdh = $("#txthdh").val();

							var idorder = $("#idorder").val();

							var loaikhachhang = $("#loaikhachhang").val();

							

							

							var checkphukien = [];

							$("input[name='phukien[]']:checked").each(function ()

							{

								checkphukien.push($(this).val());

							});

						

							if(idmember.length == ''){

								$('#errmsgSerial').html('Vui chọn nhận viên.');

								return false;

							}

							else if(txtserial.length == ''){

								$('#errmsgSerial').html('Vui lòng nhập vào số Serial máy.');

								return false;

							}

							else if(txtserial.length == ''){

								$('#errmsgSerial').html('Vui lòng nhập vào số Serial máy.');

								return false;

							}

							

							else if(idorder.length == ''){

								$('#errmsgSerial').html('Vui lòng nhấn Ctr + F5 để thực hiện lại.');

								return false;

							}

							else{

							

								$('#errmsgSerial').html('<img src="../ajax-loader.gif" />')

								jQuery.post('ajax/Checkip.php',{idorder:idorder,txtserial:txtserial,txthdh:txthdh,idmember:idmember,loaikhachhang:loaikhachhang,checkphukien:checkphukien,act:'duyetdonhang'},function(data) {

									var obj = jQuery.parseJSON(data);

									 if(obj.status != ''){ //loi 

										 $('#errmsgSerial').html(obj.status);

										 return false;

									 }

									 else{

										//location.reload();

										window.location.href = '<?php echo $_SERVER['REQUEST_URI']; ?>
';

									 }

								});	

							}

						}

						function submitSerial(){

							var checked = [];

							var numqlnganh=0;

							$("input[name='iddel[]']:checked").each(function ()

							{

								checked.push(parseInt($(this).val()));

								numqlnganh = eval(numqlnganh)+1;

							});

							if(eval(numqlnganh) == 0){

								alert('Vui lòng check chọn một đơn hàng.');

								return false;

							}

							else if(eval(numqlnganh) > 1){

								alert('Vui lòng chỉ duyệt tối đa là một đơn hàng.');

								return false;

							}

							else{

								$('#idorder').val(checked);

								

								var idorder = $("#idorder").val();

								loadajax(idorder);

								jQuery.post('ajax/Checkip.php',{idorder:idorder,act:'loadSerial'},function(data) {

									var obj = jQuery.parseJSON(data);

									 $('#loadserial').html(obj.status);

									 return false;

								});	

								$('#txtserial').val('');

								$("#serial").click();

							}

						}

						function showSerial(serial){

							$('#txtserial').val(serial);

						}

	

						function loadajax(idpr){		

							var idpr = $('#idorder').val();

							$("#txtserial").autocomplete("ajax/get_course_list.php?type=serial&idpr="+idpr+"", {

								width: 260,

								matchContains: true,

								selectFirst: false

							});

						}



					</script> 

                    

					<a href="#inline1" title="" id="serial"></a>

              </div>

            </div>

        </div>

      <div class="tbtitle2 link00" >

        <div class="left"></div> 

          <div class="right"></div>

        	<form name="f" id="f" method="post" action="index.php?do=orders&act=serial">

            	<script type='text/javascript' src='js/searchajax/jquery.autocomplete.js'></script>

				<link rel="stylesheet" type="text/css" href="js/searchajax/jquery.autocomplete.css" />

                

                    <div style="display:none;">

                        <div id="inline1" style="padding:10px; font-size:13px;width:600px;height:235px;">

                        	<table style="border-bottom:0px" width="100%" border="0" cellspacing="0" cellpadding="5"> 

                                <tr>

                                    <td  align="right">

                                       Nhân viên:                                  

                                    </td>

                                    <td  align="left" >

                                        <select name="idmember" id="idmember" style="min-width:200px;">

                                        	<option value="">-----Chọn nhân viên----</option>

                                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['member']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                                                <option value="<?php echo $this->_tpl_vars['member'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['member'][$this->_sections['i']['index']]['name']; ?>
 (<?php echo $this->_tpl_vars['member'][$this->_sections['i']['index']]['email']; ?>
)</option>

                                            <?php endfor; endif; ?>

                                        </select>                                 

                                    </td>

                               </tr>

                                <tr>

                                    <td  align="right">

                                       Khách hàng:                                  

                                    </td>

                                    <td  align="left" >

                                        <select name="loaikhachhang" id="loaikhachhang" style="min-width:200px;">

                                             <option value="1">Khách hàng lẻ</option>

                                             <option value="2">Khach hành sỉ</option>

                                        </select>                                 

                                    </td>

                               </tr>        

                            	<tr>

                                    <td  align="right">

                                       Số Serial:                                  

                                    </td>

                                    <td  align="left" >

                                        <input type="text" name="txtserial" id="txtserial" placeholder="Nhập số serial" style="width:250px;height:18px;"/> 

                                        <select name="loadserial" id="loadserial" onchange="showSerial(this.value)"> </select>                                

                                    </td>

                               </tr>

                               <tr>

                                    <td  align="right">

                                       Hệ điều hành:                                  

                                    </td>

                                    <td  align="left" >

                                        <input type="text" name="txthdh" id="txthdh" style="width:250px;height:18px;" />                                 

                                    </td>

                               </tr>

                               

                               <tr>

                                    <td  align="right">

                                       Phụ kiện tặng:                                  

                                    </td>

                                    <td  align="left" >

                                    	<div class='PhuKienKhuyenMai'>

                                        	<input type="checkbox"  value="Sạc cáp"  name="phukien[]"/> Sạc cáp 

                                        </div>  

                                        <div class='PhuKienKhuyenMai'>

                                        	<input type="checkbox"  value="Tai nghe"  name="phukien[]"/> Tai nghe 

                                        </div> 

                                        <div style="clear:both; width:100%;"></div>

                                        <div class='PhuKienKhuyenMai'>

                                        	<input type="checkbox"  value="Dán màn hình"  name="phukien[]"/> Dán màn hình 

                                        </div> 

                                        

                                        <div class='PhuKienKhuyenMai'>

                                        	<input type="checkbox"  value="Que chọc sim"  name="phukien[]"/> Que chọc sim

                                        </div>                                

                                    </td>

                               </tr>

                               

                               <tr>

                                    <td  align="center" colspan="2" >

                                      <input type="button" value=" Gởi " style="width:60px" onclick="return submitSerialgo();"  />

                                      <input type="hidden" id="idorder" name="idorder"  />                               

                                      <div id="errmsgSerial" style="padding-top:5px;text-align:center; color:#FF0000"></div>

                                    </td>

                                   

                               </tr>

                           </table>

                           

                        </div>

                    </div>

                <table width="100%" border="0" cellspacing="0" cellpadding="0">

                  <tr>

                    <td>

                        <table class="br1"  style="border-bottom:0px" width="100%" border="0" cellspacing="0" cellpadding="0">

                            <tr>

                                <td width="3%" height="25" align="center" class="brbottom">

                                	<input type="checkbox" onclick="checkAll();"  name="all"/>                                  

                                </td>

                                <td width="4%" height="25" align="center" class="brbottom brleft">

                                    <strong>STT</strong>

                                </td>

                                <td width="6%" height="25"  align="center" class="brbottom brleft">

                                    <strong>Mã số</strong>

                                </td>

                              

                                <td width="8%"  height="25"  align="center" class="brbottom brleft">

                                    <strong>date</strong>

                                </td>

                                <td  height="25"  align="center" class="brbottom brleft">

                                    <strong> Tên </strong>

                                </td>

                                

                                <td  height="25"  align="center" class="brbottom brleft">

                                    <strong> Điện thoại </strong>

                                </td>

                                <td width="15%"  height="25"  align="center" class="brbottom brleft">

                                    <strong> total </strong>

                                </td>

                                

                                <td width="10%" height="25" align="center" class="brbottom brleft">

                                    <select name="idCity" style="width:100%" onchange="showCity(<?php echo $this->_tpl_vars['s']; ?>
,this.value)">

                                    	<option value=""> Khu Vực </option>

                                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['city']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                                        	<option <?php if ($this->_tpl_vars['city'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['cityShow']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['city'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['city'][$this->_sections['i']['index']]['name']; ?>
</option>

                                        <?php endfor; endif; ?>

                                    </select>

                                    <script type="text/javascript">

										function showCity(s,id){

											if(s==0){

												$(location).attr('href','index.php?do=orders&city='+id);

											}

											else{

												$(location).attr('href','index.php?do=orders&s='+s+'&city='+id);

											}

										}

									</script>

                                </td>

                            <?php if ($this->_tpl_vars['checkKh'] == 1): ?>    

                                <td width="10%" height="25" align="center" class="brbottom brleft">

                                    <select name="loaikhachhang" style="width:100%" onchange="showKh(<?php echo $this->_tpl_vars['s']; ?>
,this.value)">

                                    	<option value=""> Khách hàng </option>

                                         <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['loaikhachhang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                                        	<option <?php if ($this->_tpl_vars['loaikhachhang'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['khShow']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['loaikhachhang'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['loaikhachhang'][$this->_sections['i']['index']]['name']; ?>
</option>

                                        <?php endfor; endif; ?> 

                                    </select>

                                    <script type="text/javascript">

										function showKh(s,id){

											if(s==0){

												$(location).attr('href','index.php?do=orders&kh='+id);

											}

											else{

												$(location).attr('href','index.php?do=orders&s='+s+'&kh='+id);

											}

										}

									</script>

                                </td>

                            <?php endif; ?>    

                                <td width="10%" height="25" align="center" class="brbottom brleft">

                                    <strong>Loại ĐH</strong>

                                </td>

                                

                                <td width="8%" height="25" align="center" class="brbottom brleft">

                                    <strong>NV Công Ty</strong>

                                </td>

                         

                                <td width="6%" height="25" align="center" class="brbottom brleft">

                                    <strong>View</strong>

                                </td>

                          </tr>

                         

                          <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['view']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                            <?php if ($this->_sections['i']['index']%2 == 0): ?>

                               <?php $this->assign('class', 'bgno'); ?> 

                            <?php else: ?>

                                <?php $this->assign('class', 'bgf2'); ?>

                           <?php endif; ?>      

                        <tr class="<?php echo smarty_function_cycle(array('values' => 'bgno,bgf2'), $this);?>
"  onmouseout="this.className='<?php echo $this->_tpl_vars['class']; ?>
'" onmouseover="this.className='bgonmose'" id="g<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['mspid']; ?>
">

                          

                            <td class="pa_t_b brbottom"  align="center">

                               <input type="checkbox" value="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
" name="iddel[]" id="check<?php echo $this->_sections['i']['index']; ?>
">

                            </td>

                            <td  align="center" class="brleft pa_t_b  brbottom">

                                <?php echo $this->_sections['i']['index']+1+$this->_tpl_vars['number']; ?>


                            </td>

                            

                            <td align="center" class="brleft paleft pa_t_b  brbottom linkblack">

                               <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
 

                            </td>

                            

                             

                          	<td align="center" class="brleft paleft pa_t_b  brbottom linkblack">

                                 <?php echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']]['dated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>


                            </td> 

                            

                            <td align="left" class="brleft paleft pa_t_b  brbottom linkblack">

                            	<?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['mtype'] == 1): ?>

                                	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getNamenv', 'mid' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['mid'], 'type' => 'name')), $this); ?>


                                <?php else: ?>

                             		<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['name']; ?>


                                <?php endif; ?>

                             	 

                            </td>

                            

                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">

                             	 <?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['phone']; ?>


                            </td>

                            

                            <td  align="center" class="brleft pa_t_b  brbottom">

                               <?php echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']]['total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>


                            </td>

                            

                            <td  align="center" class="brleft pa_t_b  brbottom">

                            	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'NameCity', 'city_id' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['idkhuvuc'])), $this); ?>


                            </td>

                          <?php if ($this->_tpl_vars['checkKh'] == 1): ?>  

                            <td  align="center" class="brleft pa_t_b  brbottom">

                            	<?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['loaikhachhang'] == 1): ?>

                                	khách hàng lẻ

                                <?php elseif ($this->_tpl_vars['view'][$this->_sections['i']['index']]['loaikhachhang'] == 2): ?>

                                	khách hàng sỉ

                                <?php endif; ?>

                            </td>

                          <?php endif; ?>                           

                            <td  align="center" class="brleft pa_t_b  brbottom">

                            	<?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['type'] == 1): ?>

                                	Trả góp

                                <?php else: ?>

                                	Mua

                                 <?php endif; ?> 

                            </td>

                            <td  align="center" class="brleft pa_t_b  brbottom">

                               <?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['mtype'] == '1'): ?>

                                    <img src="images/active.png" alt="Show\Hide"  />

                                 <?php else: ?> 

                                    <img src="images/hide.png" alt="Show\Hide"  />

                                 <?php endif; ?>

                            </td>

                            <td  align="center" class="brleft paleft pa_t_b  brbottom">

                            	<div class="acti">

                                   <img align="left" src="images/icon3.gif"> 

                                 	<a href="javascript:void(0)" onclick="window.open('OrderDetail.php?id=<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
','mywindow','width=850,height=700,scrollbars=yes')" title="View">View</a>

                                  

                            	 </div>

                                 <?php if ($_REQUEST['s'] == 1): ?>

                                     <div class="acti">

                                        <a target="_blank" href="print.php?id=<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['id']; ?>
" title="Print"><img align="center" src="images/printer.png"> </a>

                                     </div>

                             	 <?php endif; ?>

                            </td>

                            

                          </tr> 

                         <?php endfor; endif; ?> 

                                                        

                      </table>

                    </div>

                    </td>

                  </tr>

                  <tr>

                    <td>

                        

                    </td>

                  </tr>

                </table>

		</form>   

      </div>

      

      <div class="tbtitle2">

            <table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td height="25" align="left">&nbsp;&nbsp;<strong>Tổng Số <?php echo $this->_tpl_vars['total']; ?>
 Trang</strong></td>

                <td height="25" align="right" class="link00"><?php echo $this->_tpl_vars['link_url']; ?>
&nbsp;&nbsp;</td>

              </tr>

          </table>

        </div> 

        

      <div class="clear"></div>

    </div>

    

</div>