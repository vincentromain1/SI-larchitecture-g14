<?php

require_once "Class/Newsletter.class.php";

$news = new Newsletter();

$news->delete($_GET['id']);
header("Location: Newsletterindex.php");

exit();