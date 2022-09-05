<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #6610f2">
            <div class="container-xxl">
                <div class="collapse navbar-collapse" id="navbar">
                    <a class="navbar-brand" href="#">
                        <img src="/images/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        Bootstrap
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link text-white">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/listar" class="nav-link text-white">Listar</a>
                        </li>               
                    </ul>
                </div>

                
                
            </div>
        </nav>
        
    </header>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
    

    <footer>
            <p>Desenvolvido por Mychel Lima &copy; 2022</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>