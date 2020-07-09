<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  {{-- Font --}}
  @include('includes.font')

  {{-- Style --}}
  @include('includes.style')

</head>

<body>
  <div id="app">

    {{-- Navbar --}}
    @include('includes.navbar')

    <main class="py-4">
      @yield('content')
    </main>
  </div>


  {{-- Script --}}
  @stack('before.script')
  @include('includes.script')
  @stack('after.script')

</body>

</html>
