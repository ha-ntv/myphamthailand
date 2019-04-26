<div id="panelRight">
	<div class="SubRightTop1">
		<!--{insert name="HearderCat" cid=$smarty.request.cid root=$smarty.request.root act=$smarty.request.act}-->
	</div>
	<form name="allsubmit" id="frmEdit" action="index.php?do=articles&act=
		<!--{if $smarty.request.act eq 'add' }-->
			addsm
		<!--{else}-->
			editsm
		<!--{/if}-->
		&cid=<!--{$smarty.request.cid}-->&p=<!--{$smarty.request.p}-->" method="post" enctype="multipart/form-data">
	<div class="SubRightCenter">
		 <!--{if $smarty.request.act neq 'add' }-->
    	<div class="SubAll Bgf1">
			<div class="SubLeft">
				Thể loại
			</div>
			
			<div class="SubRight">
				<!--{insert name="TheLoai" cid=$smarty.request.cid module=1}-->
			</div>
			
			<div class="Clear"></div>
		</div>
    <!--{else}-->
    	<input type="hidden" value="<!--{$smarty.request.cid}-->" name="cat">
    <!--{/if}--> 
    
		<div class="SubAll Bgf2">
			<div class="SubLeft">
				Tiêu Đề VN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.name_vn|escape:"html":"UTF-8"}-->" name="name_vn" class="InputText" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf1">
			<div class="SubLeft">
				Tiêu Đề EN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.name_en|escape:"html":"UTF-8"}-->" name="name_en" class="InputText" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf2">
			<div class="SubLeft">
				Image VN
			</div>
			
			<div class="SubRight">
				<!--{if $edit.img_thumb_vn neq ""}-->
				<img src="../<!--{$edit.img_thumb_vn}-->"  /><br />
				<!--{/if}-->
				 <input type="file" name="img_thumb_vn" id="img_thumb_vn" onchange="check_file('img_thumb_vn');" /> <span class="Size">Max(134 x 133)</span>
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf1">
			<div class="SubLeft">
				Image EN
			</div>
			
			<div class="SubRight">
				<!--{if $edit.img_thumb_en neq ""}-->
				<img alt="" src="../<!--{$edit.img_thumb_en}-->"  /><br />
				<!--{/if}-->
				 <input type="file" name="img_thumb_en" id="img_thumb_en" onchange="check_file('img_thumb_en');" /> <span class="Size">Max(134 x 133)</span>
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf2">
			<div class="SubLeft">
				Số Thứ Tự
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{if $edit.num eq ""}-->0<!--{else}--><!--{$edit.num}--><!--{/if}-->" name="num" class="InputNum" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf1">
			<div class="SubLeft">
				Show
			</div>
			
			<div class="SubRight">
				<input type="checkbox" class="CheckBox" name="active" value="active" <!--{if $edit.active eq 1 || $smarty.request.act eq 'add'}-->checked<!--{/if}--> />
			</div>
			
			<div class="Clear"></div>
		</div>	
		
		<div class="SubAll Bgf2">
			<div class="SubLeft">
				Mô Tả Ngắn VN
			</div>
			
			<div class="SubRight">
				<textarea class="InputTextarea"  name="short_vn"><!--{$edit.short_vn}--></textarea>
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf1">
			<div class="SubLeft">
				Mô Tả Ngắn EN
			</div>
			
			<div class="SubRight">
				<textarea class="InputTextarea"  name="short_en"><!--{$edit.short_en}--></textarea>
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf2">
			<div class="SubLeft">
				Mô Tả VN
			</div>
			
			<div class="SubRight">	
				<!--{insert name="content" desc=$edit.content_vn namevalue="content_vn"}-->
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf1">
			<div class="SubLeft">
				Mô Tả EN
			</div>
			
			<div class="SubRight">
			
			<!--{insert name="content" desc=$edit.content_en namevalue="content_en"}-->
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf2">
			<div class="SubLeft">
				
			</div>
			
			<div class="SubRight">
				<div class="SubMit01" onclick="CreateTitleSEOImg();" >
					<a href="javascript:void(0)"  >
					 Tạo Seo 
					</a>
				</div>
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf1">
			<div class="SubLeft">
				Link VN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.unique_key_vn}-->" name="unique_key_vn" class="InputText" />
				
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf2">
			<div class="SubLeft">
				Link EN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.unique_key_en}-->" name="unique_key_en" class="InputText" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf1">
			<div class="SubLeft">
				Title VN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.title_vn}-->" name="title_vn" class="InputText" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf2">
			<div class="SubLeft">
				Title EN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.title_en}-->" name="title_en" class="InputText" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf1">
			<div class="SubLeft">
				Title Link VN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.title_link_vn}-->" name="title_link_vn" class="InputText" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf2">
			<div class="SubLeft">
				Title Link EN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.title_link_en}-->" name="title_link_en" class="InputText" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf1">
			<div class="SubLeft">
				Keyword VN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.keyword_vn}-->" name="keyword_vn" class="InputText" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf2">
			<div class="SubLeft">
				Keyword EN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.keyword_en}-->" name="keyword_en" class="InputText" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf1">
			<div class="SubLeft">
				Title Img VN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.title_img_vn}-->" name="title_img_vn" class="InputText" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf2">
			<div class="SubLeft">
				Title Img EN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.title_img_en}-->" name="title_img_en" class="InputText" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf1">
			<div class="SubLeft">
				Alt Img VN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.alt_img_vn}-->" name="alt_img_vn" class="InputText" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf2">
			<div class="SubLeft">
				Alt Img EN
			</div>
			
			<div class="SubRight">
				<input type="text" value="<!--{$edit.alt_img_en}-->" name="alt_img_en" class="InputText" />
			</div>
			
			<div class="Clear"></div>
		</div>
		
		
		
		<div class="SubAll Bgf1">
			<div class="SubLeft">
				Description VN
			</div>
			
			<div class="SubRight">
				<textarea name="des_vn" class="InputTextarea"><!--{$edit.des_vn}--></textarea>
			</div>
			
			<div class="Clear"></div>
		</div>
		
		<div class="SubAll Bgf2">
			<div class="SubLeft">
				Description EN
			</div>
			
			<div class="SubRight">
				<textarea name="des_en" class="InputTextarea"><!--{$edit.des_en}--></textarea>
			</div>
			
			<div class="Clear"></div>
		</div>
	
		
		<div class="SubAll Bgf1">
			<div class="SubLeft">
				
			</div>
			
			<div class="SubRight">
				<input type="hidden" name="id" value="<!--{$edit.id}-->" />
				<div class="SubMit01" onclick="return SubmitFrom('checkForm','upload/hoa-tuoi-dep');" >
					<a href="javascript:void(0)"  >
						 Save 
					</a>
				</div>
			</div>
			
			<div class="Clear"></div>
		</div>
				
		<div class="Clear"></div>
	</div>
  </form>	
	<div class="SubRightBottom"></div>
</div>