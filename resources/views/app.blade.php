<!DOCTYPE html>
<html lang="{{$page->jezyk}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>

  <nav>
    @include('menu')
  </nav>
  <main>
    @yield('content')
  </main>
</body>
</html>