<?php
session_start();

// 1. Data Dummy Pengguna
$dummy_user = [
    'email' => 'admin@gmail.com',
    'password' => 'password123',
    'nama' => 'Fadhil Hazza'
];

// 2. Cek apakah ada data yang dikirim lewat POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 3. Validasi dengan data dummy
    if ($email === $dummy_user['email'] && $password === $dummy_user['password']) {
        // Login Sukses: Simpan nama ke dalam session
        $_SESSION['status_login'] = true;
        $_SESSION['nama_user'] = $dummy_user['nama'];
        
        // Alihkan langsung ke index.html
        header('Location: index.html');
        exit;
    } else {
        // Login Gagal
        echo "<script>alert('Email atau Password salah!'); window.location='login.php';</script>";
        exit;
    }
}
?>
