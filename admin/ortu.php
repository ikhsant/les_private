<?php

/**
 * @Author: Ikhsan
 * @Date:   2018-09-23 03:01:25
 * @Last Modified by:   Ikhsan
 * @Last Modified time: 2018-09-23 03:22:36
 */
$title = 'Orang Tua';
include "../include/header.php";
?>

<?php
$xcrud->table('orang_tua');
$xcrud->relation('siswa','siswa','id_siswa','nama_siswa');
$xcrud->validation_required('nama_orang_tua');
echo $xcrud->render();
?>


<?php 
include "../include/footer.php";
?>