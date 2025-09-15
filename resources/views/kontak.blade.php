<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Warung 86 - Kontak</title>
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

    /* Hero Background */
    .hero {
      background: url("kopi-bg.jpg") no-repeat center center/cover;
      height: 100vh;
      color: white;
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: center;
      padding-left: 80px;
    }

    /* Overlay */
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
      z-index: 2;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-size: 18px;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #ffcc66;
    }

    /* Konten tombol */
    .contact-buttons {
      position: relative;
      z-index: 2;
      display: flex;
      flex-direction: column;
      gap: 25px;
      max-width: 300px;
    }

    .contact-buttons button {
      background: #b55a2a; /* cokelat orange */
      color: white;
      font-size: 20px;
      border: none;
      border-radius: 12px;
      padding: 20px;
      cursor: pointer;
      box-shadow: 5px 5px 8px rgba(0,0,0,0.6);
      transition: all 0.3s ease;
    }

    .contact-buttons button:hover {
      background: #d46b34;
      transform: translateY(-2px);
    }

    @media(max-width: 768px) {
      .hero {
        align-items: center;
        padding-left: 0;
      }
      .contact-buttons {
        width: 80%;
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

    <!-- Tombol Kontak -->
    <div class="contact-buttons">
      <button>Email</button>
      <button>Nomer</button>
      <button>Lokasi</button>
    </div>
  </section>
</body>
</html>
