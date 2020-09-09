@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h4><b>ID-{{$show_account->id}} Account Details</b></h4>
                        </center>
                    </div>
                    <div class="card-body">
                        <div>
                            <b>Reference Number:</b>
                            <span>{{$show_account->reference_number}}</span>
                        </div>
                        <hr/>
                        <div>
                            <b>Branch:</b>
                            &nbsp;<span>{{$show_account->branch_ID}}</span>
                        </div>
                        <div>
                            <b>Salutation:</b>
                            &nbsp;<span>{{$show_account->salutation}}</span>
                        </div>
                        <div>
                            <b>First Name:</b>
                            &nbsp;<span>{{$show_account->first_name}}</span>
                        </div>
                        <div>
                            <b>Middle Name:</b>
                            &nbsp;<span>{{$show_account->middle_name}}</span>
                        </div>  <div>
                            <b>Last Name:</b>
                            &nbsp;<span>{{$show_account->last_name}}</span>
                        </div>


                        <div>
                            <b>Telephone Number:</b>
                            &nbsp;<span>{{$show_account->tel_no}}</span>
                        </div>

                        <div>
                            <b>Mobile Number:</b>
                            &nbsp;<span>{{$show_account->mobile_no}}</span>
                        </div>

                        <div>
                            <b>Gender</b>
                            &nbsp;<span>{{$show_account->gender}}</span>
                        </div>
                        <hr>
                        <div>
                            <b>Citizenship/Passport Number:</b>
                            &nbsp;<span>{{$show_account->citizenship_passport_no}}</span>

                        </div>

                        <div>
                            <b>Place of Issue:</b>
                            &nbsp;<span>{{$show_account->place_of_issue}}</span>
                        </div>

                        <div>
                            <b>Date of Issue:</b>
                            &nbsp;<span>{{$show_account->date_of_issue}}</span>
                        </div>

                        <div>
                            <b>Date of Birth:</b>
                            &nbsp;<span>{{$show_account->date_of_birth}}</span> <span>{{$show_account->date_type_dob}}</span>
                        </div>

                        <div>
                            <b>Birth Country:</b>
                            &nbsp;<span>{{$show_account->birth_country}}</span>
                        </div>
                        <div>
                            <b>Marital Status:</b>
                            &nbsp;<span>{{$show_account->marital_status}}</span>
                        </div>
                        <div>
                            <b>Occupation:</b>
                            &nbsp;<span>{{$show_account->occupation}}</span>
                        </div>
                        <hr/>
                        <div>
                            ORGANIZATION DETAILS:
                        </div>
                        <div>
                            <b>Name:</b>
                            &nbsp;<span>{{$show_account->organization_name}}</span>
                        </div>
                        <div>
                            <b>Address:</b>
                            &nbsp;<span>{{$show_account->organization_address}}</span>
                        </div>
                        <div>
                            <b>Designation:</b>
                            &nbsp;<span>{{$show_account->designation}}</span>
                        </div>
                        <div>
                            <b>Estimated Annual Income:</b>
                            &nbsp;<span>{{$show_account->estimated_annual_income}}</span>
                        </div>
                        <div>
                            <b>Telephone Number:</b>
                            &nbsp;<span>{{$show_account->organization_tel_no}}</span>
                        </div>


                    <hr/>
                        <div>
                            <b>Grand Father's Name:</b>
                            &nbsp;<span>{{$show_account->grand_father_name}}</span>
                        </div>
                        <div>
                            <b>Father's Name:</b>
                            &nbsp;<span>{{$show_account->father_name}}</span>
                        </div>
                        <div>
                            <b>Mother's Name:</b>
                            &nbsp;<span>{{$show_account->mother_name}}</span>
                        </div>
                        <hr/>
                        <div><u>ADDRESS DETAILS:</u></div>
                        <br>
                        <div>A) Permanent Details</div>
                        <br>
                        <div>
                            <b>Permanent House No:</b>
                            &nbsp;<span>{{$show_account->permanent_house_no}}</span>
                        </div>
                        <div>
                            <b>Ward No:</b>
                            &nbsp;<span>{{$show_account->permanent_ward_no}}</span>
                        </div>
                        <div>
                            <b>VDC/MC:</b>
                            &nbsp;<span>{{$show_account->permanent_vdc_mc}}</span>
                        </div>
                        <div>
                            <b>City:</b>
                            &nbsp;<span>{{$show_account->permanent_city}}</span>
                        </div>
                        <div>
                            <b>Country:</b>
                            &nbsp;<span>{{$show_account->permanent_country_name}}</span>
                        </div>
                        <br>
                        <div>B) CURRENT DETAILS</div>
                        <div>
                            <b>Current House No.:</b>
                            &nbsp;<span>{{$show_account->current_house_no}}</span>
                        </div>
                        <div>
                            <b>Address:</b>
                            &nbsp;<span>{{$show_account->current_address}}</span>
                        </div>
                        <div>
                            <b>City:</b>
                            &nbsp;<span>{{$show_account->current_city}}</span>
                        </div>
                        <div>
                            <b>Country Name:</b>
                            &nbsp;<span>{{$show_account->current_country_name}}</span>
                        </div>
                        <hr/>
                        <div>
                            <b>Source of Fund:</b>
                            &nbsp;<span>{{$show_account->source_of_fund}}</span>
                        </div>
                        <div>
                            <b>Transaction Currency:</b>
                            &nbsp;<span>{{$show_account->expected_transaction_currency}}</span>
                        </div>
                        <div>
                            <b>Expected Transaction Amount:</b>
                            &nbsp;<span>{{$show_account->expected_transaction_amount}}</span>
                        </div>
                        <div>
                            <b>Expected Number of Transactions:</b>
                            &nbsp;<span>{{$show_account->expected_transaction_no}}</span>
                        </div>
                        <div>
                            <b>Nature of Transaction:</b>
                            &nbsp;<span>{{$show_account->nature_of_transaction}}</span>
                        </div>
                        <div>
                            <b>Internet Banking:</b>
                            &nbsp;<span>{{$show_account->internet_banking}}</span>
                        </div>
                        <hr/>
                        <div>
                            <b>Uploaded Doc:</b>
                            &nbsp;<span>{{$show_account->uploaded_doc}}</span>

{{--                           <a href="storage\uploaded_doc\{{$show_account->uploaded_doc}}" >(CLICK HERE)</a>--}}
                          <a href="http://localhost:8000/storage/uploaded_doc/{{$show_account->uploaded_doc}}" target="_blank">(CLICK HERE)</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
