<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Warung Coffee 86 - Tambah Menu</title>
  <link rel="stylesheet" href="{{ asset('css/admin/tambah.css') }}">
</head>
<body>
  <div class="menu-wrapper">
    <div class="menu-card">
      <div class="menu-header">
        <h1>Tambah Menu Baru</h1>
        <p>Isi data menu dengan lengkap</p>
      </div>

      <!-- Pesan sukses -->
      @if(session('success'))
        <div class="alert-success">
          {{ session('success') }}
        </div>
      @endif

      <!-- Pesan error -->
      @if($errors->any())
        <div class="alert-error">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('admin.menu.store') }}" method="POST">
        @csrf

        <!-- Nama Menu -->
        <div class="form-group">
          <label for="nama">Nama Menu</label>
          <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>
        </div>

        <!-- Harga -->
        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="number" id="harga" name="harga" value="{{ old('harga') }}" required>
        </div>

        <!-- Kategori -->
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <select id="kategori" name="kategori" required>
            <option value="Kopi" {{ old('kategori')=='Kopi' ? 'selected':'' }}>Kopi</option>
            <option value="Non Kopi" {{ old('kategori')=='Non Kopi' ? 'selected':'' }}>Non Kopi</option>
            <option value="Snack" {{ old('kategori')=='Snack' ? 'selected':'' }}>Snack</option>
          </select>
        </div>

        <!-- Status -->
        <div class="form-group">
          <label for="status">Status</label>
          <select id="status" name="status" required>
            <option value="tersedia" {{ old('status')=='tersedia' ? 'selected':'' }}>Tersedia</option>
            <option value="habis" {{ old('status')=='habis' ? 'selected':'' }}>Habis</option>
          </select>
        </div>

        <!-- Tombol -->
        <button type="submit" class="btn-submit">Simpan</button>
        <div class="back-home">
          <a href="{{ route('admin.beranda') }}">Batal & Kembali</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
