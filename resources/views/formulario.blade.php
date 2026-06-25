<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-red-700 leading-tight border-l-4 border-red-700 pl-3">
            {{ __('Lançamento de Notas / Trabalhos') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-xl border border-gray-200">
                
                <div class="p-8 text-gray-900">
                    <div class="mb-8">
                        <h3 class="text-lg font-bold text-gray-800">Sistema Acadêmico</h3>
                        <p class="text-sm text-gray-500">Preencha os dados abaixo para registrar o conteúdo no Back-End.</p>
                    </div>
                    
                    @if(session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded" role="alert">
                            <p class="font-bold">Sucesso!</p>
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('notas.store') }}" method="POST" class="space-y-6">
                        @csrf 
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Título da Nota / Atividade:</label>
                            <input type="text" name="titulo" required placeholder="Ex: Projeto Web III - Migrations" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500 transition shadow-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Conteúdo / Descrição:</label>
                            <textarea name="conteudo" required placeholder="Digite a descrição detalhada aqui..." rows="5"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500 transition shadow-sm"></textarea>
                        </div>

                        <div class="flex items-center justify-end mt-4 pt-4 border-t border-gray-100">
                            <button type="submit" 
                                class="bg-red-700 hover:bg-red-800 text-white font-bold py-3 px-8 rounded-lg shadow-md transition transform hover:-translate-y-0.5">
                                Salvar Registro
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>