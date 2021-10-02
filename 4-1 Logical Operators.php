<?php
$name="Demo";
$pass="Demo123";
if($name=="Demo" && $pass=="Demo123")
{
header('location:welcome.html');
}
else
{
echo "Invalid name or password";
}
?>
