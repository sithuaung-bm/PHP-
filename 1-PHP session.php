<?php
error_reporting(1);
//first start session environment
session_start();
// store data in session variable through user
$_SESSION['user']= $_POST['un'];
$_SESSION['profile']= $_POST['prof'];
?>
<html>
<body>
<form method="post">
Enter your user name <input type="text" name="un"/><hr/>
Enter your profile <input type="text" name="prof"/><hr/>
<input type="submit" value="Store in session variable"/><
</form>
</body>
</html>