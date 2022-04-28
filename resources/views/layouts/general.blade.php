<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/default.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        @yield('scripts')
        @yield('estilos')
        <title>@yield('titulo')</title>
    </head>
    <body>
        <header>
            @yield('encabezado', View::make('components.encabezado'))
        </header>
        <nav>
            @yield('menu',View::make('components.menu'))
        </nav>
        <main>
            @yield('contenido'))
        </main>
        <aside>
            @yield('carrito',View::make('components.carrito'))
        </aside>
        <footer>
            @yield('pieDePagina',View::make('components.pieDePagina'))
        </footer>
    </body>
</html>
