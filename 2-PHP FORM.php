<html>
<head>
<title>get_browser</title>
<?php
error_reporting(1);
$x=$_GET['f'];
$y=$_GET['s'];
$z=$x+$y;
echo "Sum of two number = ".$z;
?>
</head>
<body bgcolor="skyblue">
<form method="GET" >
<table border="1" bgcolor="green">
<tr>
<td>Enter your first number</td>
<td><input type="text"
name="f"/></td>
</tr>
<tr>
<td>Enter your second number</td>
<td><input type="text"
name="s"/></td>
</tr>
<tr align="center">
<td colspan="2" >
<input type="submit"
value="+"/></td>
</tr>
</table>
</form>
</body>
</html>