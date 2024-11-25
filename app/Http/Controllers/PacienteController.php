<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Paciente;


class PacienteController extends Controller
{
    public readonly Paciente $paciente;

    public function __construct()
    {
        $this->paciente = new paciente();
    }


    public function index()
    {
        $paciente = Paciente::all();
        return view('pacientes',['pacientes'=> $paciente]);
    }

    public function create()
    {
        return view('criar/paciente_create');
    }

    public function store(Request $request)
    {
        Carbon::setLocale('pt_BR');

        $dataNascimentoBrasil = $request->input('data_nascimento');

        $dataNascimentoAmericano = Carbon::createFromFormat('d/m/Y', $dataNascimentoBrasil)->format('Y-m-d');

        $created = $this->paciente->create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'data_nascimento' => $dataNascimentoAmericano,
            'genero' => $request->input('genero'),
            'endereco' => $request->input('endereco'),
            
        ]);
    
       
        if ($created) {
            $pacientes = Paciente::all(); 
            
            return view('pacientes', ['pacientes' => $pacientes]);
        }
        
        return redirect()->back()->with('message', 'Erro ao criar!');
    }

 
    public function show(Paciente $paciente)
    {
        return view('deletar/paciente_delete', ['paciente' => $paciente]);
    }

    public function edit(Paciente $paciente)
    {
       return view('editar/paciente_edit', ['paciente' => $paciente]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->paciente->where('id', $id)->update($request->except(['_token', '_method']));
        
        if($updated) {
            $pacientes = Paciente::all(); 
            return view('pacientes', ['pacientes' => $pacientes]);
        }
        return redirect()->back()->with('message', 'Erro ao atualizar!');
    }

   
    public function destroy(string $id)
    {
        $this->paciente->where('id', $id)->delete();

        return redirect()->route('pacientes.index');
    }
}
