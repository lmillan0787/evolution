<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $participantes = $this->consultaParticipantesForsage();
        //dd($participantes);
         // $uplines = $this->consultarUpline();
         //dd($uplines);
        
          return view('participantes.index', compact('participantes'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $participantes = $this->consultaParticipantesForsage();

         //dd($participantes);

       return view('participantes.create', compact('participantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [ 
        'contrato_id' => $request['contrato_id'],
        'id_registro' => $request['id_registro'],
        'id_registro' => $request['id_registro'],
        'upline_id' => $request['upline_id'],
        'fecha_registro' => $request['fecha_registro'],
        'bloque_id' => $request['bloque_id'],

    ];
    //dd($data);

    DB::table('participantes')->insert($data);

    $participantes = $this->consultaParticipantesForsage();
    // $uplines = $this->consultarUpline();

    return view('participantes.index', compact('participantes'));

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function consultaParticipantesForsage(){


$participantes = DB::table('participantes_forsage as pf')
->join('personas','pf.persona_id','=','personas.id')
->select('personas.primer_nombre','personas.primer_apellido','pf.id_registro','pf.upline_id','personas.id as id_per')->get();

return $participantes;

      

    }


}
