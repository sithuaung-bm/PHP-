<?php
$i=2;
if ($i == 0)
{
echo "$i equals 0 ";
}
elseif ($i == 1)
{
echo "$i equals 1 ";
}
elseif ($i == 2)
{
echo "$i equals 2 "."<hr>";
}
//using switch
switch ($i)
{
case 0:
echo "$i equals 0 ";
break;
case 1:
echo "$i equals 1 ";
break;
case 2:
echo "$i equals 2 ";
break;
}
?><hr>
<?php
$i=5;
switch ($i)
{
case 0:
echo "i equals 0";
break;
case 1:
echo "i equals 1";
break;
case 2:
echo "i equals 2";
break;
default:
echo "i is not equal to 0, 1 or 2";
}
?>