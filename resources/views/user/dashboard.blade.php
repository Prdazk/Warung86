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
                    <a href="#hero" class="nav-link">Beranda</a>
                    <a href="#popular-menu" class="nav-link">Menu</a>
                    <a href="#reservasi" class="nav-link">Reservasi</a>
                    <a href="#lokasi" class="nav-link">Kontak</a>
                    <a href="#tentang" class="nav-link">Tentang</a>
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
                <h2 class="menu-title">MENU TERPOPULER</h2>
                <div class="menu-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                
                <!-- Menu Item -->
                <article class="menu-item" style="border: 1px solid #ddd; border-radius: 10px; text-align: center; padding: 15px;">
                    <img src="{{ asset('images/enak.jpg') }}" alt="Americano" style="width:100%; height:200px; object-fit:cover; border-radius:8px;">
                    <h3>Mie Nyemek</h3>
                    <p>mantap, simple, enak.</p>
                    <p class="menu-item-price">19k</p>
                    <div>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#e97425; color:#fff;">Lihat</button>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#28a745; color:#fff;">Checkout</button>
                    </div>
                </article>

                <article class="menu-item" style="border: 1px solid #ddd; border-radius: 10px; text-align: center; padding: 15px;">
                    <img src="{{ asset('images/seduh.jpg') }}" alt="Mexican" style="width:100%; height:200px; object-fit:cover; border-radius:8px;">
                    <h3>MEXICAN</h3>
                    <p>Balanced and flavorful.</p>
                    <p class="menu-item-price">$19.99</p>
                    <div>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#e97425; color:#fff;">Lihat</button>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#28a745; color:#fff;">Checkout</button>
                    </div>
                </article>

                <article class="menu-item" style="border: 1px solid #ddd; border-radius: 10px; text-align: center; padding: 15px;">
                    <img src="{{ asset('images/jus.jpg') }}" alt="Cappuccino" style="width:100%; height:200px; object-fit:cover; border-radius:8px;">
                    <h3>CAPPUCCINO</h3>
                    <p>Rich and creamy taste.</p>
                    <p class="menu-item-price">$19.99</p>
                    <div>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#e97425; color:#fff;">Lihat</button>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#28a745; color:#fff;">Checkout</button>
                    </div>
                </article>

                <article class="menu-item" style="border: 1px solid #ddd; border-radius: 10px; text-align: center; padding: 15px;">
                    <img src="{{ asset('images/enak.jpg') }}" alt="Latte" style="width:100%; height:200px; object-fit:cover; border-radius:8px;">
                    <h3>LATTE</h3>
                    <p>Smooth and milky.</p>
                    <p class="menu-item-price">$21.99</p>
                    <div>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#e97425; color:#fff;">Lihat</button>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#28a745; color:#fff;">Checkout</button>
                    </div>
                </article>

                <article class="menu-item" style="border: 1px solid #ddd; border-radius: 10px; text-align: center; padding: 15px;">
                    <img src="{{ asset('images/seduh.jpg') }}" alt="Mocha" style="width:100%; height:200px; object-fit:cover; border-radius:8px;">
                    <h3>MOCHA</h3>
                    <p>Chocolate infused.</p>
                    <p class="menu-item-price">$22.99</p>
                    <div>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#e97425; color:#fff;">Lihat</button>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#28a745; color:#fff;">Checkout</button>
                    </div>
                </article>

                <article class="menu-item" style="border: 1px solid #ddd; border-radius: 10px; text-align: center; padding: 15px;">
                    <img src="{{ asset('images/jus.jpg') }}" alt="Espresso" style="width:100%; height:200px; object-fit:cover; border-radius:8px;">
                    <h3>ESPRESSO</h3>
                    <p>Strong and bold.</p>
                    <p class="menu-item-price">$18.99</p>
                    <div>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#e97425; color:#fff;">Lihat</button>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#28a745; color:#fff;">Checkout</button>
                    </div>
                </article>

                <article class="menu-item" style="border: 1px solid #ddd; border-radius: 10px; text-align: center; padding: 15px;">
                    <img src="{{ asset('images/enak.jpg') }}" alt="Flat White" style="width:100%; height:200px; object-fit:cover; border-radius:8px;">
                    <h3>FLAT WHITE</h3>
                    <p>Silky and smooth.</p>
                    <p class="menu-item-price">$20.99</p>
                    <div>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#e97425; color:#fff;">Lihat</button>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#28a745; color:#fff;">Checkout</button>
                    </div>
                </article>

                <article class="menu-item" style="border: 1px solid #ddd; border-radius: 10px; text-align: center; padding: 15px;">
                    <img src="{{ asset('images/seduh.jpg') }}" alt="Macchiato" style="width:100%; height:200px; object-fit:cover; border-radius:8px;">
                    <h3>MACCHIATO</h3>
                    <p>Bold with foam.</p>
                    <p class="menu-item-price">$21.99</p>
                    <div>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#e97425; color:#fff;">Lihat</button>
                    <button style="padding:8px 15px; margin:5px; border:none; border-radius:5px; background:#28a745; color:#fff;">Checkout</button>
                    </div>
                </article>

                </div>
            </div>
            </section>


