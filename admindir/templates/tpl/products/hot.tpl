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
                    	Sản phẩm hot 
                    </span> 
		               
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
                    <!--{if $checkPer2 eq "true" }-->      
                        <div class="acti2" style="margin-right:50px;"><img src="images/order.png" /> 
                          <a href="javascript:void(0)" title="Order" onclick="ChangeAction('index.php?do=products&act=orderhot&cid=<!--{$smarty.request.cid}-->');">
                                Order
                            </a> 
                                      
                        </div>
                    <!--{else}-->  
                        <div class="acti2"><img src="images/order-no.png" /> 
                          <a>
                                Order
                            </a> 
                                      
                        </div>
                   <!--{/if}-->
                   <span style="float:left">
                        <strong>Chọn dòng sản phẩm:</strong> 
                    </span>
                        
                    <div class="acti2">
                    	<select name="catpr" style="width:100%" onchange="showCat(this.value)">
                    	 	<!--{insert name="getSPHot" cid=$smarty.request.cid module=2}-->
                         </select> 
                         <script type="text/javascript">
							function showCat(id){
								$(location).attr('href','index.php?do=products&act=hot&cid='+id);
							}
						</script>                                 
                    </div>
              </div>
            </div>
        </div>
      <div class="tbtitle2 link00" >
        <div class="left"></div> 
          <div class="right"></div>
         <form name="f" id="f" method="post"  action="index.php?do=products&act=dellist&cid=1">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>
                        <table class="br1"  style="border-bottom:0px" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="2%" height="25" align="center" class="brbottom">
                                	<input type="checkbox" onclick="checkAll();"  name="all"/>                                  
                                </td>
                                <td width="3%" height="25" align="center" class="brbottom brleft">
                                    <strong>STT</strong>
                                </td>
                                <td width="6%" height="25"  align="center" class="brbottom brleft">
                                    <strong>ORDER</strong>
                                </td>
                                
                                <td width="8%"  height="25"  align="center" class="brbottom brleft">
                                    <strong>IMG</strong>
                                </td>
                                
                                <td  height="25" width="10%"  align="center" class="brbottom brleft">
                                    <strong> Mã SP1,SP2 </strong>
                                </td>
                                
                                <td  height="25"  align="center" class="brbottom brleft">
                                    <strong> NAME </strong>
                                </td>
                                
                                 <td width="14%" height="25" align="center" class="brbottom brleft">
                                    <strong>Giá Số Lượng</strong>
                                </td> 
                                
                                <td width="6%" height="25" align="center" class="brbottom brleft">
                                    <strong>EDIT</strong>
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
                                <input type="text" name="ordering[]" class="InputOrder"  value="<!--{$view[i].orderhot}-->" size="2">
								<input type="hidden" name="id[]" value="<!--{$view[i].id}-->" />
                            </td>
                            
                          	<td align="center" class="brleft paleft pa_t_b  brbottom linkblack">
                                <!--{if $view[i].img_thumb_vn neq ""}-->
                                    <img align="absmiddle" width="60px"  src="../<!--{$view[i].img_thumb_vn}-->"   border="0" />
                                <!--{/if}-->
                            </td> 
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	 <!--{$view[i].code}--> <br /> <!--{$view[i].codesp}-->
                            </td>
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	 <!--{$view[i].name_vn}-->
                            </td>
                           
                           
                           <td  align="center" class="brleft paleft pa_t_b  brbottom">
                           		<!--{insert name="CheckDiadiemList" idpr=$view[i].id}-->
       							
                            </td>
                            
                            <td  align="center" class="brleft paleft pa_t_b  brbottom">
                            	<!--{if $checkPer2 eq "true" }-->
                                    <div class="acti">
                                        <img src="images/icon3.gif"  align="left"/> 
                                          <a target="_blank" href="index.php?do=products&act=edit&id=<!--{$view[i].id}-->&cid=<!--{$view[i].cid}-->" title="Eidt"> 
                                            Sửa
                                          </a> 
                                     </div>
                                <!--{else}-->
                                     <div class="acti">
                                        <img src="images/icon3-no.png"  align="left"/> 
                                          <a> 
                                            Sửa
                                          </a>
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

