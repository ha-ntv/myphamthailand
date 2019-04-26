 <div class="conten_body">
   <div class="conten">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">      
                    <!--{insert name="HearderCat" cid=$smarty.request.cid act=$smarty.request.act}--> 
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                    <span class="subconten"><!--{$view.name_vn}--></span>
                    <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                    <span class="subconten">Copy sản phẩm</span>              
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
                    <div class="acti2"><img src="images/copy.png" /> 
                      <a href="javascript:void(0)" title="Order" onclick="ChangeAction('index.php?do=products&act=copysm&id=<!--{$smarty.request.id}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->');">
                            Copy
                        </a> 
                                  
                    </div>
                   
              </div>
            </div>
        </div>
      <div class="tbtitle2 link00" >
        <div class="left"></div> 
          <div class="right"></div>
         <form name="f" id="f" method="post"  action="index.php?do=products&act=copysm&id=<!--{$smarty.request.id}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->"> 
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>
                        <table class="br1"  style="border-bottom:0px" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="5%" height="25" align="center" class="brbottom"></td>
                                
                                <td  height="25"  align="center" class="brbottom brleft">
                                    <strong> NAME </strong>
                                </td>
                          </tr>
                          
                         
                          <!--{section name=i loop=$copy}--> 
                          	<!--{if $smarty.section.i.index%2 eq 0}-->
                               <!--{assign var="class" value="bgno"}--> 
                            <!--{else}-->
                                <!--{assign var="class" value="bgf2"}-->
                           <!--{/if}-->      
                           <tr class="<!--{cycle values='bgno,bgf2'}-->"  onmouseout="this.className='<!--{$class}-->'" onmouseover="this.className='bgonmose'" id="g<!--{$view[i].mspid}-->">
                                <td align="left" class="brleft pa_t_b  brbottom" style="font-size:16px; color:#005EBB; background:#CCCCFF; text-transform:uppercase" colspan="2">
                                   &nbsp;&nbsp;&nbsp;&nbsp;<!--{$copy[i].name_vn}-->
                                </td>
                                
                           </tr>  
                           <!--{insert name="CopyNews" cid_share=$cid_share id=$copy[i].id cidother=$cidother num=$smarty.section.i.index}-->
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
