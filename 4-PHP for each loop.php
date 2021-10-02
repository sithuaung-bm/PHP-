<?php
$person=array("koko", "monmon","KyawKyaw");
foreach ($person as $val)
{
echo $val."<br/>";
}
?><hr>

<?php
$color=array("r"=>"red", "g"=>"green","b"=>"black","w"=>"white");
foreach ($color as $key=>$val)
{
echo $key."--".$val."<br/>";
}
?><hr>

<?php
$array=array(10,11,12,13,14,15);
$sum=0;
foreach ($array as $x)
{
$sum=$sum+$x;
}
echo "Sum of given array = ".$sum;
?><hr>