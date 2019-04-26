<?php /* Smarty version 2.6.6, created on 2019-04-13 11:55:41
         compiled from products/detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'tinhtranghang', 'products/detail.tpl', 238, false),array('insert', 'GetLinkDetail', 'products/detail.tpl', 486, false),array('modifier', 'number_format', 'products/detail.tpl', 239, false),array('modifier', 'date_format', 'products/detail.tpl', 445, false),)), $this); ?>
<style type="text/css">
@-webkit-keyframes shake {
	0%, 100% {
		-webkit-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
	}

	10%, 30%, 50%, 70%, 90% {
		-webkit-transform: translate3d(-10px, 0, 0);
		transform: translate3d(-10px, 0, 0);
	}

	20%, 40%, 60%, 80% {
		-webkit-transform: translate3d(10px, 0, 0);
		transform: translate3d(10px, 0, 0);
	}
}

@keyframes shake {
	0%, 100% {
		-webkit-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
	}

	10%, 30%, 50%, 70%, 90% {
		-webkit-transform: translate3d(-10px, 0, 0);
		transform: translate3d(-10px, 0, 0);
	}

	20%, 40%, 60%, 80% {
		-webkit-transform: translate3d(10px, 0, 0);
		transform: translate3d(10px, 0, 0);
	}
}

.shake {
-webkit-animation-name: shake;
    animation-name: shake;
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
}
 #send_phone #submitbt1 {
    border: 1px solid #ed1b24;
    background: #ed1b24;
    border-radius: 4px;
    font-family: MyriadPro-BoldCond;
    color: #fff;
    display: inline-block;
    margin-bottom: 12px;
    text-transform: uppercase;
    width: 100%;
    height: 34px;
    font-size: 18px;
}
#send_phone .input_text {
    width: 100%;
    border: 1px solid #bdbdbd;
    margin-bottom: 10px;
    padding-left: 10px;
	margin-top:20px;
}
 #send_phone .name {
    font-weight: bold;
    margin: 0 0 5px 0;
    font-size: 13px;
    font-family: arial;
}
</style>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">		
                <div class="breadcrumb">
                    <div class="breadcrumb flever_12">
                        <a href="<?php echo $this->_tpl_vars['path_url']; ?>
" title="Trang chủ">Trang chủ</a>
                    </div>
                    <div class="breadcrumbs_sepa">&gt;</div>
                    <?php echo $this->_tpl_vars['linkTitle']; ?>

                    <div class="breadcrumb">
                        <span><?php echo $this->_tpl_vars['detail'][$this->_tpl_vars['name']]; ?>
</span>
                    </div> 					
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt20">	
    <div class="row">
    	 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bannertop2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
</div>

<div class="container mt20">
		
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">
            <div class="product">
                <div class="bgheading clearfix mt20">
                    <div class="leftimg">
                        <div>
                        	<link rel="STYLESHEET" type="text/css" href="<?php echo $this->_tpl_vars['path_url']; ?>
/highslide/highslide.css" />
							<script type="text/javascript" src="<?php echo $this->_tpl_vars['path_url']; ?>
/highslide/highslide-with-gallery.js"></script>
                            
                            <script type="text/javascript">
                                hs.graphicsDir = '<?php echo $this->_tpl_vars['path_url']; ?>
/highslide/graphics/';
                                hs.align = 'center';
                                hs.transitions = ['expand', 'crossfade'];
                                hs.outlineType = 'rounded-white';
                                hs.wrapperClassName = 'controls-in-heading';
                                hs.fadeInOut = true;
                                hs.dimmingOpacity = 0.3;
                            
                                // Add the controlbar
                                hs.addSlideshow({
                                    //slideshowGroup: 'group1',
                                    interval: 3500,
                                    repeat: false,
                                    useControls: true,
                                    fixedControls: false,
                                    overlayOptions: {
                                        opacity: 1,
                                        position: 'top right',
                                        hideOnMouseOut: false
                                    }
                                });
								
								function showImage(img){
									
									$('#viewImg').fadeOut(600, function() {
										$('#viewImg').attr("src",img);
										$('#viewImg').fadeIn(1000);
									});
								}  
                            </script>
                            <a class="MagicZoomPlus" href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img_vn']; ?>
" onclick='return hs.expand(this,{ autoplay:true })'>
                                <img src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img_vn']; ?>
" id="viewImg" />
                            </a>
                        </div>
                        
                        <div>
                            <div class="jcarousel-wrapper">
                              	<a class="jcarousel-control-next"></a>    
                                    <div class="artseedddpb">
                                        <ul>
                                        	<?php if ($this->_tpl_vars['detail']['img_vn'] != ''): ?>
                                                <li>
                                                <div>
                                                    <a onclick="showImage('<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img_vn']; ?>
')" href="javascript:void(0)" >
                                                        <img width="126" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img_vn']; ?>
" class="img-thumb"/>
                                                    </a>
                                                    </div>
                                                </li> 
                                            <?php endif; ?>
                                            
                                            <?php if ($this->_tpl_vars['detail']['img2_vn'] != ''): ?>
                                                <li> <div>
                                                    <a onclick="showImage('<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img2_vn']; ?>
')" href="javascript:void(0)" >
                                                        <img width="126" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img2_vn']; ?>
" class="img-thumb"/>
                                                    </a>
                                                
                                                <a class='highslide' href='<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img2_vn']; ?>
' onclick='return hs.expand(this)'></a>
                                                </div></li> 
                                            <?php endif; ?>
                                            
                                            
                                            <?php if ($this->_tpl_vars['detail']['img3_vn'] != ''): ?>
                                                <li> <div>
                                                    <a onclick="showImage('<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img3_vn']; ?>
')" href="javascript:void(0)" >
                                                        <img width="126" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img3_vn']; ?>
" class="img-thumb"/>
                                                    </a>
                                               
                                                <a class='highslide' href='<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img3_vn']; ?>
' onclick='return hs.expand(this)'></a>
                                                </div> </li> 
                                            <?php endif; ?>
                                            
                                            <?php if ($this->_tpl_vars['detail']['img4_vn'] != ''): ?>
                                                <li> <div>
                                                    <a onclick="showImage('<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img4_vn']; ?>
')" href="javascript:void(0)" >
                                                        <img width="126" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img4_vn']; ?>
" class="img-thumb"/>
                                                    </a>
                                               
                                                <a class='highslide' href='<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img4_vn']; ?>
' onclick='return hs.expand(this)'></a>
                                                </div> </li> 
                                            <?php endif; ?>
                                            
                                            <?php if ($this->_tpl_vars['detail']['img5_vn'] != ''): ?>
                                                <li> <div>
                                                    <a onclick="showImage('<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img5_vn']; ?>
')" href="javascript:void(0)">
                                                        <img width="126" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img5_vn']; ?>
" class="img-thumb"/>
                                                    </a>
                                                    <a class='highslide' href='<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['detail']['img5_vn']; ?>
' onclick='return hs.expand(this)'></a>
                                                    </div>
                                                </li> 
                                            <?php endif; ?>
                                            
                                        </ul>
                                    </div>
                                <a class="jcarousel-control-prev"></a>
                                
                            </div>
                            
                            <script type="text/javascript">
								$(document).ready(function() {  
								  var carouseladdresspos = $(".artseedddpb ul");
								  carouseladdresspos.owlCarousel({
									  items : 5,
                                      autoPlay:3000,
									  itemsDesktop : [1000,4], 
									  itemsDesktopSmall : [900,4], 
									  itemsTablet: [600,3], 
									  itemsTablet: [480,2],
									  pagination : false,
       								  paginationNumbers : false,
									  itemsMobile : true,
									  stopOnHover:true,
									  });
									  $(".jcarousel-control-prev").click(function(){
										carouseladdresspos.trigger('owl.next');
									  });
									  $(".jcarousel-control-next").click(function(){
										carouseladdresspos.trigger('owl.prev');
								  
								  });
								});
							</script>    
                        </div>
                        
                        <div class="PriceDtMb">
                            <h1><span><?php echo $this->_tpl_vars['detail'][$this->_tpl_vars['name']]; ?>
</span></h1>
                            <div class="PriceDt">
                                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'tinhtranghang', 'active' => $this->_tpl_vars['detail']['in_stock'], 'assign' => 'tinhtrangdt')), $this); ?>

                                <span class="price_ez"> <span id="priceAllMb"><?php if ($this->_tpl_vars['detail']['price'] != 0):  echo ((is_array($_tmp=$this->_tpl_vars['detail']['price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>
 VNĐ<?php else: ?> Liên Hệ <?php endif; ?></span> </span>
                               
                            </div>
                            <?php if ($this->_tpl_vars['detail']['luuysanpham_vn'] != ''): ?>
                                <div class="all-bonho chuysanpham">
                                     <strong>Lưu ý: </strong><?php echo $this->_tpl_vars['detail']['luuysanpham_vn']; ?>

                                </div>
                            <?php endif; ?>
                           <div class="cartForm">
                                <div class="cart" >
                
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus button is-form" onclick="decrease1(this)">
                                            <label class="screen-reader-text" for="quantity_5c945cd146ae8">Số lượng</label>
                                            <input type="number" id="quantity1" class="input-text qty text" step="1" min="1" max="9999" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="">
                                            <input type="button" value="+" class="plus button is-form"  onclick="increase1(this)">
                                        </div>
                                        
                                        <button type="button" name="add-to-cart" value="sendCart" onclick="add_cart($('#quantity1').val(),<?php echo $this->_tpl_vars['detail']['idsp']; ?>
)" class="single_add_to_cart_button button alt">Thêm vào giỏ</button>

                                    </div>
                            </div>
                           <div class="clear"></div>
                           <div style="width:100%;">
								
                                <div class="wrap-buy">
                                   
                                    <p class="panel1">
                                        <span class="panel_icon"></span><span class="panel_text"><?php echo $this->_tpl_vars['detail']['view']; ?>
</span><br>
                                        <span class="panel_text1">người xem</span>
                                    </p>
                                    
                                </div>
                                
                                <div class="wrap-buy" style="float:right;">
                                  
                                   
                                        
                               
                                    <p class="panel2">
                                        <span class="pane2_icon_delivery"></span>
                                        <span class="panel_text">Giao hàng</span>
                                        <br>
                                    </p>
                                    
                                </div>
                                                                
                           </div>
                           <div class="clear"></div>
                        </div>
						
                        <div class="inner_bottom clearfix">
                            <div class="pull-left mt10">

                             
                               
                            </div>
                            
                            <div class="pull-right ">
                           
                            </div>
                
            			</div>	
                       
                       
                    </div>
                    
                    <div class="righttext">
                    	<div class="PriceDtPc">
                            <h1><span><?php echo $this->_tpl_vars['detail'][$this->_tpl_vars['name']]; ?>
</span></h1>
                            <div class="PriceDt">
                                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'tinhtranghang', 'active' => $this->_tpl_vars['detail']['in_stock'], 'assign' => 'tinhtrangdt')), $this); ?>

                                <span class="price_ez"> <span id="priceAll"><?php if ($this->_tpl_vars['detail']['price'] != 0):  echo ((is_array($_tmp=$this->_tpl_vars['detail']['price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>
 VNĐ<?php else: ?> Liên Hệ <?php endif; ?></span> </span>
                               
                            </div>
                            
                            <?php if ($this->_tpl_vars['detail']['luuysanpham_vn'] != ''): ?>
                                <div class="all-bonho chuysanpham">
                                     <strong>Lưu ý: </strong><?php echo $this->_tpl_vars['detail']['luuysanpham_vn']; ?>

                                </div>
                            <?php endif; ?>
                           <span id="showcolor"></span>
                          
                           <div class="clear"></div>
                           <div class="cartForm">
                           <div class="cart" >
		
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus button is-form" onclick="decrease(this)">
                                    <label class="screen-reader-text" for="quantity_5c945cd146ae8">Số lượng</label>
                                    <input type="number" id="quantity" class="input-text qty text" step="1" min="1" max="9999" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="">
                                    <input type="button" value="+" class="plus button is-form"  onclick="increase(this)">
                            	</div>
                                
                                <button type="button" name="add-to-cart" value="sendCart" onclick="add_cart($('#quantity').val(),<?php echo $this->_tpl_vars['detail']['idsp']; ?>
)" class="single_add_to_cart_button button alt">Thêm vào giỏ</button>

			                </div>
                           </div>
                           <div style="width:100%;">
								
                                
                                <div class="wrap-buy">

                                   
                                    <p class="panel1">

                                        <span class="panel_icon"></span><span class="panel_text"><?php echo $this->_tpl_vars['detail']['view']; ?>
</span><br>

                                        <span class="panel_text1">người xem</span>

                                    </p>

                                    

                                </div>

                                

                                <div class="wrap-buy" style="float:right;">
                               

                                    <p class="panel2">

                                        <span class="pane2_icon_delivery"></span>

                                        <span class="panel_text">Giao hàng</span>

                                        <br>

                                        <span class="panel_text1"></span>

                                    </p>
                                    

                                </div>
                                
                                <script type="text/javascript">
                                                
                                    function formatNumber(num) {
                                        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
                                    }
                                  
                                </script>
                                
                           </div>
                           <div class="clear"></div>
                        </div>
                        <div style="margin-bottom:5px;">
                        			
                       </div>
                        
                      
						<div class="clear">
                       		
                            <!-- AddThis Button BEGIN -->
                            <!--faceshare.tpl-->
                            <!-- AddThis Button END -->  
                           
                      </div>   
                        
                    </div>
                </div>
 				<div class="para_wrap original">
                	<div class="box_menu">
                        <ul class="list_tab nav nav-tabs " role="tablist" id="myTab">    
                            <li class="active"><a href="javascript:void(0)" onclick="scrollgoto('scrollgthongso')" data-toggle="tab">Thông số</a></li>                        
                            <li><a href="javascript:void(0)" onclick="scrollgoto('box_botom')" data-toggle="tab">Bài viết</a></li> 
                            <li><a href="javascript:void(0)" onclick="scrollgoto('video')" data-toggle="tab">Video</a></li>                                                                 
                            <li><a href="javascript:void(0)" onclick="scrollgoto('frame_commnet')" data-toggle="tab"><i></i>Nhận xét</a></li>
                        </ul>
                        <script>
							function scrollgoto(id){
								var $target = $("#"+id).offset().top - 120 ;
								$("html, body").animate({ scrollTop: $target}, 1000);	
							}
						</script>
                    </div>
                </div>
                
                <div class="para_wrap clearfix" id="box_botom">
    				<div class="left_box">
        				<h4>Đánh giá chi tiết</h4>
                        <div class="description border-bottom">
                             <?php echo $this->_tpl_vars['detail'][$this->_tpl_vars['content']]; ?>
 
                        </div>
                        <h4 id="video">Video</h4>
            			<div class="main-video border-bottom">
                        	<?php if ($this->_tpl_vars['detail']['video'] != ''): ?>
                                <div class="video-container">
                                    <embed src="https://www.youtube.com/v/<?php echo $this->_tpl_vars['detail']['video']; ?>
" frameborder="0" allowfullscreen/>
                                </div>
                            <?php endif; ?>
						</div>
                        
        				<div id="frame_commnet">
            				<div class="comments">
                            <?php if ($this->_tpl_vars['commentCount'] > 0): ?>
                               <div class="add-task" id="goToComment">
                                	<div class="comment_form_title_send">Ý kiến bạn đọc</div>
                                    <div class="clear"> </div>
                                </div>
                                
                               <div class="comments_contents"> 
                                	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['viewComment']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                        <div class="comment-item">
                                            <span class="name"><?php echo $this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['name']; ?>
</span> 
                                            <span class="date">(nhận xét lúc:<?php echo ((is_array($_tmp=$this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['dated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
 <?php echo $this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['timed']; ?>
)</span> 
                                            <div class="comment_content "> 
                                                <?php echo $this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['content']; ?>

                                               <!-- <a href="javascript: void(0)" class="button_reply">Trả lời</a>-->	
                                            </div>
                                            <?php if ($this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['name_tl'] != ''): ?>
                                            <div class="comment-item comment-item1">
                                                <span class="name"><?php echo $this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['name_tl']; ?>
</span> <span class="date">(Trả lời lúc:<?php echo ((is_array($_tmp=$this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['dated_tl'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
 <?php echo $this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['timed_tl']; ?>
)</span> 
                                                <div class="comment_content "> 
                                                    <?php echo $this->_tpl_vars['viewComment'][$this->_sections['i']['index']]['content_tl']; ?>

                                                </div>
                                             </div>
                                             <?php endif; ?>
                                        </div>
                                  <?php endfor; endif; ?>

                                </div>
                            <?php endif; ?>
               					 <!-- FORM COMMENT	-->
                				
                
                                <div class="comment_form_title" style="margin-top:20px;">Gửi bình luận trên Facebook</div>
                                 <div id="fb-root"></div>
                                    <script>(function(d, s, id) {
                                      var js, fjs = d.getElementsByTagName(s)[0];
                                      if (d.getElementById(id)) return;
                                      js = d.createElement(s); js.id = id;
                                      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=567589320047215";
                                      fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                   <div class="fb-comments" data-href="<?php echo $this->_tpl_vars['path_url'];  echo $_SERVER['REQUEST_URI']; ?>
" data-width="100%" data-numposts="20"></div>
                                        
                             </div>
                   		 </div>
               		 </div>
                    
                    <div class="right_box">
                        <h5>Sản phẩm tương tự</h5>
                        <div class="box_content">
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
                            	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'GetLinkDetail', 'cat' => $this->_tpl_vars['view'][$this->_sections['i']['index']], 'lang' => $this->_tpl_vars['lang'], 'assign' => 'link')), $this); ?>

                                <div class="media-box clearfix">
                                	<a class="pull-left" href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['unique_key']; ?>
.html" title="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['title_link']; ?>
">	
                                       <img class="img-responsive" src="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['img_thumb_vn']; ?>
" alt="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['alt_img']; ?>
" title="<?php echo $this->_tpl_vars['newsHome1'][$this->_sections['i']['index']]['title_img']; ?>
" />
                                    </a>
                                    <h2 class="media-heading">
                                    	<a href="<?php echo $this->_tpl_vars['path_url']; ?>
/<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['unique_key']; ?>
.html" title="<?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']]['title_link']; ?>
"><strong><?php echo $this->_tpl_vars['view'][$this->_sections['i']['index']][$this->_tpl_vars['name']]; ?>
</strong> </a> 
                                    </h2>	
                                    <div class="price"><span><?php if ($this->_tpl_vars['view'][$this->_sections['i']['index']]['price'] == 0): ?>Giá liên hệ<?php else:  echo ((is_array($_tmp=$this->_tpl_vars['view'][$this->_sections['i']['index']]['price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>
 VNĐ<?php endif; ?> <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'tinhtranghang', 'active' => $this->_tpl_vars['view'][$this->_sections['i']['index']]['in_stock'])), $this); ?>
</span></div>
                                </div><!--end item-->	        
                            <?php endfor; endif; ?>                            
                        </div>
                                    
                    </div>
				</div>

			</div>	

       </div>
   </div>
    
</div>
<script>

var priceProduct = document.getElementById('priceAll').innerHTML;
var lastIndex = priceProduct.lastIndexOf(" ");

priceProduct = priceProduct.substring(0, lastIndex);
/* fbq('track', 'ViewContent',{
    value: parseInt(priceProduct.split('.').join('')),
    currency: 'VND',
    content_ids: '<?php echo $this->_tpl_vars['detail']['idsp']; ?>
',
    content_type: 'product',
  });
  function trackAddToCart() {
    
    fbq('track', 'AddToCart',{
    value: parseInt(priceProduct.split('.').join('')),
    currency: 'VND',
    content_ids: '<?php echo $this->_tpl_vars['detail']['idsp']; ?>
',
    content_type: 'product',
  })
} */
    function decrease(oj) {        
        var current = Number($('#quantity').val());
        if(current > 1) {
           
              $('#quantity').val(current - 1);
        
        }
    } 
    function decrease1(oj) {        
        var current = Number($('#quantity1').val());
        if(current > 1) {
           
              $('#quantity1').val(current - 1);
        
        }
    } 
        
   
       function increase(oj) {
           var current = Number($('#quantity').val());
            $('#quantity').val(current + 1);
       }
         function increase1(oj) {
           var current = Number($('#quantity1').val());
            $('#quantity1').val(current + 1);
       }
       
 </script>