<!-- Menu Lainnya -->
<section id="other-menu" class="menu-section" style="margin-top:50px;">
  <div class="container">
    <h2 class="menu-title" style="text-align:center; margin-bottom:20px;">MENU LAINNYA</h2>
    
    <div class="menu-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
      
      <div class="menu-box" style="border:1px solid #ddd; border-radius:15px; text-align:center; padding:20px; font-weight:bold;">
        1. Es Teh
      </div>
      
      <div class="menu-box" style="border:1px solid #ddd; border-radius:15px; text-align:center; padding:20px; font-weight:bold;">
        2. Jus Jeruk
      </div>
      
      <div class="menu-box" style="border:1px solid #ddd; border-radius:15px; text-align:center; padding:20px; font-weight:bold;">
        3. Jus Mangga
      </div>
      
      <div class="menu-box" style="border:1px solid #ddd; border-radius:15px; text-align:center; padding:20px; font-weight:bold;">
        4. Jus Apel
      </div>
      
      <div class="menu-box" style="border:1px solid #ddd; border-radius:15px; text-align:center; padding:20px; font-weight:bold;">
        5. Jus Jambu
      </div>
      
      <div class="menu-box" style="border:1px solid #ddd; border-radius:15px; text-align:center; padding:20px; font-weight:bold;">
        6. Jus Strawberry
      </div>
      
      <div class="menu-box" style="border:1px solid #ddd; border-radius:15px; text-align:center; padding:20px; font-weight:bold;">
        7. Air Mineral
      </div>
      
      <div class="menu-box" style="border:1px solid #ddd; border-radius:15px; text-align:center; padding:20px; font-weight:bold;">
        8. Es Susu
      </div>
      
      <div class="menu-box" style="border:1px solid #ddd; border-radius:15px; text-align:center; padding:20px; font-weight:bold;">
        9. Lemon Tea
      </div>
      
      <div class="menu-box" style="border:1px solid #ddd; border-radius:15px; text-align:center; padding:20px; font-weight:bold;">
        10. Chocolate Drink
      </div>
      
      <div class="menu-box" style="border:1px solid #ddd; border-radius:15px; text-align:center; padding:20px; font-weight:bold;">
        11. Milkshake Vanilla
      </div>
      
      <div class="menu-box" style="border:1px solid #ddd; border-radius:15px; text-align:center; padding:20px; font-weight:bold;">
        12. Milkshake Coklat
      </div>
      
    </div>
  </div>
