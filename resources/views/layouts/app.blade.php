{{-- layout base --}}
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('page_title', 'Primo esercizio crud laravel')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    
    @include('partials._header');
    @yield('content')
   {{-- collegamento a file di javascript --}}
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
