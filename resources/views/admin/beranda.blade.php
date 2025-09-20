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

        <header class="site-header">
            <div class="nav-container">
                <a href="#hero" class="logo">COFFEE 86</a>
                <div class="nav-right">
                    <nav class="main-nav">
                        <a href="{{ route('admin.beranda') }}" class="nav-link">Beranda</a>
                        <a href="{{ route('admin.reservasi') }}" class="nav-link">Reservasi</a>
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
                    <p class="hero-subtitle">Kelola Reservasi dengan Mudah</p>
                    <a href="{{ route('admin.reservasi') }}" class="hero-cta">Lihat Reservasi</a>
                </div>
                <div class="hero-image">
                    <img src="{{ asset('images/grup.png') }}" alt="Admin Dashboard">
                </div>
            </div>
        </section>

        <!-- Reservasi Section -->
        @php
            $reservasi = $reservasi ?? collect();
        @endphp

        <section id="reservasi">
            <h2>Daftar Reservasi</h2>
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
                <tbody>
                    @forelse($reservasi as $r)
                        <tr>
                            <td>{{ $r->nama }}</td>
                            <td>{{ $r->jumlah_orang }}</td>
                            <td>{{ $r->meja }}</td>
                            <td>{{ $r->tanggal }}</td>
                            <td>{{ $r->jam }}</td>
                            <td>{{ $r->status }}</td>
                            <td>
                                <form action="{{ route('admin.reservasi.hapus', $r->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin hapus reservasi ini?')">Hapus</button>
                                </form>
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

    </div>
</body>
</html>
