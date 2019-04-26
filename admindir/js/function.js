// JavaScript Document Tao Seo
function CreateTitleSEO(){
	var f = document.getElementById("frmEdit");
	name = f.name_vn.value;
	title = name.toLowerCase();
	f.keyword.value = name.toLowerCase() + ", " + StripVi(name).toLowerCase();
	f.des.value = f.title.value = title;
	f.title_link.value = f.title_img.value = f.alt_img.value = name.toLowerCase();
	f.unique_key.value = StripVi2(f.name_vn.value).toLowerCase();
	
}


function CreateTitleTags(){
	var f = document.getElementById("frmEdit");
	name = f.name_vn.value;
	title = name.toLowerCase();
	f.keyword.value = name.toLowerCase() + ", " + StripVi(name).toLowerCase();
	f.des.value = f.title.value = title;
	f.title_link.value = name.toLowerCase();
	f.unique_key.value = StripVi2(f.name_vn.value).toLowerCase();
	f.title_link.value =  name.toLowerCase();
	
}

function CreateTitleSEOImg(){
	var f = document.getElementById("frmEdit");
	name = f.name_vn.value;
	title = name.toLowerCase();
	f.keyword_vn.value = name.toLowerCase() + ", " + StripVi(name).toLowerCase();
	f.des_vn.value =  f.title_vn.value = title;
	f.des_en.value = f.keyword_en.value = f.title_en.value = f.title_link_en.value = f.title_img_en.value = f.alt_img_en.value = f.name_en.value.toLowerCase();
	f.title_link_vn.value = f.title_img_vn.value = f.alt_img_vn.value = name.toLowerCase();
	
	var s7 = StripVi2(f.name_vn.value);
	f.unique_key_vn.value = s7.toLowerCase();
	f.unique_key_en.value = StripVi2(f.name_en.value).toLowerCase();
	
	
}

function CreateTitleSEOBanner(){
	var f = document.getElementById("frmEdit");
	name = f.name_vn.value;
	title = StripVi(name).toLowerCase();
	f.title_link.value = f.title_img.value = f.alt_img.value = name.toLowerCase();

}

function CreateTitleSEOFaqs(){
	var f = document.getElementById("frmEdit");
	name = f.question_vn.value;
	title = StripVi(name).toLowerCase();
	f.des_vn.value = f.keyword_vn.value = f.title_vn.value  = title;
	f.des_en.value = f.keyword_en.value = f.title_en.value = f.title_link_en.value = f.question_en.value.toLowerCase();
	f.title_link_vn.value = name.toLowerCase();
	
	var s7 = StripVi2(f.question_vn.value);
	f.unique_key_vn.value = s7.toLowerCase();
	f.unique_key_en.value = StripVi2(f.question_en.value).toLowerCase();
}



function StripVi(str) {
  str= str.toLowerCase();
  str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
  str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
  str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
  str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
  str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
  str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
  str= str.replace(/đ/g,"d");

  str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'||\"|\&|\#|\[|\]|~|$|-|_/g,"");
	/* tìm và thay thế các kí tự đặc biệt trong chuỗi sang kí tự - */
  str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
  str= str.replace(/^\-+|\-+$/g,"");
	//cắt bỏ ký tự - ở đầu và cuối chuỗi
  return str;
} 
function StripVi2(str) {
  str= str.toLowerCase();
  str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
  str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
  str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
  str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
  str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
  str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
  str= str.replace(/đ/g,"d");
  str= str.replace(/-/g," ");
  str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
/* tìm và thay thế các kí tự đặc biệt trong chuỗi sang kí tự - */
  str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
  str= str.replace(/^\-+|\-+$/g,"");
	//cắt bỏ ký tự - ở đầu và cuối chuỗi
  return str;
} 
// End Tao Seo


function CheckHasChild(chk){
	if(chk.checked==false){
		document.getElementById('comp').disabled = false;
	}
	else{
		document.getElementById('comp').selectedIndex  = 0;
	}
}

function checkAll()
{
	if(document.f.all.checked == true)
	{
		for(var i=0;i<200;i++)
		{
			
			document.getElementById("check"+i).checked = true;
		}
	}
	else
	{
		for(var i=0;i<200;i++)
		{
			
			document.getElementById("check"+i).checked = false;
		}
	}
}

