<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo')</title>
        <!-- Incluye Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            /* CSS para mostrar el dropdown al pasar el cursor en dispositivos grandes */
            @media (min-width: 992px) {
                .navbar-nav .nav-item:hover .dropdown-menu {
                    display: block;
                    margin-top: 0;
                }
            }
            /* Cambiar el color del item del dropdown al pasar el cursor */
            .dropdown-item:hover {
                background-color: #007bff;
                color: white;
            }
            .dropdown-item {
                transition: background-color 0.3s, color 0.3s;
            }
            .activo > a {
                font-weight: bold;
                text-decoration: underline;
            }
            h2{
                margin-left: 20px;
            }
        </style>

        <!-- Incluye jQuery y Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
    <body>
        <!-- <h1>Home</h1> -->
        <nav>
            {{-- dump(request()->routeIs('servicios')) --}}
            <table class="table">
                @include('partials.navbar')
            </table>
        </nav>        
        
        @yield('content')
        
    </body>
</html>
