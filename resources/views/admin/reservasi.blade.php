<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard - Warung Coffee 86</title>
<link rel="stylesheet" href="{{ asset('css/admin/reservasi.css') }}">
</head>
<body>
<div class="page-wrapper">

<header class="site-header">
    <div class="nav-container">
        <a href="#menu" class="logo">COFFEE 86</a>
        <nav class="main-nav">
            <a href="#menu" class="nav-link">Menu</a>
            <a href="#reservasi" class="nav-link">Reservasi</a>
            <a href="{{ route('admin.logout') }}" class="nav-link login-btn">Logout</a>
        </nav>
    </div>
</header>

<!-- ===== Menu Section ===== -->
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

<!-- ===== Reservasi Section ===== -->
<section id="reservasi" class="reservasi-section">
    <h2>Daftar Reservasi</h2>
    <div class="table-wrapper">
        <div class="table-scroll">
            <table class="reservasi-table">
                <thead>
                    <tr>
                        <th>Nama Pemesan</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Kursi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Nama Pemesan">Budi Santoso</td>
                        <td data-label="Tanggal">2025-09-20</td>
                        <td data-label="Jam">10:00</td>
                        <td data-label="Kursi">Meja 3</td>
                        <td data-label="Status">Konfirmasi</td>
                    </tr>
                    <tr>
                        <td data-label="Nama Pemesan">Siti Aminah</td>
                        <td data-label="Tanggal">2025-09-21</td>
                        <td data-label="Jam">14:00</td>
                        <td data-label="Kursi">Meja 5</td>
                        <td data-label="Status">Menunggu</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

</div>
</body>
</html>
