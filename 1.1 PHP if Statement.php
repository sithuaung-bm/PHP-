<?php
$num=$_POST['n'];
if($num>0)
{
echo $num." is positive number";
}
?>
<body>
<form method="post">
Enter Your number<input type="text" name="n"/><hr/>
<input type="submit" value="check number"/>
</form>
</body>