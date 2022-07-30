<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    @yield('page-title')
  </title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header>
    @include('partials.header')
  </header>

  <main>
    <section class="jumbotron"></section>
    @yield('main-content')
  </main>

  <footer>
    @include('partials.footer')
  </footer>
</body>
</html>