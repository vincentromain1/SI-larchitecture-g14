<?php
session_start();
session_unset();
session_destroy();
header("Location: Panel_admin.php");
exit();
/**
 * Created by PhpStorm.
 * User: leolombard
 * Date: 15/05/2017
 * Time: 16:33
 */