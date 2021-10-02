<?php
$i=1;
while($i<=5)
{
echo "The number is " . $i . "<br>";
$i++;
}
?><hr>
<?php
$i=1;
$sum=0;
while($i<=100)
{
$sum=$sum+$i;
$i++;
}
echo "Sum= " . $sum;
?><hr>
<?php
@$num=$_GET['num'];
$sum=0;
$rem=0;
$len=0;
while((int)$num!=0)
{
$len++;
$rem=$num%10;
$sum=$sum+$rem;
$num=$num/10;
}
echo "Length of given digit= " . $len."<br/>";
echo "Sum of given digit= " . $sum;
?>
<body>
<form>
Enter Your digit
<input type="text" name="num"><br/>
<input type="submit" value="find the sum">
</form>
</body>