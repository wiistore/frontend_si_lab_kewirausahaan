<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan - Laboratorium Kewirausahaan MTsN 8 Banyuwangi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>

<?php include 'layout/sidebar.php'; ?>

<div class="main-content">
  <?php include 'layout/navbar1.php';?>
      <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <h5 class="fw-bold mb-1">Laporan Penjualan</h5>
            <p class="text-muted small mb-0">Ringkasan performa penjualan dan keuntungan koperasi.</p>
        </div>
        <button class="btn btn-success px-4" style="background: var(--primary-green); border-radius: 10px; border:none;"><i class="fas fa-file-export me-2"></i> Export Laporan</button>
    </div>

    <!-- REPORT SUMMARY CARDS -->
    <div class="row g-3 mb-4">
        <div class="col">
            <div class="report-stat-card">
                <div class="stat-icon-box" style="background: #e8f5e9; color: #2e7d32;"><i class="fas fa-shopping-cart"></i></div>
                <div class="small text-muted">Total Penjualan</div>
                <h5 class="fw-bold mb-0">Rp8.425.500</h5>
                <p class="mb-0 text-muted" style="font-size: 10px;">Dari 156 transaksi</p>
            </div>
        </div>
        <div class="col">
            <div class="report-stat-card">
                <div class="stat-icon-box" style="background: #e3f2fd; color: #1976d2;"><i class="fas fa-percentage"></i></div>
                <div class="small text-muted">Total Laba</div>
                <h5 class="fw-bold mb-0 text-primary">Rp2.165.250</h5>
                <p class="mb-0 text-muted" style="font-size: 10px;">Margin 25,68%</p>
            </div>
        </div>
        <div class="col">
            <div class="report-stat-card">
                <div class="stat-icon-box" style="background: #fff3e0; color: #ef6c00;"><i class="fas fa-box"></i></div>
                <div class="small text-muted">Total Modal (Beli)</div>
                <h5 class="fw-bold mb-0 text-warning">Rp6.260.250</h5>
                <p class="mb-0 text-muted" style="font-size: 10px;">Total harga beli</p>
            </div>
        </div>
        <div class="col">
            <div class="report-stat-card">
                <div class="stat-icon-box" style="background: #f3e5f5; color: #7b1fa2;"><i class="far fa-calendar-check"></i></div>
                <div class="small text-muted">Rata-rata Per Hari</div>
                <h5 class="fw-bold mb-0" style="color: #7b1fa2;">Rp467.000</h5>
                <p class="mb-0 text-muted" style="font-size: 10px;">Selama periode</p>
            </div>
        </div>
        <div class="col">
            <div class="report-stat-card">
                <div class="stat-icon-box" style="background: #e0f2f1; color: #00796b;"><i class="fas fa-layer-group"></i></div>
                <div class="small text-muted">Total Item Terjual</div>
                <h5 class="fw-bold mb-0 text-teal">1.982</h5>
                <p class="mb-0 text-muted" style="font-size: 10px;">Unit</p>
            </div>
        </div>
    </div>

    <!-- FILTERS -->
    <div class="card-custom mb-4">
        <div class="row g-3 align-items-end">
            <div class="col-md-3">
                <label class="small fw-bold mb-2">Periode</label>
                <input type="text" class="form-control form-control-sm" value="01/05/2026 - 20/05/2026">
            </div>
            <div class="col-md-2">
                <label class="small fw-bold mb-2">Kasir</label>
                <select class="form-select form-select-sm"><option>Semua Kasir</option></select>
            </div>
            <div class="col-md-2">
                <label class="small fw-bold mb-2">Metode Pembayaran</label>
                <select class="form-select form-select-sm"><option>Semua Metode</option></select>
            </div>
            <div class="col-md-2 offset-md-3">
                <button class="btn btn-sm btn-outline-secondary w-100"><i class="fas fa-filter me-2"></i> Terapkan Filter</button>
            </div>
        </div>
    </div>

    <!-- GRAPHS SECTION -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold mb-0">Grafik Penjualan</h6>
                    <select class="form-select form-select-sm w-auto border-0 text-muted small"><option>Harian</option></select>
                </div>
                <canvas id="chartPenjualan" height="150"></canvas>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-custom h-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold mb-0">Grafik Laba</h6>
                    <select class="form-select form-select-sm w-auto border-0 text-muted small"><option>Harian</option></select>
                </div>
                <canvas id="chartLaba" height="150"></canvas>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-custom h-100">
                <h6 class="fw-bold mb-3">Penjualan per Metode Pembayaran</h6>
                <div class="row align-items-center">
                    <div class="col-6">
                        <canvas id="chartMetode" height="150"></canvas>
                    </div>
                    <div class="col-6" style="font-size: 10px;">
                        <div class="mb-2"><i class="fas fa-square text-primary me-2"></i> Cash <span class="d-block text-muted">Rp4.120.000 (48,9%)</span></div>
                        <div class="mb-2"><i class="fas fa-square text-info me-2"></i> QRIS <span class="d-block text-muted">Rp2.350.000 (27,9%)</span></div>
                        <div class="mb-2"><i class="fas fa-square text-warning me-2"></i> Transfer <span class="d-block text-muted">Rp1.675.000 (19,9%)</span></div>
                        <div><i class="fas fa-square text-purple me-2" style="color:#7b1fa2"></i> E-wallet <span class="d-block text-muted">Rp280.500 (3,3%)</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TABLES SECTION -->
    <div class="row">
        <div class="col-md-8">
            <div class="card-custom h-100">
                <h6 class="fw-bold mb-4">Ringkasan Penjualan (01/05/2026 - 20/05/2026)</h6>
                <div class="table-responsive">
                    <table class="table table-hover table-laporan align-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Transaksi</th>
                                <th>Penjualan</th>
                                <th>Modal (Beli)</th>
                                <th>Laba</th>
                                <th>Margin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ringkasan = [
                                ['01 Mei 2026', 8, '412.500', '305.000', '107.500', '26,07%'],
                                ['02 Mei 2026', 6, '385.000', '284.000', '101.000', '26,23%'],
                                ['03 Mei 2026', 7, '468.000', '347.500', '120.500', '25,75%'],
                                ['04 Mei 2026', 10, '512.000', '382.000', '130.000', '25,39%'],
                                ['05 Mei 2026', 9, '498.500', '370.000', '128.500', '25,77%'],
                            ];
                            foreach($ringkasan as $i => $r): ?>
                            <tr>
                                <td><?= $i+1 ?></td>
                                <td><?= $r[0] ?></td>
                                <td><?= $r[1] ?></td>
                                <td class="fw-bold">Rp<?= $r[2] ?></td>
                                <td class="text-muted">Rp<?= $r[3] ?></td>
                                <td class="text-success fw-bold">Rp<?= $r[4] ?></td>
                                <td><?= $r[5] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot class="border-top fw-bold" style="background: #fafafa; font-size: 12px;">
                            <tr>
                                <td colspan="2">Total</td>
                                <td>156</td>
                                <td class="text-success">Rp8.425.500</td>
                                <td class="text-warning">Rp6.260.250</td>
                                <td class="text-success">Rp2.165.250</td>
                                <td>25,68%</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-custom h-100">
                <h6 class="fw-bold mb-4">Top 5 Barang Terlaris</h6>
                <div class="table-responsive">
                    <table class="table table-sm table-borderless align-middle" style="font-size: 11px;">
                        <thead>
                            <tr class="text-muted border-bottom">
                                <th>No</th>
                                <th>Barang</th>
                                <th>Terjual</th>
                                <th>Penjualan</th>
                                <th>Laba</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>1</td><td>Pensil 2B</td><td>320 pcs</td><td class="fw-bold">Rp480.000</td><td class="text-success">Rp192.000</td></tr>
                            <tr><td>2</td><td>Air Mineral 600ml</td><td>280 botol</td><td class="fw-bold">Rp1.120.000</td><td class="text-success">Rp392.000</td></tr>
                            <tr><td>3</td><td>Buku Tulis 38 Lembar</td><td>220 pcs</td><td class="fw-bold">Rp440.000</td><td class="text-success">Rp154.000</td></tr>
                            <tr><td>4</td><td>Pulpen Hitam</td><td>180 pcs</td><td class="fw-bold">Rp360.000</td><td class="text-success">Rp126.000</td></tr>
                            <tr><td>5</td><td>Kalkulator</td><td>160 pcs</td><td class="fw-bold">Rp400.000</td><td class="text-success">Rp128.000</td></tr>
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-sm btn-light w-100 mt-3 text-muted" style="font-size: 11px;">Lihat Laporan Barang Terlaris <i class="fas fa-arrow-right ms-1"></i></button>
            </div>
        </div>
    </div>  
