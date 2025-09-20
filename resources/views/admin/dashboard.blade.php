<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Warung Coffee 86</title>
<link rel="stylesheet" href="{{ asset('css/admin/beranda.css') }}">
</head>
<body>
<div class="page-wrapper">

<header class="site-header">
    <div class="nav-container">
        <a href="#beranda" class="logo">COFFEE 86</a>
        <nav class="main-nav">
            <a href="#beranda" class="nav-link">Beranda</a>
            <a href="#tentang" class="nav-link">Tentang</a>
            <a href="#kontak" class="nav-link">Kontak</a>

            @if(session('admin_logged_in'))
                <a href="{{ route('admin.logout') }}" class="nav-link login-btn">Logout</a>
            @else
                <a href="{{ route('admin.login') }}" class="nav-link login-btn">Login Admin</a>
            @endif
        </nav>
    </div>
</header>

<!-- ===== Beranda Section ===== -->
<section id="beranda" class="hero-section">
    <div class="hero-container">
        <div class="hero-text">
            <p class="pre-title">BangRouf</p>
            <h1 class="hero-title">Warung<br>Coffee 86</h1>
            <p class="hero-subtitle">Mari Nikmati Secangkir Kopi</p>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/grup.png') }}" alt="A cup of coffee with coffee beans">
        </div>
    </div>
</section>

<!-- ===== Tentang Section ===== -->
<section id="tentang" class="tentang-section">
    <div class="section-wrapper">
        <h2>Tentang Kami</h2>
        <p>Warung Coffee 86 hadir dengan konsep nyaman dan modern, menyajikan kopi berkualitas dengan cita rasa terbaik. Nikmati suasana santai sambil menikmati berbagai pilihan kopi dan snack favorit Anda.</p>
    </div>
</section>

<!-- ===== Kontak Section ===== -->
<section id="kontak" class="kontak-section">
    <div class="section-wrapper">
        <h2>Kontak Kami</h2>
        <p>Email: <a href="mailto:info@warungcoffee86.com">info@warungcoffee86.com</a></p>
        <p>Telepon: <a href="tel:+6281234567890">+62 812 3456 7890</a></p>
        <p>Alamat: Jl. Kopi No.86, Kota Kopi, Indonesia</p>
    </div>
</section>

</div>
</body>
</html>
