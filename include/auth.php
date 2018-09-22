<?php

/**
 * @Author: Ikhsan
 * @Date:   2018-09-19 22:11:29
 * @Last Modified by:   Ikhsan
 * @Last Modified time: 2018-09-20 00:16:02
 */
session_start();
if(!isset($_SESSION["nama"])){
header("Location: login.php");
exit();
}
?>