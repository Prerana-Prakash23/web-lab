<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1"/>
<style>
p {
color:white;
font-size:90px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
body{background-image: url(clock.jpg);
    background-repeat: no-repeat;
  background-size: 100rem;
}
</style>
<p> <?php echo date(" h: i : s A");?> </p>
</head></html>