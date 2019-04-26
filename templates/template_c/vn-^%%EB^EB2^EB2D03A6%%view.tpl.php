<?php /* Smarty version 2.6.6, created on 2019-03-21 09:06:36
         compiled from submenu/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'countSearchPr', 'submenu/view.tpl', 61, false),)), $this); ?>
 <!---Content-->

<div class="breadcrumbs">

    <div class="container">

        <div class="row">

            <div class="col-xs-12">		

                <div class="breadcrumb">

                    <?php echo $this->_tpl_vars['linkTitle']; ?>


                    <div class="clear"></div>

                </div>

            </div>

        </div>

    </div>

</div>



<div class="container mt20">

    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">

            <div class="block_products_filter  block">

                <h2 class="block_title pull-left">

                    <span>Tìm theo</span>

                </h2>

                <div class="arrow-right pull-left"></div>

                <div class="block_product_filter">

                    <div class="pull-left">

                       
                       <!--
                        <div class="field_item">

                        	<div class="field_name normal">Hãng sản xuất</div>

                            <div class="field_label">

                            	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['searchHang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                            	<div class="search_title">

                                	<a title="<?php echo $this->_tpl_vars['searchHang'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
" href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['searchHang'][$this->_sections['i']['index']]['unique_key']; ?>
/"><?php echo $this->_tpl_vars['searchHang'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
</a> (<span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'countSearchPr', 'id' => $this->_tpl_vars['searchHang'][$this->_sections['i']['index']]['id'])), $this); ?>
</span>)

                                </div>

                                <?php endfor; endif; ?>

                            </div>

                        </div>
                       
                        -->
                        

                        <div class="field_item">

                            <div class="field_name normal">Giá</div>

                                <div class="field_label">

                                	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['searchPrice']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                                        <div class="searchPrice">

                                            <a href="javascript:void(0)" onclick="searchPrice('<?php echo $this->_tpl_vars['searchPrice'][$this->_sections['i']['index']]['unique_key']; ?>
','<?php echo $this->_tpl_vars['seo']['id']; ?>
')" title="<?php echo $this->_tpl_vars['searchPrice'][$this->_sections['i']['index']]['title']; ?>
"><?php echo $this->_tpl_vars['searchPrice'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
</a>

                                        </div>

                                    <?php endfor; endif; ?>

                               </div>

                          </div>

                          
                        <!--
                          <div class="field_item">

                            <div class="field_label_checkbox">

                                <h3 id="newCheck">

                                    <a onclick="searchPrice('moi','<?php echo $this->_tpl_vars['seo']['id']; ?>
')" href="javascript:void(0)">

                                        <span><i class="caret"></i>Mới</span>

                                    </a>

                               </h3>

                               <h3 id="oldCheck">

                                    <a onclick="searchPrice('cu','<?php echo $this->_tpl_vars['seo']['id']; ?>
')" href="javascript:void(0)">

                                        <span><i class="caret"></i>Hàng trưng bày</span>

                                    </a>

                               </h3>

                               

                               <h3 id="quocteCheck">

                                    <a onclick="searchPrice('quocte','<?php echo $this->_tpl_vars['seo']['id']; ?>
')" href="javascript:void(0)">

                                        <span><i class="caret"></i>Quốc tế</span>

                                    </a>

                               </h3>

                               <h3 id="lockCheck">

                                    <a onclick="searchPrice('lock','<?php echo $this->_tpl_vars['seo']['id']; ?>
')" href="javascript:void(0)">

                                        <span><i class="caret"></i>Lock</span>

                                    </a>

                               </h3>

                               

                            </div>

                      	</div>

                       -->

                        <div class="pull-right sort-follow">

                            <div class="sort-follow-active">

                                <span>Sắp xếp theo</span>                                                                  

                            </div>

                            <ul>	

                                <li>

                                	<a onclick="searchPrice('desc','<?php echo $this->_tpl_vars['seo']['id']; ?>
')" href="javascript:void(0)">

                                    	Giá cao đến thấp

                                    </a>

                                </li>

                                

                                <li>

                                	<a onclick="searchPrice('asc','<?php echo $this->_tpl_vars['seo']['id']; ?>
')" href="javascript:void(0)">

                                    	Giá thấp đến cao

                                    </a>

                                </li> 

                            </ul>		

                        </div>

                        <div class="clear"></div>

                        <script type="text/javascript">

							function searchPrice(strPrice,cid){

								if(strPrice=='cu'){

									$('#oldCheck').addClass("active");

									$('#newCheck').removeClass("active");

									$('#quocteCheck').removeClass("active");

									$('#lockCheck').removeClass("active");

								}

								else if(strPrice=='moi'){

									$('#newCheck').addClass("active");

									$('#oldCheck').removeClass("active");

									$('#quocteCheck').removeClass("active");

									$('#lockCheck').removeClass("active");

								}

								else if(strPrice=='quocte'){

									$('#newCheck').removeClass("active");

									$('#oldCheck').removeClass("active");

									$('#quocteCheck').addClass("active");

									$('#lockCheck').removeClass("active");

								}

								else if(strPrice=='lock'){

									$('#newCheck').removeClass("active");

									$('#oldCheck').removeClass("active");

									$('#quocteCheck').removeClass("active");

									$('#lockCheck').addClass("active");

								}

								else{

									$('#newCheck').removeClass("active");

									$('#oldCheck').removeClass("active");

									$('#quocteCheck').removeClass("active");

									$('#lockCheck').removeClass("active");

								}

								

								$("#loadingAjax").show();

								$.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/getPage.php',{

									strPrice:strPrice,

									cid:cid,

									num_rows_page:<?php echo $this->_tpl_vars['num_rows_page']; ?>
,

									type:'searchSubmenu'

								},function(data) {

								var obj = jQuery.parseJSON(data);

								

								 if(obj.view != ''){ //loi 

								 	$("#loadingAjax").hide();

									$("#view").html(obj.view);

									$("#showPaging").html(obj.Pagelink);

									 return false;

								 }

								

								});

								return false;	

							}

						</script>

                    </div>

                </div>

            </div><!-- end tim kiem -->		

        </div>

    </div>

    

    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">	

            <div class="home">

                <div class="row">

                    <div class="col-sm-12">

                        



                        <!--Danh sách sản phẩm-->

                        <div class="box">	

                            <div class="productbox">

                            

                                <div class="productlist">

                                    <div class="border-right"></div>

                                    <?php if ($this->_tpl_vars['CheckNull'] == 0): ?>

                                         <p class="nodate">  Thông tin đang cập nhập! </p>

                                    <?php else: ?>

                                    <ul class="clearfix list-product-hot" id="view">

                                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['view']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "products/list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                                        <?php endfor; endif; ?>

                                    </ul>

                                    <?php endif; ?>

                                </div>	

                                

                                <?php if ($this->_tpl_vars['Checkpg'] == 1): ?> 

                                    <span id="showPaging">

                                        <?php echo $this->_tpl_vars['linkpg']; ?>


                                    </span>

                                <?php endif; ?> 	 

                                		 

                             </div>	   

                        </div>

                                   

                    </div>	  

                </div>		

            </div>

        </div>                

    </div>

</div>

<!---End Content-->