<?php
if(isset($_GET['login']))
{
$eid=$_GET['e'];
$pass=$_GET['p'];
if($eid=="" || $pass=="")
	{
echo "<font color='red'>Please fill your email and pass</font>";
}
else
{
if($eid=="xyz" && $pass=="xyz123")
{
echo "<font color='blue'>welcome xyz</font>";
}
else
{
echo "<font color='red'>wrong email or pass</font>";
}
}
}
?>
<form>
Enter your email<input type="text" name="e"/><br/>
Enter your pass<input type="password" name="p"/>
<input type="submit" value="Signin" name="login"/>
</form>