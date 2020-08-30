<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newAccount;

class newAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newAccount'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
      $newAccount = new newAccount;
      $newAccount->branch_ID=$req->input('bank_branch_id');
      $newAccount->Salutation=$req->input('Salutation');
      $newAccount->first_name=$req->input('first_name');
      $newAccount->middle_name=$req->input('middle_name');
      $newAccount->tel_no=$req->input('tel_no');
      $newAccount->mobile_no=$req->input('mobile_no');
      $newAccount->gender=$req->input('gender');
      $newAccount->citizenship_passport_no=$req->input('citizenship_passport_no');
      $newAccount->place_of_issue=$req->input('place_of_issue');
      $newAccount->date_of_issue=$req->input('date_of_issue');
      $newAccount->date_type_dob=$req->input('date_type');
      $newAccount->birth_country=$req->input('birth_country');
      $newAccount->marital_status=$req->input('marital_status');
      $newAccount->occupation=$req->input('occupation');
      //skipped organization name and details here
      $newAccount->grand_father_name=$req->input('grand_father_name');
      $newAccount->father_name=$req->input('father_name');
      $newAccount->mother_name=$req->input('mother_name');
      //permanant address starts below
      $newAccount->permanent_house_no=$req->input('permanent[house_no]');
      $newAccount->permanent_street=$req->input('permanent[street]');
      $newAccount->permanent_ward_no=$req->input('permanent[ward_no]');
      $newAccount->permanent_vdc_mc=$req->input('permanent[vdc_mc]');
      $newAccount->permanent_city=$req->input('permanent[city]');
      $newAccount->permanent_country_name=$req->input('permanent[country_name]');
      //current address starts below
      $newAccount->current_house_no=$req->input('current[house_no]');
      $newAccount->current_address=$req->input('current[address]');
      $newAccount->current_city=$req->input('current[city]');
      $newAccount->current_country_name=$req->input('current[country_name]');
      //other details
      $newAccount->source_of_fund=$req->input('source_of_fund');
      $newAccount->expected_transaction_currency=$req->input('expected_transaction_currency');
      $newAccount->expected_transaction_amount=$req->input('expected_transaction_amount');
      $newAccount->expected_transaction_no=$req->input('expected_transaction_no');
      $newAccount->nature_of_transaction=$req->input('nature_of_transaction');
      $newAccount->internet_banking=$req->input('internet_banking');

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
