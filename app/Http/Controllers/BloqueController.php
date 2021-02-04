<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BloqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {
       
        //dd($request);
        $bloques = $this->consultaBloques($request);

        // $contrato = DB::table('contratos')->where('id',$request)->first();
         $contrato = $request;
        //dd($bloques);
       
        return view('bloques.index',compact('bloques','contrato'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {
        $contrato = $request;

        //dd($contrato);
        return view('bloques.create',compact('contrato'));
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
        'nro' => $request['nro'],
         
        

    ];

    //dd($request);
    //dd($data);

    DB::table('bloques')->insert($data);

    
    $bloques = $this->consultaBloques($request->contrato_id);
    $contrato = $request->contrato_id;
    


    return view('bloques.index',compact('bloques','contrato'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //dd($id);
        // $participanteBloque = DB::table('bloques')->join('participantes','bloques.nro','=','participantes.bloque_id')->join('personas','participantes.persona_id','=','personas.id')->where('nro',$id)->get();

         $participantesBloques = DB::table('participantes as par')->join('personas as per','par.persona_id','=','per.id')->where('bloque_id',$id)->get();

         $bloque = $id;

        //dd($participanteBloque);

        return view('bloques.show',compact('participantesBloques','bloque'));
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

    public function consultaBloques($dato){
        //dd($dato);

         $bloques = DB::table('bloques')->join('contratos','bloques.contrato_id','=','contratos.id')->where('contratos.id',$dato)/*->select('bloques.contrato_id')*/->get();
         //dd($bloques);

         return $bloques;
    }
}
