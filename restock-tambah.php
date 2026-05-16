<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Restok - Laboratorium Kewirausahaan MTsN 8 Banyuwangi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<?php include 'layout/sidebar.php'; ?>

<div class="main-content">

     <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Tambah Restok Barang</h4>
            <p class="text-muted small">Masukkan detail barang yang akan ditambah ke stok koperasi.</p>
        </div>
        <a href="barang.php" class="btn btn-sm btn-light border rounded-3 px-3">
            <i class="fas fa-arrow-left me-2"></i> kembali
        </a>
    </div>


        <div class="card border-0 shadow-sm p-4">
            <form action="proses-restock.php" method="POST">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label small fw-bold">Pilih Barang</label>
                        <select name="id_barang" class="form-select" required>
                            <option value="">-- Pilih Barang --</option>
                            <option value="1">Pensil 2B</option>
                            <option value="2">Buku Tulis 38 Lembar</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label small fw-bold">Jumlah Masuk</label>
                        <input type="number" name="jumlah" class="form-control" placeholder="Contoh: 50" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label small fw-bold">Tanggal Restok</label>
                        <input type="date" name="tgl_restok" class="form-control" value="<?= date('Y-m-d'); ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label small fw-bold">Supplier / Asal Barang</label>
                        <input type="text" name="supplier" class="form-control" placeholder="Nama supplier atau keterangan">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label small fw-bold">Catatan (Opsional)</label>
                    <textarea name="catatan" class="form-control" rows="3" placeholder="Tambahkan catatan jika ada"></textarea>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <button type="reset" class="btn btn-light px-4 fw-bold small rounded-3">Reset</button>  
                    <button type="submit" class="btn btn-success px-4" style="background:#008a34; border:none;">Simpan Restok</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>