<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Warung Coffee 86 - Admin</title>
<link rel="stylesheet" href="{{ asset('css/admin/beranda.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/reservasi.css') }}">
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
            <a href="#menu" class="nav-link">Menu</a>
            <a href="#reservasi" class="nav-link">Reservasi</a>

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

<!-- ===== Menu Section (Hanya untuk Admin) ===== -->
@if(session('admin_logged_in'))
<section id="menu" class="menu-section">
    <h2>Daftar Menu</h2>
    <a href="{{ route('admin.tambah.menu') }}" class="btn btn-add">Tambah Menu</a>
    <div class="table-wrapper">
        <div class="table-scroll">
            <table class="menu-table">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Menu</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Gambar"><img src="{{ asset('images/coffee1.png') }}" alt="Coffee"></td>
                        <td data-label="Nama Menu">Espresso</td>
                        <td data-label="Kategori">Kopi</td>
                        <td data-label="Harga">Rp 15.000</td>
                        <td data-label="Status">Tersedia</td>
                        <td data-label="Aksi">
                            <button class="btn btn-edit">Edit</button>
                            <button class="btn btn-delete">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Gambar"><img src="{{ asset('images/coffee2.png') }}" alt="Coffee"></td>
                        <td data-label="Nama Menu">Cappuccino</td>
                        <td data-label="Kategori">Kopi</td>
                        <td data-label="Harga">Rp 18.000</td>
                        <td data-label="Status">Tersedia</td>
                        <td data-label="Aksi">
                            <button class="btn btn-edit">Edit</button>
                            <button class="btn btn-delete">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endif

<!-- ===== Reservasi Section ===== -->
<section id="reservasi" class="reservasi-section" style="font-family:Arial,sans-serif; max-width:900px; margin:20px auto;">
    <h2 style="text-align:center; margin-bottom:15px;">Daftar Reservasi User</h2>

    <!-- Notifikasi -->
    @if(session('success'))
        <div style="background:#4CAF50; color:#fff; padding:10px; border-radius:5px; margin-bottom:10px; text-align:center;">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div style="background:#f44336; color:#fff; padding:10px; border-radius:5px; margin-bottom:10px; text-align:center;">
            {{ session('error') }}
        </div>
    @endif

    <div style="background:#6b4f33; border-radius:10px; padding:15px; box-shadow:0 4px 8px rgba(0,0,0,0.2);">
        <table style="width:100%; border-collapse: separate; border-spacing:0; color:#fff;">
            <thead style="background:#d2a679; color:#000;">
                <tr>
                    <th style="padding:10px;">Nama</th>
                    <th style="padding:10px;">Tanggal</th>
                    <th style="padding:10px;">Jam</th>
                    <th style="padding:10px;">Jumlah</th>
                    <th style="padding:10px;">Meja</th>
                    <th style="padding:10px;">Status</th>
                    <th style="padding:10px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($reservasi as $r)
                <tr style="background:#5a3f2a; border-radius:5px; margin-bottom:5px;">
                    <td style="padding:8px;">{{ $r->nama }}</td>
                    <td style="padding:8px;">{{ $r->tanggal }}</td>
                    <td style="padding:8px;">{{ $r->jam }}</td>
                    <td style="padding:8px;">{{ $r->jumlah_orang }}</td>
                    <td style="padding:8px;">{{ $r->pilihan_meja ?? '-' }}</td>
                    <td style="padding:8px;">{{ $r->status }}</td>
                    <td style="padding:8px;">
                        <a href="{{ route('admin.reservasi.edit', $r->id ?? '#') }}" style="padding:5px 10px;border:none;border-radius:20px;color:#000;background:#fff;margin-right:5px;cursor:pointer;">Edit</a>

                        <form action="{{ route('admin.reservasi.hapus', $r->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding:5px 10px;border:none;border-radius:20px;color:#fff;background:#f44336;cursor:pointer;" onclick="return confirm('Yakin ingin hapus reservasi ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="padding:10px; text-align:center; font-style:italic; color:#ccc;">Belum ada reservasi</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>

</div>
</body>
</html>
