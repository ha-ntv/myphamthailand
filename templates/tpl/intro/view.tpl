<!---Content-->
    <div class="breadcrumbs">
 		<div class="container">
 			<div class="row">
 				<div class="col-xs-12">		
                	<div class="breadcrumb">
                        <!--{$linkTitle}-->
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt20">
		<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column">
            	<div class="content_detail">
					<div class="row mt20" id="news_contents">
						<div class="col-lg-r col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        	<h1 class="content_title">
                                <span><!--{$detail.$name}--></span> <!--{if $detail.id eq 130}--><span style="font-size:18px; color:#0069b8">(<!--{$detail.view}--> lượt xem)</span><!--{/if}-->
                            </h1>
                            <div class="description">
                            	<!--{if $detail.$content eq ""}-->
                                    <p class="nodate">##No_date##</p>
                                <!--{else}-->
                                    <!--{$detail.$content}-->
                                <!--{/if}-->
                            </div>
                            <!--{if $detail.id eq 130}-->
                            <div id="frame_commnet">
                                <div class="comments">
                                    <!--{if $commentCount gt 0}-->
                                       <div class="add-task" id="goToComment">
                                            <div class="comment_form_title_send">Ý kiến bạn đọc</div>
                                            <div class="clear"> </div>
                                        </div>
                                        
                                       <div class="comments_contents"> 
                                            <!--{section name=i loop=$viewComment}-->
                                                <div class="comment-item">
                                                    <span class="name"><!--{$viewComment[i].name}--></span> 
                                                    <span class="date">(nhận xét lúc:<!--{$viewComment[i].dated|date_format:"%d/%m/%Y"}--> <!--{$viewComment[i].timed}-->)</span> 
                                                    <div class="comment_content "> 
                                                        <!--{$viewComment[i].content}-->
                                                       <!-- <a href="javascript: void(0)" class="button_reply">Trả lời</a>-->	
                                                    </div>
                                                    <!--{if $viewComment[i].name_tl neq ''}-->
                                                    <div class="comment-item comment-item1">
                                                        <span class="name"><!--{$viewComment[i].name_tl}--></span> <span class="date">(Trả lời lúc:<!--{$viewComment[i].dated_tl|date_format:"%d/%m/%Y"}--> <!--{$viewComment[i].timed_tl}-->)</span> 
                                                        <div class="comment_content "> 
                                                            <!--{$viewComment[i].content_tl}-->
                                                        </div>
                                                     </div>
                                                     <!--{/if}-->
                                                </div>
                                            <!--{/section}-->
                                        </div>
                                    <!--{/if}-->
                                     <!-- FORM COMMENT	-->
                                    <div class="comment_form_title">Gửi bình luận</div>
                                    <form class="form_comment" id="comment_add_form">
                                        <p class="name_email">
                                            <input type="text" placeholder="Họ tên (*)"  name="namecom"  id="namecom" class="CommentText" />
                                            <input type="text" placeholder="Điện thoại (*)" name="phonecom"  id="phonecom" class="CommentText" />
                                        </p>
                                        <div class="clear"></div>
                                        <textarea class="CommentContent" placeholder="Nội dung (*)"  name="contentcom" id="contentcom"></textarea>
                                         <p class="captcha">
                                            <input type="hidden" id="getcode" name="getcode" value="<!--{$security}-->" />
                                            <input type="text" placeholder="Mã kiểm tra (*)" size="23" maxlength="10" name="cdoecom" id="cdoecom" />
                                            <img name="captcha"  alt="captcha" src="<!--{$path_url}-->/random_img.php?characters=6&code=<!--{$security}-->" />
                                            <a class="code-view" onclick="reload('captcha'); return false;" href="javascript:void(0)">
                                               <img width="25" src="<!--{$path_url}-->/images/rest.png" />
                                            </a> 
                                            </p><div class="clear"></div>
                                        <p></p>
                                        <p class="button_area" >
                                            <span id="commentSubmit">
                                                <a href="javascript: void(0)" class="button submitbt" onclick="return CommentSubmit();">
    
                                                    <span>Gửi</span>
                                                </a>
                                                <a id="resetbt" href="javascript: void(0)" class="button" onclick="resetbt();">
                                                    <span>Làm lại</span>
                                                </a>
                                            </span>
                                            <span id="ajax_load"></span>
                                            
                                        </p>
                                        
                                        <div class="clear"></div>
                                        
                                        <script language="javascript">
                                            function reload(imageName)
                                              {
                                                 var randomnumber=makeid(); // generate a random number to add to image url to prevent caching
                                                 $('#getcode').val(randomnumber);
                                                 document.images[imageName].src = '<!--{$path_url}-->/random_img.php?characters=6&code=' + randomnumber; // change image src to the same url but with the random number on the end
                                              }
                                             function makeid()
                                             {
                                                var text = "";
                                                var possible = "23456789bcdfghjkmnpqrstvwxyz";
                                            
                                                for( var i=0; i < 6; i++ )
                                                    text += possible.charAt(Math.floor(Math.random() * possible.length));
                                            
                                                return text;
                                             }
                                            
                                              function resetbt(){
                                                    $("#namecom").val('');
                                                    $("#emailcom").val('');
                                                    $("#contentcom").val('');
                                                    $("#cdoecom").val('');
                                                    
                                              }
                                              function CommentSubmit(){
                                                    var name = document.getElementById("namecom");
                                                    var phone = document.getElementById("phonecom");
                                                    var content = document.getElementById("contentcom");
                                                    var code = document.getElementById("cdoecom");
                                                    var getcode = document.getElementById("getcode");
                                                    var r = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                                                    
                                                    if (name.value=="") {
                                                        alert( "Nhập vào họ tên đầy đủ." );
                                                        name.focus();
                                                        return false;
                                                    }
                                                    else if(phone.value==""){
                                                        alert( "Nhập vào số điện thoại." );
                                                        phone.focus();
                                                        return false;
                                                    }
                                                    else if ( (phone.value!="") && (isNaN(phone.value) == true)){
                                                        alert( "Số điện thoại không hợp lệ (vd:0909999999)" );
                                                    }
                                                    else if(content.value==""){
                                                        alert( "Nhập vào nộ dung." );
                                                        content.focus();
                                                        return false;
                                                    }
                                                    else if(code.value==""){
                                                        alert( "Nhập vào mã kiểm tra." );
                                                        code.focus();
                                                        return false;
                                                    }
                                                    else if(code.value != getcode.value){
                                                        alert( "Mã kiểm tra không đúng." );
                                                        code.focus();
                                                        return false;
                                                    }
                                                    else{
                                                        $('#commentSubmit').hide();
                                                        $('#ajax_load').html('<img src="<!--{$path_url}-->/ajax-loader.gif" />');
                                                        
                                                        $.post('<!--{$path_url}-->/loading/comment.php',{
                                                            name:name.value,
                                                            phone:phone.value,
                                                            content:content.value,
                                                            code:code.value,
                                                            session:getcode.value,
															type:3,
                                                            idpr:<!--{$detail.id}-->
                                                            },function(data) {
                                                                 var obj = jQuery.parseJSON(data);
                                                                 if(obj.status == 'success'){
                                                                    $('#commentSubmit').show();
                                                                    $('#ajax_load').html('');
                                                                     alert(obj.msg);
                                                                     location.reload();
                                                                }else{
                                                                    $('#commentSubmit').show();
                                                                    $('#ajax_load').html('');
                                                                    alert(obj.msg);
                                                                }
                                                                
                                                        });
                                                        
                                                    }
                                              }
                                        </script>   
                                    </form>
                                    
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
                                       <div class="fb-comments" data-href="<!--{$path_url}--><!--{$smarty.server.REQUEST_URI}-->" data-width="100%" data-numposts="20"></div>
                                            

                                
                                </div>
                   		 	</div>
                            <!--{/if}-->	
						</div>
                        
                         <!--{include file="right-product.tpl"}-->
					</div>
				</div>
            </div>
         </div><!-- end.row -->
	</div>
<!---End Content-->