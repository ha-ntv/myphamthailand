<div class="WrapContent">
	<div class="dashboardBox">
		<div class="homeTtile">
        	Quảng lý người dùng
            <div class="TitleRight Fr">
                <a title="Thêm mới" class="kv2Btn" style="font-size:11px; line-height:23px !important; right:-8px; top:-5px;" href="<!--{$path_url}-->/users/add/">
                    <i class="fa fa-plus"></i> Thêm mới 
                </a>
            </div>
        
        </div>
       	<form name="f" id="f" method="post">
            <table width="100%" border="0">
                <tr>
                    <td class="k-header First">STT</td>
                    <td class="k-header">Username</td>
                    <td class="k-header">Full Name</td>
                    <td class="k-header">
                    	<select name="idCity" style="width:100%; text-transform:capitalize" onchange="showCity(this.value)">
                            <option value="">----Khu Vực----</option>
                            <!--{section name=i loop=$cityHome}-->
                                <option <!--{if $cityHome[i].id eq $cityShow}-->selected="selected"<!--{/if}--> value="<!--{$cityHome[i].id}-->"><!--{$cityHome[i].name}--></option>
                            <!--{/section}-->
                        </select>
                        <script type="text/javascript">
                            function showCity(id){
                                $(location).attr('href','<!--{$path_url}-->/users/'+id+'/');   
                            }
                        </script>
                    </td>
                    <td class="k-header">Permission</td>
                    <td class="k-header" align="center">Edit/Del</td>
                </tr>
                <!--{section name=i loop=$view}-->
                    <tr class="<!--{cycle values='trColorOne,trColorTwo'}-->">
                        <td>
                            <!--{$smarty.section.i.index+1}-->
                        </td>
                        <td>
                            <!--{$view[i].username}-->
                        </td>
                        <td>
                            <!--{$view[i].name}-->
                        </td>
                        <td>
                            <!--{insert name="getNameWeb" id=$view[i].idcity table="city" typename="name"}-->
                        </td>
                        <td align="center"> 
                            <a href="<!--{$path_url}-->/permission/<!--{$view[i].id}-->/" title="Edit"> 
                            	<i class="fa fa-lock"></i> 
                            </a>
                        </td>
                        <td align="center">
                            <a title="Xóa" href="javascript:void(0)" onclick="Dele('<!--{$path_url}-->/users/dellist/<!--{$view[i].id}-->/');">
                                <i class="fa fa-trashlist"></i>
                            </a>
                        
                            <a href="<!--{$path_url}-->/users/edit/<!--{$view[i].id}-->/" title="Edit"> 
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                            
                        </td>
                    </tr>
                <!--{/section}-->                   
             </table>
       
         </form>                     
          <!--{if $link_url neq ''}-->
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="right" class="k-header-page"> <!--{$link_url}--> </td>
                </tr>
             </table>
          <!--{/if}-->  
    </div>   
</div>