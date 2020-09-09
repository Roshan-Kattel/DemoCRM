@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h4><b>ID-{{$show_IB->id}} Internet Banking REQUEST DETAILS</b></h4>
                    </center>
                </div>
                <div class="card-body">
                    <div>
                        <b>Branch:</b>&nbsp;<span>{{$show_IB->branch}}</span>

                    </div>
                    <div>
                        <b>Date:</b>&nbsp;<span>{{$show_IB->date}}</span>
                    </div>
                    <div>
                        <b>Request to provide service:</b>&nbsp;<span>{{$show_IB->service}}</span>

                    </div>
                    <div>
                        <b>Applicant's name:</b>&nbsp;<span>{{$show_IB->applicant_name}}</span>
                    </div>
                    <div>
                        <b>Applicant's address:</b>&nbsp;<span>{{$show_IB->address}}</span>
                    </div>
                    <div>
                        <b>Account number:</b>&nbsp;<span>{{$show_IB->account_number}}</span>
                    </div>
                    <hr>
                    <div><b>A. e-BANKING</b></div>
                    <div>
                        <b>Mobile Number:</b>&nbsp;<span>{{$show_IB->mobile_no}}</span>
                    </div>
                    <div>
                        <b>Application For:</b>&nbsp;<span>{{$show_IB->application_for}}</span>

                    </div>
                    <div>
                        <b>Change/Add Mobile No:</b>&nbsp;<span>{{$show_IB->change_add_mobile_no}}</span>
                    </div>

                    <div>
                        <b>New Account Number:</b>&nbsp;<span>{{$show_IB->new_account_no}}</span>
                    </div>
                    <div>
                        <b>Required Service:</b>&nbsp;<span>{{$show_IB->e_required_service}}</span>

                    </div>
                    <hr>
                    <div><b>B. i-BANKING</b>
                    </div>
                    <div>
                        <b>Email:</b>&nbsp;<span>{{$show_IB->email}}</span>
                    </div>

                    <div>
                        <b>Service Required:</b>&nbsp;<span>{{$show_IB->i_required_service}}</span>

                    </div>
                    <hr>
                    <div><b>ACCOUNT TO BE LINKED</b></div>
                    <div>
                        <b>Account Number:</b>&nbsp;<span>{{$show_IB->linked_account_no}}</span>
                    </div>
                    <div>
                        <b>Account Name:</b>&nbsp;<span>{{$show_IB->linked_account_name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
