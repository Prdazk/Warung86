<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Warung 86 - Mari Nikmati Secangkir Kopi</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      font-family: Arial, Helvetica, sans-serif;
      height: 100%;
      width: 100%;
    }

    /* Background hero */
    .hero {
      background: url("kopi-bg.jpg") no-repeat center center/cover;
      height: 100vh;
      color: chocolate;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    /* Overlay agar teks lebih jelas */
    .overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.4);
    }

    /* Navbar */
    nav {
      position: absolute;
      top: 0;
      width: 100%;
      display: flex;
      justify-content: center;
      gap: 40px;
      padding: 20px 0;
      background: rgba(0,0,0,0.4);
    }

    nav a {
      color: chocolate;
      text-decoration: none;
      font-size: 18px;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #ffcc66;
    }

    /* Logo + Judul */
    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
    }

    .logo {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 10px;
      font-size: 20px;
      font-weight: bold;
    }

    .logo img {
      width: 30px;
      margin-right: 10px;
    }

    .hero-content h1 {
      font-size: 80px;
      font-weight: bold;
      letter-spacing: 2px;
      margin-bottom: 20px;
    }

    .hero-content h2 {
      font-size: 28px;
      margin-bottom: 40px;
      font-weight: normal;
    }

    .tagline {
      background: rgba(0,0,0,0.6);
      display: inline-block;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
    }

    @media(max-width: 768px) {
      .hero-content h1 {
        font-size: 50px;
      }
      .hero-content h2 {
        font-size: 20px;
      }
      nav {
        gap: 20px;
      }
      nav a {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>
  <section class="hero">
    <div class="overlay"></div>

    <!-- Navbar -->
    <nav>
      <a href="#beranda">Beranda</a>
      <a href="#menu">Menu</a>
      <a href="#reservasi">Reservasi</a>
      <a href="#kontak">Kontak</a>
      <a href="#tentang">Tentang</a>
    </nav>

    <!-- Konten Hero -->
    <div class="hero-content">
      <div class="logo">
        <!-- Bisa pakai icon kopi SVG/PNG -->
        <img src="coffee-icon.png" alt="Logo">
        Bangrouf
      </div>
      <h1>WARUNG 86</h1>
      <h2>MARI NIKMATI SECANGKIR KOPI</h2>
      <p class="tagline">Bringing Happiness in Every Cup</p>
    </div>
  </section>
</body>
</html>
