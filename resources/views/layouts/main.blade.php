<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV - {{ $identitas->nama_lengkap ?? 'CV' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background-color: #f4f7f6; /* Abu-abu lembut */
        }
        .sidebar {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            position: sticky; /* Membuat sidebar tetap di tempat saat scroll */
            top: 1.5rem;
        }
        .content-main {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .profile-img {
            width: 100%;
            aspect-ratio: 3 / 4; /* Rasio 3x4 */
            object-fit: cover; /* Foto tidak terdistorsi */
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            border: 5px solid #eee;
        }
        .sidebar-list {
            list-style: none;
            padding-left: 0;
        }
        .sidebar-list li {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
            color: #555;
        }
        .sidebar-list .icon {
            width: 30px; /* Lebar ikon */
            font-size: 1.2rem; /* Ukuran ikon */
            color: #0d6efd; /* Warna ikon biru */
            margin-right: 10px;
            text-align: center;
        }
        .section-title {
            font-weight: 700;
            color: #333;
            border-bottom: 3px solid #0d6efd;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }
        .card-custom {
            border: none;
            border-left: 4px solid #0d6efd;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>

    @include('includes.header')

    <main class="container my-4">
        <div class="row g-4">
            
            <div class="col-lg-4">
                @include('includes.sidebar')
            </div>

            <div class="col-lg-8">
                <div class="content-main">
                    @yield('content')
                </div>
            </div>

        </div>
    </main>

    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>