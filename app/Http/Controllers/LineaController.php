<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LineaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {
        $lineas = $this->consultaLineas($request);
        
         // $contrato = DB::table('contratos')->where('id',$request)->first();
        $contrato = $request;

        return view('lineas.index',compact('lineas','contrato'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {
        
         $contrato = $request;

        return view('lineas.create',compact('contrato'));
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

        
    DB::table('lineas')->insert($data);

    
    $lineas = $this->consultaLineas($request->contrato_id);
    $contrato = $request->contrato_id;




        return view('lineas.index',compact('lineas','contrato'));
    

    //dd($request);
    //dd($data);

    
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

    public function consultaLineas($dato){


        $lineas = DB::table('lineas')->join('contratos','lineas.contrato_id','=','contratos.id')->where('contratos.id',$dato)->get();

        return $lineas;
    }
}
