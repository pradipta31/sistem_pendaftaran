<?php
session_start();
if( !isset($_POST['email']) ) { header('location:login-peserta.php'); exit(); }
$error = '';
require ( 'koneksi.php' );
$email = $_POST['email'];
$nomor_peserta = $_POST['nomor_peserta'];
if( strlen($email) < 2 )
{
    $error = 'Email tidak boleh kosong';
}else if( strlen($nomor_peserta) < 2 )
{
    $error = 'Nomor Peserta Tidak boleh kosong';
}else{
    $email = $koneksi->escape_string($email);
    $nomor_peserta = $koneksi->escape_string($nomor_peserta);
    $sql = "SELECT * FROM peserta WHERE email='$email' AND nomor_peserta='$nomor_peserta' LIMIT 1";
    $query = $koneksi->query($sql);
    if( !$query )
    {
        die( 'Database gagal! '. $koneksi->error );
    }
    if( $query->num_rows == 1 )
    {
        $row =$query->fetch_assoc();
        $_SESSION['nama_user'] = $row['nama'];
        $_SESSION['nomor'] = $row['nomor_peserta'];
        header('location: profil-peserta.php');
        exit();

    }else{
        echo "<script>alert('Email atau password salah!');
          window.location.href='login-peserta.php';
        </script>";
    }

}

if( !empty($error) )
{
    $_SESSION['error'] = $error;
    header('location: login-peserta.php');
    exit();
}
?>
