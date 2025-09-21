<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Coffee 86 - Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin/beranda.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/servasi.css') }}">
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
                    <img src="{{ asset('images/grup.png') }}" alt="Admin Dashboard">
                </div>
            </div>
        </section>

        <!-- Menu Section -->
@php
    $menu = $menu ?? collect();
@endphp
<section id="menu" style="margin-bottom:30px; display:flex; justify-content:center;">
    <div style="max-width:900px; width:100%;">
        <h2 style="margin-bottom:10px; color:#cac6c5; font-size:1.3em; text-align:center;">Daftar Menu Masuk</h2>

        <!-- Tombol aksi -->
        <div style="margin-bottom:10px; text-align:right;">
            <a href="{{ route('admin.menu.tambah') }}" style="padding:6px 12px; background:#8D6E63; color:white; border:none; border-radius:4px; text-decoration:none; margin-right:5px;">Tambah Data</a>
            <a href="{{ route('admin.menu.edit_all') }}" style="padding:6px 12px; background:#6D4C41; color:white; border:none; border-radius:4px; text-decoration:none; margin-right:5px;">Edit Data</a>
            <form action="{{ route('admin.menu.hapus_semua') }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="padding:6px 12px; background:#B71C1C; color:white; border:none; border-radius:4px; cursor:pointer;" onclick="return confirm('Yakin ingin hapus semua menu?')">Hapus Semua</button>
            </form>
        </div>

        <div style="overflow-x:auto; border:1px solid #D7CCC8; border-radius:6px; background:#6D4C41;">
            <table style="width:100%; border-collapse:collapse; text-align:left; color:white; font-size:0.9em;">
                <thead>
                    <tr style="background:#5D4037;">
                        <th style="padding:6px 8px; border-bottom:1px solid #D7CCC8;">Nama</th>
                        <th style="padding:6px 8px; border-bottom:1px solid #D7CCC8;">Harga</th>
                        <th style="padding:6px 8px; border-bottom:1px solid #D7CCC8;">Kategori</th>
                        <th style="padding:6px 8px; border-bottom:1px solid #D7CCC8;">Status</th>
                        <th style="padding:6px 8px; border-bottom:1px solid #D7CCC8;">Aksi</th>
                    </tr>
                </thead>
                <tbody id="menu-body">
                    @forelse($menu as $m)
                        <tr>
                            <td style="padding:5px 8px; border-bottom:1px solid #D7CCC8;">{{ $m->nama }}</td>
                            <td style="padding:5px 8px; border-bottom:1px solid #D7CCC8;">{{ number_format($m->harga,0,',','.') }}</td>
                            <td style="padding:5px 8px; border-bottom:1px solid #D7CCC8;">{{ $m->kategori }}</td>
                            <td style="padding:5px 8px; border-bottom:1px solid #D7CCC8;">
                                @if($m->status === 'tersedia')
                                    <span style="color:#FFF176; font-weight:bold;">Tersedia</span>
                                @else
                                    <span style="color:#FF8A65; font-weight:bold;">Habis</span>
                                @endif
                            </td>
                            <td style="padding:5px 8px; border-bottom:1px solid #D7CCC8;">
                                <a href="{{ route('admin.menu.edit', $m->id) }}" style="padding:4px 8px; background:#6D4C41; color:white; border-radius:3px; text-decoration:none; margin-right:3px;">Edit</a>
                                <form action="{{ route('admin.menu.hapus', $m->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="padding:4px 8px; background:#B71C1C; color:white; border:none; border-radius:3px; cursor:pointer;" onclick="return confirm('Yakin ingin hapus menu ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="padding:8px; font-style:italic; text-align:center; color:#D7CCC8;">Belum ada menu</td>
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
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Meja</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="reservasi-body">
            @forelse($reservasi as $r)
                <tr>
                    <td>{{ $r->nama }}</td>
                    <td>{{ $r->jumlah_orang }}</td>
                    <td>{{ $r->meja ?? '-' }}</td>
                    <td>{{ $r->tanggal }}</td>
                    <td>{{ $r->jam }}</td>
                    <td>
                        <select class="status-reservasi" data-id="{{ $r->id }}" style="padding:5px 8px;border-radius:5px;border:1px solid #c49a6c;">
                            <option value="menunggu" {{ $r->status == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                            <option value="konfirmasi" {{ $r->status == 'konfirmasi' ? 'selected' : '' }}>Dikonfirmasi</option>
                            <option value="batal" {{ $r->status == 'batal' ? 'selected' : '' }}>Batal</option>
                        </select>
                    </td>
                   <td>
                        <button class="btn-delete-reservasi" data-id="{{ $r->id }}" style="background-color:#e74c3c;color:white;padding:5px 10px;border:none;border-radius:5px;cursor:pointer;">Hapus</button>
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
                data.forEach(r => {
                    let meja = r.meja ? r.meja : '-';
                    tbody += `
                        <tr>
                            <td>${r.nama}</td>
                            <td>${r.jumlah_orang}</td>
                            <td>${meja}</td>
                            <td>${r.tanggal}</td>
                            <td>${r.jam}</td>
                            <td>
                                <select class="status-reservasi" data-id="${r.id}" style="padding:5px 8px;border-radius:5px;border:1px solid #c49a6c;">
                                    <option value="menunggu" ${r.status === 'menunggu' ? 'selected' : ''}>Menunggu</option>
                                    <option value="konfirmasi" ${r.status === 'konfirmasi' ? 'selected' : ''}>Dikonfirmasi</option>
                                    <option value="batal" ${r.status === 'batal' ? 'selected' : ''}>Batal</option>
                                </select>
                            </td>
                            <td>
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

    // Update status reservasi via AJAX
    $(document).on('change', '.status-reservasi', function(){
        let id = $(this).data('id');
        let status = $(this).val();

        $.ajax({
            url: `/admin/reservasi/${id}/status`,
            type: 'PATCH',
            data: {_token: csrfToken, status: status},
            success: function(){
                console.log('Status berhasil diupdate');
                loadReservasi(); // reload data
            },
            error: function(){
                alert('Gagal update status. Refresh halaman dan coba lagi.');
            }
        });
    });

    // Smooth scroll
    $(document).ready(function(){
        $('a[href^="#"]').on('click', function(e){
            e.preventDefault();
            let target = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(target).offset().top - 60
            }, 800);
        });
    });
</script>



    </div>
</body>
</html>
