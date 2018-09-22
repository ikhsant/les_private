<?php

/**
 * @Author: Ikhsan
 * @Date:   2018-09-23 03:30:43
 * @Last Modified by:   Ikhsan
 * @Last Modified time: 2018-09-23 03:44:34
 */
$title = 'Menu Ortu';
include "../include/header.php";
?>

<?php
$id_ortu = $_SESSION['id_user'];
$xcrud->table('siswa');
$xcrud->join('id_siswa','orang_tua','siswa');
$xcrud->where('orang_tua.siswa =',$id_ortu);
$xcrud->columns('nama_siswa,tanggal_lahir,level,nilai,orang_tua.nama_orang_tua');
$xcrud->validation_required('nama_siswa');
echo $xcrud->render();
echo $id_ortu;
?>



<?php 
include "../include/footer.php";
?>