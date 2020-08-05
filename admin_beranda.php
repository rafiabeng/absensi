<?php
include 'controller/koneksi.php';

$data = "SELECT * FROM `tabel_absen` ORDER BY  id DESC  ";
$mysql = mysqli_query($koneksi, $data);
error_reporting(0);

session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION["level"] == "") {

}
?>
<!DOCTYPE html>
<html>
<title>halaman beranda</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Monda&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<!-- css dan bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="../css/home_admin_mahasiswa_style.css">
<!-- data tabel plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="js/jquery-3.1.0.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<style>
body,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Raleway", sans-serif
}
</style>

<body class="w3-light-grey w3-content" style="max-width:1600px">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-blue w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="w3-container">
            <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey"
                title="close menu">
                <i class="fa fa-remove"></i>
            </a>

            <h4><b
                    style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color: #6ff9e0; font-size: 20px;">Selamat datang, 
                    <?php echo $_SESSION['jabatan']; ?></b></h4>

        </div>

        <div style="background-color:#052a4a;padding: 12px; border-radius: 10px;width:282px;margin-left:10px;">
            &nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none;color: white;" href="dashboard"
                onclick="w3_close()"><i class="fa fa-user fa-fw w3-margin-right"></i>
                <?php echo $_SESSION['nama']; ?></a>
        </div>

        <ul>
            <li>
                <p>Online</p>
            </li>
        </ul>
        <ul>
            <li>
                <p><a style="text-decoration:none;color:aquamarine;" href="keluar">logout</a></p>
            </li>
        </ul>

    </nav>
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">
        <!-- Header -->
        <header id="portfolio">

            <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
                    class="fa fa-bars"></i></span>

            <center>
                <h1
                    style=" background-color:#274965;font-family: 'Anton', sans-serif;color:white;padding:10px;font-size: 40px;">
                    <b>REKAP
                        ABSEN</b></h1>
            </center>

            <br>
        </header>
        <button style="text-decoration: none; color:white!important;
    background-color: #274965!important;
    width:100%;
    height: 50px;
    text-align:start;
    border:none;
    margin-top:-20px;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 23px;"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Rekap Absen (Akses Admin)</button>
        <br>
        <br>
        <table id="example" class="table table-striped table-bordered" style="width:100%;padding: 0px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama</th>
                    <th>jabatan</th>
                    <th>check in </th>
                    <th>check out</th>

                </tr>
            </thead>
            <tbody>

                <?php $s = 1;?>
                <?php while ($data = mysqli_fetch_assoc($mysql)): ?>
                <tr>
                    <td><?=$s?></td>
                    <td> <?=$data["nama"]?></td>
                    <td style="text-align:center"><?=$data["jabatan"]?></td>
                    <td style="color:green;text-align:center;" width="300px;"><?=$data["chekin"]?></td>
                    <td style="color:red;text-align:center;"><?=$data["chekout"]?></td>

                </tr>
                <?php $s++;?>
                <?php endwhile;?>
            </tbody>
            </tfoot>
        </table>
        <br>
        <br>
        <button style="text-decoration: none; color:white!important;
    background-color: #274965!important;
    width:100%;
    height: 138px;
    text-align:center;
    border:none;
    margin-top: 20px;
    font-size: 15px;
    padding: 12px;
    font-size: 15px;"></button>
        <br>
</body>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>

<style>
.dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 15px;
    border: none;
    cursor: pointer;
}

.w3-blue,
.w3-hover-blue:hover {
    color: #fff !important;
    background-color: #274965 !important;
}

.dropbtn:hover,
.dropbtn:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #0f3e67;
    width: 300px;
    overflow: auto;
    z-index: 1;
    margin-left: 10px;
    border-radius: -2px;
    box-shadow: -11px 10px 8px -7px #082b4a;
}

.dropdown-content2 {
    display: none;
    position: absolute;
    background-color: #0f3e67;
    width: 300px;
    overflow: auto;
    z-index: 1;
    margin-left: 10px;
    border-radius: -2px;
    box-shadow: -11px 10px 8px -7px #082b4a;
}

.show {
    display: block;
}

.dropdown a:hover {
    background-color: #ddd;
}

.w3-container,
.w3-panel {
    padding: 0.01em 16px;
}
</style>

</html>