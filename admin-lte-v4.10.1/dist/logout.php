<?php
// 1. Memulai session agar bisa membaca session yang aktif
session_start();

// 2. Menghapus semua variabel session yang terdaftar
session_unset();

// 3. Menghancurkan session secara total dari server dan browser
session_destroy();

// 4. Mengalihkan halaman ke register.php setelah berhasil keluar
header('Location: register.php');
exit;
?>
