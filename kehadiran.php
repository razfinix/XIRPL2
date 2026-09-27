<?php require_once __DIR__ . '/includes/header.php'; ?>

<section class="page-head">
  <p class="eyebrow">// kehadiran</p>
  <h1>Rekap Kehadiran</h1>
  <p class="hero-sub">Ringkasan sakit (S), izin (I), dan alpa (A) semester berjalan.</p>
</section>

<section class="panel-section">
  <div class="table-wrap">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Siswa</th>
          <th>Sakit</th>
          <th>Izin</th>
          <th>Alpa</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($siswa as $s):
          $rekap = $kehadiran[$s['nama']] ?? ['sakit' => 0, 'izin' => 0, 'alpa' => 0];
      ?>
        <tr>
          <td><?= htmlspecialchars($s['no']) ?></td>
          <td><?= htmlspecialchars($s['nama']) ?></td>
          <td><?= htmlspecialchars($rekap['sakit']) ?></td>
          <td><?= htmlspecialchars($rekap['izin']) ?></td>
          <td><?= htmlspecialchars($rekap['alpa']) ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <p style="color:var(--ink-dim);font-size:13px;margin-top:14px;">
    Data ini otomatis diambil dari <code>data/kehadiran.php</code> — perbarui angkanya setiap
    bulan agar rekap tetap akurat.
  </p>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
