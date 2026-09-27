<?php require_once __DIR__ . '/includes/header.php'; ?>

<section class="page-head">
  <p class="eyebrow">Kenalan Yuk</p>
  <h1>Daftar Siswa</h1>
  <p class="hero-sub"><?= $jumlahSiswa ?> siswa <?= htmlspecialchars($namaKelas) ?> — satu kelas, banyak cerita.</p>
</section>

<section class="panel-section">
  <p class="label">Anggota Kelas</p>
  <p style="color:var(--ink-dim);font-size:14px;margin-top:-10px;">
    Kenalan dengan teman-teman yang menjadi bagian dari <?= htmlspecialchars($namaKelas) ?>.
  </p>

  <div class="grid">
  <?php foreach ($siswa as $s):
      $fotoPath = __DIR__ . '/foto/' . $s['foto'];
      $fotoUrl  = 'foto/' . $s['foto'];
      $adaFoto  = file_exists($fotoPath);
      $inisial  = strtoupper(mb_substr($s['nama'], 0, 1));
  ?>
    <div class="card">
      <div class="foto-wrap">
        <?php if ($adaFoto): ?>
          <img src="<?= htmlspecialchars($fotoUrl) ?>" alt="Foto <?= htmlspecialchars($s['nama']) ?>" loading="lazy">
        <?php else: ?>
          <div class="foto-kosong"><?= htmlspecialchars($inisial) ?></div>
        <?php endif; ?>
      </div>
      <p class="nama"><?= htmlspecialchars($s['nama']) ?></p>
      <p class="absen">No. Absen <?= htmlspecialchars($s['no']) ?></p>
    </div>
  <?php endforeach; ?>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
