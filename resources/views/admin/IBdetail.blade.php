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
                        <label><b>Branch:</b></label>&nbsp;{{$show_IB->branch}}

                    </div>
                    <div>
                        <label><b>Date (DD/MM/YYYY):</b></label>&nbsp;{{$show_IB->date}}
                    </div>
                    <div>
                        <label><b>Request to provide service offered by bank:</b></label>&nbsp;{{$show_IB->service}}

                    </div>
                    <div>
                        <label><b>Applicant's name:</b></label>&nbsp;{{$show_IB->applicant_name}}
                    </div>
                    <div>
                        <label><b>Applicant's address:</b></label>&nbsp;{{$show_IB->address}}
                    </div>
                    <div>
                        <label><b>Account number</b></label>&nbsp;{{$show_IB->account_number}}
                    </div>
                    <hr>
                    <div><b>A. e-BANKING</b></div>
                    <div>
                        <label><b>Mobile Number:</b></label>&nbsp;{{$show_IB->mobile_no}}
                    </div>
                    <div>
                        <label><b>Application For:</b></label>&nbsp;{{$show_IB->application_for}}

                    </div>
                    <div>
                        <label><b>Change/Add Mobile No:</b></label>&nbsp;{{$show_IB->change_add_mobile_no}}
                    </div>

                    <div>
                        <label><b>New Account Number:</b></label>&nbsp;{{$show_IB->new_account_no}}
                    </div>
                    <div>
                        <label><b>Required Service:</b></label>&nbsp;{{$show_IB->e_required_service}}

                    </div>
                    <hr>
                    <div><b>B. i-BANKING</b>
                    </div>
                    <div>
                        <label><b>Email:</b></label>&nbsp;{{$show_IB->email}}
                    </div>

                    <div>
                        <label><b>Service Required:</b></label>&nbsp;{{$show_IB->i_required_service}}

                    </div>
                    <hr>
                    <div><b>ACCOUNT TO BE LINKED</b></div>
                    <div>
                        <label><b>Account Number:</b></label>&nbsp;{{$show_IB->linked_account_no}}
                    </div>
                    <div>
                        <label><b>Account Name:</b></label>&nbsp;{{$show_IB->linked_account_name}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
















&nbsp;{{$show_IB->linked_account_name}}