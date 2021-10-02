<?php
$arr = array(10,11,12,13,14,15);
echo $arr[0];
?> <hr>

<?php
$brr[]=10;
$brr[]=20;
$brr[]=30;
$brr[]=40;
$brr[]=50;
echo $brr[0];
?> <hr>

<?php
$crr[0]=10;
$crr[1]=20;
$crr[2]=30;
$crr[3]=40;
$crr[4]=50;
echo $crr[0];
?> <hr>

<?php
$arry=array(10,20,30,40,50);
$col=array("red","green","blue","black");
//print first value of $arr and $col array
echo $arry[0];
echo $col[0];
?> <hr>

<?php
$sum=0;
$arrf=array(10,20,30,40,50);
for($i=0;$i<count($arrf);$i++)
{
$sum=$sum+$arrf[$i];
}
echo "Sum of given array = ".$sum;
?> <hr>

<?php
$cola=array("blue","red","green","white","pink");
for($i=0;$i<count($cola);$i++)
{
echo $cola[$i]." ";
}
?> <hr>

<?php
$arrz=array(10,11,12,13,14,15);
for($i=0;$i<count($arrz);$i++)
{
if($arrz[$i]%2==0)
{
@$even=$even+$arrz[$i];
}
else
{
@$odd=$odd+$arrz[$i];
}
}
echo "Sum of even=".$even."<br/>";
echo "Sum of odd=".$odd;
?>
