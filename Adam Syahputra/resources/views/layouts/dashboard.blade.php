<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}">
    <title>Tugas UAS - Adam Syahputra</title>
</head>

<body>
    <div class="main-template">
        <div class="sidebar">
            <div class="logo">-- RM Jaso Ayah Bundo --</div>
            <ul class="sidebar-menu">
                <li class="sidebar-item">
                    <a class="nav-link active" href="{{ route('/') }}">Beranda</a>
                </li>
                <li class="sidebar-item">
                    <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                </li>
                <li class="sidebar-item">
                    <a class="nav-link" href="{{ route('customer') }}">Pelanggan</a>
                </li>
                <li class="sidebar-item">
                    <a class="nav-link" href="{{ route('transaction') }}">Transaksi</a>
                </li>
                <li class="sidebar-item">
                    <a class="nav-link" href="{{ route('transaction_detail') }}">Detail Transaksi</a>
                </li>
                <li class="sidebar-item">
                    <a class="nav-link" href="{{ route('user') }}">Pengguna</a>
                </li>
                <li class="sidebar-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button name="logout" class="nav-link" style="border: 0px; background: transparent">Logout</button>
                    </form>
                </li>
            </ul>
        </div>

        <div class="content">
            <nav class="top-bar">
                <div>Pengakasiran RM Jaso Ayah Bundo</div>
            </nav>


            <section class="main">
                @yield('content')
            </section>

            <footer>
                <div class="container">
                    &copy; Copyright Adam Syahputra 0702191110
                </div>
            </footer>
        </div>
    </div>
   

    <script src="{{ asset('plugin/bootstrap/js/bootstrap.min.js"') }}"></script>
</body>
</html>