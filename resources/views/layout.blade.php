<!DOCTYPE html>
<html lang="vi">

<head>
    <title>@yield('tieudetrang')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #212529;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #343a40;
            color: white;
            padding: 60px 0;
            text-align: center;
            border-radius: 0 0 40px 40px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .header-image h1 {
            font-size: 3.5rem;
            margin: 0;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
        }

        .main-content {
            margin: 40px auto;
        }

        .sidebar {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 40px 0;
            text-align: center;
            border-radius: 40px 40px 0 0;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -10px 20px rgba(0, 0, 0, 0.2);
        }

        .footer p {
            margin: 0;
        }

        .card {
            border: 1px solid #dee2e6;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
        }

        .card img {
            border-bottom: 1px solid #dee2e6;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            padding: 20px;
        }

        .btn-primary {
            background-color: #000;
            border-color: #000;
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: bold;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #333;
            border-color: #333;
        }

        a.text-decoration-none {
            color: #000;
            transition: color 0.3s;
        }

        a.text-decoration-none:hover {
            color: #555;
            text-decoration: underline;
        }

        .container-fluid {
            padding: 0 15px;
        }

        @media (min-width: 992px) {
            .main-content {
                max-width: 960px;
                margin: 40px auto;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="header-image">
                <h1>Trang Tin Tức</h1>
            </div>
        </header>

        @include('menu')

        <div class="main-content row">
            <article class="col-md-9">
                @yield('noidung')
            </article>
            <aside class="col-md-3 sidebar">
                <h4 class="mb-3">Xem thêm</h4>

            </aside>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="text-center mb-0">Cuonhh</p>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
