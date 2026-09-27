<?php require_once __DIR__ . '/includes/header.php'; ?>

<?php $fotoBanner = 'foto/foto-kelas.jpeg'; ?>
<?php if (file_exists(__DIR__ . '/' . $fotoBanner)): ?>
<section class="hero-banner" style="background-image:url('<?= htmlspecialchars($fotoBanner) ?>');">
  <div class="hero-banner-overlay">
    <h1><?= htmlspecialchars($namaKelas) ?></h1>
    <p class="hero-sub"><?= htmlspecialchars($jurusan) ?> · Tahun Ajaran <?= htmlspecialchars($tahunAjaran) ?></p>
    <p class="tagline">Membangun sistem, membangun masa depan — dari baris kode hingga karya nyata.</p>
  </div>
</section>
<?php else: ?>
<section class="hero">
  <h1><?= htmlspecialchars($namaKelas) ?></h1>
  <p class="hero-sub"><?= htmlspecialchars($jurusan) ?> · Tahun Ajaran <?= htmlspecialchars($tahunAjaran) ?></p>
  <p class="tagline">Membangun sistem, membangun masa depan — dari baris kode hingga karya nyata.</p>
</section>
<?php endif; ?>

<section class="stats">
  <div class="stat-card">
    <b><?= $jumlahSiswa ?></b>
    <span>Siswa Aktif</span>
  </div>
  <div class="stat-card">
    <b><?= htmlspecialchars($tingkatKelas) ?></b>
    <span>Tingkat Kelas</span>
  </div>
</section>


<section class="panel-section">
  <p class="label">jelajahi situs kelas</p>
  <div class="feature-grid">
    <a class="feature-card" href="profil.php">
      <span class="feature-icon">1</span>
      <h3>Profil Kelas</h3>
      <p>Wali kelas, struktur organisasi, dan cerita singkat tentang kelas ini.</p>
    </a>
    <a class="feature-card" href="siswa.php">
      <span class="feature-icon">2</span>
      <h3>Daftar Siswa</h3>
      <p>Direktori lengkap <?= $jumlahSiswa ?> siswa lengkap dengan foto.</p>
    </a>
   
    <a class="feature-card" href="kontak.php">
      <span class="feature-icon">5</span>
      <h3>Kontak</h3>
      <p>Grup dan media sosial kelas untuk info terbaru.</p>
    </a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
