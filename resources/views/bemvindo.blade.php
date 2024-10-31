<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo(a) à Saúde+</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-teal-50 text-gray-800 font-sans">
    <div class="container mx-auto px-6 py-8 bg-white rounded-lg shadow-lg mt-10">
        <h1 class="text-4xl font-bold text-center text-teal-600 mb-8">Bem-vindo(a) à Saúde+</h1>
        <p class="text-lg text-center mb-6 text-gray-700">
            Obrigado por se cadastrar! Na Saúde+, estamos comprometidos em oferecer o melhor serviço de saúde para você
            e sua família.
        </p>

        <div class="bg-blue-50 rounded-lg p-6 mb-8">
            <h2 class="text-2xl font-semibold text-teal-700">Nossos Planos</h2>
            <ul class="list-disc list-inside text-gray-700 ml-4 mt-4 space-y-2">
                <li>Plano Individual</li>
                <li>Plano Familiar</li>
                <li>Plano MEI</li>
                <li>Plano Coletivo Empresarial</li>
                <li>Plano Coletivo por Adesão</li>
            </ul>
        </div>

        <div class="bg-green-50 rounded-lg p-6 mb-8">
            <h2 class="text-2xl font-semibold text-teal-700">Benefícios para os Clientes</h2>
            <ul class="list-disc list-inside text-gray-700 ml-4 mt-4 space-y-2">
                <li>Atendimento rápido e de qualidade</li>
                <li>Descontos em farmácias parceiras</li>
                <li>Programas de saúde e bem-estar</li>
            </ul>
        </div>

        <div class="bg-yellow-50 rounded-lg p-6 mb-8">
            <h2 class="text-2xl font-semibold text-teal-700">Compare Nossos Planos</h2>
            <p class="text-gray-700 mt-4">
                Você pode comparar os diferentes planos que oferecemos para encontrar o que melhor atende às suas
                necessidades.
            </p>
            <button style="background-color: rgb(185 28 28);;" onclick="window.location.href='{{ route('compararPlanos') }}'"
                class="text-white bg-teal-500 hover:bg-teal-600 px-4 py-2 mt-4 rounded">
                Clique aqui para comparar os planos
            </button>
        </div>

        <div class="bg-blue-50 rounded-lg p-6 mb-8">
            <h2 class="text-2xl font-semibold text-teal-700">Pesquise Nossos Planos</h2>
            <p class="text-gray-700 mt-4">
                Encontre o plano ideal filtrando por tipo de cobertura, faixa etária e outras opções para escolher o melhor
                para você.
            </p>
            <button style="background-color: rgb(34, 138, 230);" onclick="window.location.href='{{ route('pesquisarPlanos') }}'"
                class="text-white bg-teal-500 hover:bg-teal-600 px-4 py-2 mt-4 rounded">
                Clique aqui para pesquisar os planos
            </button>
        </div>
    </div>
</body>

</html>