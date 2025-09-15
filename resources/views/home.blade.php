<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Warung Kopi Cantik</title>

  <!-- Panggil CSS -->
  <link rel="stylesheet" href="{{ asset('css/kopi.jpg') }}">
</head>
<body>
  <header class="header">
    <div class="container">
      <h1 class="logo">☕ Warung Kopi Indah</h1>
      <nav>
        <a href="#">Home</a>
        <a href="#">Menu</a>
        <a href="#">Tentang</a>
        <a href="#">Kontak</a>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <div class="hero-text">
        <h2>Selamat Datang di Warung Kopi</h2>
        <p>Tempat nongkrong yang nyaman, dengan aroma kopi yang menenangkan jiwa.</p>
        <a href="#" class="btn">Lihat Menu</a>
      </div>
      <div class="hero-image">
        <img src="{{ asset('images/kopi.jpg') }}" alt="Warung Kopi">
      </div>
    </div>
  </section>

  <section class="about">
    <div class="container">
      <h3>Tentang Kami</h3>
      <p>Kami menyajikan kopi pilihan dengan suasana hangat dan pelayanan ramah. Warung Kopi Indah sudah berdiri sejak 2020, menjadi tempat favorit untuk berkumpul, berdiskusi, atau sekadar melepas penat.</p>
    </div>
  </section>

  <footer class="footer">
    <p>© 2025 Warung Kopi Indah | Dibuat dengan ❤️ di Laravel</p>
  </footer>

  <!-- JS -->
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
