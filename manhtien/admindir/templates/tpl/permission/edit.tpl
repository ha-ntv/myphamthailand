 <div class="conten_body">
   <div class="conten">
        <div class="divtitle">
            <div class="divleft">
                <div class="divright">   
                <span class="subconten">
                	<a title="Admin" href="index.php?do=users">		
						Phân Quyền User
					</a> 
                </span>  
                <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span> 
                <span class="subconten">
                    <a>		
                        <!--{$viewuser.username}-->
                    </a> 
                </span>
                               
                </div>
          </div>
        </div>
        
         
      <div class="tbtitle2 link00" >
        <div class="left"></div> 
          <div class="right"></div>
         <form name="allsubmit" id="allsubmit" action="index.php?do=permission&act=editsm" method="post" enctype="multipart/form-data">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>
                        <table class="br1"  style="border-bottom:0px" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="60%" height="25" align="left" class="brbottom brleft">
                                    <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tên</strong>
                                </td>
                                
                                <td  width="7%" height="25"  align="center" class="brbottom brleft">
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" onclick="checkadd();"  name="addcheck"/> <strong>Add </strong> 
                                </td>
                                <td width="7%" height="25" align="center" class="brbottom brleft">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" onclick="checkedit();"  name="editcheck"/> <strong>Edit</strong>
                                </td>                    
                                <td width="7%" height="25" align="center" class="brbottom brleft">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" onclick="checkdel();"  name="delcheck"/> <strong>Del</strong>
                                </td>
                                <td width="7%" height="25" align="center" class="brbottom brleft">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" onclick="checkall();"  name="allcheck"/> <strong>All</strong>
                                </td>
                          </tr>                         
                        <!--{$viewMpms}-->    
                        <!--{$view}-->
                        <!--{$viewOrther}-->    
                        
                                                        
                      </table>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        
                    </td>
                  </tr>
                </table>
             
      </div>
      
      <div class="tbtitle2">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
               <tr> 
                  <td valign="top" width="70%" align="center" colspan="2">
                    <div class="divtitle">
                        <div class="divleft">
                            <div class="divright divseo">
                            	<input type="hidden" name="id" value="<!--{$viewuser.id}-->" />
                                 <input type="submit" value="  Save " />
                            </div>
                      </div>
                    </div>
                   
                  </td>
              </tr>
          </table>
        </div> 
        
      <div class="clear"></div>
    </div>
  </form>  
</div>

<script language="javascript">
function SubMit(){
	document.allsubmit.submit();
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