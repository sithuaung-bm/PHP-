<?php
error_reporting(1);
$id = $_POST['id'];
$pass = $_POST['pass'];
if(isset($_POST['signin']))
{
if($id=="Deep" && $pass=="Deep123")
{
header('location:welcome.html');
}
else
{
echo "<font color='red'>Invalid id or password</font>";
}
}
?>
<body>
<form method="post">
<table border="1" align="center">
<tr>
<td>Enter Your Id</td>
<td><input type="text" name="id"/>
</td>
</tr>
<tr>
<td>Enter Your Password</td>
<td><input type="password" name="pass"/>
</td>
</tr>
<tr>
<td><input type="submit" name="signin" value="SignIn"/>
</td>
</tr>
</table>
</form>
</body>