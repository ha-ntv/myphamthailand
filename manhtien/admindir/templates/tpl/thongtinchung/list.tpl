 <div class="conten_body">
   <div class="conten">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">      
                    <!--{insert name="HearderCat" cid=$smarty.request.cid act=$smarty.request.act}-->               
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
                    <!--{if $checkPer1 eq "true" }-->
                          <div class="acti2"><img src="images/add.png" /> 
                            <a href="javascript:void(0)" title="Add" onclick="ChangeAdd('index.php?do=thongtinchung&act=add&cid=<!--{$smarty.request.cid}-->');">
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
                           <a href="javascript:void(0)" title="Delete" onclick="ChangeAction('index.php?do=thongtinchung&act=dellist&cid=<!--{$smarty.request.cid}-->');">
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
                               
                        <div class="acti2"><img src="images/order.png" /> 
                          <a href="javascript:void(0)" title="Order" onclick="ChangeAction('index.php?do=thongtinchung&act=order&cid=<!--{$smarty.request.cid}-->');">
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
                                      
                        </div>
                  <!--{/if}-->
                  
              </div>
            </div>
        </div>
      <div class="tbtitle2 link00" >
        <div class="left"></div> 
          <div class="right"></div>
         <form name="f" id="f" method="post"  action="index.php?do=thongtinchung&act=dellist&cid=1">
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
                               
                                <td width="12%" height="25"  align="center" class="brbottom brleft">
                                    <strong> Địa Điểm </strong>
                                </td>
                                
                                 <td width="20%" height="25"  align="center" class="brbottom brleft">
                                    <strong> Tiêu đề </strong>
                                </td>
                                
                                 <td  height="25"  align="center" class="brbottom brleft">
                                    <strong> Nội dung </strong>
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
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	<!--{insert name="NameCity" city_id=$view[i].idcity}-->
                            </td>
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                             	<!--{$view[i].name_vn}-->
                            </td>
                            
                            <td  align="left" class="brleft paleft pa_t_b  brbottom linkblack">
                            	<div class="showhide" id="newboxes<!--{$view[i].id}-->">
                             	 	<!--{$view[i].content_vn}-->
                                </div>
                                <a href="javascript:showonlyone('<!--{$view[i].id}-->');" class="anhien" id="anhien<!--{$view[i].id}-->" >Xem thêm</a>
                                
                                <script>
									    function showonlyone(id) {
											var thechosenone = "newboxes"+id;
											 $('.showhide').each(function(index) {
												if ($(this).attr("id") == thechosenone) {
													if($(this).hasClass("showhide1")==false){
														$(this).addClass( "showhide1" );
														$('#anhien'+id).text('Ẩn Đi');
														
													}
													else{
														$(this).removeClass( "showhide1" );
														$('.anhien').text('Xem thêm');
														
													}
												}
												
												else {
													if($(this).hasClass("showhide1")==true){
														$('.anhien').text('Xem thêm');
														$(this).removeClass( "showhide1" );
													}
												}					  
																		  
											 });
										}
								</script>
                            </td>
                           

                           
                            <td  align="center" class="brleft paleft pa_t_b  brbottom">
							
                            	<!--{if $checkPer2 eq "true" }-->
                                    <div class="acti">
                                        <img src="images/icon3.gif"  align="left"/> 
                                          <a href="index.php?do=thongtinchung&act=edit&id=<!--{$view[i].id}-->&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->" title="Eidt"> 
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

