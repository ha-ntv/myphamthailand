 <div class="conten_body">
   <div class="conten">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">      
                    <!--{insert name="HearderCat" cid=$smarty.request.cid act=$smarty.request.act}-->
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                     <span class="subconten"><!--{$viewpr.name_vn}--></span>  
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                    <span class="subconten">Tags</span>             
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
                        <a href="javascript:void(0)" title="Add" onclick="ChangeAdd('index.php?do=tags&act=add&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->');">
                            Thêm mới
                        </a> 
                    </div>
                   
                    <div class="acti2"><img src="images/delete.png" /> 
                       <a href="javascript:void(0)" title="Delete" onclick="ChangeAction('index.php?do=tags&act=dellist&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->');">
                            Xóa
                        </a> 
                    </div>

                    <div class="acti2"><img src="images/active.png" /> 
                       <a href="javascript:void(0)" title="Show" onclick="ChangeAction('index.php?do=tags&act=show&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->')" >
                            Hoạt Động
                        </a> 
                    </div>
                    
                    <div class="acti2"><img src="images/inactive.png" /> 
                        <a href="javascript:void(0)" title="Hide" onclick="ChangeAction('index.php?do=tags&act=hide&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->');">
                            Không Hoạt Động
                        </a> 
                                  
                    </div>
                                             
                    <div class="acti2"><img src="images/order.png" /> 
                      <a href="javascript:void(0)" title="Order" onclick="ChangeAction('index.php?do=tags&act=order&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->');">
                            Order
                        </a> 
                                  
                    </div>
                   
              </div>
            </div>
        </div>
      <div class="tbtitle2 link00" >
        <div class="left"></div> 
          <div class="right"></div>
         <form name="f" id="f" method="post"  action="index.php?do=articles&act=dellist&cid=1">
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
                                <td width="8%" height="25"  align="center" class="brbottom brleft">
                                    <strong>ORDER</strong>
                                </td>
                                <td width="50%"  height="25"  align="center" class="brbottom brleft">
                                    <strong> NAME </strong>
                                </td>
                                
                                <td width="10%" height="25" align="center" class="brbottom brleft">
                                    <strong>SHOW/HIDE </strong>
                                </td>                                     
                                <td width="10%" height="25" align="center" class="brbottom brleft">
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
                                <input type="text" name="ordering[]" class="InputOrder"  value="<!--{$view[i].num}-->" size="2">
								<input type="hidden" name="id[]" value="<!--{$view[i].id}-->" />
                            </td>
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	 <!--{$view[i].name_vn}-->
                            </td>
                            
                            <td  align="center" class="brleft pa_t_b  brbottom">
                               <!--{if $view[i].active eq "1"}-->
                                    <img src="images/active.png" alt="Show\Hide"  />
                                 <!--{else}--> 
                                    <img src="images/hide.png" alt="Show\Hide"  />
                                 <!--{/if}-->
                            </td>
                            <td  align="center" class="brleft paleft pa_t_b  brbottom">
                                <!--{if $checkPer2 eq "true" }-->
                                    <div class="acti">
                                        <img src="images/icon3.gif"  align="left"/> 
                                          <a href="index.php?do=tags&act=edit&id=<!--{$view[i].id}-->&idpr=<!--{$smarty.request.idpr}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->" title="Eidt"> 
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

