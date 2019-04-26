<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&language=vi"></script>
<script type="text/javascript">
var map;

function initialize() {
      var myLatlng = new google.maps.LatLng(10.790918,106.657153);
      var myOptions = {
    zoom: 17,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
}
map = new google.maps.Map(document.getElementById("mapgoogle"), myOptions); 
  // Biến text chứa nội dung sẽ được hiển thị
var text;
text= "1076 Đường CMT8, Q. Tân Bình";
   var infowindow = new google.maps.InfoWindow(
    { content: text,
        size: new google.maps.Size(0,0),
        position: myLatlng
    });
       infowindow.open(map);    
    var marker = new google.maps.Marker({
      position: myLatlng, 
      map: map,
      title:"138 Lê Hồng Phong, P. 3, Q. 5, TP. HCM"
  });
  
}
</script>

</head>
<body  onLoad="initialize()">
 <div id="mapgoogle" style="height:800px; width:990px;"></div>
</body>
</html>