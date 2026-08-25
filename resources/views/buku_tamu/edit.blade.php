<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Tamu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* BACKGROUND */
        body {
            background: linear-gradient(135deg, #fff0f6, #ffd6e7, #ffc1d9);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* KOTAK UTAMA */
        .container {
            position: relative;
            z-index: 2;
            background-color: rgba(255, 255, 255, 0.45);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(255, 105, 150, 0.2);
            animation: muncul 0.8s ease;
        }

        /* JUDUL */
        h1 {
            color: #ff8fbd;
            font-weight: bold;
            margin-bottom: 25px;
            animation: turun 0.8s ease;
        }

        /* LABEL */
        label {
            color: #a61e5c;
            font-weight: 500;
        }

        /* INPUT */
        .form-control {
            background-color: rgba(255, 255, 255, 0.55);
            border-color: #ffb6d2;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.75);
            border-color: #ff8fbd;
            box-shadow: 0 0 0 0.2rem rgba(255, 143, 189, 0.25);
        }

        /* TOMBOL */
        .btn {
            border-radius: 25px;
            padding: 10px 25px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 5px 12px rgba(255, 105, 150, 0.2);
        }

        .btn:hover {
            transform: translateY(-3px);
        }

        /* TOMBOL UPDATE */
        .btn-primary {
            background: linear-gradient(135deg, #ff8fbd, #ff6fa8);
            border: none;
            color: white;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #ff6fa8, #ff4f96);
            color: white;
        }

        /* TOMBOL BATAL */
        .btn-secondary {
            background-color: rgba(255, 255, 255, 0.5);
            color: #a61e5c;
            border: 1px solid #ff8fbd;
        }

        .btn-secondary:hover {
            background-color: #ffd6e7;
            color: #a61e5c;
        }

        /* ANIMASI KOTAK */
        @keyframes muncul {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ANIMASI JUDUL */
        @keyframes turun {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <div class="container mt-5">

        <h1>Edit Data Tamu</h1>

        <form action="/update/{{ $tamu->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control"
                    value="{{ $tamu->nama }}" required>
            </div>

            <div class="mb-3">
                <label>Instansi</label>
                <input type="text" name="instansi" class="form-control"
                    value="{{ $tamu->instansi }}" required>
            </div>

            <div class="mb-3">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control"
                    value="{{ $tamu->no_hp }}" required>
            </div>

            <div class="mb-3">
                <label>Tujuan</label>
                <textarea name="tujuan" class="form-control" required>{{ $tamu->tujuan }}</textarea>
            </div>

            <div class="mb-3">
                <label>Tanggal Kunjungan</label>
                <input type="date" name="tanggal_kunjungan" class="form-control"
                    value="{{ $tamu->tanggal_kunjungan }}" required>
            </div>

            <!-- TOMBOL -->
            <div class="d-flex gap-2 mt-4">
                <button type="submit" class="btn btn-primary">
                    ✏️ Update
                </button>

                <a href="/admin" class="btn btn-secondary">
                    ↩️ Batal
                </a>
            </div>

        </form>

    </div>

</body>
</html>