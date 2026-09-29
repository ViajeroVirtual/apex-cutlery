<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APEX CUTLERY | Cuchillos y Supervivencia</title>
    
    <!-- Tailwind CSS (Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Montserrat:wght@400;600;800;900&display=swap" rel="stylesheet">
    
    <!-- FontAwesome para Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-texture font-sans antialiased overflow-x-hidden flex flex-col min-h-screen">

    <!-- Navegación -->
    @include('partials.navbar')

    <!-- Contenedor Principal SPA -->
    <main class="flex-grow pt-20">
        @yield("content")
    </main>

    <!-- Footer Global -->
    @include('partials.footer')
</body>
</html>