<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC Zona Leste</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-800">
    
    <nav class="bg-red-700 text-white shadow-lg border-b-4 border-red-900">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-extrabold tracking-wider flex items-center gap-2">
                🎓 ETEC ZL
            </div>
            <div class="space-x-6 font-semibold flex items-center">
                <a href="{{ route('home') }}" class="hover:text-red-200 transition">Início</a>
                <a href="{{ route('cursos') }}" class="hover:text-red-200 transition">Nossos Cursos</a>
                <a href="{{ route('eventos') }}" class="hover:text-red-200 transition">Mural de Eventos</a>
                <a href="{{ route('formulario') }}" class="bg-white text-red-700 px-5 py-2 rounded shadow hover:bg-gray-100 transition">Área do Aluno (Restrito)</a>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow-sm py-20 text-center border-b border-gray-200">
        <h1 class="text-5xl font-extrabold text-gray-900 mb-4">Bem-vindo à <span class="text-red-700">ETEC Zona Leste</span></h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">Excelência em educação técnica, inovação e formação profissional de qualidade para transformar o seu futuro.</p>
    </header>

    <div class="max-w-7xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow border-t-4 border-red-700">
            <h3 class="text-xl font-bold text-gray-800 mb-2">📚 Ensino Gratuito</h3>
            <p class="text-gray-600">Educação técnica e ensino médio de alta qualidade, totalmente gratuito e focado no mercado de trabalho.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow border-t-4 border-gray-800">
            <h3 class="text-xl font-bold text-gray-800 mb-2">💻 Laboratórios Modernos</h3>
            <p class="text-gray-600">Infraestrutura completa com laboratórios de informática de última geração para os cursos de tecnologia.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow border-t-4 border-red-700">
            <h3 class="text-xl font-bold text-gray-800 mb-2">🤝 Mercado de Trabalho</h3>
            <p class="text-gray-600">Forte parceria com empresas da região, facilitando o acesso ao primeiro emprego e programas de Jovem Aprendiz.</p>
        </div>
    </div>

    <footer class="bg-gray-800 text-white text-center py-6 mt-10">
        <p>© 2026 ETEC Zona Leste - Todos os direitos reservados.</p>
    </footer>

</body>
</html>