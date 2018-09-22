<?php

/**
 * @Author: Ikhsan
 * @Date:   2018-09-19 22:11:29
 * @Last Modified by:   Ikhsan
 * @Last Modified time: 2018-09-23 03:53:03
 */
$title = 'Pegawai';
include "../include/header.php";
?>

<?php
$xcrud->table('user');
$xcrud->table_name('Data Pegawai');
$xcrud->unset_remove();
$xcrud->change_type('password', 'password', 'sha1', array('maxlength'=>100,'placeholder'=>'Masukan password'));
$xcrud->change_type('foto', 'image');
echo $xcrud->render();
?>

<?php 
include "../include/footer.php";
?>