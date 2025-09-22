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
            <th>No</th> <!-- Kolom nomor -->
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
              <td colspan="6" class="no-data">Belum ada menu</td> <!-- colspan disesuaikan -->
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
    <table style="width:100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color:#927950; color:#fff;">
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Meja</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Catatan</th>
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
                    <td>{{ $r->pilihan_meja ?? '-' }}</td>
                    <td>{{ $r->tanggal }}</td>
                    <td>{{ $r->jam }}</td>
                    <td>{{ $r->catatan ? 'Ada catatan' : '-' }}</td>
                    <td>
                     <button class="btn-view-reservasi" 
                            data-id="{{ $r->id }}" 
                            data-nama="{{ $r->nama }}" 
                            data-jumlah="{{ $r->jumlah_orang }}" 
                            data-meja="{{ $r->pilihan_meja ?? '-' }}"
                            data-tanggal="{{ $r->tanggal }}" 
                            data-jam="{{ $r->jam }}" 
                            data-catatan="{{ $r->catatan ?? '-' }}" 
                            style="background-color:#f1c40f;color:white;padding:5px 10px;border:none;border-radius:5px;cursor:pointer;margin-right:5px;">
                        Lihat
                    </button>

                    <button class="btn-delete-reservasi" 
                            data-id="{{ $r->id }}" 
                            style="background-color:#e74c3c;color:white;padding:5px 10px;border:none;border-radius:5px;cursor:pointer;">
                        Hapus
                    </button>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" style="font-style:italic; color:#666;">Belum ada reservasi</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>

<!-- Modal Lihat Reservasi -->
<div id="modal-view" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6); justify-content:center; align-items:center;">
    <div style="background:#927950; padding:20px; border-radius:10px; width:400px; max-width:90%; position:relative;">
        <span id="modal-close" style="position:absolute; top:10px; right:15px; cursor:pointer; font-size:18px;">&times;</span>
        <h3>Detail Reservasi</h3>
        <p><strong>Nama:</strong> <span id="view-nama"></span></p>
        <p><strong>Jumlah Orang:</strong> <span id="view-jumlah"></span></p>
        <p><strong>Meja:</strong> <span id="view-meja"></span></p>
        <p><strong>Tanggal:</strong> <span id="view-tanggal"></span></p>
        <p><strong>Jam:</strong> <span id="view-jam"></span></p>
        <p><strong>Catatan:</strong> <span id="view-catatan"></span></p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
const csrfToken = '{{ csrf_token() }}';

function loadReservasi() {
    $.get("{{ route('admin.reservasi.data') }}", function(data) {
        let tbody = '';
        if(data.length > 0){
            data.forEach((r, index) => {
                tbody += `
                    <tr>
                        <td>${index+1}</td>
                        <td>${r.nama}</td>
                        <td>${r.jumlah_orang}</td>
                        <td>${r.meja}</td>
                        <td>${r.tanggal}</td>
                        <td>${r.jam}</td>
                        <td>${r.catatan ? 'Ada catatan' : '-'}</td>
                        <td>
                            <button class="btn-view-reservasi" data-id="${r.id}" data-nama="${r.nama}" data-jumlah="${r.jumlah_orang}" data-meja="${r.meja}" data-tanggal="${r.tanggal}" data-jam="${r.jam}" data-catatan="${r.catatan ?? '-'}" style="background:#f1c40f;color:white;padding:5px 10px;border:none;border-radius:5px;cursor:pointer;margin-right:5px;">Lihat</button>
                            <button class="btn-delete-reservasi" data-id="${r.id}" style="background:#e74c3c;color:white;padding:5px 10px;border:none;border-radius:5px;cursor:pointer;">Hapus</button>
                        </td>
                    </tr>
                `;
            });
        } else {
            tbody = `<tr><td colspan="8" style="font-style:italic;color:#666;">Belum ada reservasi</td></tr>`;
        }
        $('#reservasi-body').html(tbody);
    });
}

// Load pertama kali & polling realtime setiap 1 detik
loadReservasi();
setInterval(loadReservasi, 1000);

// Hapus reservasi via AJAX
$(document).on('click', '.btn-delete-reservasi', function(){
    if(!confirm('Yakin ingin hapus reservasi ini?')) return;
    let id = $(this).data('id');
    $.ajax({
        url: `/admin/reservasi/${id}`,
        type: 'DELETE',
        data: {_token: csrfToken},
        success: function(){ loadReservasi(); },
        error: function(){ alert('Gagal menghapus reservasi'); }
    });
});

// Lihat reservasi (modal)
$(document).on('click', '.btn-view-reservasi', function(){
    $('#view-nama').text($(this).data('nama'));
    $('#view-jumlah').text($(this).data('jumlah'));
    $('#view-meja').text($(this).data('meja'));
    $('#view-tanggal').text($(this).data('tanggal'));
    $('#view-jam').text($(this).data('jam'));
    $('#view-catatan').text($(this).data('catatan') ? $(this).data('catatan') : 'Tidak ada catatan');
    $('#modal-view').css('display','flex');
});

// Tutup modal
$('#modal-close').click(function(){ $('#modal-view').hide(); });
$('#modal-view').click(function(e){ if(e.target.id==='modal-view') $(this).hide(); });
</script>





    </div>
</body>
</html>
