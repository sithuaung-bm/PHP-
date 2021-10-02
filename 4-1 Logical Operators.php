<?php
$name="koko";
$pass="koko123";
if($name=="koko" && $pass=="koko12345")
{
header('location:welcome.html');
}
else
{
echo "Invalid name or password";
}
?>