<?php
error_reporting(E_ERROR);
session_start();

$_SESSION['regName'] = $regValue;

?>

<form method="get" action="page2.php">
    <input type="text" name="regName" value="">
    <input type="submit">
</form>