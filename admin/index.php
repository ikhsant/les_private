<?php
include '../include/header.php';
?>

<?php 
// notif pesan
if (!empty($_SESSION['pesan'])) { ?>
	<div class="alert alert-success">
		<i class="fa fa-check"></i> <?php echo $_SESSION['pesan']; ?>
	</div>
	<br>
	<?php 
	$_SESSION['pesan'] = '';
} 

// notif pesan ewrror
if (!empty($_SESSION['error'])) { ?>
	<div class="alert alert-danger">
		<i class="fa fa-check"></i> <?php echo $_SESSION['error']; ?>
	</div>
	<br>
	<?php 
	$_SESSION['error'] = '';
} 
?>

<?php 
if($_SESSION['akses_level'] == "admin" | $_SESSION['akses_level'] == "owner" | $_SESSION['akses_level'] == "guru" | $_SESSION['akses_level'] == "cs"){

$pegawai = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user"));
$siswa = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM siswa"));
$ortu = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM orang_tua"));
$transaksi = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM transaksi"));

?>

<script type="text/javascript" src="../assets/js/Chart.min.js"></script>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-archive fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <span style="font-size: 50px"><?php echo $transaksi ?></span>
                    <div><b>Total Transaksi</b></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-graduation-cap fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <span style="font-size: 50px"><?php echo $siswa ?></span>
                    <div>Siswa</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <span style="font-size: 50px"><?php echo $ortu ?></span>
                    <div>Orang Tua</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <span style="font-size: 50px"><?php echo $pegawai ?></span>
                    <div>Pegawai</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            Level Siswa
        </div>
        <div class="panel-body">
            <canvas id="myChart" height="200px"></canvas>
        </div>
    </div>
</div>



<?php  
$level1 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM siswa WHERE level = '1' "));
$level2 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM siswa WHERE level = '2' "));
$level3 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM siswa WHERE level = '3' "));
$level4 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM siswa WHERE level = '4' "));

?>
<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["level1", "level2", "level3", "level4"],
            datasets: [{
                label: '# Level Sisa',
                data: [<?php echo $level1 ?>, <?php echo $level2 ?>, <?php echo $level3 ?>, <?php echo $level4 ?>],
                backgroundColor: [
                'rgb(255, 128, 170)',
                'rgb(0, 255, 153)',
                'rgb(0, 191, 255)',
                'rgb(255, 128, 0)'
                ]
            }]
        },

    });
</script>


<?php } ?>


<?php if($_SESSION['akses_level'] == "ortu" ){ ?>

<div class="alert alert-info">
    <h1>Hello <?php echo $_SESSION['nama'] ?></h1>
</div>

<?php } ?>


<?php  
include '../include/footer.php';
?>