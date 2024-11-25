<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Ficha;


class FichaController extends Controller
{
    public readonly Ficha $ficha;

    public function __construct(){
        $this->ficha = new Ficha();
    }

    public function index()
    {
        $ficha = Ficha::all();
        return view('fichas',['fichas'=> $ficha]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
