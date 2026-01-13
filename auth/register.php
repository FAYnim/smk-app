<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Siswa - SMK App</title>
    <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Registrasi Siswa</h2>
            <p>Silakan lengkapi data Username dan Password</p>
        </div>

        <?php if (!empty($message)): ?>
            <div class="alert alert-info">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Buat Password Anda" required>
            </div>

            <button type="submit" class="btn-submit">Daftar</button>

            <div class="footer-link">
                <p>Sudah punya akun? <a href="login.php">Login disini</a></p>
            </div>
        </form>
    </div>
</body>
</html>
