<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cheque;

class ChequeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('cheque');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'branch' => 'required',
            'date' => 'required',
            'leaves' => 'required',
            'accNumber' => 'required',
            'accName' => 'required',
            'currency' => 'required',
            'authName' => 'required'
        ]);

        // \App\cheque::create($request->all());

        $cheque = new cheque;

        $cheque->Branch  = $request->input('branch');
        $cheque->Date = $request->input('date');
        $cheque->Leaves = $request->input('leaves');
        $cheque->Account_Number = $request->input('accNumber');
        $cheque->Account_Name = $request->input('accName');
        $cheque->Currency = $request->input('currency');
        $cheque->AuthName = $request->input('authName');
        $cheque->user_id = auth()->user()->id;
        $cheque->save();
        return redirect('home');
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