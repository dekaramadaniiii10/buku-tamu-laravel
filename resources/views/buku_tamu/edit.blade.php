<!DOCTYPE html>
<html>
<head>
<title>Edit Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h1>Edit Data Tamu</h1>

<form action="/update/{{ $tamu->id }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Nama</label>
<input type="text" name="nama" class="form-control" value="{{ $tamu->nama }}">
</div>

<div class="mb-3">
<label>Instansi</label>
<input type="text" name="instansi" class="form-control" value="{{ $tamu->instansi }}">
</div>

<div class="mb-3">
<label>No HP</label>
<input type="text" name="no_hp" class="form-control" value="{{ $tamu->no_hp }}">
</div>

<div class="mb-3">
<label>Tujuan</label>
<textarea name="tujuan" class="form-control">{{ $tamu->tujuan }}</textarea>
</div>

<div class="mb-3">
<label>Tanggal Kunjungan</label>
<input type="date" name="tanggal_kunjungan" class="form-control" value="{{ $tamu->tanggal_kunjungan }}">
</div>

<button class="btn btn-primary">
Update
</button>

</form>

</div>

</body>
</html>