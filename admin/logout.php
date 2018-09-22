<?php

/**
 * @Author: Ikhsan
 * @Date:   2018-09-19 22:11:29
 * @Last Modified by:   Ikhsan
 * @Last Modified time: 2018-09-20 00:15:28
 */
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Home Page
header("Location: login.php");
}
?>