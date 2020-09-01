<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        return view('account');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//         $this->validate($request, [
//             'branch_ID' => 'required',
//             'Salutation' => 'required',
//             'first_name' => 'required',
//             'last_name' => 'required',
//             'tel_no' => 'required',
//             'mobile_no' => 'required',
//             'gender' => 'required',
//             'citizenship_passport_no' => 'required',
//             'place_of_issue' => 'required',
//             'date_of_issue' => 'required',
//             'date_type_dob' => 'required',
//             'birth_country' => 'required',
//             'marital_status' => 'required',
//             'occupation' => 'required',
//             'grand_father_name' => 'required',
//             'father_name' => 'required',
//             'mother_name' => 'required',
//             'permanent_house_no' => 'required',
//             'permanent_street' => 'required',
//             'permanent_ward_no' => 'required',
//             'permanent_vdc_mc' => 'required',
//             'permanent_city' => 'required',
//             'permanent_country_name' => 'required',
//             'current_house_no' => 'required',
//             'current_address' => 'required',
//             'current_city' => 'required',
//             'source_of_fund' => 'required',
//             'expected_transaction_currency' => 'required',
//             'expected_transaction_amount' => 'required',
//             'expected_transaction_no' => 'required',
//             'nature_of_transaction' => 'required',
//             'internet_banking' => 'required'
//
//         ]);
        if($request->hasFile('uploaded_doc')){
            // get file name with extension
            $fileNameWithExt = $request->file('uploaded_doc')->getClientOriginalName();
            // get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            // get just extension
            $extension = $request->file('uploaded_doc')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore =$filename.'_'.time().'.'.$extension;
            // upload image
            $path = $request->file('uploaded_doc')->storeAs('public/uploaded_doc',$fileNameToStore);

        }else{
            $fileNameToStore = 'nodoc.pdf';
        }

        $Account = new Account;
        $Account->branch_ID = $request->input('bank_branch_id');
        $Account->Salutation = $request->input('Salutation');
        $Account->first_name = $request->input('first_name');
        $Account->middle_name = $request->input('middle_name');
        $Account->last_name = $request->input('last_name');
        $Account->tel_no = $request->input('tel_no');
        $Account->mobile_no = $request->input('mobile_no');
        $Account->gender = $request->input('gender');
        $Account->citizenship_passport_no = $request->input('citizenship_passport_no');
        $Account->place_of_issue = $request->input('place_of_issue');
        $Account->date_of_issue = $request->input('date_of_issue');
        $Account->date_type_dob = $request->input('date_type');
        $Account->birth_country = $request->input('birth_country');
        $Account->marital_status = $request->input('marital_status');
        $Account->occupation = $request->input('occupation');
        // skipped organization name and details here
        $Account->grand_father_name = $request->input('grand_father_name');
        $Account->father_name = $request->input('father_name');
        $Account->mother_name = $request->input('mother_name');
        //permanant address starts below
        $Account->permanent_house_no = $request->input('permanent_house_no');
        $Account->permanent_street = $request->input('permanent_street');
        $Account->permanent_ward_no = $request->input('permanent_ward_no');
        $Account->permanent_vdc_mc = $request->input('permanent_vdc_mc');
        $Account->permanent_city = $request->input('permanent_city');
        $Account->permanent_country_name = $request->input('permanent_country_name');
        //current address starts below
        $Account->current_house_no = $request->input('current_house_no');
        $Account->current_address = $request->input('current_address');
        $Account->current_city = $request->input('current_city');
        $Account->current_country_name = $request->input('current_country_name');
        //other details
        $Account->source_of_fund = $request->input('source_of_fund');
        $Account->expected_transaction_currency = $request->input('expected_transaction_currency');
        $Account->expected_transaction_amount = $request->input('expected_transaction_amount');
        $Account->expected_transaction_no = $request->input('expected_transaction_no');
        $Account->nature_of_transaction = $request->input('nature_of_transaction');
        $Account->internet_banking = $request->input('internet_banking');
        $Account->uploaded_doc = $fileNameToStore;
        $Account->user_id = auth()->user()->id;
        $Account->save();
        return redirect('home')->with('success','New account creation has been submitted!');
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

//    public function upload(Request $request)
//    {
//        $uniqueFileName = uniqid() . $request->get('upload_file')->getClientOriginalName() . '.' . $request->get('upload_file')->getClientOriginalExtension();
//
//        $request->get('upload_file')->move(public_path('files') . $uniqueFileName);
//
//        return redirect()->back()->with('success', 'File uploaded successfully.');
//    }

}
