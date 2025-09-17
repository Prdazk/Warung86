  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Coffee 86</title>
    <!-- Link CSS utama -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="page-wrapper">
    <header class="site-header">
    <div class="container nav-container">
      <a href="#hero" class="logo">COFFEE 86</a>
      <nav class="main-nav">
        <a href="#hero" class="nav-link">Beranda</a>
        <a href="#popular-menu" class="nav-link">Menu</a>
        <a href="#reservasi" class="nav-link">Reservasi</a>
        <a href="#kontak" class="nav-link">Kontak</a>
        <a href="#tentang" class="nav-link">Tentang</a>
        <a href="#login" class="login-btn">Login</a>
      </nav>
    </div>
  </header>

  <section id="hero" class="hero-section">
    <div class="hero-container">
      <div class="hero-text">
        <p class="pre-title">BangRouf</p>
        <h1 class="hero-title">Warung<br>Coffee 86</h1>
        <p class="hero-subtitle">Sepahit-pahitnya kopi, lebih pahit jika tidak ada kopi.</p>
        <a href="#popular-menu" class="hero-cta">Lihat Menu</a>
      </div>
      <div class="hero-image">
        <img src="{{ asset('images/grup.png') }}" alt="A cup of coffee with coffee beans">
      </div>
    </div>
  </section>

  <section id="popular-menu" class="menu-section">
    <div class="container">
      <h2 class="menu-title">COFFEE POPULAR MENU</h2>
      <div class="menu-grid">
        <article class="menu-item">
          <img src="{{ asset('images/americano.png') }}" alt="Americano">
          <h3>AMERICANO</h3>
          <p>Strong, simple, satisfying.</p>
          <p class="menu-item-price">$19.99</p>
        </article>

        <article class="menu-item">
          <img src="{{ asset('images/mexican.png') }}" alt="Mexican">
          <h3>MEXICAN</h3>
          <p>Balanced and flavorful.</p>
          <p class="menu-item-price">$19.99</p>
        </article>

        <article class="menu-item">
          <img src="{{ asset('images/cappuccino.png') }}" alt="Cappuccino">
          <h3>CAPPUCCINO</h3>
          <p>Rich and creamy taste.</p>
          <p class="menu-item-price">$19.99</p>
        </article>
      </div>
    </div>
  </section>

  <section id="reservasi" class="reservasi-section">
    <div class="container">
      <h2>Reservasi</h2>
      <p>Hubungi kami untuk reservasi tempat dan acara spesial.</p>
      <a href="#kontak" class="btn">Kontak Sekarang</a>
    </div>
  </section>

  <section id="kontak" class="kontak-section">
    <div class="container">
      <h2>Kontak</h2>
      <p>Email: info@coffee86.com</p>
      <p>Telepon: +62 812 3456 7890</p>
    </div>
  </section>

  <section id="tentang" class="tentang-section">
    <div class="container">
      <h2>Tentang Kami</h2>
      <p>Warung Coffee 86 berdiri sejak 2020, menyajikan kopi terbaik dengan cinta.</p>
    </div>
  </section>
    </main>
  </body>
  </html>
