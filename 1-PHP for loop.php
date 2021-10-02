<?php
for ($i=1; $i<=5; $i++)
{
echo "The Number is: ".$i."<br/>";
}
?><hr>
<?php
$name="ZawZaw";
for ($i=1; $i<=5; $i++)
{
echo "My Name is: ".$name."<br/>";
}
?><hr>
<?php
$sum=0;
for ($i=1; $i<=100; $i++)
{
$sum=$sum+$i;
}
echo $sum;
?><hr>
<?php
for ($i=2; $i<=100; $i+=2)
{
echo $i." ";
}
?><hr>
<?php
for ($i=1; $i<=100; $i++)
{
if($i%2==0)
{
@$even=$even+$i;
}
else
{
@$odd=$odd+$i;
}
}
echo "Sum of even numbers=".$even."<br/>";
echo "Sum of odd numbers=".$odd;
?><hr>
<?php
@$f=$_GET['f'];
@$s=$_GET['s'];
for ($i=1; $i<=$s; $i++)
{
$f++;
}
echo "Sum of given numbers=".$f;
?>
<body>
<form>
Enter first number
<input type="text" name="f"><br/>
Enter Second number
<input type="text" name="s"><br/>
<input type="submit" value="add">
</form>
</body><hr>

<?php
for ($i=1; $i<=5; $i++)
{
for($j=1;$j<=$i;$j++)
{
echo $j." ";
}
echo "<br/>";
}
?><hr>

<?php
for ($i=1; $i<=5; $i++)
{
for ($k=5; $k>$i; $k--)
{
//print one space throgh html ;
echo "&nbsp;";
}
for($j=1;$j<=$i;$j++)
{
echo "&nbsp;"."*"."&nbsp;";
}
echo "<br/>";
}
?> <hr>

<?php
if(isset($_POST['create']))
{
$rows=$_POST['r'];
$cols=$_POST['c'];
echo "<table border='1'>";
for($i=0;$i<$rows;$i++)
{
echo "<tr>";
for($j=0;$j<$cols;$j++)
{
echo "<th>"."r".$i."c".$j."</th>";
}
echo "</tr>";
}
echo "</table>";
}
?>
<html>
<body>
<form method="post">
<table width="400" border="1">
<tr>
<td width="177">Enter number of rows </td>
<td width="207"><input type="text" name="r"/></td>
</tr>
<tr>
<td>Enter number of column </td>
<td><input type="text" name="c"/></td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="Create Table" name="create"/>
</td>
</tr>
</table>
</form>
</body>
</html>