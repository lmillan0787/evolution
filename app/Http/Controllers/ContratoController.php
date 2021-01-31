<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$id = $request->id;
        $contratos = DB::table('contratos')/*->select('nombre')->where('contratos.id',$request->id)*/->get();

        // $cantidad = DB::table('participantes')->groupBy('contrato_id')->count();
        // dd($cantidad);

        // foreach ($cantidad as $c){

            
        // }



        return view('contratos.index', compact('contratos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('contratos.create');
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
        'nombre' => $request['nombre'],
        'cripto_opera' => $request['cripto_opera'],
        
        

    ];
    //dd($data);
   
    DB::table('contratos')->insert($data);


     $contratos = DB::table('contratos')/*->select('nombre')->where('contratos.id',$request->id)*/->get();
    return view('contratos.index',compact('contratos'));
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
}
