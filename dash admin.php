<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kasir Koperasi MTsN 8 Banyuwangi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<?php include 'layout/sidebar.php'; ?>

<div class="main-content">

<?php include 'layout/navbar.php'; ?>
   

    <!-- WELCOME -->
    <div style="margin-bottom:30px;">
        <p style="margin:0; color:#666;">Selamat datang, Admin!</p>
        <h2 style="font-weight:bold;">
            Mari kelola koperasi sekolah hari ini.
        </h2>
    </div>

    <!-- CARDS -->
    <div class="dashboard-cards">
     <a href="barang.php" class="card-link" style="text-decoration: none; flex: 1;">
            <div class="card-item">
            <div class="card-header-icon">
                <h6>Total Barang</h6>
                <i class="fas fa-boxes"></i>
            </div>
            <div class="card-value">120</div>
         </div>
     </a>

    <a href="riwayat transaksi.php" class="card-link" style="text-decoration: none; flex: 1;">
        <div class="card-item">
            <div class="card-header-icon">
                <h6>Total Transaksi</h6>
                <i class="fas fa-receipt"></i>
            </div>
            <div class="card-value">50</div>
        </div>
    </a>

    <a href="restock.php" class="card-link" style="text-decoration: none; flex: 1;">
        <div class="card-item">
            <div class="card-header-icon">
                <h6>Restock Hari Ini</h6>
                <i class="fas fa-cart-plus"></i>
            </div>
            <div class="card-value">75</div>
        </div>
    </a>

    <a href="barang.php" class="card-link" style="text-decoration: none; flex: 1;">
        <div class="card-item">
            <div class="card-header-icon">
                <h6>Stok Menipis</h6>
                <i class="fas fa-exclamation-triangle"></i>
            </div>
                <div class="card-value">10</div>
            </div>
        </div>
    </a>

    <!-- TARGET -->
   <div class="target-section">
    <h5 class="target-title">
        Target Penjualan Bulan Ini
    </h5>

       <div class="progress progress-custom">
        <div class="progress-bar bg-success progress-bar-custom">
            75%
        </div>
    </div>
    <p class="target-subtext">
        Rp 7.500.000 dari target Rp 10.000.000
    </p>
</div>

    <!-- GRAPH + PIE + ACTIVITY -->
    <div class="graph-area">

        <!-- Grafik Penjualan -->
        <div class="sales-chart">
            <h5 style="font-weight:bold; margin-bottom:25px;">Grafik Penjualan (7 Hari Terakhir)</h5>

            <div class="simulated-graph">
                <div class="graph-line"></div>
                <div class="graph-line-main"></div>
            </div>
        </div>

        <!-- Pie Chart -->
      <div class="pie-chart-box">
        <h5 class="chart-title">Kategori Terlaris</h5>
        <div class="pie-chart-container">
            <div class="pie-chart-circle">
                <div class="pie-chart-inner"></div>
            </div>
        </div>
        <div class="pie-legend">
            <p><span style="color:#008a34;">●</span> Alat Tulis (40%)</p>
            <p><span style="color:#f5a623;">●</span> Makanan (25%)</p>
            <p><span style="color:#4e73df;">●</span> Minuman (20%)</p>
            <p><span style="color:#e74a3b;">●</span> Lainnya (15%)</p>
        </div>
    </div>

        <!-- Aktivitas -->
        <div class="recent-activities">
            <h5 style="font-weight:bold; margin-bottom:25px;">
                Aktivitas Terbaru
            </h5>

            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fas fa-tag"></i>
                </div>
                <div class="activity-details">
                    <p>Barang baru ditambahkan</p>
                    <span>Pensil 2B - 10:30 WIB</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="activity-details">
                    <p>Transaksi baru</p>
                    <span>TR-100250 - 10:15 WIB</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fas fa-truck-loading"></i>
                </div>
                <div class="activity-details">
                    <p>Restock masuk</p>
                    <span>Buku Tulis - 09:45 WIB</span>
                </div>
            </div>
            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="activity-details">
                    <p>User baru ditambahkan</p>
                    <span>Kasir - 10:00 WIB</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
</body>
</html>