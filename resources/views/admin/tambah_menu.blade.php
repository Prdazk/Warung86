<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Warung Coffee 86 - Tambah Menu</title>
<link rel="stylesheet" href="{{ asset('css/admin/tambah_menu.css') }}">
</head>
<body>
<div class="page-wrapper">

    <!-- Header -->
    <header class="site-header">
        <div class="nav-container">
            <a href="{{ route('admin.beranda') }}" class="logo">COFFEE 86</a>
            <nav class="main-nav">
                <a href="{{ route('admin.beranda') }}" class="nav-link">Dashboard</a>
                <a href="{{ route('admin.tambah.menu') }}" class="nav-link active">Tambah Menu</a>
                <a href="{{ route('admin.logout') }}" class="nav-link">Logout</a>
            </nav>
        </div>
    </header>

    <!-- Section Form Tambah Menu -->
    <section class="menu-section">
        <h2>Tambah Menu Baru</h2>

        <!-- Pesan sukses -->
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Menu:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <select id="kategori" name="kategori" required>
                    <option value="Kopi">Kopi</option>
                    <option value="Non Kopi">Non Kopi</option>
                    <option value="Snack">Snack</option>
                </select>
            </div>

            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" id="harga" name="harga" required>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" required>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Habis">Habis</option>
                </select>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" id="gambar" name="gambar" accept="image/*">
            </div>

            <button type="submit" class="btn-add">Simpan Menu</button>
        </form>
    </section>

</div>
</body>
</html>
