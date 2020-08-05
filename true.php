<?php
include 'controller/koneksi.php';

$id = mt_rand(1000, 9999);
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$password = $_POST['password'];
$chekin = $_POST['chekin'];
$chekout = $_POST['chekout'];

$data = "SELECT * FROM `tabel_absen`  ";
$mysql = mysqli_query($koneksi, $data);
error_reporting(0);

session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION["level"] == "") {

}
?>
<!DOCTYPE html>
<html>
<title>absensi</title>
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
                    style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color: #6ff9e0; font-size: 20px;">WELCOME
                    <?php echo $_SESSION['jabatan']; ?></b></h4>

        </div>

        <div style="background-color:#052a4a;padding: 12px; border-radius: 10px;width:282px;margin-left:10px;">
            &nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none;color: white;" onclick="w3_close()"><i
                    class="fa fa-user fa-fw w3-margin-right"></i>
                <?php echo $_SESSION['nama']; ?></a>
        </div>

        <ul>
            <li>
                <p>Online</p>
            </li>
        </ul>
        <ul>
            <li>
                <p><a style="text-decoration:none;color:aquamarine;" href="logout.php">logout</a></p>
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
    font-size: 23px;"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Hai <?php echo $nama ?>, apakah anda yakin
            ingin menyimpan data check in?</button>
        <br>
        <form action="controller/input.php" method="POST">

            <br>
            <br>
            <center>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <input
                            style="   background-color: #4CAF50; border: none; border-radius: 12px; padding: 12px; width: 120px;"
                            type="submit" name="submit" class="fadeIn fourth" value="yakin">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <input
                            style=" text-align:center; background-color: red; border: none; border-radius: 12px;  padding: 12px; width: 120px;"
                            type="" name="submit" class="fadeIn fourth" value="tidak" readonly='readonly'
                            onclick="back()">
                    </div>
                </div>
                <br><br><br>
                <input
                    style=" background-color: #7b99b3;border: none;border-radius: 12p;padding: 12px;text-align: center;"
                    type="text" value="NIK" readonly="readonly">
                <input
                    style=" background-color: #7b99b3;border: none;border-radius: 12p;padding: 12px;text-align: center;"
                    type="text" value="NAMA" readonly="readonly">
                <input
                    style=" background-color: #7b99b3;border: none;border-radius: 12p;padding: 12px;text-align: center;"
                    type="text" value="JABATAN" readonly="readonly">
                <input
                    style=" background-color: #7b99b3;border: none;border-radius: 12p;padding: 12px;text-align: center;"
                    type="text" value="CHECKIN" readonly="readonly">
                <input
                    style=" background-color: #7b99b3;border: none;border-radius: 12p;padding: 12px;text-align: center;"
                    type="hidden" readonly="readonly">
                <input
                    style=" background-color: #7b99b3;border: none;border-radius: 12p;padding: 12px;text-align: center;"
                    type="" value="CHEKOUT" readonly="readonly">

                <input
                    style="background-color: #9cc0de;border: none;border-radius: 12p;padding: 12px;text-align: center;"
                    type="text" name="nik" value="<?php echo $nik; ?>" readonly="readonly">
                <input
                    style="background-color: #9cc0de;border: none;border-radius: 12p;padding: 12px;text-align: center;"
                    type="text" name="nama" value="<?php echo $nama; ?>" readonly="readonly">
                <input
                    style="background-color: #9cc0de;border: none;border-radius: 12p;padding: 12px;text-align: center;"
                    type="text" name="jabatan" value="<?php echo $jabatan; ?>" readonly="readonly">
                <input
                    style="background-color: #9cc0de;border: none;border-radius: 12p;padding: 12px;text-align: center;"
                    type="text" name="chekin" value="<?php echo $chekin; ?>" readonly="readonly">
                <input
                    style="background-color: #9cc0de;border: none;border-radius: 12p;padding: 12px;text-align: center;"
                    type="hidden" name="password" value="<?php echo $password; ?>" readonly="readonly">
                <input
                    style="background-color: #9cc0de;border: none;border-radius: 12p;padding: 12px;text-align: center;"
                    type="" name="chekout" value="jangan lupa checkout" readonly="readonly">
            </center>
        </form>

        <script>
        function back() {
            window.history.back();
        }
        </script>

        <br>
        <button style="text-decoration: none; color:white!important;
    background-color: #274965!important;
    width:100%;
    height: 128px;
    text-align:center;
    border:none;
    margin-top:330px;
    font-size: 15px;"></button>
        <br>
</body>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
<script>
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