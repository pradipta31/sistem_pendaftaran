<?php
session_start();
if( !isset($_POST['username']) ) { header('location:index.php'); exit(); }
$error = '';
require ( 'config.php' );
$username = trim( $_POST['username'] );
$password = trim( $_POST['password'] );
if( strlen($username) < 2 )
{
    $error = 'username tidak boleh kosong';
}else if( strlen($password) < 2 )
{
    $error = 'Password Tidak boleh kosong';
}else{
    $username = $koneksi->escape_string($username);
    $password = $koneksi->escape_string($password);
    $password = md5($password);
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
    $query = $koneksi->query($sql);
    if( !$query )
    {
        die( 'Database gagal! '. $koneksi->error );
    }
    if( $query->num_rows == 1 )
    {
        $row =$query->fetch_assoc();
        $_SESSION['nama_user'] = $row['nama'];
        $_SESSION['username_user'] = $row['username'];
        $_SESSION['akses'] = $row['hak_akses'];

        if( $row['hak_akses'] == 'admin')
        {
            $_SESSION['session_admin']= 'TRUE';
        }
        elseif ($row['hak_akses'] == 'kepalakantor') {
          $_SESSION['session_kepalakantor'] = 'TRUE';
        }
        header('location:'.$url.'/'.$_SESSION['akses'].'/');
        exit();

    }else{
        $error = 'Username dan Password Tidak ditemukan';
    }

}

if( !empty($error) )
{
    $_SESSION['error'] = $error;
    header('location:'.$url.'/index.php');
    exit();
}
?>
