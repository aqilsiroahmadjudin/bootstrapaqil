<?php
session_start();

// mengecek login sudah masuk atau belum
if ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != '' ) {
    $halaman = $_SESSION['user_login'];
    // jika sudah
    header('location:on-'. $halaman);
    exit();
} else {
	// jika belum
    header('location:login.php');
    exit();
}