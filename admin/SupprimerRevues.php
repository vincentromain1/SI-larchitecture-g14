<?php

require_once "Class/Revues.php";

$revues = new Revues();

$revues->delete($_GET['id']);
header("Location: RevuesIndex.php");

exit();