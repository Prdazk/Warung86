<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Warung Coffee 86</title>
  <!-- Link CSS menu -->
  <link rel="stylesheet" href="css/menu.css">
</head>
<body>
  <div class="page-wrapper">
    <header class="site-header">
      <div class="container header-container">
        <!-- Logo -->
        <a href="#" class="logo">COFFEE</a>

        <!-- Navbar -->
        <nav class="main-nav">
          <ul>
            <!-- Misal tombol atau navbar -->
            <a href="{{ route('beranda') }}" class="nav-link">BERANDA</a>
            <li><a href="#" class="nav-link">Menu</a></li>
            <li><a href="#popular-menu" class="nav-link btn btn-outline">Reservasi</a></li>
            <li><a href="#" class="nav-link">Kontak</a></li>
            <li><a href="#" class="nav-link">Tentang</a></li>
          </ul>
        </nav>

        <!-- Button Sign In -->
        <a href="#" class="btn btn-primary login-btn">SIGN IN</a>
      </div>
      <div class="header-divider"></div>
    </header>
  </div>

  <main class="page-wrapper">
    <section id="popular-menu" class="menu-section">
      <div class="container">
        <h2 class="menu-title">COFFEE POPULAR MENU</h2>
        <div class="menu-grid">
          <!-- Menu Item Template -->
          <article class="menu-item">
            <div class="menu-item-image-wrapper">
              <img src="/page/9aa40c01-6538-4ddb-ba91-33e5e3415d51/images/ae2cba21f9fe2e514754f83bca3a8c0fd173acce.png" 
                   alt="Americano" class="menu-item-image">
            </div>
            <div class="menu-item-content">
              <div class="menu-item-details">
                <h3>AMERICANO</h3>
                <p>Perfect for those who love a strong, yet balanced cup that's both simple and satisfying.</p>
              </div>
              <p class="menu-item-price">$19.99</p>
            </div>
          </article>

          <!-- Copy dan ganti konten untuk menu lain -->
          <article class="menu-item">
            <div class="menu-item-image-wrapper">
              <img src="/page/9aa40c01-6538-4ddb-ba91-33e5e3415d51/images/a6b35044a2ffb2171335628622ac0614f08c2579.png" 
                   alt="Mexican" class="menu-item-image">
            </div>
            <div class="menu-item-content">
              <div class="menu-item-details">
                <h3>MEXICAN</h3>
                <p>Perfect for those who love a strong, yet balanced cup that's both simple and satisfying.</p>
              </div>
              <p class="menu-item-price">$19.99</p>
            </div>
          </article>

          <article class="menu-item">
            <div class="menu-item-image-wrapper">
              <img src="/page/9aa40c01-6538-4ddb-ba91-33e5e3415d51/images/ae2cba21f9fe2e514754f83bca3a8c0fd173acce.png" 
                   alt="Capuccino" class="menu-item-image">
            </div>
            <div class="menu-item-content">
              <div class="menu-item-details">
                <h3>CAPUCCINO</h3>
                <p>Perfect for those who love a strong, yet balanced cup that's both simple and satisfying.</p>
              </div>
              <p class="menu-item-price">$19.99</p>
            </div>
          </article>

          <article class="menu-item">
            <div class="menu-item-image-wrapper">
              <img src="/page/9aa40c01-6538-4ddb-ba91-33e5e3415d51/images/a6b35044a2ffb2171335628622ac0614f08c2579.png" 
                   alt="Cold Brew" class="menu-item-image">
            </div>
            <div class="menu-item-content">
              <div class="menu-item-details">
                <h3>COLD BREW</h3>
                <p>Perfect for those who love a strong, yet balanced cup that's both simple and satisfying.</p>
              </div>
              <p class="menu-item-price">$19.99</p>
            </div>
          </article>

          <article class="menu-item">
            <div class="menu-item-image-wrapper">
              <img src="/page/9aa40c01-6538-4ddb-ba91-33e5e3415d51/images/ae2cba21f9fe2e514754f83bca3a8c0fd173acce.png" 
                   alt="Mocha" class="menu-item-image">
            </div>
            <div class="menu-item-content">
              <div class="menu-item-details">
                <h3>MOCHA</h3>
                <p>Perfect for those who love a strong, yet balanced cup that's both simple and satisfying.</p>
              </div>
              <p class="menu-item-price">$19.99</p>
            </div>
          </article>

          <article class="menu-item">
            <div class="menu-item-image-wrapper">
              <img src="/page/9aa40c01-6538-4ddb-ba91-33e5e3415d51/images/a6b35044a2ffb2171335628622ac0614f08c2579.png" 
                   alt="Espresso" class="menu-item-image">
            </div>
            <div class="menu-item-content">
              <div class="menu-item-details">
                <h3>ESPRESSO</h3>
                <p>Perfect for those who love a strong, yet balanced cup that's both simple and satisfying.</p>
              </div>
              <p class="menu-item-price">$19.99</p>
            </div>
          </article>

        </div>
      </div>
    </section>
  </main>
</body>
</html>
