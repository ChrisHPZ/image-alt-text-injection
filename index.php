<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>index</title>
  <meta name="description" content="">
  <meta name="author" content="chris">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
  		var src = $('img').attr('src');
  		$('img').each(function(){ 						
  			$('img').prop('alt', "Image Of" + src.replace(/images/g, "").replace(/-/g, " ").replace(/.jpg/g, "").replace(/.png/g, "").replace(/\//g, " "));
  		});
  	});
  </script>
  <style type="text/css">
  	body { margin:0;padding:0;}
  	.container {
  		.width:100%;
  	}
  	.container img {
  		width:20%;
  		height:auto;
  		display:inline-block;
  		float:left;
  	}
  </style>
</head>

<body>
    <div class="container">
      <img src="images/alchemy-station-overview.jpg" />
      <img src="images/alchemy-station-view-from-the-side.jpg" />
      <img src="images/bedroom-in-the-loft.jpg" />
      <img src="images/clouds-above-whiterun.jpg" />
      <img src="images/nora-the-bard.jpg" />
      <img src="images/sincelias-home-1.jpg" />
    </div>
</body>
</html>
