 <div class="conten_body">
   <div class="conten">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">      
                                
                </div>
          </div>
        </div>
        <div class="raised"> 
            <b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b></b>           
            <div class="boxcontent">
            	<form name="search" action="" method="post" enctype="multipart/form-data"> 
                    <table width="100%" border="0" cellspacing="4" cellpadding="0">
                      <tr>
                        <td width="15%" align="left" valign="bottom">
                            Mã SP:
                          <input type="text" style="width:120px;" name="codes" value="<!--{$codes}-->"  />
                        </td>
                        <td width="20%" align="left" valign="bottom">
                           Show/Hide : 
                           <select name="showhide">
                                <option value="">-----------All-----------</option>
                                <option value="1" <!--{if $showhide eq 1}--> selected="selected" <!--{/if}--> >Hoạt động</option>
                                <option value="2" <!--{if $showhide eq 2}--> selected="selected" <!--{/if}-->>Không hoạt động</option>
                                
                           </select>
                           
                        </td>
                        
                         <td width="20%" align="left" valign="bottom">
                           Tình trạng : 
                           <select name="types">
                                <option value="">-----------All-----------</option>
                                <option value="1" <!--{if $types eq 1}--> selected="selected" <!--{/if}--> >Còn hàng</option>
                                <option value="2" <!--{if $types eq 2}--> selected="selected" <!--{/if}--> >Hết hàng</option>   
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
          
                                
                                <td width="8%" height="25" align="center" class="brbottom brleft">
                                    <strong>SHOW/HIDE </strong>
                                </td> 
                                 <td width="12%" height="25" align="center" class="brbottom brleft">
                                    <strong>Color/Size</strong>
                                </td> 
                                
                                <td width="12%" height="25" align="center" class="brbottom brleft">
                                    <strong>Phụ Kiện SP</strong>
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
                                <input type="text" name="ordering[]" class="InputOrder"  value="<!--{$view[i].num}-->" size="2">
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

                            <td  align="center" class="brleft pa_t_b  brbottom">
                               <!--{if $view[i].active eq "1"}-->
                                    <img src="images/active.png" alt="Show\Hide"  />
                                 <!--{else}--> 
                                    <img src="images/hide.png" alt="Show\Hide"  />
                                 <!--{/if}-->
                            </td>
                            
                            <td  align="center" class="brleft paleft pa_t_b  brbottom">
							
                            	<!--{if $checkPer2 eq "true"  }-->
                                  <img src="images/add.png">
                                  <a href="index.php?do=colorsize&act=list&idpr=<!--{$view[i].id}-->&cid=<!--{$view[i].cid}-->&p=<!--{$smarty.request.p}-->" title="Copy">
                                  	Thêm
                                  </a>
                                    
                                <!--{else}-->
                                  <img src="images/add.png">
                                  <a> 
                                    Thêm
                                  </a>
                                    
                                <!--{/if}-->  
                                (<!--{insert name="getCountColorSize" id=$view[i].id}-->)
                            </td>
                            
                             <td  align="center" class="brleft paleft pa_t_b  brbottom">
							
                            	<!--{if $checkPer2 eq "true"  }-->
                                  <img src="images/add.png">
                                  <a href="index.php?do=products&act=copy&id=<!--{$view[i].id}-->&cid=<!--{$view[i].cid}-->&p=<!--{$smarty.request.p}-->" title="Copy">                                      Thêm
                                  </a>
                                    
                                <!--{else}-->
                                  <img src="images/add.png">
                                  <a> 
                                    Thêm
                                  </a>
                                    
                                <!--{/if}-->  
       
                            </td>
                            
                            <td  align="center" class="brleft paleft pa_t_b  brbottom">
							
                            	<!--{if $checkPer2 eq "true" }-->
                                    <div class="acti">
                                        <img src="images/icon3.gif"  align="left"/> 
                                          <a href="index.php?do=products&act=edit&id=<!--{$view[i].id}-->&cid=<!--{$view[i].cid}-->&p=<!--{$smarty.request.p}-->" title="Eidt"> 
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

