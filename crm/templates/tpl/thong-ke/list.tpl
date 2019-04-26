<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <span class="subconten">		
					<!--{$Title}-->
				</span>
            </div>
            <div class="TitleRight">
            	<form  name="thongke" method="post" action="<!--{$path_url}-->/thong-ke/" >
                	 <select id="actthongke" name="actthongke">
                        <!--{section name=i loop=$thongke}-->
                    		<option <!--{if $thongke[i].id eq $idthongke}-->selected="selected"<!--{/if}--> value="<!--{$thongke[i].id}-->"><!--{$thongke[i].name}--></option>
                        <!--{/section}--> 
                    </select>
                    
                    <input type="text" id="FromDate" name="FromDate" value="<!--{$FromDate}-->"  placeholder='Từ ngày' />
                    <input type="text" id="ToDate" name="ToDate" value="<!--{$ToDate}-->"  placeholder='Đến ngày'/>
                    <a title="Thêm mới" class="kv2Btn" href="javascript:void(0)" onclick="thongkeSubmit()">
                        <i class="fa fa-search"></i> Tìm kiếm   
                    </a>
                </form>
                <script language="javascript">
					$(document).ready(function(){
						$("#FromDate").datepicker({changeMonth: true, changeYear: true,dateFormat:"yy-mm-dd"});
						$("#ToDate").datepicker({changeMonth: true, changeYear: true,dateFormat:"yy-mm-dd"});
					});
					function thongkeSubmit(){
						document.thongke.submit();
					}
				</script>
            </div>
            <div class="Clear"></div>
       </div>
        
       <!--{section name=i loop=$view}-->  
           <table width="100%" border="0">
                <tr class="<!--{cycle values='trColorOne,trColorTwo'}-->">
                    <td class="k-header First" colspan="8" style="background:none;"> <!--{insert name="getNameWeb" table='categories' typename='name_vn' id=$view[i].id}--></td>
                </tr>
                <tr>
                    <!--{if $checkBanhang eq 1 || $checkBanhang eq 2}-->
                        <td class="k-header First">Stt</td>
                        <td class="k-header">Mã hàng </td>
                        <td class="k-header">Tên hàng</td>
                        <td class="k-header">Số lượng</td>
                        <td class="k-header" align="center">View</td>
                    <!--{else}-->
                        <td class="k-header First">Stt</td>
                        <td class="k-header">Mã hàng </td>
                        <td class="k-header">Tên hàng</td>
                        <td class="k-header">Tồn kho</td>
                        <td class="k-header">TB-Cộng/vnđ</td>
                        <td class="k-header">Bảo-hành</td>
                        <td class="k-header" align="center">View</td>
                    <!--{/if}-->
                </tr>
               	<!--{insert name="getThongKe" FromDate=$FromDate ToDate=$ToDate cid=$view[i].id checkBanhang=$checkBanhang assign="showThongKe"}--> 
                <!--{$showThongKe.list}--> 
               
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="93%" align="right" colspan="4" class="k-header-page"><strong> Tổng:  <!--{$showThongKe.countList}--></strong></td>
                    <td align="right" colspan="4" class="k-header-page"></td>
                </tr>
             </table>
        	<!--{assign var="total" value=$total+$showThongKe.countList}-->
       <!--{/section}-->

        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr class="trColorOne">
            	<td width="93%" align="right" colspan="4" class="k-header-page" style="background:none;"><strong> Tổng cộng:  <!--{$total}--></strong></td>
                <td align="right" colspan="4" class="k-header-page" style="background:none;"></td>
            </tr>
         </table>

    </div>

    <!--{include file="./left.tpl"}-->
</div>