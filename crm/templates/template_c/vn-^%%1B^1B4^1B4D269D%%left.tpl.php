<?php /* Smarty version 2.6.6, created on 2016-01-28 04:21:25
         compiled from ./left.tpl */ ?>
<div class="Left">
    <div class="LeftAll">
        <h3 class="leftTitle">Tìm kiếm</h3>
        <ul>
            <li class="Fisrt" style="padding:0 8px;">
                <form onsubmit="return checkSearch();" >
                	<input type="text" id="codes" name="codes" value="<?php echo $this->_tpl_vars['codes']; ?>
"  placeholder='Tìm theo Serial/IMEI'  class="W100 mb10"/>
                	<input type="text" id="dateds" name="dateds" value="<?php echo $this->_tpl_vars['dateds']; ?>
"  placeholder='Tìm theo ngày nhập'  class="W100 mb10"/>
                    
                    <select id="idpartners" name="idpartners" class="W100">
                    	<option value="0">----Chọn đối tác----</option>
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['partnerList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    		<option <?php if ($this->_tpl_vars['partnerList'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['idpartner']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['partnerList'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['partnerList'][$this->_sections['i']['index']]['name']; ?>
</option>
                        <?php endfor; endif; ?>    
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
						$("#codes").autocomplete("<?php echo $this->_tpl_vars['path_url']; ?>
/ajax/get_course_list.php?type=serial&table=serial&name=code", {
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
						$.post('<?php echo $this->_tpl_vars['path_url']; ?>
/ajax/Checkip.php',{codes:codes,dateds:dateds,idpartners:idpartners,act:'search'},function(data) {	
							var url = '<?php echo $this->_tpl_vars['path_url']; ?>
/serial/2/0/search/';																			  
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