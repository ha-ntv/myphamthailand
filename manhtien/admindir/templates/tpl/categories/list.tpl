 <div class="conten_body">
   <div class="conten">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">      
                    <!--{insert name="HearderCat" cid=$smarty.request.cid root=$smarty.request.root act=$smarty.request.act}-->                
                </div>
          </div>
        </div>
        <div class="raised"> 
            <b class="top"><b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b></b>           
            <div class="boxcontent">
            	<form name="search" action="index.php?do=products" method="post" enctype="multipart/form-data"> 
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
         <div class="divtitle margin5">
            <div class="divleft">
                <div class="divright link00">
                    
                    <span style="float:left">
                        <strong>Tác Dụng:</strong> 
                    </span>
                   <!--{if $checkPer1 eq "true" }-->
                      <div class="acti2"><img src="images/add.png" /> 
                            <a href="javascript:void(0)" title="Add" onclick="return check_cat('index.php?do=categories&act=add&cid=<!--{$smarty.request.cid}-->&root=<!--{$smarty.request.root}-->');">
                                Thêm mới
                            </a> 
                        </div>
                    <!--{else}-->  
                        <div class="acti2"><img src="images/add-no.png" /> 
                            <a>
                                Thêm mới
                            </a> 
                        </div>	
                    <!--{/if}--> 
                     
                    <!--{if $checkPer3 eq "true" }-->
                        <div class="acti2"><img src="images/delete.png" /> 
                           <a href="javascript:void(0)" title="Delete" onclick="ChangeAction('index.php?do=categories&act=dellist&cid=<!--{$smarty.request.cid}-->&root=<!--{$smarty.request.root}-->');">
                                Xóa
                            </a> 
                        </div>
                    <!--{else}-->  
                        <div class="acti2"><img src="images/delete-no.png" /> 
                           <a>
                                Xóa
                            </a> 
                    <!--{/if}--> 
                    
                    <!--{if $checkPer2 eq "true" }-->
                        <div class="acti2"><img src="images/active.png" /> 
                           <a href="javascript:void(0)" title="Show" onclick="ChangeAction('index.php?do=categories&act=show&cid=<!--{$smarty.request.cid}-->&root=<!--{$smarty.request.root}-->')" >
                                Hoạt Động
                            </a> 
                        </div>
                        
                        <div class="acti2"><img src="images/inactive.png" /> 
                            <a href="javascript:void(0)" title="Hide" onclick="ChangeAction('index.php?do=categories&act=hide&cid=<!--{$smarty.request.cid}-->&root=<!--{$smarty.request.root}-->');">
                                Không Hoạt Động
                            </a> 
                                      
                        </div>
                                                 
                        <div class="acti2"><img src="images/order.png" /> 
                          <a href="javascript:void(0)" title="Order" onclick="ChangeAction('index.php?do=categories&act=order&cid=<!--{$smarty.request.cid}-->&root=<!--{$smarty.request.root}-->');">
                                Order
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
                                                 
                        <div class="acti2"><img src="images/order-no.png" /> 
                          <a>
                                Order
                            </a> 
                    <!--{/if}--> 
                   
                     
              </div>
            </div>
        </div>
      <div class="tbtitle2 link00" >
        <div class="left"></div> 
          <div class="right"></div>
          <form name="f" id="f" method="post"  action="index.php?do=categories&act=dellist&cid=1&root=1"  >
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
                                
                                <td width="8%" height="25"  align="center" class="brbottom brleft">
                                    <strong>ORDER</strong>
                                </td>
                                
                                <td height="25"  align="center" class="brbottom brleft">
                                    <strong>NAME </strong>
                                </td>
                                
                                <td width="18%" height="25" align="center" class="brbottom brleft">
                                    <strong> COMPONENT </strong>
                                </td>
                                <td width="15%" height="25" align="center" class="brbottom brleft">
                                    <strong>SubMenu</strong>
                                </td>
                                <td width="15%" height="25" align="center" class="brbottom brleft">
                                    <strong>Menu Thuộc Loại</strong>
                                </td>
                                
                                <td width="10%" height="25" align="center" class="brbottom brleft">
                                    <strong>SHOW/HIDE </strong>
                                </td>                                     
                                <td width="8%" height="25" align="center" class="brbottom brleft">
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
                            
                           
                               <!--{if $view[i].has_child eq 1 }-->
                               <td align="left" class="brleft paleft pa_t_b  brbottom linkblack TextUppercase">
                                   <a href="index.php?do=categories&cid=<!--{$view[i].id}-->&root=<!--{$smarty.request.root}-->" border="0">
                                        <!--{$view[i].name_vn}-->
                                    </a>
                                <!--{else}-->
                                <td align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                                    <!--{$view[i].name_vn}-->
                                <!--{/if}-->	
                            </td> 
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack TextComent">
                             	<!--{if $view[i].has_child eq "0"}-->
                                    <!--{insert name="GetNameComponent" comp=$view[i].comp assign="comp" }-->
                                    <a href="index.php<!--{$comp.back_link}-->&cid=<!--{$view[i].id}-->">
                                        <!--{$comp.name}-->
                                    </a>
                                <!--{/if}-->
                               
                            </td>
                            
                            
                            <td  align="center" class="brleft pa_t_b  brbottom">
                            	<!--{section name=j loop=$has_menu}-->
                                     <!--{if $view[i].has_menu eq $has_menu[j].id}-->
                                        <!--{$has_menu[j].name}-->
                                    <!--{/if}-->
                                 <!--{/section}-->
                               
                            </td>
                            
                            <td  align="center" class="brleft pa_t_b  brbottom">
                                 <!--{section name=j loop=$type}-->
                                     <!--{if $view[i].type eq $type[j].id}-->
                                        <!--{$type[j].name}-->
                                    <!--{/if}-->
                                 <!--{/section}-->
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
                               <!--{if $checkPer2 eq "true" }-->
                                    <img src="images/icon3.gif"  align="left"/> 
                                  <a href="index.php?do=categories&act=edit&id=<!--{$view[i].id}-->&cid=<!--{$smarty.request.cid}-->&root=<!--{$smarty.request.root}-->&p=<!--{$smarty.request.p}-->" title="Eidt"> Sửa</a>
                                <!--{else}-->
                                     <img src="images/icon3-no.png"  align="left"/> 
                                  <a> Sửa</a>
                                <!--{/if}-->  
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


<script language="javascript">
	function check_cat(url){
		jQuery.post('ajax/checkCat.php',{ 
		action: 'f',
		cid: <!--{$smarty.request.cid}-->
		},function(data){
			var obj = jQuery.parseJSON(data);
			if(obj.status == 'success'){
				document.location.href = url;
				return true;
			}
			else{
				alert('Không Thêm được nữa tạo tối đa là 2 cấp.');
			}
		});
		
	return false;
}
</script>

