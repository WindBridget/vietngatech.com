<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> VIETNGATECH</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" 
			src="js/googlemap.js"></script>
			<script type="text/javascript">
			var map;
			function initialize() {
				  var myLatlng = new google.maps.LatLng(21.01563,105.82558);
				  var myOptions = {
				zoom: 15,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			map = new google.maps.Map(document.getElementById("div_id"), myOptions); 
			  // Biến text chứa nội dung sẽ được hiển thị
			var text;
			text= "";
			   var infowindow = new google.maps.InfoWindow(
				{ content: text,
					size: new google.maps.Size(200,50),
					position: myLatlng
				});
				   infowindow.open(map);    
				var marker = new google.maps.Marker({
				  position: myLatlng, 
				  map: map,
				  title:"vietngatech"
			  });
			}
			google.setOnLoadCallback(initialize);
</script>
	

<script type='text/javascript' src='js/jquery.min.js'></script>
<!--[if !IE]><!--><script type='text/javascript' src='js/jquery.mobile-1.0rc2.customized.min.js'></script><!--<![endif]-->
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='js/diapo.js'></script> 

<script>
$(function(){
	$('.pix_diapo').diapo();
});

</script>


</head>
<body onLoad="initialize()">
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<a href="index.php"><img width="80" height="40" src="images/logo4.jpg" /></a>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.php?mod=news" accesskey="1" title="">Tin Tức</a></li>
				<li><a href="index.php?mod=product" accesskey="2" title="">Sản Phẩm</a></li>
				<li><a href="index.php?mod=about" accesskey="3" title="">Giới Thiệu</a></li>
				<li><a href="index.php?mod=recruit" accesskey="4" title="">Tuyển Dụng</a></li>
				<li><a href="index.php?mod=contact" accesskey="5" title="">Liên Hệ</a></li>
			</ul>
		</div>
	</div>