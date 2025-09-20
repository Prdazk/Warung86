<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Admin - Warung Coffee 86</title>
<link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">
        <div class="login-header">
            <h1>Warung Coffee 86</h1>
            <p>Login Admin</p>
        </div>
        <!-- Form action sudah diarahkan ke route admin.login -->
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email Admin</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>

        <!-- Tambahkan link kembali ke beranda -->
        <div class="back-home">
            <p>Kembali ke Beranda Admin, klik <a href="{{ route('admin.beranda') }}">di sini</a></p>
        </div>

        <div class="login-footer">
            <p>2025 Warung Coffee 86</p>
        </div>
    </div>
</div>

</body>
</html>
