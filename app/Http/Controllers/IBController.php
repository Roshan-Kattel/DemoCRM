<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\debit;
use App\IB;

class IBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        return view('IB');
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
            'service' => 'required',
            'name' => 'required',
            'address' => 'required',
            'acNumber' => 'required',
            'mobile' => 'required',
            'ebank' => 'required',
            'CAmobile' => 'required',
            'newAccNum' => 'required',
            'eservice' => 'required',
            'email' => 'required',
            'iservice' => 'required',
        ]);

        $IB = new IB;
            $IB-> Branch = $request->input('branch');
            $IB-> Date = $request->input('date');
            $IB-> Service = $request->input('service');
            $IB-> Applicant_name = $request->input('name');
            $IB-> Address = $request->input('address');
            $IB-> Account_number = $request->input('acNumber');
            $IB-> Mobile_no = $request->input('mobile');
            $IB-> Application_for = $request->input('ebank');
            $IB-> Change_Add_Mobile_no = $request->input('CAmobile');
            $IB-> New_Account_no = $request->input('newAccNum');
            $IB-> e_Required_Service = $request->input('eservice');
            $IB-> Email = $request->input('email');
            $IB-> i_Required_Service = $request->input('iservice');
            $IB-> linked_Account_no = $request->input('linkedAccNo');
            $IB-> linked_Accoun_name = $request->input('linkedAccName');
            $IB-> user_id = auth()->user()->id;
            $IB-> save();
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
