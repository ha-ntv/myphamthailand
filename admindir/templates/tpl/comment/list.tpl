 <div class="conten_body">
   <div class="conten">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">
                	<span class="subconten"><a title="Menu" href="index.php?do=categories&amp;cid=2&amp;root=1&amp;p=">		
                        Menu 
                    </a> </span>
                	<span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>      
                    <span class="subconten">Duyệt Bình Luận Sản Phẩm</span>           
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
                     
                     <!--{if $checkPer3 eq "true" }--> 
                        <div class="acti2"><img src="images/delete.png" /> 
                           <a href="javascript:void(0)" title="Delete" onclick="ChangeAction('index.php?do=comment&act=dellist&cid=<!--{$smarty.request.cid}-->&city=<!--{$smarty.request.city}-->&type=<!--{$smarty.request.type}-->');">
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
                    
                     <!--{if $checkPer2 eq "true" }-->
                        <div class="acti2"><img src="images/active.png" /> 
                           <a href="javascript:void(0)" title="Show" onclick="ChangeAction('index.php?do=comment&act=show&cid=<!--{$smarty.request.cid}-->&city=<!--{$smarty.request.city}-->&type=<!--{$smarty.request.type}-->')" >
                                Hoạt Động
                            </a> 
                        </div>
                        
                        <div class="acti2"><img src="images/inactive.png" /> 
                            <a href="javascript:void(0)" title="Hide" onclick="ChangeAction('index.php?do=comment&act=hide&cid=<!--{$smarty.request.cid}-->&city=<!--{$smarty.request.city}-->&type=<!--{$smarty.request.type}-->');">
                                Không Hoạt Động
                            </a> 
                                      
                        </div>
                                                 
                   <!--{else}-->  
                        <div class="acti2"><img src="images/active-no.png" /> 
                           <a>
                                Hoạt Động
                            </a> 
                        </div>
                        
                        <div class="acti2"><img src="images/inactive-no.png" /> 
                            <a>
                                Không Hoạt Động
                            </a> 
                                      
                        </div>
                        
                  <!--{/if}-->   
              </div>
            </div>
        </div>
      <div class="tbtitle2 link00" >
        <div class="left"></div> 
          <div class="right"></div>
         <form name="f" id="f" method="post"  action="index.php?do=comment&act=dellist&cid=1&city=<!--{$smarty.request.city}-->&type=<!--{$smarty.request.type}-->">
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
                                <td width="15%" height="25"  align="center" class="brbottom brleft">
                                    <strong> NAME </strong>
                                </td>
                                 <td width="15%" height="25"  align="center" class="brbottom brleft">
                                    <strong> Date </strong>
                                </td>
                                
                                 <td height="25"  align="center" class="brbottom brleft">
                                    <strong> Nội dung </strong>
                                </td>
                                
                                <td width="10%" height="25" align="center" class="brbottom brleft">
                                    <select name="idCity" style="width:100%" onchange="showCity(this.value)">
                                    	<option value=""> Khu Vực </option>
                                        <!--{section name=i loop=$city}-->
                                        	<option <!--{if $city[i].id eq $cityShow}-->selected="selected"<!--{/if}--> value="<!--{$city[i].id}-->"><!--{$city[i].name}--></option>
                                        <!--{/section}-->
                                    </select>
                                    <script type="text/javascript">
										function showCity(id){
											var type=<!--{$smarty.request.type}-->
											$(location).attr('href','index.php?do=comment&city='+id+'&type='+type);
											
										}
									</script>
                                </td>
                                
                                <td width="10%" height="25" align="center" class="brbottom brleft">
                                    <strong>SHOW/HIDE </strong>
                                </td>                                     
                                <td width="10%" height="25" align="center" class="brbottom brleft">
                                    <strong>Link Comment</strong>
                                </td>
                                
                                <td width="7%" height="25" align="center" class="brbottom brleft">
                                    <strong>Trả lời</strong>
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
                             	 <!--{$view[i].name}-->
                            </td>
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	 <!--{$view[i].dated}--> - <!--{$view[i].timed}-->
                            </td>
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	 <!--{$view[i].content}-->
                            </td>
                            
                            <td  align="center" class="brleft pa_t_b  brbottom">
                            	<!--{insert name='NameCity' city_id=$view[i].idcity }-->
                            </td>
                            
                            <td  align="center" class="brleft pa_t_b  brbottom">
                               <!--{if $view[i].active eq "1"}-->
                                    <img src="images/active.png" alt="Show\Hide"  />
                                 <!--{else}--> 
                                    <img src="images/hide.png" alt="Show\Hide"  />
                                 <!--{/if}-->
                            </td>
                            <td  align="center" class="brleft paleft pa_t_b  brbottom">
                                <div class="acti">
                                    <img src="images/icon3.gif"  align="left"/> 
                                      <a target="_blank" href="<!--{$path_url}-->/<!--{insert name='GetViewLinkComment' id=$view[i].idpr type=$view[i].type}-->" title="View link"> 
                                        View link
                                      </a>
                                 </div>
                            </td>
                            
                            <td  align="center" class="brleft paleft pa_t_b  brbottom">
                                <!--{if $checkPer2 eq "true" }-->
                                    <div class="acti">
                                        <img src="images/icon3.gif"  align="left"/> 
                                          <a href="index.php?do=comment&act=edit&id=<!--{$view[i].id}-->&city=<!--{$smarty.request.city}-->&type=<!--{$smarty.request.type}-->"> 
                                             Trả lời
                                          </a>
                                     </div>
                                <!--{else}-->
                                     <div class="acti">
                                        <img src="images/icon3-no.png"  align="left"/> 
                                          <a> 
                                            Trả lời
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

