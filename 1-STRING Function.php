<?php
if(isset($_GET['sub']))
{
if(empty($_GET['n']))
{
echo "fill your name first";
}
else
{
echo "welcome ".$_GET['n'];
}
}
?>
<form>
Enter your name<input type="text" name="n"/>
<input type="submit" name="sub" value="show my name"/>
</form><hr>

<?php
$val="nitin";
if(strrev($val)==$val)
echo "Your name is palindrome";
else
echo "Your name is not palindrome";
?><hr>

<?php
$val="welcome ";
echo str_repeat($val,3);
?> <hr>

<?php
$str="welcome";
echo str_replace("e","@",$str);
?> <hr>

<?php
$str="hello user how r you";
echo str_word_count($str);
?> <hr>

<?php
$str="hello";
$str1="HELLO";
echo strcmp($str,$str1);
?> <hr>

<?php
if(isset($_GET['sub']))
{
if(empty($_GET['n']))
{
echo "<font color='red'>fill your name first</font>";
}
else
{
if(strlen($_GET['n'])<5)
{
echo "<font color='red'>name must be greater than
5</font>";
}
else
{
echo "welcome ".$_GET['n'];
}
}
}
?>
<form>
Enter your name<input type="text" name="n"/>
<input type="submit" name="sub" value="show my name"/>
</form> <hr>

<?php
$str1="hello
user
how
r
you";
echo nl2br($str1);
?> <hr>

<?php
$str="welcome to the world of php";
echo substr($str,24,3);
?> <hr>