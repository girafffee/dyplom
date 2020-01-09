<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="{{ route('home') }}/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ route('home') }}/css/style.css" />

    <title>{{ config('app.name', 'Laravel') }}</title>
  </head>
  <body>
    <header>
      @yield('header')
    </header>

    <main>
      @yield('content')
    </main>

    <footer>
      @yield('footer')
    </footer>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ route('home') }}/js/bootstrap.min.js" type="66447e4ca90858b7c833a27f-text/javascript"></script>
    <script src="{{ route('home') }}/js/main.js" type="66447e4ca90858b7c833a27f-text/javascript"></script>

    {{--<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="66447e4ca90858b7c833a27f-|49" defer=""></script>--}}
    @stack('scripts-in-js')

  </body>
</html>
