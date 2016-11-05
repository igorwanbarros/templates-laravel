<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    @yield('meta')
    
    <title>:: {!! env('APP_NAME', 'Admin-LTE') !!} ::</title>

    @yield('styles')
</head>
<body class="@yield('body-class')">

@yield('template-content')

@yield('scripts')
</body>
</html>
