<!DOCTYPE html>
<html>
<head>
    <title>Data Tamu</title>

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
        }

        /* TOTAL TAMU */
        .alert-info {
            background-color: rgba(255, 214, 231, 0.75);
            border-color: #ffb6d2;
            color: #a61e5c;
        }

        /* TOMBOL */
        .btn {
            transition: 0.3s;
        }

        .btn:hover {
            transform: translateY(-3px);
        }

        .btn-success {
            background-color: #ff8fbd;
            border-color: #ff8fbd;
        }

        .btn-success:hover {
            background-color: #ff6fa8;
            border-color: #ff6fa8;
        }


        /* =========================
           TABEL DATA
        ========================= */

        table {
            background-color: transparent !important;
            border-radius: 10px;
            overflow: hidden;
        }

        /* HEADER TABEL */
        table tr:first-child th {
            background-color: rgba(255, 143, 189, 0.85) !important;
            color: white;
            text-align: center;
            border-color: rgba(255, 255, 255, 0.4);
        }

        /* DATA NAMA, INSTANSI, NO HP, DLL */
        table tr:not(:first-child) td {
            background-color: rgba(255, 255, 255, 0.20) !important;
            color: #7a1745;
            vertical-align: middle;
            border-color: rgba(255, 255, 255, 0.5);
        }

        /* SAAT MOUSE DIARAHKAN */
        table tr:not(:first-child):hover td {
            background-color: rgba(255, 255, 255, 0.35) !important;
        }


        /* =========================
           KUPU-KUPU
        ========================= */

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
            transform: scale(0.8);
            animation-delay: 2s;
        }

        .butterfly3 {
            right: 25%;
            bottom: 20%;
            transform: scale(1.1);
            animation-delay: 4s;
        }

        .butterfly4 {
            right: 8%;
            bottom: 10%;
            transform: scale(0.7);
            animation-delay: 6s;
        }

        .butterfly5 {
            left: 50%;
            bottom: 5%;
            transform: scale(0.9);
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


    <!-- DATA BUKU TAMU -->

    <div class="container mt-5">

        <h1>Data Buku Tamu</h1>

        <div class="alert alert-info">
            Total Tamu: <strong>{{ $totalTamu }}</strong>
        </div>

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