</div>

<script>
    // Konfigurasi Chart Penjualan
    new Chart(document.getElementById('chartPenjualan'), {
        type: 'line',
        data: {
            labels: ['01 Mei', '05 Mei', '10 Mei', '15 Mei', '20 Mei'],
            datasets: [{
                label: 'Penjualan (Rp)',
                data: [300, 700, 400, 900, 500],
                borderColor: '#008a34',
                backgroundColor: 'rgba(0, 138, 52, 0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: { plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true } } }
    });

    // Konfigurasi Chart Laba
    new Chart(document.getElementById('chartLaba'), {
        type: 'line',
        data: {
            labels: ['01 Mei', '05 Mei', '10 Mei', '15 Mei', '20 Mei'],
            datasets: [{
                label: 'Laba (Rp)',
                data: [100, 250, 150, 380, 200],
                borderColor: '#ef6c00',
                backgroundColor: 'rgba(239, 108, 0, 0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: { plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true } } }
    });

    // Konfigurasi Chart Donut Metode
    new Chart(document.getElementById('chartMetode'), {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [48.9, 27.9, 19.9, 3.3],
                backgroundColor: ['#0d6efd', '#0dcaf0', '#ffc107', '#7b1fa2'],
                borderWidth: 0
            }]
        },
        options: { cutout: '70%', plugins: { legend: { display: false } } }
    });
</script>
<?php include 'layout/footer.php'; ?>
</body>
</html>