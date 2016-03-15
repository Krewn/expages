<!DOCTYPE html>

<html lang="en-us">
  <head>
    <meta charset="utf-8">

    <title>Kevin Nelson</title>
	<link rel="stylesheet" href = "public/css/base.css">
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200italic,400,700">
  </head>

  <body>
	<div id = "bCard">
		<img src = "http://api.adorable.io/avatars/150/<Kevin-Nelson>.png">
		<h1>Kevin Nelson</h1>
		<p class = "some-class"> "Love is the most powerful force in the universe." ~Einstein </p>
		<div id = "cCard">
	<?php

	function lsonls($k) {
	return str_repeat( "l" , $k );
	}
	//echo "hi";
	echo '<br>';
	for ($c = 0; $c<92; $c++) {
	//echo $c;
	echo "<img src = 'http://api.adorable.io/avatars/150/<".lsonls($c).">.png'>";
	if($c%10==0){
		echo '<br>';
	}
	}
	?>
   </div>
	</div>
  </body>
</html>
