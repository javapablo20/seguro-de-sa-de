<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguradora de Saúde</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<body>
    <div class="min-h-screen bg-gray-100 flex flex-col">
        <!-- Header -->
        <header class="bg-teal-600 ">
            <div class="container mx-auto">
                <h1 class="text-2xl">Seguradora de Saúde</h1>
            </div>
        </header>

        <!-- Main content -->
        <main class="flex-grow container mx-auto py-4">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-teal-600 ">
            <p>&copy; 2024 Saúde+. Todos os direitos reservados.</p>
        </footer>
    </div>
</body>

</html>