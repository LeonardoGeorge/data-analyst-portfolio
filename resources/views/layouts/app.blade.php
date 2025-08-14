<!DOCTYPE html>
<html lang="pt-BR" class="dark-mode">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Data Analyst') }}</title>
    @vite(['resources/css/neon.css', 'resources/js/neon-effects.js'])
</head>
<body class="bg-black text-neon-green font-mono">
    <div class="container mx-auto px-4 py-8">
        @yield('content')
    </div>
</body>
</html>