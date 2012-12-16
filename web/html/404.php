<?php
header("HTTP/1.0 404 Not Found");
?>
<html>
<head>
	<title>404 Error</title>
<?php include_once("/web/html/inc/mainbundle_css.php") ?>
<?php include_once("/web/html/inc/mainbundle_js.php") ?>
<?php include_once("/web/html/inc/analyticstracking.php") ?>
</head>

<body>
<div id="main-content">
	<h1>404 Error - Where art thou page?</h1>
	<p><i>The page you're looking for can't be found at this time: 
		<b><?php echo $_SERVER['REQUEST_URI'];?></b></i></p>
	<p>If you're sure it was there just yesterday and you need it today,
		<a href="mailto:site@cjyoung.org?subject=404%20Error%20-%20The%20World%20Is%20Ending">drop me a line</a>.</p>
</div>
</body>
</html>
