<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yet Another File Storage</title>

        <link href="/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="page">
            <header class="page__header header">
                <div class="header__logo">
                    <a href="/">
                        <img src="/img/home.png" class="header__icon">
                    </a>
                </div>
                <h1 class="header__title">Yet Another File Storage</h1>
            </header>
            @yield('content')
        </div>
    </body>
</html>
