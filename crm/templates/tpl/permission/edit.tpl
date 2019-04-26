<div class="WrapContent">
	<div class="dashboardBox">
		<div class="homeTtile">
        	Phân Quyền <!--{$viewuser.username}-->
        </div>
       	<form name="allsubmit" id="allsubmit" action="<!--{$path_url}-->/permission/editsm/" method="post" enctype="multipart/form-data">
            <table width="100%" border="0">
                <tr>
                    <td align="left" valign="middle" class="k-header First"> Tên </td>
                    <td width="10%" align="center" valign="middle" class="k-header" onclick="checkadd();" >
                    	View <br /><input type="checkbox" onclick="checkview();"  name="viewcheck"/> 
                    </td>
                    <td width="10%" align="center" valign="middle" class="k-header" onclick="checkadd();" >
                    	Add <br /><input type="checkbox" onclick="checkadd();"  name="addcheck"/> 
                    </td>
                    <td width="10%" align="center" valign="middle" class="k-header" onclick="checkedit();">
                    	Edit <br /><input type="checkbox" onclick="checkedit();"  name="editcheck"/> 
                    </td>
                    <td width="10%" align="center" valign="middle" class="k-header" onclick="checkdel();">
                    	Del <br /><input type="checkbox" onclick="checkdel();"  name="delcheck"/> 
                    </td>
                    <td width="10%" align="center" valign="middle" class="k-header" onclick="checkallc();">
                    	All <br /><input type="checkbox" onclick="checkall();"  name="allcheck"/> 
                    </td>
                </tr>
                <!--{$view}-->
             </table>
       		 <input type="hidden" name="id" value="<!--{$viewuser.id}-->" />
         </form>                     

        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="right" class="k-header-page"> 
                	<div class="BtSummit">
                        <a title="Lưu" class="kv2Btn kvsaveBtn" href="javascript:void(0)" onclick="return SubmitFrom();">
                            <i class="fa fa-floppy-o"></i> Lưu 
                        </a>
                       
                    </div> 
                 </td>
            </tr>
         </table>
  
    </div>   
</div>
<script language="javascript">
function SubmitFrom(){
	document.allsubmit.submit();
}
function checkview(){
	var check=document.allsubmit;
	if(document.allsubmit.viewcheck.checked == true)
	{
		//for(var i=1;i<20;i++)
		for(var i=1;i<check.length;i++)
		{
			document.getElementById("checkview"+i).checked = true;
		}
	}
	else
	{
		for(var i=1;i<check.length;i++)
		{
			document.getElementById("checkview"+i).checked = false;
		}
	}
}

function checkadd(){
	var check=document.allsubmit;
	if(document.allsubmit.addcheck.checked == true)
	{
		//for(var i=1;i<20;i++)
		for(var i=1;i<check.length;i++)
		{
			document.getElementById("checkadd"+i).checked = true;
		}
	}
	else
	{
		for(var i=1;i<check.length;i++)
		{
			document.getElementById("checkadd"+i).checked = false;
		}
	}
}
function checkedit(){
	var check=document.allsubmit;
	if(document.allsubmit.editcheck.checked == true)
	{
		for(var i=1;i<check.length;i++)
		{
			document.getElementById("checkedit"+i).checked = true;
		}
	}
	else
	{
		for(var i=1;i<check.length;i++)
		{
			document.getElementById("checkedit"+i).checked = false;
		}
	}
}
function checkdel(){
	var check=document.allsubmit;
	if(document.allsubmit.delcheck.checked == true)
	{
		for(var i=1;i<check.length;i++)
		{
			document.getElementById("checkdel"+i).checked = true;
		}
	}
	else
	{
		for(var i=1;i<check.length;i++)
		{
			document.getElementById("checkdel"+i).checked = false;
		}
	}
}
function checkall(){
	var check=document.allsubmit;
	if(document.allsubmit.allcheck.checked == true)
	{
		for(var i=1;i<check.length;i++)
		{
			document.getElementById("checkall"+i).checked = true;
		}
	}
	else
	{
		for(var i=1;i<check.length;i++)
		{
			document.getElementById("checkall"+i).checked = false;
		}
	}
}

</script>