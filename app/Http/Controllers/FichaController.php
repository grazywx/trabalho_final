<?php

namespace App\Http\Controllers;


use App\Http\Requests\FichaSupportRequest;
use Illuminate\Http\Request;
use App\Models\Ficha;
use App\Models\Paciente;

class FichaController extends Controller
{
    public readonly Ficha $ficha;

    public function __construct()
    {
        $this->ficha = new ficha();
    }


    public function index()
    {
        $fichas = Ficha::with('paciente')->get();
        return view('fichas', ['fichas' => $fichas]);
    }

    
     
    public function create()
    {
        $pacientes = Paciente::all();
        return view('criar/ficha_create', compact('pacientes'));
    }

    public function store(FichaSupportRequest $request)
    {
        $created = $this->ficha->create([
            'nome' => $request->input('nome'),
            'data_nascimento' => $request->input('data_nascimento'),
            'genero' => $request->input('genero'),
            'endereco' => $request->input('endereco'),
            'data_ficha' => $request->input('data_ficha'),
            'descricao' => $request->input('descricao'),
            'diagnostico' => $request->input('diagnostico'),
            'prescricao' => $request->input('prescricao'),
            'medico' => $request->input('medico'),
            
        ]);
    
       
        if ($created) {
            $fichas = Ficha::all(); 
            
            return view('fichas', ['fichas' => $fichas]);
        }
        
        return redirect()->back()->with('message', 'Erro ao criar!');
    }

 
    public function show(Ficha $ficha)
    {
        return view('deletar/ficha_delete', ['ficha' => $ficha]);
    }

    public function edit(Ficha $ficha)
    {
       return view('editar/ficha_edit', ['ficha' => $ficha]);
    }

    public function update(FichaSupportRequest $request, string $id)
    {
        $updated = $this->ficha->where('id', $id)->update($request->except(['_token', '_method']));
        
        if($updated) {
            $fichas = Ficha::all(); 
            return view('fichas', ['fichas' => $fichas]);
        }
        return redirect()->back()->with('message', 'Erro ao atualizar!');
    }

   
    public function destroy(string $id)
    {
        $this->ficha->where('id', $id)->delete();

        return redirect()->route('fichas.index');
    }
}
