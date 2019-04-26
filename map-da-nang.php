<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&language=vi"></script>
<script type="text/javascript">

var map;
function initialize() {
      var myLatlng = new google.maps.LatLng(16.064983,108.219021);
      var myOptions = {
    zoom: 17,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
}
map = new google.maps.Map(document.getElementById("mapgoogle"), myOptions); 
  // Biến text chứa nội dung sẽ được hiển thị
var text;
text= "58 Hoàng Diệu, Q.Hải Châu";
   var infowindow = new google.maps.InfoWindow(
    { content: text,
        size: new google.maps.Size(0,0),
        position: myLatlng
    });
       infowindow.open(map);    
    var marker = new google.maps.Marker({
      position: myLatlng, 
      map: map,
      title:"58 Hoàng Diệu, Q.Hải Châu"
  });
  
}
</script>

</head>
<body  onLoad="initialize()">
 <div id="mapgoogle" style="height:800px; width:990px;"></div>
</body>
</html>