<?php 
// panggil koneksi
include 'koneksi.php';

$nama_user = $_POST["nama_user"];
$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];

$query = mysqli_query($koneksi, "INSERT INTO user VALUES(NULL, '$nama_user', '$username', '$password', '$role')");

if($query){
    echo "
        <script type='text/javascript'>
            alert('Registrasi Berhasil');
            window.location = 'login.php'
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Registrasi Gagal');
        window.location = 'register.php'
    </script>
    ";
}

?>