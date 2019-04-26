<div class="WrapContent">
    <div class="Right">
        <div class="AllTitle">
            <div class="TitleLeft">
                <!--{insert name="HearderCat" cid=$smarty.request.cat1 act=$smarty.request.do root=1}-->
            </div>
            <div class="TitleRight">
            	<!--{include file="./thongkekho.tpl"}-->
            <!--
                <a title="Thêm mới" class="kv2Btn" href="javascript:void(0)">
                    <i class="fa fa-plus"></i> Thêm mới 
                </a>
                <a title="Thêm mới" class="kv2Btn" href="javascript:void(0)">
                    <i class="fa fa-sign-in"></i> Import 
                </a>
                <a title="Thêm mới" class="kv2Btn" href="javascript:void(0)">
                    <i class="fa fa-sign-out"></i> Xuất file 
                </a>
                <a title="Thêm mới" class="kv2Btn" href="javascript:void(0)">
                    : &nbsp; &nbsp; &nbsp;  
                </a>
                -->
            </div>
            <div class="Clear"></div>
       </div>
        
       <table width="100%" border="0">
            <tr>
                <td class="k-header First">Stt</td>
                <td class="k-header">Tên dòng sản phẩm </td>
            </tr>
            <!--{section name=i loop=$view}--> 
                 <!--{insert name="GetNameComponent" comp=$view[i].comp assign="comp"}-->
                <tr class="<!--{cycle values='trColorOne,trColorTwo'}-->" <!--{if $view[i].has_child eq 0}--> onclick="location.href='<!--{$path_url}-->/<!--{$comp.front_link}-->/<!--{$view[i].id}-->/'" <!--{/if}-->>
                    <td>
                        <!--{$smarty.section.i.index+1+$number}-->
                    </td>
                    <td>
                        <!--{$view[i].name_vn}-->
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