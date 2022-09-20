<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/default{{Session::get('estilo')}}.css"/>
        <script src="/js/jquery.js"></script>
        <script src="/js/angular.min.js"></script>
        <script src="/js/menu.js"></script>
        <script src="/js/carrito.js"></script>
        @yield('scripts')
        @yield('estilos')
        <title>@yield('titulo')</title>
    </head>
    <body>
        <header>
            @yield('encabezadoFijo', View::make('components.encabezado'))
            @yield('encabezado')
        </header>
        <nav>
            @yield('menu',View::make('components.menu'))
        </nav>
        <main>
            @yield('contenido')
        </main>
        <aside>
            @yield('carrito',View::make('components.carrito'))
        </aside>
        <footer>
            @yield('pieDePagina',View::make('components.pieDePagina'))
        </footer>
    </body>
</html>
