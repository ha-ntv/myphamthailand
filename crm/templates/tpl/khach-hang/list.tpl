<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <!--{insert name="HearderCat" cid=$smarty.request.cat1 act=$smarty.request.do root=1}-->
                <span class="subconten"><img style="margin-top:9px" src="<!--{$path_url}-->/images/icon.gif"></span>
                 <span class="subconten">		
					<a href="<!--{$path_url}-->/khach-hang/<!--{$smarty.request.cat1}-->/0/">Nhà cung cấp</a> 
				</span>
            </div>
            <div class="TitleRight">
            	<!--{if $checkPer1 eq "true" }-->
                    <a title="Thêm mới" class="kv2Btn" href="<!--{$path_url}-->/khach-hang/<!--{$smarty.request.cat1}-->/0/add/">
                        <i class="fa fa-plus"></i> Thêm mới 
                    </a>
                <!--{else}-->
                	 <a class="kv2Btn colorxam">
                        <i class="fa fa-plus colorxam"></i> Thêm mới 
                    </a>
                <!--{/if}--> 
                
                
                <a title="Thêm mới" class="kv2Btn" href="javascript:void(0)">
                    : &nbsp; &nbsp; &nbsp;  
                </a>
            </div>
            <div class="Clear"></div>
       </div>
        
       <table width="100%" border="0">
            <tr>
                <td class="k-header First">Stt</td>
                <td class="k-header">Tên</td>
                <td class="k-header">Phone</td>
                <td class="k-header">Email</td>
                <td class="k-header" align="center">Del/edit</td>
            </tr>
            <!--{section name=i loop=$view}--> 
                 
                <tr class="<!--{cycle values='trColorOne,trColorTwo'}-->">
                    <td>
                        <!--{$smarty.section.i.index+1+$number}-->
                    </td>
                    <td>
                        <!--{$view[i].name}-->
                    </td>
                    <td>
                        <!--{$view[i].phone}-->
                    </td>
                    
                    <td>
                         <!--{$view[i].email}-->
                    </td>
                    
                    <td align="center">
                    	<!--{if $checkPer3 eq "true" }-->	
                            <a title="Xóa" href="javascript:void(0)" onclick="Dele('<!--{$path_url}-->/khach-hang/<!--{$smarty.request.cat1}-->/0/delete/<!--{$view[i].id}-->/');">
                                <i class="fa fa-trashlist"></i>
                            </a>
                         <!--{else}-->
                            <i class="fa fa-trashlist colorxam"></i>
                        <!--{/if}--> 
                   		
                        <!--{if $checkPer2 eq "true" }-->      
                            <a href="<!--{$path_url}-->/khach-hang/<!--{$smarty.request.cat1}-->/0/edit/<!--{$view[i].id}-->/" title="Sửa">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>   
                        <!--{else}-->
                            <i class="fa fa-pencil-square-o colorxam"></i>
                        <!--{/if}-->
                        
                    </td>
                </tr>
            <!--{/section}-->
        </table>
     <!--{if $link_url neq ''}-->
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr>
                <td align="right" class="k-header-page"> <!--{$link_url}--> </td>
            </tr>
        </table>
    <!--{/if}-->
    </div>
    <!--{include file="./left.tpl"}-->
</div>