<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\ParticipanteForsage;


class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {

        //$participantes = $this->consultaParticipantes();
         //dd($request);
         // $uplines = $this->consultarUpline();
         //dd($uplines);
        $contrato_id = $request;
        $nombre_contrato = DB::table('contratos')->where('id',$contrato_id)->first();
$participantes = DB::table('participantes as p')
->join('personas','p.persona_id','=','personas.id')
->select('personas.primer_nombre','personas.primer_apellido','p.id_registro','p.upline_id','personas.id as id_per')->where('contrato_id',$contrato_id)->get();
        
          return view('participantes.index', compact('participantes','contrato_id','nombre_contrato'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        //dd($request->id);
        $contrato_id = $request->id;
        $nombre_contrato = DB::table('contratos')->select('nombre')->where('id',$contrato_id)->first();
        $personas = $this->consultaPersonas($contrato_id);

        //$participantes = $this->consultaParticipantes();

        $participantes = DB::table('participantes as p')
->join('personas','p.persona_id','=','personas.id')
->select('personas.primer_nombre','personas.primer_apellido','p.id_registro','p.upline_id','personas.id as id_per')->where('contrato_id',$contrato_id)->get();

         //dd($participantes);

       return view('participantes.create', compact('personas','participantes', 'contrato_id','nombre_contrato'));
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
        'contrato_id' => $request['contrato_id'],
        'id_registro' => $request['id_registro'],
        'upline_id' => $request['upline_id'],
        'fecha_registro' => $request['fecha_registro'],
        'bloque_id' => $request['bloque_id'],

    ];
    //dd($data);

    DB::table('participantes')->insert($data);

    //$participantes = $this->consultaParticipantes();
    // $uplines = $this->consultarUpline();
    $contrato_id = $request->contrato_id;
        $nombre_contrato = DB::table('contratos')->where('id',$contrato_id)->first();
     $participantes = DB::table('participantes as p')
->join('personas','p.persona_id','=','personas.id')
->select('personas.primer_nombre','personas.primer_apellido','p.id_registro','p.upline_id','personas.id as id_per')->where('contrato_id',$contrato_id)->get();

    return view('participantes.index', compact('participantes','contrato_id','nombre_contrato'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $referidos = DB::table('participantes as p' )->join('personas','p.persona_id','=','personas.id')->where('upline_id',$id)->get();
         $persona = DB::table('personas')->join('participantes as p','personas.id','=','p.persona_id')->where('id_registro',$id)->first();

        //dd($persona);

        return view('participantes.show',compact('referidos','persona'));
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


    public function consultaParticipantes($request){

$contrato_id = $request->contrato_id;
$participantes = DB::table('participantes as p')
->join('personas','p.persona_id','=','personas.id')
->select('personas.primer_nombre','personas.primer_apellido','p.id_registro','p.upline_id','personas.id as id_per')->where('contrato_id',$contrato_id)->get();

return $participantes;

      

    }

    public function consultaPersonas(){

        $personas = DB::table('personas')->get();

        return $personas;
    }


}
