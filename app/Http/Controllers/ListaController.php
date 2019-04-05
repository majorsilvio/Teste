<?php

namespace App\Http\Controllers;
use App\Lista;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $lista = 
        [
            'text' => [
            'bfbda1ed-8a7a-4d6d-99f0-2b732391eedd'=>'uuid',
            'string'=>'string',
            '1p'=>'enum','00-19-B9-FB-E2-57'=>
            'macAddress','char'=>'char',
            'lineString'=>'lineString',
            'text'=>'text',
            'mediumText'=>'mediumText',
            'longText' => 'longText',
            '0.3'=>'decimal',
            '127.0.0.0'=>'ipAddress',
            '4.0'=>'double',
            '0.01'=>'float',
            date('Y/m/d') => 'date',
             date('Y/m/d G:i') =>'dateTime',
             true=>'boolean',
             '19:30:10'=>'time'
             ],

            'number' => ['0011'=>'binary',2=>'integer',3 => 'smallInteger',4 => 'mediumInteger',5=>'bigInteger','2019'=>'year']
            
        ];
       

        return View('index')->with('lista', $lista);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lista = new Lista();
        $lista->uuid = $request->uuid;
        $lista->string = $request->string;
        $lista->boolean = $request->boolean;
        $lista->date = $request->date;
        $lista->dateTime = $request->dateTime;
        $lista->enum = $request->enum;
        $lista->decimal = $request->decimal;
        $lista->binary = $request->binary;
        $lista->ipAddress = $request->ipAddress;
        $lista->macAddress = $request->macAddress;
        $lista->integer = $request->integer;
        $lista->smallInteger = $request->smallInteger;
        $lista->bigInteger = $request->bigInteger;
        $lista->mediumInteger = $request->mediumInteger;
        $lista->char = $request->char;
        $lista->double = $request->double;
        $lista->float = $request->float;
        $lista->text = $request->text;
        $lista->mediumText = $request->mediumText;
        $lista->longText = $request->longText;
        $lista->year = $request->year;
        $lista->time = $request->time;
        $lista->save();

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
