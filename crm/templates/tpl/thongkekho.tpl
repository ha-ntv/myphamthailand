<form  name="thongke" method="post" action="<!--{$path_url}-->/thong-ke/" >
     <select id="actthongke" name="actthongke">
        <!--{section name=i loop=$thongke}-->
            <option <!--{if $thongke[i].id eq $idthongke}-->selected="selected"<!--{/if}--> value="<!--{$thongke[i].id}-->"><!--{$thongke[i].name}--></option>
        <!--{/section}--> 
    </select>
    
    <input type="text" id="FromDate" name="FromDate" value="<!--{$FromDate}-->"  placeholder='Từ ngày' />
    <input type="text" id="ToDate" name="ToDate" value="<!--{$ToDate}-->"  placeholder='Đến ngày'/>
    <a title="Thêm mới" class="kv2Btn" href="javascript:void(0)" onclick="thongkeSubmit()">
        <i class="fa fa-search"></i> Tìm kiếm   
    </a>
</form>
<script language="javascript">
    $(document).ready(function(){
        $("#FromDate").datepicker({changeMonth: true, changeYear: true,dateFormat:"yy-mm-dd"});
        $("#ToDate").datepicker({changeMonth: true, changeYear: true,dateFormat:"yy-mm-dd"});
    });
    function thongkeSubmit(){
        document.thongke.submit();
    }
</script>