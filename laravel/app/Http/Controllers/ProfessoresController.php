<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Professores;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professor = Professores::all();
        return view('principal', compact(['professor']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $professor = new Professores();
        $professor->nome = $request->input('nome');
        $professor->matricula = $request->input('matricula');
        $professor->horario = $request->input('horario');
        $professor->materia = $request->input('materia');

        $professor->save();
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = Professores::find($id);

        return view('editar', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

            $professor = Professores::find($id);
            $professor->nome = $request->input('nome');
            $professor->matricula = $request->input('matricula');
            $professor->horario = $request->input('horario');
            $professor->materia = $request->input('materia');

            $professor->save();

            return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $professor = Professores::findOrFail($id);

            $professor->delete();
            return redirect()->route('index');


    }
}
