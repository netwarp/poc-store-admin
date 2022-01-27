<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/app.css">
        <title>Awesome store</title>
    </head>
    <body>
        <header>
            <a href="/admin/products" id="logo">LOGO | <small>ADMIN</small> </a>
            <a href="/">Go to public site</a>
        </header>

        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>

        <footer>
            FOOTER
        </footer>
    </body>
</html>
