<?php
 echo "Welcome to the world of php.";
?><hr>
<?php
 $mycar="Honda";
 echo $mycar;
?><hr>
<?php
 $mycar="Honda CRV";
 echo $mycar." is riding.";
?><hr>
<?php
 $first=200;
 $second=300;
 $third=$first+$second;
 echo "Sum=".$third;
?><hr>
<?php
 $first=500;
 $second=200;
 $third=$first-$second;
 echo "Sub=".$third;
?><hr>
<?php
 $name="MgMg";
 echo $name."<br>";
 //unset($name);
 echo $name;
?><hr>
<?php
 $name="Mg Mg";
 var_dump($name);
?><hr>
<?php
 $first=200;
 $second=300;
 $third=$first+$second;
 var_dump($third);
?><hr>
<?php
 $first=200.2;
 $second=300.3;
 $third=$first+$second;
 var_dump($third);
?><hr>
<?php
 $bool=false;
 var_dump($bool);
?><hr>
<?php
 $name="MgMg";
 $$name="TunTun";
 echo $name."<br>";
 echo $$name."<br>";
 echo $MgMg."<br>";
?><hr>
<?php
$blank=null;
var_dump($blank);
?>