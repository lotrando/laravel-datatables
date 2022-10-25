<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Users</title>
  <script src="{{ asset('jQuery-3.6.0/jquery-3.6.0.min.js') }}" type="text/javascript"></script>
  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
  <!-- Lightbox -->
  <link href="{{ asset('lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
  <script src="{{ asset('lightbox/js/lightbox.min.js') }}" type="text/javascript"></script>
  <!-- DataTables -->
  <link href="{{ asset('css/datatables/datatables.css') }}" rel="stylesheet">
  <script src="{{ asset('js/datatables/datatables.js') }}" type="text/javascript"></script>
  <link href="{{ asset('DataTables-1.12.1/css/dataTables.bootstrap5.css') }}" rel="stylesheet">
  <script src="{{ asset('DataTables-1.12.1/js/dataTables.bootstrap5.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/datatables/czech-string.js') }}" type="text/javascript"></script>
</head>

<body>
  @yield('content')
</body>

</html>
