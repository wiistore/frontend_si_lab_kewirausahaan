<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Koperasi MTsN 8 Banyuwangi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style/login.css">
</head>
<body>

<div class="login-container">

    <div class="login-sidebar">

        <div class="circle-large"></div>
        <div class="circle-top-right"></div>
        <div class="outline-ring"></div>
        <div class="dot-ornament dots-1"></div>
        <div class="dot-ornament dots-2"></div>
        <i class="fas fa-times x-icon-large"></i>

        <div class="header-logo">
            <img src="logo/mts.png" class="logo-kecil" alt="Logo">
            <h6 class="header-title-1">SISTEM KASIR</h6>
            <h3 class="header-title-2">KOPERASI SEKOLAH</h3>
            <p class="header-title-3 small opacity-75">MTsN 8 BANYUWANGI</p>
            <div class="line-subtitle"></div>
        </div>

        <div class="description-text" font-size="20px">
            Kelola Koperasi Sekolah Dengan lebih mudah,<br>
            cepat, dan terstruktur
        </div>

        <div class="illus-section">
            <div class="illus-frame">

            </div>
        </div>

        <div class="footer-features">
            <div class="feature-item">
                <i class="fas fa-shield-alt icon-yellow"></i>
                <div class="feature-text">
                    <h6>Aman</h6>
                    <p>Data terjamin<br>keamanannya</p>
                </div>
            </div>

            <div class="feature-item">
                <i class="fas fa-chart-bar icon-white"></i>
                <div class="feature-text">
                    <h6>Terstruktur</h6>
                    <p>Data rapi dan<br>mudah dikelola</p>
                </div>
            </div>

            <div class="feature-item">
                <i class="fas fa-bolt icon-yellow"></i>
                <div class="feature-text">
                    <h6>Cepat</h6>
                    <p>Proses transaksi<br>lebih efisien</p>
                </div>
            </div>
        </div>

    </div>

    <div class="login-form-section">
        <div class="login-box">
            <div class="text-center mb-4">
                <i class="fas fa-lock text-success" style="font-size: 40px; margin-bottom: 10px;"></i>
                <h3 class="fw-bold m-0">LOGIN</h3>
                <p class="text-muted small">Masuk untuk mengakses sistem kasir</p>
            </div>

            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label fw-bold small">Username</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold small">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label small text-muted" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="text-decoration-none small text-success">Forgot Password?</a>
                </div>
                <a href="dash admin.php"><button type="submit" name="login" class="btn btn-success w-100">MASUK KE SISTEM</button></a>
            </form>
        </div>
    </div>

</div>

</body>
</html>