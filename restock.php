<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restock - Laboratorium Kewirausahaan MTsN 8 Banyuwangi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    
</head>
<body>
<?php include 'layout/sidebar.php'; ?>
<div class="main-content">
  <?php include 'layout/navbar1.php'; ?>

    <div class="d-flex justify-content-between align-items-start mb-4">
        <div>
            <h4 class="fw-bold mb-1">Restock</h4>
            <p class="text-muted small mb-0">Catat barang masuk dari supplier untuk menambah stok.</p>
        </div>
       <a href="restock-tambah.php"><button class="btn btn-success px-4" style="background: var(--primary-green); border-radius: 10px; border:none;">
            <i class="fas fa-plus me-2"></i> Restock Baru
        </button></a> 
    </div>

    <!-- STAT CARDS -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card-stat d-flex align-items-center gap-3">
                <div class="icon-box" style="background: #e8f5e9; color: #2e7d32;"><i class="fas fa-file-import"></i></div>
                <div>
                    <div class="text-muted" style="font-size: 10px; font-weight: 600;">Total Restock (Hari Ini)</div>
                    <h4 class="fw-bold mb-0">8</h4>
                    <span class="text-muted" style="font-size: 10px;">Transaksi</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-stat d-flex align-items-center gap-3">
                <div class="icon-box" style="background: #e3f2fd; color: #0d6efd;"><i class="fas fa-box"></i></div>
                <div>
                    <div class="text-muted" style="font-size: 10px; font-weight: 600;">Total Item Masuk (Hari Ini)</div>
                    <h4 class="fw-bold mb-0">156</h4>
                    <span class="text-muted" style="font-size: 10px;">Item</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-stat d-flex align-items-center gap-3">
                <div class="icon-box" style="background: #fff3e0; color: #ef6c00;"><i class="fas fa-money-bill-wave"></i></div>
                <div>
                    <div class="text-muted" style="font-size: 10px; font-weight: 600;">Total Nilai Pembelian (Hari Ini)</div>
                    <h4 class="fw-bold mb-0 text-warning">Rp1.875.000</h4>
                    <span class="text-muted" style="font-size: 10px;">Total harga beli</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-stat d-flex align-items-center gap-3">
                <div class="icon-box" style="background: #f3e5f5; color: #7b1fa2;"><i class="fas fa-clock"></i></div>
                <div>
                    <div class="text-muted" style="font-size: 10px; font-weight: 600;">Restock Terakhir</div>
                    <h6 class="fw-bold mb-0">RCK-2026-0058</h6>
                    <span class="text-muted" style="font-size: 10px;">20 Mei 2026, 09:40</span>
                </div>
            </div>
        </div>
    </div>

    <!-- TABLE CARD -->
    <div class="card-table">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex gap-3 align-items-center">
                <div class="small text-muted">Tampilkan <select class="form-select-sm border-0 bg-light"><option>10</option></select> data</div>
                <div class="small text-muted">Periode: <button class="btn btn-sm btn-light border" style="font-size: 11px;"><i class="far fa-calendar me-2"></i>01/05/2026 - 20/05/2026</button></div>
                <div class="small text-muted">Supplier: <select class="form-select-sm border-0 bg-light"><option>Semua Supplier</option></select></div>
            </div>
            <div class="d-flex gap-2">
                <div class="position-relative">
                    <input type="text" class="form-control form-control-sm ps-3" placeholder="Cari no. restock, barang..." style="width: 200px; border-radius: 8px;">
                </div>
                <button class="btn btn-sm btn-outline-secondary border-light text-muted"><i class="fas fa-filter me-1"></i> Filter</button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-custom align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Restock</th>
                        <th>Tanggal</th>
                        <th>Supplier</th>
                        <th>Jumlah Item</th>
                        <th>Total Item Masuk</th>
                        <th>Total Nilai Beli</th>
                        <th>Dibuat Oleh</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $restock_data = [
                        [
                            'no' => 1, 'id' => 'RCK-2026-0058', 'tgl' => '20 Mei 2026 09:40', 
                            'supp' => 'CV Sumber Makmur', 'jml_item' => 5, 'total_masuk' => 50, 
                            'nilai' => 'Rp575.000', 'oleh' => 'Admin',
                            'items' => [['nama' => 'Pensil 2B', 'jml' => '30 pcs'], ['nama' => 'Buku Tulis', 'jml' => '20 pak']]
                        ],
                        [
                            'no' => 2, 'id' => 'RCK-2026-0057', 'tgl' => '20 Mei 2026 08:15', 
                            'supp' => 'PT Cahaya Abadi', 'jml_item' => 4, 'total_masuk' => 38, 
                            'nilai' => 'Rp462.000', 'oleh' => 'Admin',
                            'items' => [['nama' => 'Air Mineral', 'jml' => '38 botol']]
                        ],
                        [
                            'no' => 3, 'id' => 'RCK-2026-0056', 'tgl' => '20 Mei 2026 15:30', 
                            'supp' => 'Toko Berkah Jaya', 'jml_item' => 6, 'total_masuk' => 60, 
                            'nilai' => 'Rp720.000', 'oleh' => 'Admin',
                            'items' => [['nama' => 'Gunting', 'jml' => '60 pcs']]
                        ]
                    ];
                    foreach($restock_data as $row): ?>
                    <tr>
                        <td><?= $row['no'] ?></td>
                        <td class="fw-bold"><?= $row['id'] ?></td>
                        <td class="text-muted"><?= $row['tgl'] ?></td>
                        <td><?= $row['supp'] ?></td>
                        <td><?= $row['jml_item'] ?></td>
                        <td><?= $row['total_masuk'] ?></td>
                        <td class="fw-bold"><?= $row['nilai'] ?></td>
                        <td><?= $row['oleh'] ?></td>
                        <td>
                            <button class="btn-icon" data-bs-toggle="modal" data-bs-target="#modalRestock<?= $row['id']; ?>"><i class="far fa-eye"></i></button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-3">
            <span class="text-muted small">Menampilkan 1 sampai 10 dari 58 data</span>
            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- BOTTOM ROW SECTION -->
    <div class="row">
        <div class="col-md-50">
            <div class="footer-card h-100">
                <div class="d-flex align-items-center gap-2 mb-4">
                    <div class="icon-box bg-success text-white" style="width:30px; height:30px; font-size: 14px;"><i class="fas fa-box-open"></i></div>
                    <h6 class="fw-bold mb-0">Restock Terbaru</h6>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="text-muted" style="font-size: 10px;">No. Restock</div>
                        <div class="fw-bold small">RCK-2026-0058</div>
                    </div>
                    <div class="col-4">
                        <div class="text-muted" style="font-size: 10px;">Tanggal</div>
                        <div class="fw-bold small">20 Mei 2026 09:40</div>
                    </div>
                    <div class="col-4">
                        <div class="text-muted" style="font-size: 10px;">Supplier</div>
                        <div class="fw-bold small">CV Sumber Makmur</div>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-top d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-muted" style="font-size: 10px;">Dibuat Oleh</div>
                        <div class="fw-bold small">Admin</div>
            </div>
        </div>
        
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach ($restock_data as $row) : ?>
<div class="modal fade" id="modalRestock<?= $row['id']; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 15px; border:none;">
            <div class="modal-header border-0 pt-4 px-4">
                <h5 class="modal-title fw-bold">Detail Restok #<?= $row['id']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4">
                <div class="row mb-4">
                    <div class="col-6">
                        <small class="text-muted">Supplier</small>
                        <div class="fw-bold"><?= $row['supp']; ?></div> </div>
                    <div class="col-6">
                        <small class="text-muted">Tanggal</small>
                        <div class="fw-bold"><?= $row['tgl']; ?></div> </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-custom">
                        <thead class="table-light">
                            <tr>
                                <th>Barang</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($row['items'] as $item): ?>
                            <tr>
                                <td><?= $item['nama']; ?></td>
                                <td><?= $item['jml']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer border-0 pb-4 px-4">
                <button type="button" class="btn btn-light rounded-3 px-4" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-success rounded-3 px-4" style="background: var(--primary-green); border: none;">
                    <i class="fas fa-print me-2"></i> Cetak Struk
                </button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>