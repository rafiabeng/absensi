<?php
include 'koneksi.php';

session_start();
if (isset($_POST['submit'])) {
    $nik = $_POST['nik'];
    $password = $_POST['password'];

    $cek_data = " SELECT * FROM `tabel_absen` WHERE nik = '$nik' and password = '$password'  ";
    $login = mysqli_query($koneksi, $cek_data);

}

if ($login) {
    $data = mysqli_fetch_assoc($login);
    if ($data['jabatan'] == "mahasiswa") {
        $_SESSION['nik'] = $data['nik'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['jabatan'] = $data['jabatan'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['chekin'] = $data['chekin'];
        $_SESSION['chekout'] = $data['chekout'];

        header('location:../dashboard');

    } else if ($data['jabatan'] == "karyawan") {
        $_SESSION['nik'] = $data['nik'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['jabatan'] = $data['jabatan'];
        $_SESSION['password'] = $data['password'];

        header('location:../dashboard');

    } else if ($data['jabatan'] == "admin") {
        $_SESSION['nik'] = $data['nik'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['jabatan'] = $data['jabatan'];

        header('location:../dashboard_admin');

    } else {
        header('location:../index.php');
    }

} else {

    header('location:../index.php');
}