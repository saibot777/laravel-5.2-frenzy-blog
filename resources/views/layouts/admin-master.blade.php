<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Area</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{URL::asset('src/css/admin.css')}}">
        @yield('styles')
    </head>
    <body>
        @include('includes.admin-header')
        @yield('content')

        <script type="text/javascript">
            var baseUrl = "{{ URL::asset('/') }}";
        </script>
        @yield('scripts')
    </body>
</html>
