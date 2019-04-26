<link type="text/css" href="calendar/themes/ui-lightness/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="calendar/ui/ui.datepicker.js"></script>
<script type="text/javascript" src="calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="calendar/ui/ui.dialog.js"></script>
<div class="conten_body">
    <div class="conten margin10">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">
                   <span class="subconten">
                        <a title="Artseed" href="index.php?do=maintain">		
                            Bảo Trì 
                        </a> 
                    </span>  
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                    <span class="subconten">Edit</span> 
                 </div>
          </div>
        </div>              	
    <form name="allsubmit" id="frmEdit" action="index.php?do=maintain&act=editsm" method="post" enctype="multipart/form-data">
        <table  width="100%" border="0" cellspacing="15" cellpadding="0">
           
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Bảo Trì</strong> 
                   </td>
                    <td valign="top" width="70%" align="left"> 
                    	<input type="checkbox" class="CheckBox" name="bao_tri" value="1" <!--{if $edit.bao_tri eq 1}-->checked<!--{/if}--> />                         
                    </td>
              </tr>
              
               <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Bắt đầu</strong> 
                   </td>
                   
                    <td valign="top" width="70%" align="left">                          
                       <input type="text" name="bat_dau" id="example" value=" <!--{$bat_dau.year}-->-<!--{$bat_dau.mon}-->-<!--{$bat_dau.mday}-->" readonly  />        
                            <span class="Text"> Giờ </span>
                        <select name="gio_bat_dau">
                        <!--{section name=i start=0 loop=24}-->
                        
                            <option value="<!--{$smarty.section.i.index}-->" <!--{if $bat_dau.hours eq $smarty.section.i.index}-->selected<!--{/if}-->><!--{$smarty.section.i.index}--></option>
                        <!--{/section}-->
                        </select>
                            <span class="Text"> Phút </span>
                        <select name="phut_bat_dau">
                        <!--{section name=i start=0 loop=60}-->
                            <option value="<!--{$smarty.section.i.index}-->" <!--{if $bat_dau.minutes eq $smarty.section.i.index}-->selected<!--{/if}-->><!--{$smarty.section.i.index}--></option>
                        <!--{/section}-->
                        </select>          
                    </td>
              </tr>
              
              <tr>
                   <td width="30%"  valign="top" align="right">
                       <strong>Kết thúc</strong> 
                   </td>
                   
                    <td valign="top" width="70%" align="left">                          
                     <input type="text" name="ket_thuc" id="example2" value=" <!--{$ket_thuc.year}-->-<!--{$ket_thuc.mon}-->-<!--{$ket_thuc.mday}-->" readonly  />        
                        <span class="Text"> Giờ </span>
                    <select name="gio_ket_thuc">
                    <!--{section name=i start=0 loop=24}-->
                    
                        <option value="<!--{$smarty.section.i.index}-->" <!--{if $ket_thuc.hours eq $smarty.section.i.index}-->selected<!--{/if}-->><!--{$smarty.section.i.index}--></option>
                    <!--{/section}-->
                    </select>
                        <span class="Text"> Phút </span>
                    <select name="phut_ket_thuc">
                    <!--{section name=i start=0 loop=60}-->
                        <option value="<!--{$smarty.section.i.index}-->" <!--{if $ket_thuc.minutes eq $smarty.section.i.index}-->selected<!--{/if}-->><!--{$smarty.section.i.index}--></option>
                    <!--{/section}-->
                    </select>
                    </td>
              </tr>

              <tr>
                   
                  <td valign="top" width="70%" align="center" colspan="2">
                    <div class="divtitle">
                        <div class="divleft">
                            <div class="divright divseo">
                                <input type="hidden" name="id" value="<!--{$edit.id}-->" />
                                <input type="submit"  value="  Save " />
                            </div>
                      </div>
                    </div>
                   
                  </td>
              </tr>
              
        </table>
      </form>
      <div class="clear"></div>
    </div>
    
    </div>


<script type="text/javascript">
	jQuery(document).ready(function() {
		//Set calendar
		jQuery("#example").datepicker({dateFormat:"yy-mm-dd"});
		jQuery("#example2").datepicker({dateFormat:"yy-mm-dd"});
	 });
</script>