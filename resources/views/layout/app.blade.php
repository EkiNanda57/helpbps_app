<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        body { font-family: 'Poppins', sans-serif; }
    </style>

    <title>@yield('title', 'Halaman') </title>
</head>

<body class="bg-gradient-to-br from-green-200 via-orange-200 to-blue-200 min-h-screen flex flex-col">

    {{-- NAVBAR --}}
    @include('layout.navbar')

    {{-- CONTENT UTAMA --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('layout.footer')

</body>
</html>
