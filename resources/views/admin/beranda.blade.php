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
    <div class="reservation-wrapper" style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
      
      <!-- FORM RESERVASI -->
      <div class="reservation-container">
  <h2>Reservasi</h2>
  <form>
    <div class="form-row">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" placeholder="Masukkan nama">
      </div>
      <div class="form-group">
        <label>Jumlah Orang</label>
        <input type="number" placeholder="Jumlah orang">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label>Tanggal</label>
        <input type="date">
      </div>
      <div class="form-group">
        <label>Jam</label>
        <input type="time">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label>Catatan Tambahan</label>
        <textarea placeholder="Tambahkan catatan"></textarea>
      </div>
    </div>

    <button type="submit">Pesan Sekarang</button>
  </form>
</div>


      <!-- SYARAT & KETENTUAN -->
      <div class="terms-container" style="background-color: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 8px 20px rgba(0,0,0,0.2); max-width: 350px;">
        <h3 style="color: #c49a6c; margin-bottom: 20px;">Syarat & Ketentuan</h3>
        <ul style="text-align: left; color: #333; line-height: 1.6;">
          <li>Reservasi minimal 1 jam sebelum kedatangan.</li>
          <li>Mohon datang tepat waktu untuk memudahkan persiapan.</li>
          <li>Setiap reservasi maksimal untuk 5 orang.</li>
          <li>Harap informasikan alergi atau permintaan khusus di kolom tambahan.</li>
          <li>Pembatalan reservasi dapat dilakukan 2 jam sebelum waktu reservasi.</li>
        </ul>
      </div>

    </div>
  </section>



   <section id="kontak" class="kontak-section">
  <div class="container kontak-wrapper">
    <h2>Kontak Kami</h2>
    <div class="kontak-flex">
      <!-- Kolom Maps -->
      <div class="kontak-maps">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d107.57311709235512!3d-6.903444341687889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1672408575523!5m2!1sen!2sid"
          width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <!-- Kolom Form Kontak -->
      <div class="kontak-form">
        <form>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Masukkan email" required>
          </div>
          <div class="form-group">
            <label for="wa">WhatsApp</label>
            <input type="text" id="wa" placeholder="Masukkan nomor WA" required>
          </div>
          <button type="submit">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</section>


        </main>
      </body>
      </html>
