<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::where('user_id', auth()->id())->get();
        return view('notas.index', compact('notas'));
    }

    public function create()
    {
        return view('notas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nota' => 'required|numeric|between:0,10',
        ]);

        Nota::create([
            'user_id' => auth()->id(),
            'nota' => $request->nota,
        ]);

        return redirect()->route('notas.index')->with('success', 'Nota añadida correctamente.');
    }
}
