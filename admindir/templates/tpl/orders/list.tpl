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

                          <input type="text" style="width:120px;" name="codes" value="<!--{$codes}-->"  />

                        </td>

                        <td  align="left" valign="bottom">

                           Tên : 

                           <input type="text" style="width:120px;" name="names" value="<!--{$names}-->"  />

                        </td>

                        

                        <td  align="left" valign="bottom">

                           Điện thọai : 

                           <input type="text" style="width:120px;" name="phones" value="<!--{$phones}-->"  />

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

                     

                    <!--{if $smarty.request.s eq 1}-->                        

                        <!--{if $checkPer2 eq "true" }-->

                            <div class="acti2"><img src="images/active.png" /> 

                                <a href="javascript:void(0)" title="Hide" onclick="ChangeAction('index.php?do=orders&act=donhang&s=<!--{$smarty.request.s}-->');">

                                   Đơn hàng trả lại

                                </a>         

                            </div> 

                        <!--{else}--> 

                         	<div class="acti2"><img src="images/active-no.png" /> 

                               <a>

                                    Đơn hàng trả lại 

                                </a> 

                            </div>

                        <!--{/if}-->  

					<!--{elseif $smarty.request.s eq 2}--> 

                    	 <!--{if $smarty.session.group_artseed_user eq -1}-->

                       

                        <!--{/if}-->	

                    <!--{else}--> 

                    	<!--{if $checkPer3 eq "true" }-->

                            <div class="acti2"><img src="images/delete.png" /> 

                               <a href="javascript:void(0)" title="Delete" onclick="ChangeAction('index.php?do=orders&act=dellist&s=<!--{$smarty.request.s}-->');">

                                    Xóa

                                </a> 

                            </div>  

                        <!--{else}-->  

                            <div class="acti2"><img src="images/active-no.png" /> 

                               <a>

                                     Xóa

                                </a> 

                            </div>

                         <!--{/if}-->

                         

                         <!--{if $checkPer2 eq "true" }-->                            

                             <div class="acti2"><img src="images/active.png" /> 

                                <a href="javascript:void(0)" title="Hide" onclick="ChangeAction('index.php?do=orders&act=lienhe&s=<!--{$smarty.request.s}-->');">

                                   Đơn đã liên hệ

                                </a> 

                                        

                            </div>

                         <!--{else}--> 

                            <div class="acti2"><img src="images/active-no.png" /> 

                               <a>

                                     Đơn đã liên hệ

                                </a> 

                            </div>

                        <!--{/if}-->

                         

                         <!--{if $smarty.session.group_artseed_user eq -1}-->

                      

                        <!--{/if}-->

                         

                    <!--{/if}-->

                    

                    

                  

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

										window.location.href = '<!--{$smarty.server.REQUEST_URI}-->';

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

                                            <!--{section name=i loop=$member}-->

                                                <option value="<!--{$member[i].id}-->"><!--{$member[i].name}--> (<!--{$member[i].email}-->)</option>

                                            <!--{/section}-->

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

                                    <select name="idCity" style="width:100%" onchange="showCity(<!--{$s}-->,this.value)">

                                    	<option value=""> Khu Vực </option>

                                        <!--{section name=i loop=$city}-->

                                        	<option <!--{if $city[i].id eq $cityShow}-->selected="selected"<!--{/if}--> value="<!--{$city[i].id}-->"><!--{$city[i].name}--></option>

                                        <!--{/section}-->

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

                            <!--{if $checkKh eq 1 }-->    

                                <td width="10%" height="25" align="center" class="brbottom brleft">

                                    <select name="loaikhachhang" style="width:100%" onchange="showKh(<!--{$s}-->,this.value)">

                                    	<option value=""> Khách hàng </option>

                                         <!--{section name=i loop=$loaikhachhang}-->

                                        	<option <!--{if $loaikhachhang[i].id eq $khShow}-->selected="selected"<!--{/if}--> value="<!--{$loaikhachhang[i].id}-->"><!--{$loaikhachhang[i].name}--></option>

                                        <!--{/section}--> 

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

                            <!--{/if}-->    

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

                         

                          <!--{section name=i loop=$view}--> 

                            <!--{if $smarty.section.i.index%2 eq 0}-->

                               <!--{assign var="class" value="bgno"}--> 

                            <!--{else}-->

                                <!--{assign var="class" value="bgf2"}-->

                           <!--{/if}-->      

                        <tr class="<!--{cycle values='bgno,bgf2'}-->"  onmouseout="this.className='<!--{$class}-->'" onmouseover="this.className='bgonmose'" id="g<!--{$view[i].mspid}-->">

                          

                            <td class="pa_t_b brbottom"  align="center">

                               <input type="checkbox" value="<!--{$view[i].id}-->" name="iddel[]" id="check<!--{$smarty.section.i.index}-->">

                            </td>

                            <td  align="center" class="brleft pa_t_b  brbottom">

                                <!--{$smarty.section.i.index+1+$number}-->

                            </td>

                            

                            <td align="center" class="brleft paleft pa_t_b  brbottom linkblack">

                               <!--{$view[i].id}--> 

                            </td>

                            

                             

                          	<td align="center" class="brleft paleft pa_t_b  brbottom linkblack">

                                 <!--{$view[i].dated|date_format:"%d/%m/%Y"}-->

                            </td> 

                            

                            <td align="left" class="brleft paleft pa_t_b  brbottom linkblack">

                            	<!--{if $view[i].mtype eq 1}-->

                                	<!--{insert name='getNamenv' mid=$view[i].mid type='name'}-->

                                <!--{else}-->

                             		<!--{$view[i].name}-->

                                <!--{/if}-->

                             	 

                            </td>

                            

                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">

                             	 <!--{$view[i].phone}-->

                            </td>

                            

                            <td  align="center" class="brleft pa_t_b  brbottom">

                               <!--{$view[i].total|number_format:0:".":","}-->

                            </td>

                            

                            <td  align="center" class="brleft pa_t_b  brbottom">

                            	<!--{insert name='NameCity' city_id=$view[i].idkhuvuc }-->

                            </td>

                          <!--{if $checkKh eq 1 }-->  

                            <td  align="center" class="brleft pa_t_b  brbottom">

                            	<!--{if $view[i].loaikhachhang eq 1 }-->

                                	khách hàng lẻ

                                <!--{elseif $view[i].loaikhachhang eq 2 }-->

                                	khách hàng sỉ

                                <!--{/if}-->

                            </td>

                          <!--{/if}-->                           

                            <td  align="center" class="brleft pa_t_b  brbottom">

                            	<!--{if $view[i].type eq 1}-->

                                	Trả góp

                                <!--{else}-->

                                	Mua

                                 <!--{/if}--> 

                            </td>

                            <td  align="center" class="brleft pa_t_b  brbottom">

                               <!--{if $view[i].mtype eq "1"}-->

                                    <img src="images/active.png" alt="Show\Hide"  />

                                 <!--{else}--> 

                                    <img src="images/hide.png" alt="Show\Hide"  />

                                 <!--{/if}-->

                            </td>

                            <td  align="center" class="brleft paleft pa_t_b  brbottom">

                            	<div class="acti">

                                   <img align="left" src="images/icon3.gif"> 

                                 	<a href="javascript:void(0)" onclick="window.open('OrderDetail.php?id=<!--{$view[i].id}-->','mywindow','width=850,height=700,scrollbars=yes')" title="View">View</a>

                                  

                            	 </div>

                                 <!--{if $smarty.request.s eq 1}-->

                                     <div class="acti">

                                        <a target="_blank" href="print.php?id=<!--{$view[i].id}-->" title="Print"><img align="center" src="images/printer.png"> </a>

                                     </div>

                             	 <!--{/if}-->

                            </td>

                            

                          </tr> 

                         <!--{/section}--> 

                                                        

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

                <td height="25" align="left">&nbsp;&nbsp;<strong>Tổng Số <!--{$total}--> Trang</strong></td>

                <td height="25" align="right" class="link00"><!--{$link_url}-->&nbsp;&nbsp;</td>

              </tr>

          </table>

        </div> 

        

      <div class="clear"></div>

    </div>

    

</div>