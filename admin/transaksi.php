<?php

/**
 * @Author: Ikhsan
 * @Date:   2018-09-23 03:01:25
 * @Last Modified by:   Ikhsan
 * @Last Modified time: 2018-09-23 03:27:06
 */
$title = 'Transaksi';
include "../include/header.php";
?>

<?php
$xcrud->table('transaksi');
$xcrud->relation('siswa','siswa','id_siswa','nama_siswa');
$xcrud->relation('orang_tua','orang_tua','id_orang_tua','nama_orang_tua');
$xcrud->relation('level','level','id_level','nama_level');
$xcrud->change_type('bukti', 'image');
echo $xcrud->render();
?>


<?php 
include "../include/footer.php";
?>