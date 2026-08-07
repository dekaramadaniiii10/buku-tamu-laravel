<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h1>Buku Tamu Digital</h1>

<form action="/store" method="POST">
@csrf

<div class="mb-3">
<label>Nama</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
<label>Instansi</label>
<input type="text" name="instansi" class="form-control"required>
</div>

<div class="mb-3">
<label>No HP</label>
<input type="text" name="no_hp" class="form-control" required>
</div>

<div class="mb-3">
<label>Tujuan</label>
<textarea name="tujuan" class="form-control" required></textarea>
</div>

<div class="mb-3">
<label>Tanggal Kunjungan</label>
<input type="date" name="tanggal_kunjungan" class="form-control" required>
</div>

<button class="btn btn-primary">
Simpan
</button>

<a href="/admin" class="btn btn-secondary">
Lihat Data
</a>

</form>

</div>

</body>
</html>