<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa - SMK App</title>
    <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Login Siswa</h2>
            <p>Masuk menggunakan Username dan Password</p>
        </div>

        <?php if (!empty($message)): ?>
            <div class="alert alert-error">
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
                <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
            </div>

            <button type="submit" class="btn-submit">Login</button>

            <div class="footer-link">
                <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
            </div>
        </form>
    </div>
</body>
</html>
