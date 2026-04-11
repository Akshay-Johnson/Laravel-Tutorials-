<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <header>
        <img src="{{ asset('images/ac.png') }}" alt="ac image" className="max-w-12 h-12" />
         @yield('header')
      </header>
      <main>
            @yield('main')
      </main>
      <footer>
        @yield('footer')
      </footer>
   
</body>
</html>