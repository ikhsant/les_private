<?php

/**
 * @Author: Ikhsan
 * @Date:   2018-09-23 03:01:25
 * @Last Modified by:   Ikhsan
 * @Last Modified time: 2018-09-23 03:09:45
 */
$title = 'Level';
include "../include/header.php";
?>

<?php
$xcrud->table('level');
$xcrud->unset_remove();
$xcrud->validation_required('nama_level');
echo $xcrud->render();
?>


<?php 
include "../include/footer.php";
?>