function ChangeAction(url)
{
	
	var answer = confirm("Bạn chất muốn thực hiện không?");
	if (answer)
	{
		document.getElementById('f').action = url;
		document.getElementById('f').submit();
	}
	
}

function ChangeAdd(url)
{
	document.location.href = url;
}

function SubmitFrom(a,dir_img) {
	var cat = document.allsubmit.cat;
	var name_vn = document.allsubmit.name_vn;
	var codesp1 = document.allsubmit.codesp1;
		
	if(cat.value.length == ''){
		alert('Vui Chọn thể loại');
		cat.focus();
		return false;
	}

	if(name_vn.value.length == ''){
		alert('Vui lòng nhập vào tên');
		name_vn.focus();
		return false;
	}
	
	if(a=='products'){
		if(codesp1.value.length == '' && a=='products'){
			alert('Vui lòng nhập Mã sản phẩm.');
			codesp1.focus();
			return false;
		}
	}
	
	img_thumb_vn = jQuery('#img_thumb_vn').val(),
	img_thumb_en = jQuery('#img_thumb_en').val(),
	
	img_vn = jQuery('#img_vn').val(),
	img_en = jQuery('#img_en').val(),
	
	img1_vn = jQuery('#img1_vn').val(),
	img1_en = jQuery('#img1_en').val(),
	
	img2_vn = jQuery('#img2_vn').val(),
	img2_en = jQuery('#img2_en').val(),
	
	img3_vn = jQuery('#img3_vn').val(),
	img3_en = jQuery('#img3_en').val(),
	
	img4_vn = jQuery('#img4_vn').val(),
	img4_en = jQuery('#img4_en').val(),
	
	img5_vn = jQuery('#img5_vn').val(),
	img5_en = jQuery('#img5_en').val(),
	
	img6_vn = jQuery('#img6_vn').val(),
	img6_en = jQuery('#img6_en').val(),
	
	img7_vn = jQuery('#img7_vn').val(),
	img7_en = jQuery('#img7_en').val()
	
	jQuery.post('ajax/CheckImgServer.php',{dir_img:dir_img,img_thumb_vn:img_thumb_vn,img_thumb_en:img_thumb_en,img_vn:img_vn,img_en:img_en,img1_vn:img1_vn,img1_en:img1_en,img2_vn:img2_vn,img2_en:img2_en,img3_vn:img3_vn,img3_en:img3_en,img4_vn:img4_vn,img4_en:img4_en,img5_vn:img5_vn,img5_en:img5_en,img6_vn:img6_vn,img6_en:img6_en,img7_vn:img7_vn,img7_en:img7_en},function(data) {
	 var obj = jQuery.parseJSON(data);
	 if(obj.CheckImg != ''){
		 alert('Không đúng định dạng');
		 return false;
	 }
	 else{
		 if(obj.status != ''){ //loi 
			var answer = confirm(obj.status + ' đã tồn tại bạn có muốn thay đổi hình không ?');
			if (answer)
			{
				document.allsubmit.submit();
			}
			
		 }
		 else{
			document.allsubmit.submit();
		 }
	 }
	 
	});
	
	//document.allsubmit.submit();
}

function check_file(name)
{
   if(name == "img_thumb_vn")	
  	 var file = document.allsubmit.img_thumb_vn;
   else if (name == "img_thumb_en")
   	 var file = document.allsubmit.img_thumb_en;
   else if (name == "img_vn")
   	 var file = document.allsubmit.img_vn;
   else if (name == "img_en")
   	 var file = document.allsubmit.img_en;
    else if (name == "img")
   	 var file = document.allsubmit.img;
	 
   var str = file.value;
   var type=",jpeg,gif,png,jpg,JPEG,JPG,PNG,GIF,bmp,BMP,swf,SWF";
	var ext=str.match(/[\w]*$/);
	if(type.search(ext)==-1)
	{
		file.value='';
		alert('Không đúng định dạng.');
		file.focus();
		return false;
	}
	return true;
}
