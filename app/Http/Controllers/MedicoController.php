<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicoSupportRequest;
use Illuminate\Http\Request;
use App\Models\Medico;


class MedicoController extends Controller
{
    public readonly Medico $medico;

    public function __construct()
    {
        $this->medico = new medico();
    }


    public function index()
    {
        $medico = Medico::all();
        return view('medicos',['medicos'=> $medico]);
    }

    
     
    public function create()
    {
        return view('criar/medico_create');
    }

    public function store(MedicoSupportRequest $request)
    {
        $created = $this->medico->create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'crm' => $request->input('crm'),
            'especialidade' => $request->input('especialidade'),
            
        ]);
    
       
        if ($created) {
            $medicos = Medico::all(); 
            
            return view('medicos', ['medicos' => $medicos]);
        }
        
        return redirect()->back()->with('message', 'Erro ao criar!');
    }

 
    public function show(Medico $medico)
    {
        return view('deletar/medico_delete', ['medico' => $medico]);
    }

    public function edit(Medico $medico)
    {
       return view('editar/medico_edit', ['medico' => $medico]);
    }

    public function update(MedicoSupportRequest $request, string $id)
    {
        $updated = $this->medico->where('id', $id)->update($request->except(['_token', '_method']));
        
        if($updated) {
            $medicos = Medico::all(); 
            return view('medicos', ['medicos' => $medicos]);
        }
        return redirect()->back()->with('message', 'Erro ao atualizar!');
    }

   
    public function destroy(string $id)
    {
        $this->medico->where('id', $id)->delete();

        return redirect()->route('medicos.index');
    }
}
