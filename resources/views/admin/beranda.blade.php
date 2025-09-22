<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Coffee 86 - Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin/beranda.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/vasi.css') }}">
</head>
<body>
    <div class="page-wrapper">

        <!-- Header / Navbar -->
        <header class="site-header">
            <div class="nav-container">
                <a href="#hero" class="logo">Admin 86</a>
                <div class="nav-right">
                    <nav class="main-nav">
                        <a href="{{ route('admin.beranda') }}" class="nav-link">Beranda</a>
                        <a href="{{ route('admin.logout') }}" class="nav-link">Logout</a>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <section id="hero" class="hero-section">
            <div class="hero-container">
                <div class="hero-text">
                    <p class="pre-title">Admin Panel</p>
                    <h1 class="hero-title">Warung<br>Coffee 86</h1>
                    <p class="hero-subtitle">Kelola Reservasi dan Menu dengan Mudah</p>
                    <a href="#menu" class="hero-cta">Lihat Menu</a>
                    <a href="#reservasi" class="hero-cta">Lihat Reservasi</a>
                </div>
                <div class="hero-image">
                    <img src="{{ asset('images/kopi1.png') }}" alt="Admin Dashboard">
                </div>
            </div>
        </section>

 
       <!-- Menu Section -->
<section id="menu">
  <div class="menu-wrapper">
    <h2 style="text-align:center;">Daftar Menu Masuk</h2>

    <!-- Tombol aksi -->
    <div class="menu-actions">
      <a href="{{ route('admin.menu.tambah') }}" class="btn btn-add">Tambah Data</a>
      <a href="{{ route('admin.menu.edit_all') }}" class="btn btn-edit">Edit Semua</a>
    </div>

    <div class="menu-table-container">
      <table class="menu-table">
        <thead>
          <tr>
            <th>No</th> <!-- Kolom nomor baru -->
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Status</th>
            <th class="col-settings" aria-label="Pengaturan">
              <span class="gear">⚙️</span>
            </th>
          </tr>
        </thead>
        <tbody id="menu-body">
          @forelse($menu as $m)
            <tr>
              <td>{{ $loop->iteration }}</td> <!-- Nomor otomatis -->
              <td>
                @if($m->gambar)
                  <img src="{{ asset('storage/menu/' . $m->gambar) }}" alt="{{ $m->nama }}" style="width:60px; height:60px; object-fit:cover; border-radius:6px;">
                @else
                  <span style="color:#aaa; font-size:0.85em;">Tidak ada</span>
                @endif
              </td>
              <td>{{ $m->nama }}</td>
              <td>Rp {{ number_format($m->harga,0,',','.') }}</td>
              <td>{{ $m->kategori }}</td>
              <td>
                @if($m->status === 'tersedia')
                  <span class="status tersedia">Tersedia</span>
                @else
                  <span class="status habis">Habis</span>
                @endif
              </td>
              <td>
            <form action="{{ route('admin.menu.hapus', $m->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit"
                        onclick="return confirm('Yakin ingin hapus menu ini?')"
                        class="btn btn-delete">
                    Hapus
                </button>
                </form>


              </td>
            </tr>
          @empty
            <tr>
              <td colspan="7" class="no-data">Belum ada menu</td> <!-- colspan disesuaikan -->
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</section>



       <!-- Tambahkan meta CSRF di <head> -->
<meta name="csrf-token" content="{{ csrf_token() }}">

 <!-- Reservasi Section -->
@php
    $reservasi = $reservasi ?? collect();
@endphp

<section id="reservasi">
    <h2>Daftar Reservasi Masuk</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Meja</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th class="col-settings" aria-label="Pengaturan">
                    <span class="gear" style="font-size:24px;">⚙️</span>
                </th>
            </tr>
        </thead>
        <tbody id="reservasi-body">
            @forelse($reservasi as $r)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $r->nama }}</td>
                    <td>{{ $r->jumlah_orang }}</td>
                    <td>{{ $r->meja ?? '-' }}</td>
                    <td>{{ $r->tanggal }}</td>
                    <td>{{ $r->jam }}</td>
                    <td>
                        <button class="btn-delete-reservasi" data-id="{{ $r->id }}" style="background-color:#e72f1b;color:white;padding:5px 10px;border:none;border-radius:5px;cursor:pointer;">Hapus</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="font-style:italic; color:#666;">Belum ada reservasi</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const csrfToken = '{{ csrf_token() }}';

    // Fungsi load reservasi realtime
    function loadReservasi() {
        $.get("{{ route('admin.reservasi.data') }}", function(data) {
            let tbody = '';
            if(data.length > 0){
                data.forEach((r, index) => {
                    let meja = r.meja ? r.meja : '-';
                    tbody += `
                        <tr>
                            <td>${index + 1}</td>
                            <td>${r.nama}</td>
                            <td>${r.jumlah_orang}</td>
                            <td>${meja}</td>
                            <td>${r.tanggal}</td>
                            <td>${r.jam}</td>
                            <td>
                                <button class="btn-edit-reservasi" data-id="${r.id}" style="background-color:#3498db;color:white;padding:5px 10px;border:none;border-radius:5px;cursor:pointer;margin-right:5px;">Edit</button>
                                <button class="btn-delete-reservasi" data-id="${r.id}" style="background-color:#e74c3c;color:white;padding:5px 10px;border:none;border-radius:5px;cursor:pointer;">Hapus</button>
                            </td>
                        </tr>
                    `;
                });
            } else {
                tbody = `<tr><td colspan="7" style="font-style:italic; color:#666;">Belum ada reservasi</td></tr>`;
            }
            $('#reservasi-body').html(tbody);
        });
    }

    // Load pertama kali
    loadReservasi();

    // Polling 1 detik untuk realtime
    setInterval(loadReservasi, 1000);

    // Hapus reservasi via AJAX
    $(document).on('click', '.btn-delete-reservasi', function(){
        if(!confirm('Yakin ingin hapus reservasi ini?')) return;
        let id = $(this).data('id');
        $.ajax({
            url: `/admin/reservasi/${id}`,
            type: 'DELETE',
            data: {_token: csrfToken},
            success: function(){
                loadReservasi();
            },
            error: function(){
                alert('Gagal menghapus reservasi. Refresh halaman dan coba lagi.');
            }
        });
    });

    // Edit reservasi (contoh alert, bisa diganti modal atau redirect)
    $(document).on('click', '.btn-edit-reservasi', function(){
        let id = $(this).data('id');
        // bisa redirect ke halaman edit, contoh:
        window.location.href = `/admin/reservasi/${id}/edit`;
    });
</script>



    </div>
</body>
</html>
