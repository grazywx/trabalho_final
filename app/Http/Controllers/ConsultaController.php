<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Consulta;

class ConsultaController extends Controller
{
    public readonly Consulta $consulta;

    public function __construct()
    {
        $this->consulta = new consulta();
    }


    public function index()
    {
        $consulta = Consulta::all();
        return view('consultas',['consultas'=> $consulta]);
    }

    
   
    public function create()
    {
        return view('criar/consulta_create');
    }

    public function store(Request $request)
    {
        Carbon::setLocale('pt_BR');

        $dataConsultaBrasil = $request->input('data_consulta');

        $dataConsultaAmericano = Carbon::createFromFormat('d/m/Y', $dataConsultaBrasil)->format('Y-m-d');

        $created = $this->consulta->create([
            'nome' => $request->input('nome'),
            'rg' => $request->input('rg'),
            'motivo_consulta' => $request->input('motivo_consulta') ,
            'data_consulta' => $dataConsultaAmericano,
            'hora' => $request->input('hora'),
        ]);
    
       
        if ($created) {
            $consultas = Consulta::all(); 
            
            return view('consultas', ['consultas' => $consultas]);
        }
        
        return redirect()->back()->with('message', 'Erro ao criar!');
    }

 
    public function show(Consulta $consulta)
    {
        return view('deletar/consulta_delete', ['consulta' => $consulta]);
    }

    public function edit(Consulta $consulta)
    {
       return view('editar/consulta_edit', ['consulta' => $consulta]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->consulta->where('id', $id)->update($request->except(['_token', '_method']));
        
        if($updated) {
            $consultas = Consulta::all(); 
            return view('consultas', ['consultas' => $consultas]);
        }
        return redirect()->back()->with('message', 'Erro ao atualizar!');
    }

   
    public function destroy(string $id)
    {
        $this->consulta->where('id', $id)->delete();

        return redirect()->route('consultas.index');
    }
}
