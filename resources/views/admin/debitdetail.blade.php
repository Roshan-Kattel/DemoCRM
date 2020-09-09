@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <center><b>ID-{{$show_debit->id}} CREDIT/DEBIT REQUEST DETAILS</b>
                    </h4>
                    </center>
                </div>
                <div class="card-body">
                    <div>
                        <b> Branch:</b> &nbsp;<span>{{$show_debit->branch}}</span>
                    </div>
                    <div>
                        <b>Date:</b>&nbsp;<span>{{$show_debit->date}}</span>
                    </div>
                    <div>
                        <b>Requested service:</b>&nbsp;<span>{{$show_debit->service}}</span>
                    </div>
                    <div>
                        <b>Applicant's name:</b>&nbsp;<span>{{$show_debit->applicants_name}}</span>
                    </div>
                    <div>
                        <b>Applicant's address:</b> &nbsp;<span>{{$show_debit->applicants_address}}</span>
                    </div>
                    <div>
                        <b>Account number:</b>&nbsp;<span>{{$show_debit->account_number}}</span>
                    </div>
                    <div>
                        <b>VISA Card Type:</b> &nbsp;<span>{{$show_debit->card_Type}}</span>

                    </div>
                    <div>
                        <hr>
                        <b>TO REPLACE CARD</b></br>
                        <b>Current card Number:</b>&nbsp;<span>{{$show_debit->existing_card_number}}</span>
                    </div>
                    <div>
                        <b>Reason for replacement:</b> &nbsp;<span>{{$show_debit->reason_for_replacement}}</span>
                    </div>
                    <div>
                        <hr>

                        <b> SUPPLEMENTARY CARD ONLY</b><br>
                        <b>Name:</b>&nbsp;<span>{{$show_debit->supplementary_name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
