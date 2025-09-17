<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Reservasi</title>
    <link rel="stylesheet" href="css/reservasi.css">
</head>
<body>
    <div class="reservation-container">
        <h2>Reservasi Meja</h2>
        <form>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

            <label for="time">Jam:</label>
            <input type="time" id="time" name="time" required>

            <label for="people">Jumlah Orang:</label>
            <select id="people" name="people" required>
                <option value="">Pilih jumlah orang</option>
                <option value="1">1 Orang</option>
                <option value="2">2 Orang</option>
                <option value="3">3 Orang</option>
                <option value="4">4 Orang</option>
                <option value="5">5 Orang</option>
                <option value="6">6 Orang</option>
            </select>

            <button type="submit">Reservasi</button>
        </form>
    </div>
</body>
</html>
