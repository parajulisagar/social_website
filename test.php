<?php
require 'sys/config.php';
require 'sys/dbConn.php';

$time = time();

echo date("h:m:s d-m-Y", $time);

print_r($_POST);

 ?>

<form action="test.php" method="post">

  <input type="submit" name="1" value="Click me">
</form>
