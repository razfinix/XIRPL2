<?php require_once __DIR__ . '/includes/header.php'; ?>

<section class="page-head">
  <p class="eyebrow">Tentang Kelas</p>
  <h1>Profil Kelas</h1>
  <p class="hero-sub">Kenalan lebih dekat dengan wali kelas dan pengurus yang ikut menjaga kekompakan kelas.</p>
</section>

<section class="panel-section">
  <p class="label">Wali Kelas</p>
  <div class="roles-grid">
    <div class="panel">
      <p class="role">Wali Kelas</p>
      <p class="name"><?= htmlspecialchars($waliKelas) ?></p>
    </div>
  </div>
</section>

<section class="panel-section">
  <p class="label">Pengurus Kelas</p>
  <p style="color:var(--ink-dim);font-size:14px;margin-top:-10px;">
    Orang-orang yang membantu mengatur dan membuat kegiatan kelas tetap berjalan dengan baik.
  </p>

  <div class="roles-grid">
    <div class="panel">
      <p class="role">Ketua Kelas</p>
      <p class="name">abyadh hidayatulah</p>
    </div>
    <div class="panel">
      <p class="role">Wakil Ketua</p>
      <p class="name">teuku abdul razaq</p>
    </div>
    <div class="panel">
      <p class="role">Sekretaris</p>
      <p class="name">eka lisa apriliani</p>
    </div>
    <div class="panel">
      <p class="role">Bendahara</p>
      <p class="name">cahaya putri asysyuara effendi</p>
    </div>
  </div>
</section>

<section class="panel-section">
  <p class="label">Dibuat Oleh</p>
  <p class="lead">
    Website kelas ini dibuat oleh Razaq untuk menjadi tempat sederhana buat mengenal anggota, pengurus, dan aktivitas kelas.
  </p>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
