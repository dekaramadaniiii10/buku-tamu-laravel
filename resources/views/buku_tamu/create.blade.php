<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu Digital</title>

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

        /* PESAN BERHASIL */
        .alert-success {
            background-color: rgba(255, 214, 231, 0.8);
            border-color: #ffb6d2;
            color: #a61e5c;
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

        /* TOMBOL SIMPAN */
        .btn-primary {
            background: linear-gradient(135deg, #ff8fbd, #ff6fa8);
            border: none;
            color: white;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #ff6fa8, #ff4f96);
            color: white;
        }

        /* TOMBOL LIHAT DATA */
        .btn-secondary {
            background-color: rgba(255, 255, 255, 0.5);
            color: #a61e5c;
            border: 1px solid #ff8fbd;
        }

        .btn-secondary:hover {
            background-color: #ffd6e7;
            color: #a61e5c;
        }

        /* KUPU-KUPU */
        .butterfly {
            position: fixed;
            width: 45px;
            height: 35px;
            z-index: 1;
            pointer-events: none;
            animation: butterflyFly 12s infinite ease-in-out;
        }

        .butterfly span {
            position: absolute;
            width: 22px;
            height: 30px;
            background: rgba(255, 143, 189, 0.75);
            border-radius: 70% 30% 70% 30%;
            box-shadow: 0 0 10px rgba(255, 143, 189, 0.3);
        }

        .butterfly span:first-child {
            left: 0;
            transform: rotate(-25deg);
        }

        .butterfly span:last-child {
            right: 0;
            transform: rotate(25deg);
        }

        .butterfly1 {
            left: 5%;
            bottom: 15%;
        }

        .butterfly2 {
            left: 25%;
            bottom: 5%;
            animation-delay: 2s;
        }

        .butterfly3 {
            right: 25%;
            bottom: 20%;
            animation-delay: 4s;
        }

        .butterfly4 {
            right: 8%;
            bottom: 10%;
            animation-delay: 6s;
        }

        .butterfly5 {
            left: 50%;
            bottom: 5%;
            animation-delay: 8s;
        }

        /* ANIMASI KUPU-KUPU */
        @keyframes butterflyFly {
            0% {
                transform: translate(0, 0) rotate(-5deg);
                opacity: 0;
            }

            15% {
                opacity: 1;
            }

            30% {
                transform: translate(80px, -100px) rotate(8deg);
            }

            50% {
                transform: translate(-30px, -180px) rotate(-8deg);
            }

            70% {
                transform: translate(100px, -280px) rotate(8deg);
            }

            100% {
                transform: translate(20px, -400px) rotate(-5deg);
                opacity: 0;
            }
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

    <!-- KUPU-KUPU -->
    <div class="butterfly butterfly1">
        <span></span>
        <span></span>
    </div>

    <div class="butterfly butterfly2">
        <span></span>
        <span></span>
    </div>

    <div class="butterfly butterfly3">
        <span></span>
        <span></span>
    </div>

    <div class="butterfly butterfly4">
        <span></span>
        <span></span>
    </div>

    <div class="butterfly butterfly5">
        <span></span>
        <span></span>
    </div>

    <!-- FORM BUKU TAMU -->
    <div class="container mt-5">

        <h1>Buku Tamu Digital</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="/store" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Instansi</label>
                <input type="text" name="instansi" class="form-control" required>
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

            <!-- TOMBOL -->
            <div class="d-flex gap-2 mt-4">
                <button type="submit" class="btn btn-primary">
                    💾 Simpan
                </button>

                <a href="/admin" class="btn btn-secondary">
                    📋 Lihat Data
                </a>
            </div>

        </form>

    </div>

</body>
</html>