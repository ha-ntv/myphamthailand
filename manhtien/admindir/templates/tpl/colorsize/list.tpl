 <div class="conten_body">
   <div class="conten">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">
                    <!--{insert name="HearderCat" cid=$smarty.request.cid act=$smarty.request.act}--> 
                    <span class="subconten"><!--{$view.name_vn}--></span>
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                    <span class="subconten">Địa Điểm</span> 
		            
                </div>
          </div>
        </div>
        <div class="raised"> 
            <b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b></b>           
            <div class="boxcontent">
            
          </div>
            <b class="top"><b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b></b>
        </div>
         <div class="divtitle margin5">
            <div class="divleft">
                <div class="divright link00">
                    
                    <span style="float:left">
                        <strong>Tác Dụng:</strong> 
                    </span>
                    <div class="acti2"><img src="images/add.png" /> 
                        <a href="javascript:void(0)" title="Add" onclick="ChangeAdd('index.php?do=colorsize&act=add&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->');">
                            Thêm mới
                        </a> 
                    </div>
                   
                    <div class="acti2"><img src="images/delete.png" /> 
                       <a href="javascript:void(0)" title="Delete" onclick="ChangeAction('index.php?do=colorsize&act=dellist&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->');">
                            Xóa
                        </a> 
                    </div>

                    <div class="acti2"><img src="images/active.png" /> 
                       <a href="javascript:void(0)" title="Còn hàng" onclick="ChangeAction('index.php?do=colorsize&act=show&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->')" >
                           Còn hàng
                        </a> 
                    </div>
                    
                    
                    
                    <div class="acti2"><img src="images/inactive.png" /> 
                        <a href="javascript:void(0)" title="Liên hệ" onclick="ChangeAction('index.php?do=colorsize&act=hidekinhdoanh&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->');">
                            Liên hệ
                        </a> 
                                  
                    </div>
                                             
                    <div class="acti2"><img src="images/order.png" /> 
                      <a href="javascript:void(0)" title="Order" onclick="ChangeAction('index.php?do=colorsize&act=order&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->');">
                            Order
                        </a> 
                                  
                    </div>
              </div>
            </div>
        </div>
      <div class="tbtitle2 link00" >
        <div class="left"></div> 
          <div class="right"></div>
         <form name="f" id="f" method="post"  action="index.php?do=colorsize&act=dellist&cid=1">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>
                        <table class="br1"  style="border-bottom:0px" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="5%" height="25" align="center" class="brbottom">
                                	<input type="checkbox" onclick="checkAll();"  name="all"/>                                  
                                </td>
                                <td width="5%" height="25" align="center" class="brbottom brleft">
                                    <strong>STT</strong>
                                </td>
                                
                                <td width="8%" height="25"  align="center" class="brbottom brleft">
                                    <strong>ORDER</strong>
                                </td>
                                <td  height="25"  align="center" class="brbottom brleft">
                                    <strong>Địa điểm</strong>
                                </td>
                                
                                <td  height="25"  align="center" class="brbottom brleft">
                                    <strong>Bộ nhớ</strong>
                                </td>
                                
                                <td  height="25" width="15%" align="center" class="brbottom brleft">
                                    <strong>Giá VNĐ</strong>
                                </td>
                                
                                <td  height="25" width="20%" align="center" class="brbottom brleft">
                                    <strong>Màu và Giá</strong>
                                </td>
                                <td  height="25"  align="center" class="brbottom brleft">
                                    <strong>Tình trạng hàng </strong>
                                </td>
                              
                                <td width="7%" height="25" align="center" class="brbottom brleft">
                                    <strong>EDIT</strong>
                                </td>
                          </tr>
                         
                          <!--{section name=i loop=$view}--> 
                            <!--{if $smarty.section.i.index%2 eq 0}-->
                               <!--{assign var="class" value="bgno"}--> 
                            <!--{else}-->
                                <!--{assign var="class" value="bgf2"}-->
                           <!--{/if}--> 
                         <!--{if $countcity gt 0 && $countcity eq $smarty.section.i.index}-->  
                            <tr class="bgonmose">
                                <td colspan="20" height="10"  align="center" class="brleft pa_t_b  brbottom"></td>
                            </tr> 
                        <!--{/if}-->                                
                        <tr class="<!--{cycle values='bgno,bgf2'}-->"  onmouseout="this.className='<!--{$class}-->'" onmouseover="this.className='bgonmose'" id="g<!--{$view[i].mspid}-->">
                            <td class="pa_t_b brbottom"  align="center">
                               <input type="checkbox" value="<!--{$view[i].id}-->" name="iddel[]" id="check<!--{$smarty.section.i.index}-->">
                            </td>
                            <td  align="center" class="brleft pa_t_b  brbottom">
                                <!--{$smarty.section.i.index+1+$number}-->
                            </td>
                            
                            <td align="center" class="brleft paleft pa_t_b  brbottom linkblack">
                                <input type="text" name="ordering[]" class="InputOrder"  value="<!--{$view[i].num}-->" size="2">
								<input type="hidden" name="id[]" value="<!--{$view[i].id}-->" />
                            </td>
                           
                            <td align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                                <!--{insert name="NameCity" city_id=$view[i].idcity}-->
                            </td> 
                            
                            <td align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                                <!--{insert name="NameTinhThanh" table='bonho' id=$view[i].idbonho}-->
                            </td> 
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                                <!--{$view[i].price_vn|number_format:0:",":"."}-->
                            </td>
                            
							<td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                                <!--{insert name='showColorPice' idcolorsize=$view[i].id}-->
                            </td>
                            
                            <td  align="center" class="brleft pa_t_b  brbottom">
                               <!--{if $view[i].typepr eq "1"}-->
                                    Còn hàng
                                 <!--{elseif $view[i].typepr eq "2"}--> 
                                    Liên hệ
                                 <!--{else}--> 
                                 	 Tạm hết hàng
                                 <!--{/if}-->
                            </td>
                                                                                       
                            <td  align="center" class="brleft paleft pa_t_b  brbottom">
                                <div class="acti">
                                    <img src="images/icon3.gif"  align="left"/> 
                                      <a href="index.php?do=colorsize&act=edit&id=<!--{$view[i].id}-->&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->" title="Eidt"> 
                                        Sửa
                                      </a>
                                 </div>
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

