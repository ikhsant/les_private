<?php

/**
 * @Author: Ikhsan
 * @Date:   2018-09-20 21:04:35
 * @Last Modified by:   Ikhsan
 * @Last Modified time: 2018-09-23 03:14:47
 */
$title = 'Transaksi';
include "../include/header.php";
?>

<?php
$xcrud->table('transaksi');
$xcrud->table_name('Laporan Transaksi');
$xcrud->relation('siswa','siswa','id_siswa','nama_siswa');
$xcrud->relation('orang_tua','orang_tua','id_orang_tua','nama_orang_tua');
$xcrud->unset_add();
    $xcrud->unset_edit();
    $xcrud->unset_remove();
    $xcrud->unset_view();
    $xcrud->unset_csv();
    $xcrud->unset_limitlist();
    $xcrud->unset_numbers();
    $xcrud->unset_pagination();
    $xcrud->unset_search();
    $xcrud->unset_sortable();
echo $xcrud->render();
?>


<?php 
include "../include/footer.php";
?>