</section>

   <section id="reservasi" class="reservasi-section">
  <div style="background: #927950; padding: 30px; border-radius: 20px; box-shadow: 0 8px 20px rgba(90,62,43,0.3); max-width: 900px; margin: auto;">
    
    <!-- Flex 2 kolom -->
    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
      
      <!-- FORM RESERVASI -->
      <div style="flex: 1; background: #4a3f35; padding: 25px; border-radius: 15px; color: #fff; min-height: 450px;">
        <h2 style="color: #beb5af; margin-bottom: 20px;">Silakan Pilih Meja</h2>
        <form>
          <div style="display: flex; gap: 15px; margin-bottom: 15px;">
            <div style="flex: 1;">
              <label>Nama</label>
              <input type="text" placeholder="Masukkan nama" 
                style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #c49a6c;">
            </div>
            <div style="flex: 1;">
              <label>Jumlah Orang</label>
              <input type="number" placeholder="Jumlah orang" 
                style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #c49a6c;">
            </div>
          </div>

          <div style="display: flex; gap: 15px; margin-bottom: 15px;">
            <div style="flex: 1;">
              <label>Tanggal</label>
              <input type="date" 
                style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #c49a6c;">
            </div>
            <div style="flex: 1;">
              <label>Jam</label>
              <input type="time" 
                style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #c49a6c;">
            </div>
          </div>

          <button type="submit" 
            style="width: 100%; background: #c49a6c; color: #c49a6c; padding: 12px; border: none; border-radius: 8px; font-size: 16px; cursor: pointer; transition: 0.3s;">
            Pesan Sekarang
          </button>
        </form>
      </div>

      <!-- SYARAT & KETENTUAN -->
      <div style="flex: 1; background: #5a3e2b; padding: 25px; border-radius: 15px; min-height: 450px;">
        <h3 style="color: #fff8f0; margin-bottom: 20px;">Syarat & Ketentuan</h3>
        <ul style="text-align: left; color: #fff8f0; line-height: 1.6; padding-left: 20px;">
          <li>Reservasi minimal 45 menit sebelum kedatangan.</li>
          <li>Mohon datang tepat waktu untuk memudahkan persiapan.</li>
          <li>Setiap reservasi maksimal untuk 10 orang.</li>
          <li>Harap informasikan alergi atau permintaan khusus di kolom tambahan.</li>
          <li>Pembatalan reservasi dapat dilakukan 2 jam sebelum waktu reservasi.</li>
        </ul>
      </div>
    </div>
  </div>
</section>



   <section id="lokasi" class="lokasi-section" style="margin-top:50px; text-align:center;">
  <h2 style="color:#b9b4ae; margin-bottom:20px;">📍 Lokasi Kami</h2>

  <!-- Maps -->
  <div style="display:flex; justify-content:center; margin-bottom:30px;">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.885884733737!2d111.61082828885498!3d-7.477851999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79c5b605deb7bd%3A0xebe9fa230d8bee10!2sTaman%20Lembang%20Desa%20Ngale!5e0!3m2!1sid!2sid!4v1758192257827!5m2!1sid!2sid" 
      width="80%" 
      height="350" 
      style="border:0; border-radius:15px; box-shadow:0 8px 20px rgba(0,0,0,0.2);" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>

  <!-- Tombol Google Maps -->
  <div style="margin-bottom:40px;">
    <a href="https://www.google.com/maps/place/Taman+Lembang+Desa+Ngale/@-7.4778519,111.6108283,15z" 
       target="_blank" 
       style="display:inline-block; padding:12px 24px; background:#4a3f35; color:#fff; text-decoration:none; border-radius:10px; font-weight:bold; transition:0.3s;">
       📌 Buka di Google Maps
    </a>
  </div>

  <!-- Section Tentang -->
<section id="tentang" style="padding:60px 20px; background:#4a3f35;">

  <!-- Foto + Tentang Warung -->
  <div style="display:flex; justify-content:center; align-items:center; gap:30px; flex-wrap:wrap; text-align:left; max-width:1000px; margin:0 auto;">
    
    <!-- Gambar Lokasi -->
    <div style="flex:1; min-width:300px;">
      <img src="images/tamanngale.jpg" 
           alt="Foto Lokasi Warung 86" 
           style="width:100%; height:350px; object-fit:cover; border-radius:15px; box-shadow:0 8px 20px rgba(0,0,0,0.2);">
    </div>

    <!-- Tentang Warung 86 -->
    <div style="flex:1; min-width:300px; color:#f8f8f8;">
      <h3 style="color:#f8f8f8; margin-bottom:10px;">Tentang Warung 86</h3>
      <p style="font-size:16px; line-height:1.6; margin-bottom:15px;">
        Warung 86 hadir di Desa Ngale sebagai tempat nongkrong santai dengan nuansa pedesaan 
        yang asri dan nyaman. Kami menyediakan berbagai menu kopi, makanan ringan, dan hidangan khas 
        dengan harga yang ramah di kantong.
      </p>
      <p style="font-size:16px; line-height:1.6; margin-bottom:15px;">
        Dengan suasana terbuka dan pemandangan hijau di sekitar, Warung 86 cocok untuk kumpul keluarga, 
        teman, maupun sekadar melepas penat sambil menikmati kopi hangat.
      </p>
      <p style="font-size:16px; font-weight:bold; color:#f8f8f8;">
        🌿 Alamat: Taman Lembang, Desa Ngale, Kecamatan Paron, Kabupaten Ngawi, Jawa Timur.
      </p>
    </div>
  </div>

</section>
    </html>
