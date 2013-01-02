<?php
header("HTTP/1.0 404 Not Found");
?>
<html>
<head>
	<title>404 Error</title>
</head>

<body>
<div id="main-content">
	<h1>404 Error</h1>
	<p><i>The page you're looking for can't be found at this time: 
		<b><?php echo $_SERVER['REQUEST_URI'];?></b></i></p>
</div>
</body>
</html>
