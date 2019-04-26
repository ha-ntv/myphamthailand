<div class="Left">
    <div class="LeftAll">
        <h3 class="leftTitle">Tìm kiếm</h3>
        <ul>
            <li class="Fisrt" style="padding:0 8px;">
                <form onsubmit="return checkSearch();" >
                	<input type="text" id="codes" name="codes" value="<!--{$codes}-->"  placeholder='Tìm theo Serial/IMEI'  class="W100 mb10"/>
                	<input type="text" id="dateds" name="dateds" value="<!--{$dateds}-->"  placeholder='Tìm theo ngày nhập'  class="W100 mb10"/>
                    
                    <select id="idpartners" name="idpartners" class="W100">
                    	<option value="0">----Chọn đối tác----</option>
                        <!--{section name=i loop=$partnerList}-->
                    		<option <!--{if $partnerList[i].id eq $idpartner}-->selected="selected"<!--{/if}--> value="<!--{$partnerList[i].id}-->"><!--{$partnerList[i].name}--></option>
                        <!--{/section}-->    
                    </select>
                    
                    <div class="BtSummit">
                        <a style="font-size:12px; padding:0 10px; margin-top:8px;" title="Lưu" class="kv2Btn kvsaveBtn" href="javascript:void(0)" onclick="return checkSearch();">
                            <i class="fa fa-search"></i> Tìm kiếm 
                        </a>
                    </div> 
                    <input type="submit" class="SubmitSearch"  value="" />
                 </form>
                 <script language="javascript">
				 	$().ready(function() {
						$("#codes").autocomplete("<!--{$path_url}-->/ajax/get_course_list.php?type=serial&table=serial&name=code", {
							width: 260,
							matchContains: true,
							selectFirst: false
						});
					});
						
					$(document).ready(function(){
						$("#dateds").datepicker({dateFormat:"yy-mm-dd"});
					});
					
					function checkSearch(){
						var codes = $('#codes').val();
						var dateds = $('#dateds').val();
						var idpartners = $('#idpartners').val();
						$.post('<!--{$path_url}-->/ajax/Checkip.php',{codes:codes,dateds:dateds,idpartners:idpartners,act:'search'},function(data) {	
							var url = '<!--{$path_url}-->/serial/2/0/search/';																			  
							$(location).attr('href',url); 
						});
						return false;
					}
					
				</script>   
             </li>
        </ul>
    </div>
    
    <div class="LeftAll">
        <h3 class="leftTitle">Nhóm hàng 1</h3>
        <ul>
            <li>
                <a href="" title="">
                    Tất cả
                </a>
            </li>
            
            <li>
                <a href="" title="">
                    Iphone 4S
                </a>
            </li>
            
            <li>
                <a href="" title="">
                    Iphone 5S
                </a>
            </li>
            
            <li>
                <a href="" title="">
                    Iphone 6
                </a>
            </li>
            
             <li>
                <a href="" title="">
                    Iphone 6s
                </a>
            </li>
            
        </ul>
    </div>
    
    <div class="LeftAll">
        <h3 class="leftTitle">Nhóm hàng 2</h3>
        <ul>
            <li>
                <a href="" title="">
                    Tất cả
                </a>
            </li>
            
            <li>
                <a href="" title="">
                    Iphone 4S
                </a>
            </li>
            
            <li>
                <a href="" title="">
                    Iphone 5S
                </a>
            </li>
            
            <li>
                <a href="" title="">
                    Iphone 6
                </a>
            </li>
            
             <li>
                <a href="" title="">
                    Iphone 6s
                </a>
            </li>
            
        </ul>
    </div>
    
</div>