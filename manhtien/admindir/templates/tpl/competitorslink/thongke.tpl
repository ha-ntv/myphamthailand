 <div class="conten_body">
   <div class="conten">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">      
                    <span class="subconten">
                    	<a title="Menu" href="index.php?do=categories&cid=2&root=1&p=">		
                        	Menu 
                    	</a> 
                   </span>  
                   <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                   <span class="subconten">
                        <a title="So Sánh Giá Đối Thủ Cạnh Tranh" href="index.php?do=competitors&act=list&type=<!--{$smarty.request.type}-->">		
                            So Sánh Giá Đối Thủ Cạnh Tranh
                        </a> 
                   </span> 
                   <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                   <span class="subconten">
                    	<a href="index.php?do=competitorslink&act=list&cid=<!--{$smarty.request.cid}-->&type=<!--{$smarty.request.type}-->">		
                           <!--{insert name=getNamePrSearch idpr=$viewidpr.idpr type='name'}-->
                        </a> 
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
                <div class="divright link00" style="text-align:center; font-size:26px;color: #005ebb;">
                    	So sánh giá tự động các đối thủ cạnh tranh
                    
              </div>
            </div>
        </div>
      <div class="tbtitle2 link00" >
        <div class="left"></div> 
          <div class="right"></div>
         <form name="f" id="f" method="post"  action="index.php?do=competitorslink&act=dellist&cid=1">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>
                        <table class="br1"  style="border-bottom:0px" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="3%" height="25" align="center" class="brbottom brleft">
                                    <strong>STT</strong>
                                </td>
                            
                                 <td  align="center" class="brbottom brleft">
                                    <strong> Tên sản phẩm </strong>
                                </td>
                                
                                <td  align="center" class="brbottom brleft">
                                    <strong> VAM </strong>
                                </td>
                                <!--{if $smarty.request.type eq 17}-->
                                	<td  align="center" class="brbottom brleft">
                                        <strong> VAM TPHCM</strong>
                                    </td>
                                <!--{/if}-->
                                <!--{section name=i loop=$view}--> 
                                	<td  align="center" class="brbottom brleft">
                                        <strong>  <!--{$view[i].name_vn}--> </strong>
                                    </td>
                                <!--{/section}-->  
                          </tr>
                         
                        <tr class="bgno"  onmouseout="this.className='bgno'" onmouseover="this.className='bgonmose'">
                            <td  align="center" class="brleft pa_t_b  brbottom">
                                1
                            </td>
                            
                            <td align="center" class="brleft paleft pa_t_b  brbottom linkblack">
                                <!--{insert name=getNamePrSearch idpr=$viewidpr.idpr type='name' idkhuvuc=$smarty.request.type}-->
                            </td>
                            
                            <td align="center" class="brleft paleft pa_t_b  brbottom linkblack">
                                <strong><!--{insert name=getNamePrSearch idpr=$viewidpr.idpr type='price' idkhuvuc=$smarty.request.type}--></strong>
                            </td>
                            
                            <!--{if $smarty.request.type eq 17}-->
                                <td  align="center" class="brbottom brleft brbottom linkblack">
                                   <strong><!--{insert name=getNamePrSearch idpr=$viewidpr.idpr type='price' idkhuvuc=1}--></strong>
                                </td>
                            <!--{/if}-->
                                
                            <!--{section name=i loop=$view}--> 
                                <td align="center" class="brleft paleft pa_t_b  brbottom linkblack">
                                	<strong>
                                    	<!--{if $view[i].price gt 0}-->
                                        	<!--{if $priceVam gt $view[i].price }-->
                                            	<span style="color:#ed1b24 ;">
                                    				<!--{$view[i].price|number_format:0:",":"."}-->
                                                </span>
                                            <!--{else}-->  
                                            	<!--{$view[i].price|number_format:0:",":"."}-->
                                            <!--{/if}-->  
                                        <!--{else}-->
                                        	<!--{insert name=getPriceSoSanh links=$view[i].links price=$priceVam}-->
                                        <!--{/if}-->
                                   </strong>
                                </td>
							<!--{/section}--> 
                          </tr> 
                          
                          <tr class="bgno"  onmouseout="this.className='bgno'" onmouseover="this.className='bgonmose'">
                            <td  align="center" class="brleft pa_t_b  brbottom"> </td>
                            
                            <td align="center" class="brleft paleft pa_t_b  brbottom linkblack"> </td>
                            
                            <td align="center" class="brleft paleft pa_t_b  brbottom linkblack"> 
                            	<a title="vietanhmobile" href="<!--{insert name=getNamePrSearch idpr=$viewidpr.idpr type='links' }-->" target="_blank">View</a>	
                            </td>
                            
                            <!--{if $smarty.request.type eq 17}-->
                                <td align="center" class="brleft paleft pa_t_b  brbottom linkblack"> 
                                    <a title="vietanhmobile" href="<!--{insert name=getNamePrSearch idpr=$viewidpr.idpr type='links' }-->" target="_blank">View</a>	
                                </td>
                            <!--{/if}-->
                            
                            <!--{section name=i loop=$view}--> 
                                <td align="center" class="brleft paleft pa_t_b  brbottom linkblack">
                                	<a title="<!--{$view[i].name_vn}-->" href="<!--{$view[i].links}-->" target="_blank">View</a>
                                </td>
							<!--{/section}--> 
                          </tr> 
                         
                                                        
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
                <td height="25" align="left">&nbsp;&nbsp;</td>
                <td height="25" align="right" class="link00">&nbsp;&nbsp;</td>
              </tr>
          </table>
        </div> 
        
      <div class="clear"></div>
    </div>
    
</div>

