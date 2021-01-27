<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ParticipanteIncomatrixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participantes = $this->consultaParticipantesIncomatrix();
        //dd($participantes);
         // $uplines = $this->consultarUpline();
         //dd($uplines);
        
          return view('participantesIncomatrix.index', compact('participantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = $this->consultaPersonas();
        $participantes = $this->consultaParticipantesIncomatrix();

         //dd($participantes);

       return view('participantesIncomatrix.create', compact('personas','participantes'));
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
        'persona_id' => $request['persona_id'], 
        'id_registro' => $request['id_registro'],
        'id_registro' => $request['id_registro'],
        'upline_id' => $request['upline_id'],
        'fecha_registro' => $request['fecha_registro'],
        'bloque_id' => $request['bloque_id'],

    ];
    //dd($data);

    DB::table('participantes_incomatrix')->insert($data);

    $participantes = $this->consultaParticipantesForsage();
    // $uplines = $this->consultarUpline();

    return view('participantesIncomatrix.index', compact('participantes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

          $referidos = DB::table('participantes_incomatrix as pi' )->join('personas','pi.persona_id','=','personas.id')->where('upline_id',$id)->get();
         $persona = DB::table('personas')->join('participantes_incomatrix as pi','personas.id','=','pi.persona_id')->where('id_registro',$id)->first();

        //dd($referidos);

        return view('participantesIncomatrix.show',compact('referidos','persona'));


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

     public function consultaParticipantesIncomatrix(){


$participantes = DB::table('participantes_incomatrix as pi')
->join('personas','pi.persona_id','=','personas.id')
->select('personas.primer_nombre','personas.primer_apellido','pi.id_registro','pi.upline_id','personas.id as id_per')->get();

return $participantes;
}

public function consultaPersonas(){

        $personas = DB::table('personas')->get();

        return $personas;
    }

}
