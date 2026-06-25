<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Eventos - ETEC ZL</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-800">
    
    <nav class="bg-red-700 text-white shadow-lg border-b-4 border-red-900">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-extrabold tracking-wider">🎓 ETEC ZL</div>
            <div class="space-x-6 font-semibold">
                <a href="{{ route('home') }}" class="hover:text-red-200">Início</a>
                <a href="{{ route('cursos') }}" class="hover:text-red-200">Nossos Cursos</a>
                <a href="{{ route('eventos') }}" class="hover:text-red-200 border-b-2 border-white pb-1">Mural de Eventos</a>
                <a href="{{ route('formulario') }}" class="bg-white text-red-700 px-5 py-2 rounded shadow hover:bg-gray-100 transition">Área do Aluno</a>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-8 border-l-4 border-red-700 pl-4">Mural de Avisos e Eventos</h2>
        
        <div class="space-y-6">
            <div class="bg-white border-l-8 border-red-600 p-6 rounded shadow flex flex-col md:flex-row gap-6 items-center">
                <div class="bg-gray-100 p-4 rounded text-center min-w-[100px]">
                    <span class="block text-xl font-black text-red-700">JUL</span>
                    <span class="block text-3xl font-bold text-gray-800">26</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">1º Torneio de Jogos de Salão</h3>
                    <p class="text-gray-600">Venha participar do nosso primeiro torneio! Teremos competições de Damas, Dominó e Xadrez. As inscrições estão abertas com a organização do Grêmio Estudantil.</p>
                </div>
            </div>

            <div class="bg-white border-l-8 border-gray-800 p-6 rounded shadow flex flex-col md:flex-row gap-6 items-center">
                <div class="bg-gray-100 p-4 rounded text-center min-w-[100px]">
                    <span class="block text-xl font-black text-red-700">AGO</span>
                    <span class="block text-3xl font-bold text-gray-800">15</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Feira Tecnológica (FETEPS) - Etapa Escolar</h3>
                    <p class="text-gray-600">Apresentação dos projetos de Conclusão de Curso (TCC) das turmas do 3º módulo. Alunos do AMS apresentarão seus desenvolvimentos voltados para problemas reais.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>