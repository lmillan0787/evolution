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

        
         //dd($request);
         // $uplines = $this->consultarUpline();
         //dd($uplines);
        //$contrato_id = $request;
        $contrato = DB::table('contratos')->where('id',$request)->first();

        //dd($contrato);

$participantes = $this->consultaParticipantes($request);

// $participantes = DB::table('participantes as p')
// ->join('personas','p.persona_id','=','personas.id')
// ->select('personas.primer_nombre','personas.primer_apellido','p.id_registro','p.upline_id','personas.id as id_per')->where('contrato_id',$contrato_id)->get();
        
          return view('participantes.index', compact('participantes','contrato'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        //dd($request->id);
        //$contrato_id = $request->id;
        $contrato = DB::table('contratos')->where('id',$request->id)->first();
        $personas = $this->consultaPersonas();

        $participantes = $this->consultaParticipantes($request->id);

//         $participantes = DB::table('participantes as p')
// ->join('personas','p.persona_id','=','personas.id')
// ->select('personas.primer_nombre','personas.primer_apellido','p.id_registro','p.upline_id','personas.id as id_per')->where('contrato_id',$contrato_id)->get();

         $bloques = DB::table('bloques')->get();
         $lineas = DB::table('lineas')->get();

         //dd($contrato);

       return view('participantes.create', compact('personas','participantes', 'contrato','bloques','lineas'));
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
        'linea_id' => $request['linea_id'],

    ];
    //dd($data);

    DB::table('participantes')->insert($data);

    $participantes = $this->consultaParticipantes($request->contrato_id);
    // $uplines = $this->consultarUpline();
    //$contrato_id = $request->contrato_id;
        $contrato = DB::table('contratos')->where('id',$request->contrato_id)->first();
//      $participantes = DB::table('participantes as p')
// ->join('personas','p.persona_id','=','personas.id')
// ->select('personas.primer_nombre','personas.primer_apellido','p.id_registro','p.upline_id','personas.id as id_per')->where('contrato_id',$contrato_id)->get();

    return view('participantes.index', compact('participantes','contrato'));

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


    public function consultaParticipantes($dato){

//$contrato_id = $request->contrato_id;
$participantes = DB::table('participantes as p')
->join('personas','p.persona_id','=','personas.id')
->select('personas.primer_nombre','personas.primer_apellido','p.id_registro','p.upline_id','personas.id as id_per','bloque_id','linea_id')->where('contrato_id',$dato)->get();

return $participantes;

      

    }

    public function consultaPersonas(){

        $personas = DB::table('personas')->get();

        return $personas;
    }


}
