<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cursos - ETEC ZL</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-800">
    
    <nav class="bg-red-700 text-white shadow-lg border-b-4 border-red-900">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-extrabold tracking-wider">🎓 ETEC ZL</div>
            <div class="space-x-6 font-semibold">
                <a href="{{ route('home') }}" class="hover:text-red-200">Início</a>
                <a href="{{ route('cursos') }}" class="hover:text-red-200 border-b-2 border-white pb-1">Nossos Cursos</a>
                <a href="{{ route('eventos') }}" class="hover:text-red-200">Mural de Eventos</a>
                <a href="{{ route('formulario') }}" class="bg-white text-red-700 px-5 py-2 rounded shadow hover:bg-gray-100 transition">Área do Aluno</a>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-8 border-l-4 border-red-700 pl-4">Cursos Oferecidos</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-8 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition">
                <div class="inline-block bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-bold mb-4">Novo Ensino Médio</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Desenvolvimento de Sistemas (AMS)</h3>
                <p class="text-gray-600 mb-4">Aprenda programação web, banco de dados, lógica de programação e crie sistemas completos do zero. Foco nas linguagens mais requisitadas pelo mercado (PHP, Laravel, React).</p>
                <span class="text-sm font-semibold text-gray-500">Duração: 3 anos (Integrado)</span>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition">
                <div class="inline-block bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm font-bold mb-4">Técnico</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Administração</h3>
                <p class="text-gray-600 mb-4">Capacitação para atuar em rotinas administrativas, recursos humanos, finanças e logística empresarial. Visão completa e estratégica de negócios.</p>
                <span class="text-sm font-semibold text-gray-500">Duração: 1 ano e meio</span>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition">
                <div class="inline-block bg-gray-200 text-gray-800 px-3 py-1 rounded-full text-sm font-bold mb-4">Técnico</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Logística</h3>
                <p class="text-gray-600 mb-4">Planejamento, operação e controle de fluxo de materiais e informações. Curso voltado para um dos setores que mais crescem na Zona Leste de São Paulo.</p>
                <span class="text-sm font-semibold text-gray-500">Duração: 1 ano e meio</span>
            </div>
        </div>
    </div>
</body>
</html>