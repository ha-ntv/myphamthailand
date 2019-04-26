<?php /* Smarty version 2.6.6, created on 2016-03-03 01:49:25
         compiled from login.tpl */ ?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="NOINDEX, NOFOLLOW" />
<style type="text/css">
html, body {
	height: 100% !important;
}
body {
	text-align: center;
	background-color: #EEEEEE;
	background-image: url('<?php echo $this->_tpl_vars['path_url']; ?>
/images/admin_login.gif');
	background-repeat: no-repeat;
	background-position: center center;
}
div.box {
	border: 1px dashed #AAAAAA;
	padding: 15px 2px;
	background: #FFFFFF;
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
    width: 550px;
	min-height:60px;
}
td.login {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
}


input.text {
	font-family: arial, tahoma, verdana, serif;
	font-size: 12px; 
	
}
</style>


<title>Administrator</title>
</head>
<body>
<table style="width: 100%; height: 100%;" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
           <form name="login" method="post" action="<?php echo $this->_tpl_vars['path_url']; ?>
/login/sm/">
            <div class="box">
                <table cellpadding="0" cellspacing="0">
                	<tr>
                        <td class="login" >
                        	CHỌN ĐỊA ĐIỂM &nbsp;
                        </td>
                        <td class="login" colspan="3" align="left">
                        	<select name="city" id="city"  style="width:150px; height:24px">
                         		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['cityHome']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                    <option <?php if ($_SESSION['admin_showCity'] == $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['id']): ?>selected<?php endif; ?> value="<?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['id']; ?>
"> 
                                        <?php echo $this->_tpl_vars['cityHome'][$this->_sections['i']['index']]['name']; ?>
 
                                    </option>   
                            	<?php endfor; endif; ?>
                            </select>
                        </td>
                    </tr>
                    <tr height="10">
                        <td class="login" colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="login">
                        	USERNAME: &nbsp;
                        </td>
                        <td class="login">
                        	<input class="text" name="username" id="username" maxlength="50" type="text"> &nbsp;
                        </td>
                        <td class="login">
                        	PASSWORD: &nbsp;
                        </td>
                        <td class="login" colspan="2">
                        	<input class="text" name="password" id="password" maxlength="50" type="password"> &nbsp;
                        </td>
                        
                       
                    </tr>
                   <tr> <td class="login">&nbsp;</td></tr>
                     <tr>
                        <td class="login">
                        	SECURITY: &nbsp;
                        </td>
                        <td class="login">
                        	<input class="text" name="security_code" id="security_code" maxlength="50" type="text"> &nbsp;
                            
                        </td>
                       
                       <td class="img">
                        	<img class="Img" src="<?php echo $this->_tpl_vars['path_url']; ?>
/CaptchaSecurityImages.php?width=100&height=40&characters=6"/>
                        </td>
                        <td class="login">
                        
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input value="Login" type="submit"  >
                        </td>
                    </tr>
                    
                    
                    
                </table>
               
			</div>
            </form>
        </td>
    </tr>
</table>