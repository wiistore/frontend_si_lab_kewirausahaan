<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="sidebar-brand">
        <!-- Menggunakan Logo dari path yang kamu berikan -->
        <img src="logo/mts.png" alt="Logo" onerror="this.src='https://via.placeholder.com/80?text=LOGO'">
        <h6>Laboratorium</h6>
        <h6>Kewirausahaan</h6>
        <p>MTsN 8 BANYUWANGI</p>
    </div>
           
        <nav class="nav flex-column">
            <a class="nav-link <?php echo ($current_page == 'dash admin.php') ? 'active' : ''; ?>" href="dash admin.php">
        <i class="fas fa-th-large"></i> Dashboard
        </a>
            <?php ?>
                <a class="nav-link <?php echo ($current_page == 'kategori.php') ? 'active' : ''; ?>" href="kategori.php">
            <i class="fas fa-tags"></i> Kategori
             </a>

        <a class="nav-link <?php echo ($current_page == 'barang.php') ? 'active' : ''; ?>" href="barang.php">
            <i class="fas fa-boxes"></i> Barang
        </a>

        <a class="nav-link <?php echo ($current_page == 'supplier.php') ? 'active' : ''; ?>" href="supplier.php">
            <i class="fas fa-truck"></i> Supplier
        </a>
       
        <a class="nav-link <?php echo ($current_page == 'restock.php') ? 'active' : ''; ?>" href="restock.php">
            <i class="fas fa-receipt"></i> Restock
        </a>

        <a class="nav-link <?php echo ($current_page == 'transaksi.php') ? 'active' : ''; ?>" href="transaksi.php">
            <i class="fas fa-cart-arrow-down"></i> Transaksi
        </a>

        <a class="nav-link <?php echo ($current_page == 'riwayat transaksi.php') ? 'active' : ''; ?>" href="riwayat transaksi.php">
            <i class="fas fa-history"></i> Riwayat Transaksi
        </a>

        <a class="nav-link <?php echo ($current_page == 'laporan.php') ? 'active' : ''; ?>" href="laporan.php">
            <i class="fas fa-chart-line"></i> Laporan
        </a>

        <a class="nav-link <?php echo ($current_page == 'user.php') ? 'active' : ''; ?>" href="user.php">
            <i class="fas fa-users"></i> User
        </a>

        <a href="#" class="nav-link" style="margin-top:20px; color:#ffbcbc;">
        <i class="fas fa-sign-out-alt"></i> Logout</a>


        </nav>
    </div>
</div>