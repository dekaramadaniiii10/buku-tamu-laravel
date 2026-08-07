<!DOCTYPE html>
<html>
<head>
<title>Data Tamu</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h1>Data Buku Tamu</h1>

<a href="/" class="btn btn-success mb-3">
Tambah Data
</a>

<table class="table table-bordered">
<tr>
<th>No</th>
<th>Nama</th>
<th>Instansi</th>
<th>No HP</th>
<th>Tujuan</th>
<th>Tanggal</th>
<th>Aksi</th>
</tr>

@foreach($data as $d)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $d->nama }}</td>
<td>{{ $d->instansi }}</td>
<td>{{ $d->no_hp }}</td>
<td>{{ $d->tujuan }}</td>
<td>{{ $d->tanggal_kunjungan }}</td>

<td>

<a href="/edit/{{ $d->id }}" class="btn btn-warning btn-sm">
Edit
</a>

<form action="/delete/{{ $d->id }}" method="POST" style="display:inline">
@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Hapus
</button>

</form>

</td>
</tr>
@endforeach

</table>

</div>

</body>
</html>