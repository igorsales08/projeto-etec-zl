<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Nota;
use Illuminate\Support\Facades\Auth;

class NotaController extends Controller {
    public function store(Request $request) {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'required|string',
        ]);
        Nota::create([
            'user_id' => Auth::id(),
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
        ]);
        return redirect()->back()->with('success', 'Nota salva com sucesso!');
    }
}