<!-- resources/views/layout.blade.php -->

<html>
<head>
    <title>@yield('title')</title>
    <!-- Include your CSS and JS files -->
</head>
<body>
    <header>
        <!-- Your header content -->
    </header>

    <nav>
        <!-- Your navigation menu -->
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- Your footer content -->
    </footer>
</body>
</html>
