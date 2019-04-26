<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <span class="subconten">		
					<!--{$Title}-->
				</span>
            </div>
            <div class="TitleRight">
            	<form  name="thongke" method="post" >
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
						$("#FromDate").datepicker({dateFormat:"yy-mm-dd"});
						$("#ToDate").datepicker({dateFormat:"yy-mm-dd"});
					});
					function thongkeSubmit(){
						document.thongke.submit();
						
					}
				</script>
            </div>
            <div class="Clear"></div>
       </div>
        
       <table width="100%" border="0">
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
            
            <!--{assign var="totalNumber" value=0}--> 
            <!--{section name=i loop=$view}-->   
                <tr class="<!--{cycle values='trColorOne,trColorTwo'}-->">
                    <td>
                        <!--{$smarty.section.i.index+1+$number}-->
                    </td>
                    <td>
                        <!--{$view[i].codesp1}-->
                    </td>
                    <td>
                        <!--{$view[i].name_vn}-->
                    </td>
                    <!--{if $checkBanhang eq 1}-->
                    	<td align="center">
                        	<!--{insert name="countNhapKho" idpr=$view[i].id act='soluongnhap' FromDate=$FromDate ToDate=$ToDate assign="Soluong"}-->
                            <!--{$Soluong}-->
                        </td>
                        <td align="center">
                             <a target="_blank" href="<!--{$path_url}-->/thong-ke/view-nhap-hang/<!--{$view[i].id}-->/<!--{$FromDate}-->/<!--{$ToDate}-->/" title="View">
                                <i class="fa a-file-text-o"></i>
                            </a>
                        </td>   
                    <!--{elseif $checkBanhang eq 2}-->
                        <td align="center">
                        	<!--{insert name="countNhapKho" idpr=$view[i].id act='soluongban' FromDate=$FromDate ToDate=$ToDate assign="Soluong"}-->
                            <!--{$Soluong}-->
                        </td>
                        <td align="center">
                             <a target="_blank" href="<!--{$path_url}-->/thong-ke/view-ban-hang/<!--{$view[i].id}-->/<!--{$FromDate}-->/<!--{$ToDate}-->/" title="View">
                                <i class="fa a-file-text-o"></i>
                            </a>
                        </td>
                    <!--{else}-->
                         <td align="center">
                        	<!--{insert name="countNhapKho" idpr=$view[i].id act='soluongtonkho' FromDate=$FromDate ToDate=$ToDate assign="Soluong"}-->
                            <!--{$Soluong}-->
                        </td>
                        <td align="center">
                        	<!--{insert name="tbcongHangTon" idpr=$view[i].id act='trungBinhCong' FromDate=$FromDate ToDate=$ToDate}-->
                        </td>
                         <td align="center">
                        	<!--{insert name="countNhapKho" idpr=$view[i].id act='soluongbaohang' FromDate=$FromDate ToDate=$ToDate}-->
                        </td>
                        <td align="center">
                             <a target="_blank" href="<!--{$path_url}-->/thong-ke/view-ton-kho/<!--{$view[i].id}-->/<!--{$FromDate}-->/<!--{$ToDate}-->/" title="View">
                                <i class="fa a-file-text-o"></i>
                            </a>
                        </td>
                    <!--{/if}-->
                </tr>
                <!--{assign var="totalNumber" value=$totalNumber+$Soluong}-->
            <!--{/section}-->
        </table>
 
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr>
            	<td width="93%" align="right" colspan="4" class="k-header-page"><strong> Tổng cộng: <!--{$totalNumber}--> </strong></td>
                <td align="right" colspan="4" class="k-header-page"></td>
            </tr>
         </table>

    </div>
    <!--{include file="./left.tpl"}-->
</div>