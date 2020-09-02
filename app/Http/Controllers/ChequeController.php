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
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        $cheques = cheque::all();
        return view('admincheque', compact('cheques'));
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
        $cheque = new cheque;

        $cheque->branch  = $request->input('branch');
        $cheque->date = $request->input('date');
        $cheque->leaves = $request->input('leaves');
        $cheque->account_number = $request->input('accNumber');
        $cheque->account_name = $request->input('accName');
        $cheque->currency = $request->input('currency');
        $cheque->auth_name = $request->input('authName');
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
        $show_cheque = cheque::find($id);
        return view('chequedetail', compact('show_cheque'));
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
        $del_cheque = cheque::find($id);
        $del_cheque->delete();
        return redirect('/cheque');
    }
    
}
