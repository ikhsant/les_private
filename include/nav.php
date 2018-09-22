<?php

/**
 * @Author: Ikhsan
 * @Date:   2018-09-19 22:11:29
 * @Last Modified by:   Ikhsan
 * @Last Modified time: 2018-09-23 03:30:13
 */
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="padding: 4px!important">
      <img src="../uploads/logo/<?php echo $setting['logo']; ?>" height="100%">
    </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php"><b><?php echo $setting['nama_website']; ?></b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><i class="fa fa-star"></i> Dashboard</a></li>

        <?php if($_SESSION['akses_level'] == "admin"){ ?>
        <li><a href="siswa.php"><i class="fa fa-user"></i> Siswa</a></li>
        <li><a href="ortu.php"><i class="fa fa-user"></i> Orang Tua</a></li>
        <li><a href="level.php"><i class="fa fa-trophy"></i> Level</a></li>
        <li><a href="transaksi.php"><i class="fa fa-exchange"></i> Transaksi</a></li>
        <li><a href="laporan.php"><i class="fa fa-print"></i> Laporan</a></li>
        <li><a href="user.php"><i class="fa fa-users"></i> Pegawai</a></li>
        <?php  } ?>

        <?php if($_SESSION['akses_level'] == "guru"){ ?>
           <li><a href="siswa.php"><i class="fa fa-user"></i> Siswa</a></li>
        <?php  } ?>

        <?php if($_SESSION['akses_level'] == "cs"){ ?>
        <li><a href="transaksi.php"><i class="fa fa-exchange"></i> Transaksi</a></li>
        <?php  } ?>

        <?php if($_SESSION['akses_level'] == "owner"){ ?>
          <li><a href="laporan.php"><i class="fa fa-print"></i> Laporan</a></li>
        <li><a href="user.php"><i class="fa fa-users"></i> Pegawai</a></li>
        <?php } ?>

        <?php if($_SESSION['akses_level'] == "ortu"){ ?>
          <li><a href="menu_ortu.php"><i class="fa fa-print"></i> Data Anak</a></li>
        <?php } ?>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nama'] ?> <span class="label label-info"><?php echo $_SESSION['akses_level'] ?></span></a></li>
        <?php if($_SESSION['akses_level'] == "admin" | $_SESSION['akses_level'] == "owner"){ ?>
        <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
        <?php  } ?>
        <li><a href="logout.php" onclick="return confirm('Yakin Keluar?')"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">