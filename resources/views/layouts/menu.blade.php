<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="{{ asset('materialize/css/materialize.css') }}" rel="stylesheet" />
    <title>MENU</title>
</head>

<body>

    <nav class="cyan darken-3">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">TIENDA PHP</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="badges.html">Productos</a></li>
                <li><a href="collapsible.html">Catalogos</a></li>
                <li><a href="collapsible.html">Pedidos</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">

        @yield('contenido')

    </div>

    <script src="{{ asset('materialize/js/materialize.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, []);
        });
    </script>

</body>

</html>