<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sign Up Page E-Absensi</title>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active">Daftar Akun</h2>
            <!-- Icon -->
            <div class="fadeIn first">

            </div>

            <!-- Login Form -->
            <form action="controller/daftar.php" method="post">
                <input type="hidden" name="id" id="">
                <input type="text" id="login" class="fadeIn second" name="nik" placeholder="NIK" required
                    oninvalid="this.setCustomValidity('NIK tidak boleh kosong!')" oninput="this.setCustomValidity('')">
                <input type="text" id="nama" class="fadeIn third" name="nama" placeholder="Nama Lengkap" required
                    oninvalid="this.setCustomValidity('Nama tidak boleh kosong!')" oninput="this.setCustomValidity('')">
                <select type="text" name="jabatan" id="">
                    <option value="">pilih jabatan</option>
                    <option value="karyawan">karyawan</option>
                    <option value="mahasiswa">mahasiswa</option>
                </select>
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password"
                    required oninvalid="this.setCustomValidity('Password tidak boleh kosong!')"
                    oninput="this.setCustomValidity('')">
                <input type="hidden" name="chekin" value="new member">
                <input type="hidden" name="chekout" value="new member">
                <input type="submit" name="submit" class="fadeIn fourth" value="Daftar">
            </form>

        </div>
    </div>
</body>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins');

/* BASIC */

body {
    font-family: "Poppins", sans-serif;
    height: 100vh;
}

a {
    color: #92badd;
    display: inline-block;
    text-decoration: none;
    font-weight: 400;
}

h2 {
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    display: inline-block;
    margin: 40px 8px 10px 8px;
    color: #cccccc;
}



/* STRUCTURE */

.wrapper {
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    min-height: 100%;
    padding: 20px;
}

#formContent {
    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;
    padding: 30px;
    width: 90%;
    max-width: 450px;
    position: relative;
    padding: 0px;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
    box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
    text-align: center;
}

#formFooter {
    background-color: #f6f6f6;
    border-top: 1px solid #dce8f1;
    padding: 25px;
    text-align: center;
    -webkit-border-radius: 0 0 10px 10px;
    border-radius: 0 0 10px 10px;
}



/* TABS */


h2.active {
    color: #0d0d0d;

}



/* FORM TYPOGRAPHY*/

input[type=button],
input[type=submit],
input[type=reset],
select[type=text] {
    background-color: #56baed;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
    box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 5px 20px 40px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

input[type=button]:hover,
input[type=submit]:hover,
input[type=reset]:hover,
select[type=text] {
    background-color: #39ace7;
}

input[type=button]:active,
input[type=submit]:active,
input[type=reset]:active,
select[type=text] {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
}

input[type=text],
input[type=password] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
}



/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
    display: block;
    left: 0;
    bottom: -10px;
    width: 0;
    height: 2px;
    background-color: #56baed;
    content: "";
    transition: width 0.2s;
}

.underlineHover:hover {
    color: #0d0d0d;
}

.underlineHover:hover:after {
    width: 100%;
}



*:focus {
    outline: none;
}

#icon {
    width: 60%;
}

* {
    box-sizing: border-box;
}
</style>

</html>