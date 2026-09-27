<?php require_once __DIR__ . '/includes/header.php'; ?>

<section class="page-head">
  <p class="eyebrow">// jadwal</p>
  <h1>Jadwal Pelajaran</h1>
  <p class="hero-sub">Contoh susunan mingguan — sesuaikan dengan jadwal resmi sekolah.</p>
</section>

<section class="panel-section">
  <div class="table-wrap">
    <table class="table">
      <thead>
        <tr>
          <th>Jam</th>
          <th>Senin</th>
          <th>Selasa</th>
          <th>Rabu</th>
          <th>Kamis</th>
          <th>Jumat</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>07.30 – 09.00</td>
          <td>Pemrograman Web</td>
          <td>Basis Data</td>
          <td>Matematika</td>
          <td>Pemrograman Berorientasi Objek</td>
          <td>PAI</td>
        </tr>
        <tr>
          <td>09.00 – 10.30</td>
          <td>Pemrograman Web</td>
          <td>Basis Data</td>
          <td>Bahasa Indonesia</td>
          <td>Pemrograman Berorientasi Objek</td>
          <td>PJOK</td>
        </tr>
        <tr>
          <td>10.45 – 12.15</td>
          <td>Pengembangan Aplikasi Mobile</td>
          <td>PKK</td>
          <td>Bahasa Inggris</td>
          <td>Basis Data</td>
          <td>Bimbingan Konseling</td>
        </tr>
        <tr>
          <td>13.00 – 14.30</td>
          <td>Pengembangan Aplikasi Mobile</td>
          <td>PKK</td>
          <td>IPAS</td>
          <td>Proyek Kelas</td>
          <td>Ekstrakurikuler</td>
        </tr>
      </tbody>
    </table>
  </div>
  <p style="color:var(--ink-dim);font-size:13px;margin-top:14px;">
    Jam istirahat: 10.30 – 10.45 dan 12.15 – 13.00. Ubah isi tabel di <code>jadwal.php</code> sesuai jadwal resmi.
  </p>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
