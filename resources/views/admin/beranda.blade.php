    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Warung Coffee 86</title>
      <!-- Link CSS utama -->
      <link rel="stylesheet" href="css/beranda.css">
     
    </head>
    <body>
      <div class="page-wrapper">
    <header class="site-header">
    <div class="nav-container">
      <a href="#hero" class="logo">COFFEE 86</a>
      <div class="nav-right">
        <nav class="main-nav">
          <a href="#popular-menu" class="nav-link">Beranda</a>
          <a href="#popular-menu" class="nav-link">Menu</a>
          <a href="#reservasi" class="nav-link">Reservasi</a>
          <a href="#kontak" class="nav-link">Kontak</a>
          <a href="#tentang" class="nav-link">Tentang</a>
        </nav>
        <a href="#login" class="login-btn">Login</a>
      </div>
    </div>
  </header>


      <section id="hero" class="hero-section">
        <div class="hero-container">
          <div class="hero-text">
            <p class="pre-title">BangRouf</p>
            <h1 class="hero-title">Warung<br>Coffee 86</h1>
            <p class="hero-subtitle">Mari Nikmati Secangkir Kopi</p>
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
                <img src="{{ asset('images/enak.jpg') }}" alt="Americano">
                <h3>AMERICANO</h3>
                <p>Strong, simple, satisfying.</p>
                <p class="menu-item-price">$19.99</p>
              </article>

              <article class="menu-item">
                <img src="{{ asset('images/seduh.jpg') }}" alt="Mexican">
                <h3>MEXICAN</h3>
                <p>Balanced and flavorful.</p>
                <p class="menu-item-price">$19.99</p>
              </article>

              <article class="menu-item">
                <img src="{{ asset('images/jus.jpg') }}" alt="Cappuccino">
                <h3>CAPPUCCINO</h3>
                <p>Rich and creamy taste.</p>
                <p class="menu-item-price">$19.99</p>
              </article>
            </div>
          </div>
        </section>

    <section id="reservasi" class="reservasi-section">
    <div class="reservation-container">
      <h2>Reservasi Kursi</h2>
      
      <form action="#" method="post">
        <!-- Nama -->
        <label for="name">Nama</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama" required>

        <!-- Tanggal -->
        <label for="date">Tanggal Reservasi</label>
        <input type="date" id="date" name="date" required>
        
        <!-- Waktu -->
        <label for="time">Waktu</label>
        <input type="time" id="time" name="time" required>
        
        <!-- Jumlah Orang -->
        <label for="guests">Jumlah Orang</label>
        <select id="guests" name="guests" required>
          <option value="" disabled selected>Pilih jumlah</option>
          <option value="1">1 orang</option>
          <option value="2">2 orang</option>
          <option value="3">3 orang</option>
          <option value="4">4 orang</option>
          <option value="5">5 orang</option>
        </select>
        
        <!-- Tambahan -->
        <label for="notes">Tambahan</label>
        <textarea id="notes" name="notes" placeholder="Misal: Permintaan khusus, alergi, dll." rows="3"></textarea>
        
        <button type="submit">Reservasi Sekarang</button>
      </form>
    </div>
  </section>



    <section id="kontak" class="kontak-section">
  <div class="container">
    <h2>Kontak</h2>
    <p>Email: roufsoffi@gmail.com</p>
    <p>Telepon: +62 812 3456 7890</p>

      <!-- Google Maps Embed -->
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d107.57311709235512!3d-6.903444341687889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1672408575523!5m2!1sen!2sid"
        width="70%" height="400" style="border:5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <section id="tentang" class="tentang-section">
      <div class="container">
        <h2>Tentang Kami</h2>
        <p>Warung Coffee 86 berdiri sejak 2020, menyajikan kopi terbaik dengan cinta.</p>
      </div>
    </section>
      </main>
    </body>
    </html>
