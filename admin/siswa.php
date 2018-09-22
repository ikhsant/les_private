<?php

/**
 * @Author: Ikhsan
 * @Date:   2018-09-23 03:01:25
 * @Last Modified by:   Ikhsan
 * @Last Modified time: 2018-09-23 03:22:24
 */
$title = 'Siswa';
include "../include/header.php";
?>

<?php
$xcrud->table('siswa');
$xcrud->relation('level','level','id_level','nama_level');
$xcrud->validation_required('nama_siswa');
echo $xcrud->render();
?>


<?php 
include "../include/footer.php";
?>