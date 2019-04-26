<link type="text/css" href="calendar/themes/ui-lightness/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="calendar/ui/ui.datepicker.js"></script>
<script type="text/javascript" src="calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="calendar/ui/ui.dialog.js"></script>
 <div class="conten_body">
   <div class="conten">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">      
                   <span class="subconten"><a title="VietAnhMobile" href="index.php?do=categories&cid=1&root=1">		
                        VietAnhMobile 
                    </a> </span>  <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                
                    <span class="subconten"><a title="Menu" href="index.php?do=categories&cid=2&root=1">		
                        Menu 
                    </a> </span>  <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                
                    <span class="subconten">
                    	Poup Sale Up
                    </span>                
                </div>
          </div>
        </div>
        <div class="raised"> 
            <b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b></b>           
            <div class="boxcontent">
            	<form name="search" action="" method="post" enctype="multipart/form-data"> 
                    <table width="60%" border="0" cellspacing="4" cellpadding="0">
                      <tr>
                        <td width="15%" align="left" valign="bottom">
                            Ngày:
                          <input type="text" style="width:140px;" name="dateds" id="dateds" value="<!--{$dateds}-->"  />
                        </td>
                        <td width="20%" align="left" valign="bottom">
                           Điện thoại : 
                           <input type="text" style="width:180px;" name="phones" value="<!--{$phones}-->"  />
                        </td>
                        
                         <td width="20%" align="left" valign="bottom">
                           <select name="idCity">
                               <option value=""> Khu Vực </option>
                                <!--{section name=i loop=$city}-->
                                    <option <!--{if $city[i].id eq $cityShow}-->selected="selected"<!--{/if}--> value="<!--{$city[i].id}-->"><!--{$city[i].name}--></option>
                                <!--{/section}-->
                           </select>
                        </td>

                        <td width="47%" align="left" valign="bottom">
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

                     <!--{if $checkPer3 eq "true" }--> 
                        <div class="acti2"><img src="images/delete.png" /> 
                           <a href="javascript:void(0)" title="Delete" onclick="ChangeAction('index.php?do=saleup&act=dellist&cid=<!--{$smarty.request.cid}-->');">
                                Xóa
                            </a> 
                        </div>
                      <!--{else}-->  
                         <div class="acti2"><img src="images/delete-no.png" /> 
                           <a>
                                Xóa
                            </a> 
                        </div>
                     <!--{/if}--> 
              </div>
            </div>
        </div>
      <div class="tbtitle2 link00" >
        <div class="left"></div> 
          <div class="right"></div>
         <form name="f" id="f" method="post"  action="index.php?do=saleup&act=dellist&cid=1">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>
                        <table class="br1"  style="border-bottom:0px" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="5%" height="25" align="center" class="brbottom">
                                	<input type="checkbox" onclick="checkAll();"  name="all"/>                                  
                                </td>
                                <td width="7%" height="25" align="center" class="brbottom brleft">
                                    <strong>STT</strong>
                                </td>
                                
                                <td height="25"  align="center" class="brbottom brleft">
                                    <strong> Ngày </strong>
                                </td>
                                
                                <td height="25"  align="center" class="brbottom brleft">
                                    <strong> Họ tên </strong>
                                </td>
                                
                                <td height="25"  align="center" class="brbottom brleft">
                                    <strong> Điện thoại </strong>
                                </td>
                                
                                <td width="10%" height="25" align="center" class="brbottom brleft">
                                    Khu Vực
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
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	 <!--{$view[i].dated|date_format:"%d-%m-%Y"}-->
                            </td>
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	 <!--{$view[i].name}-->
                            </td>
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	 <!--{$view[i].phone}-->
                            </td>
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	 <!--{insert name='NameCity' city_id=$view[i].idcity }-->
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
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#dateds").datepicker({dateFormat:"yy-mm-dd"});
	 });
</script>
