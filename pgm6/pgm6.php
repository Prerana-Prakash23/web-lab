<!DOCTYPE HTML>
<html>
<head>
<style>
body{
	background-image: linear-gradient(purple, lightblue);
	background-position: center;
	background-size: 5500px;
}
	p{
		font-style: bold;
		font-size: 50px;
		text-align: center;
	}
</style>
<p><?php
$file = 'count.txt';
$count = strval(file_get_contents($file));
file_put_contents($file, $count + 1); echo("You are
visitor number:".$count); ?></p>

</head>
</html>