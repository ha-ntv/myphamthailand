<?php /* Smarty version 2.6.6, created on 2019-03-22 03:13:59
         compiled from main/main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'GetLinkDetail', 'main/main.tpl', 159, false),array('insert', 'getProductHome', 'main/main.tpl', 351, false),array('modifier', 'date_format', 'main/main.tpl', 175, false),)), $this); ?>
<div class="index_middle" >

    <div class="ContainerHeader" style="top:-4px; position:relative; z-index:100;">

        <div class="menu_cate" id="MenuBannerTop">

		<!-- MainMenu-->

			<ul class="menu_ver">

            	<?php echo $this->_tpl_vars['ListMenu']; ?>


			</ul>

        </div>

       

		<div class="banner_home">

    		<div id="owl-demo" class="owl-carousel">

                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['BannerLeft1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                    <div class="item">	

                        <a <?php if ($this->_tpl_vars['BannerLeft1'][$this->_sections['i']['index']]['link'] != ''): ?>href="<?php echo $this->_tpl_vars['BannerLeft1'][$this->_sections['i']['index']]['link'];  endif; ?>" >

                            <img src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['BannerLeft1'][$this->_sections['i']['index']]['img_vn']; ?>
"/>

                        </a>

                        <!-- <h3>BannerLeft1[i].name</h3>-->

                    </div>

                   

                <?php endfor; endif; ?>

                

            </div>

            

            <div class="Banner2All">

            	<div class="BannerLeft2">

                    <a <?php if ($this->_tpl_vars['BannerLeft2'][0]['link'] != ''): ?>href="<?php echo $this->_tpl_vars['BannerLeft2'][0]['link']; ?>
"<?php endif; ?> >

                        <img src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['BannerLeft2'][0]['img_vn']; ?>
"  class="img-responsive"  />

                    </a>

   				</div>

                

                <div class="BannerRight2">

                    <a <?php if ($this->_tpl_vars['BannerRight2'][0]['link'] != ''): ?>href="<?php echo $this->_tpl_vars['BannerRight2'][0]['link']; ?>
" <?php endif; ?>>

                        <img src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['BannerRight2'][0]['img_vn']; ?>
" class="img-responsive"/>

                    </a>

   				</div>

                

                

            </div>

            

		</div>

    </div>

</div> 

 

<div class="clear"></div> 

 <div class="container" style="margin-top:10px;">

		<div class="row">

       		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">	

				<div class="home">

					<div class="row">

						<div class="col-sm-12">			

                            <div class="block_content newslist_tabs">

                                <ul class="nav nav-tabs">

                                     <li class="active">

                                        <a data-toggle="tab" href="javascript:void(0)" onclick="getNewHomeKhuyenMai(11);"  title="Tin Mới Nhất">Tin Tức</a>

                                     </li>

                                      

                                     <li>

                                        <a data-toggle="tab" href="javascript:void(0)" onclick="getNewHomeKhuyenMai(91);" title="Tin Khuyến Mãi">Tin Khuyến Mãi</a>

                                     </li>

                                                

                                     <script language="javascript">

                                     	function getNewHomeKhuyenMai(cid){

											$.post('<?php echo $this->_tpl_vars['path_url']; ?>
/loading/getPage.php',{type:'newsHome',cid:cid},function(data) {

												 var obj = jQuery.parseJSON(data);

												 $('#myCarouselnews0').html(obj.view);

											});

											

										} 

                                     </script>

                                </ul>

                                

                                <!--slider banner 3-->

                                <div class="tab-content">

                                    <div id="section" class="tab-pane fade in active">

                                        <div id="myCarouselnews0" class="carousel slide">

                                            <!-- Carousel items -->

                                            <div class="carousel-inner">            			                		                																										

                                                <div class="row item active">

                                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['newsHome']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                                                	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'GetLinkDetail', 'cat' => $this->_tpl_vars['newsHome'][$this->_sections['i']['index']], 'lang' => $this->_tpl_vars['lang'], 'assign' => 'newHomeLink')), $this); ?>


                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt10">

                                                        <div class="media-box">

                                                             <a class="pull-left" href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['newHomeLink']; ?>
" title="<?php echo $this->_tpl_vars['newsHome'][$this->_sections['i']['index']]['title_link']; ?>
">

                                                             	<img width="102" height="102" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['newsHome'][$this->_sections['i']['index']]['img_thumb_vn']; ?>
" alt="<?php echo $this->_tpl_vars['newsHome'][$this->_sections['i']['index']]['alt_img']; ?>
" title="<?php echo $this->_tpl_vars['newsHome'][$this->_sections['i']['index']]['title_img']; ?>
" />

                                                            </a>

                                                            <div class="media-body">

                                                                <h4 class="media-heading">

                                                                    <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['newHomeLink']; ?>
" title="<?php echo $this->_tpl_vars['newsHome'][$this->_sections['i']['index']]['title_link']; ?>
"><?php echo $this->_tpl_vars['newsHome'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
 </a> <br /> <span class="dated">(<?php echo ((is_array($_tmp=$this->_tpl_vars['newsHome'][$this->_sections['i']['index']]['dated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
)</span> 

                                                                </h4>

                                                                <div style="height:55px;"><?php echo $this->_tpl_vars['newsHome'][$this->_sections['i']['index']][$this->_tpl_vars['short']]; ?>
</div>

                                                            </div>

                                                            <div class="clear"></div>

                                                        </div>

                                                    </div>                                                                                                                                                                               				

                                                <?php endfor; endif; ?>	

                                                </div>

                                                

                                                <div class="row item">

                                                    

                                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['newsHome1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                                                	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'GetLinkDetail', 'cat' => $this->_tpl_vars['newsHome1'][$this->_sections['i']['index']], 'lang' => $this->_tpl_vars['lang'], 'assign' => 'newHomeLink1')), $this); ?>


                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt10">

                                                        <div class="media-box">

                                                             <a class="pull-left" href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['newHomeLink1']; ?>
" title="<?php echo $this->_tpl_vars['newsHome1'][$this->_sections['i']['index']]['title_link']; ?>
">

                                                             	<img width="102" height="102" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['newsHome1'][$this->_sections['i']['index']]['img_thumb_vn']; ?>
" alt="<?php echo $this->_tpl_vars['newsHome1'][$this->_sections['i']['index']]['alt_img']; ?>
" title="<?php echo $this->_tpl_vars['newsHome1'][$this->_sections['i']['index']]['title_img']; ?>
" />

                                                            </a>

                                                            <div class="media-body">

                                                                <h4 class="media-heading">

                                                                    <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['newHomeLink1']; ?>
" title="<?php echo $this->_tpl_vars['newsHome1'][$this->_sections['i']['index']]['title_link']; ?>
"><?php echo $this->_tpl_vars['newsHome1'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
</a>

                                                                    <br /> <span class="dated">(<?php echo ((is_array($_tmp=$this->_tpl_vars['newsHome1'][$this->_sections['i']['index']]['dated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
)</span>

                                                                </h4>

                                                                <div style="height:55px;"><?php echo $this->_tpl_vars['newsHome1'][$this->_sections['i']['index']][$this->_tpl_vars['short']]; ?>
</div>

                                                            </div>

                                                            <div class="clear"></div>

                                                        </div>

                                                    </div>                                                                                                                                                                               				

                                                <?php endfor; endif; ?>		

                                                </div>

                                                

                                                <div class="row item">

                                                    

                                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['newsHome2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                                                	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'GetLinkDetail', 'cat' => $this->_tpl_vars['newsHome2'][$this->_sections['i']['index']], 'lang' => $this->_tpl_vars['lang'], 'assign' => 'newHomeLink2')), $this); ?>


                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt10">

                                                        <div class="media-box">

                                                             <a class="pull-left" href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['newHomeLink2']; ?>
" title="<?php echo $this->_tpl_vars['newsHome2'][$this->_sections['i']['index']]['title_link']; ?>
">

                                                             	<img width="102" height="102" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['newsHome2'][$this->_sections['i']['index']]['img_thumb_vn']; ?>
" alt="<?php echo $this->_tpl_vars['newsHome2'][$this->_sections['i']['index']]['alt_img']; ?>
" title="<?php echo $this->_tpl_vars['newsHome2'][$this->_sections['i']['index']]['title_img']; ?>
" />

                                                            </a>

                                                            <div class="media-body">

                                                                <h4 class="media-heading">

                                                                    <a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['newHomeLink2']; ?>
" title="<?php echo $this->_tpl_vars['newsHome2'][$this->_sections['i']['index']]['title_link']; ?>
"><?php echo $this->_tpl_vars['newsHome2'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
</a>

                                                                    <br /> <span class="dated">(<?php echo ((is_array($_tmp=$this->_tpl_vars['newsHome2'][$this->_sections['i']['index']]['dated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
)</span>

                                                                </h4>

                                                                <div style="height:55px;"><?php echo $this->_tpl_vars['newsHome2'][$this->_sections['i']['index']][$this->_tpl_vars['short']]; ?>
</div>

                                                            </div>

                                                            <div class="clear"></div>

                                                        </div>

                                                    </div>                                                                                                                                                                               				

                                                <?php endfor; endif; ?>		

                                                </div>

                                                

                                            </div>

                                            <!--/carousel-inner--> 

                                            <a class=" carousel-control left " href="#myCarouselnews0" data-slide="prev">

                                                <i class="glyphicon glyphicon-chevron-left fa fa-chevron-left"></i>

                                            </a>

                                            <a class=" carousel-control right" href="#myCarouselnews0" data-slide="next">

                                                <i class="glyphicon glyphicon-chevron-right fa fa-chevron-right"></i>

                                            </a>

                                        </div>

                                        <!--/myCarousel-->

                                    </div>

                                </div>

                            </div>

                        

                        </div>

                   

					</div>

                

        		    <div class="row">

                    	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['nameCatPr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                            <div class="col-sm-12">

                                <div class="LineNgang" <?php if ($this->_sections['i']['index'] != 0): ?>style="margin-top:25px;" <?php endif; ?>>

                                    <p class="bg_ic ic_text">
                                        <?php echo $this->_tpl_vars['nameCatPr'][$this->_sections['i']['index']]['name_vn']; ?>

                                    	<!--<img class="img-responsive" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['nameCatPr'][$this->_sections['i']['index']]['img_thumb_vn']; ?>
"/>-->

                                    </p>

                                    <!--<a class="title_home_text" title="{$nameCatPr[i].title_link}" href="{$path_url}/<{$nameCatPr[i].unique_key}/">Điện thoại {$nameCatPr[i].$name}</a>-->

                                </div>

                                

                                <div class="box">	

                                    <div class="productbox">

                                    

                                        <div class="productlist">

                                            <div class="border-right"></div>
                                        
                                            <ul class="clearfix list-product-hot">

                                            	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getProductHome', 'cat' => $this->_tpl_vars['nameCatPr'][$this->_sections['i']['index']])), $this); ?>


                                            </ul>
                                        
                                        </div>	 

                                                 

                                     </div>	  

                                </div>

                                           

                            </div>	

                        <?php endfor; endif; ?>

                        

                    </div>		

			    </div>

			</div>                

    	</div>

    </div>

    

 <!-- end.row -->