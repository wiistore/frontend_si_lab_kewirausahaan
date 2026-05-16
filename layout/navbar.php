<?php
$current_page = basename($_SERVER['PHP_SELF']);
$page_title = "Dashboard";

switch ($current_page) {
    case 'kategori.php': $page_title = "Kategori"; break;
    case 'barang.php': $page_title = "Barang"; break;
    case 'supplier.php': $page_title = "Supplier"; break;
    case 'restock.php': $page_title = "Restock"; break;
    case 'transaksi.php': $page_title = "Transaksi"; break;
    case 'riwayat.php': $page_title = "Riwayat Transaksi"; break; // Sesuaikan nama filemu
    case 'laporan.php': $page_title = "Laporan"; break;
    case 'user.php': $page_title = "User"; break;
}
?>

<div class="top-navbar-container">
    <!-- Judul Halaman & Toggle Menu -->
    <div class="nav-left">
        <i class="fas fa-bars me-3 text-muted"></i>
        <h4 class="nav-title"><?php echo $page_title; ?></h4>
    </div>

    <!-- Kolom Pencarian Tengah -->
    <div class="nav-center">
        <div class="search-wrapper">
            <input type="text" placeholder="Cari transaksi, kasir, atau metode...">
            <i class="fas fa-search"></i>
        </div>
    </div>

    <!-- Notifikasi & Profil Kanan -->
    <div class="nav-right">
        <!-- Notifikasi -->
        <div class="notif-box">
            <i class="fas fa-bell"></i>
            <span class="notif-badge">3</span>
        </div>

        <!-- Profil User -->
        <div class="user-info">
            <div class="user-avatar">
                <i class="fas fa-user"></i>
            </div>
            <div class="user-text d-none d-md-block">
                <p class="user-name">Admin</p>
                <p class="user-role">Administrator</p>
            </div>
            <i class="fas fa-chevron-down ms-2 text-muted" style="font-size: 10px;"></i>
        </div>
    </div>
</div>