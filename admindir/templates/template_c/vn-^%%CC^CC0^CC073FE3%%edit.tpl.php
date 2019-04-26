<?php /* Smarty version 2.6.6, created on 2017-10-25 14:26:30
         compiled from ykienkhachhang/edit.tpl */ ?>
<div class="conten_body">
        <div class="conten margin10">
            <div class="divtitle">
                <div class="divleft">
                    <div class="divright">
                        <span class="subconten"><a title="VietAnhMobile" href="index.php?do=categories&cid=1&root=1">		
                            VietAnhMobile 
                        </a> </span>  <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                    
                        <span class="subconten"><a title="Menu" href="index.php?do=categories&cid=2&root=1">		
                            Menu 
                        </a> </span>  <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                    	
                        <span class="subconten"><a title="Menu" href="index.php?do=ykienkhachhang&act=list">		
                            Ý kiến khách hàng 
                        </a> </span>  <span class="subconten"><img style="margin-top:13px" src="images/icon.gif"></span>
                        
                        <span class="subconten">
                            View
                        </span>  
                     </div>
              </div>
            </div>              	
       
            <table  width="100%" border="0" cellspacing="15" cellpadding="0">
               
    			 <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Name</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<?php echo $this->_tpl_vars['edit']['name']; ?>
"  class="InputText" />
                        </td>
                  </tr>
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Email</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<?php echo $this->_tpl_vars['edit']['email']; ?>
"  class="InputText" />
                        </td>
                  </tr>
                  
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Phone</strong> 
                       </td>
                        <td valign="top" width="70%" align="left">                          
                           <input type="text" value="<?php echo $this->_tpl_vars['edit']['phone']; ?>
" class="InputText" />
                        </td>
                  </tr>


                                   
                  <tr>
                       <td width="30%"  valign="top" align="right">
                           <strong>Ý kiến khách hàng</strong> 
                       </td>
                       
                        <td valign="top" width="70%" align="left">                          
                         	<textarea class="InputTextarea"  name="short_vn"><?php echo $this->_tpl_vars['edit']['content']; ?>
</textarea>
                        </td>
                  </tr>
                 
                  
            </table>
          <div class="clear"></div>
        </div>
        
    </div>