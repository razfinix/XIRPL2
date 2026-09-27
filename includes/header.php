<?php
require_once __DIR__ . '/config.php';
$halaman = basename($_SERVER['PHP_SELF']);
function navClass($file, $halaman) { return $file === $halaman ? 'active' : ''; }
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($namaKelas) ?></title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<input type="checkbox" id="menu-toggle" class="menu-toggle">

<nav class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="index.php">
      <span class="brand-mark">&lt;/&gt;</span>
      <span><?= htmlspecialchars($namaKelas) ?></span>
    </a>
    <label for="menu-toggle" class="hamburger" aria-label="Buka menu">
      <span></span><span></span><span></span>
    </label>
    <div class="nav-links">
      <a href="index.php" class="<?= navClass('index.php', $halaman) ?>">Beranda</a>
      <a href="profil.php" class="<?= navClass('profil.php', $halaman) ?>">Profil Kelas</a>
      <a href="siswa.php" class="<?= navClass('siswa.php', $halaman) ?>">Daftar Siswa</a>
      
      <a href="kontak.php" class="<?= navClass('kontak.php', $halaman) ?>">Kontak</a>
    </div>
  </div>
</nav>

<div class="page">
