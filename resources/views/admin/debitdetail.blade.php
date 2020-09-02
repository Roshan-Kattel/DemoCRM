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
                        <label><b> Branch:</b> </label>&nbsp;{{$show_debit->branch}}
                    </div>
                    <div>
                        <label><b>Date (DD/MM/YYYY):</b></label>&nbsp;{{$show_debit->date}}
                    </div>
                    <div>
                        <label><b>Requested services offered by bank:</b></label>&nbsp;{{$show_debit->service}}
                    </div>
                    <div>
                        <label><b>Applicant's name:</b></label>&nbsp;{{$show_debit->applicants_name}}
                    </div>
                    <div>
                        <label><b>Applicant's address:</b></label> &nbsp;{{$show_debit->applicants_address}}
                    </div>
                    <div>
                        <label><b>Account number:</b></label>&nbsp;{{$show_debit->account_number}}
                    </div>
                    <div>
                        <label><b>VISA Card Type:</b></label> &nbsp;{{$show_debit->card_Type}}

                    </div>
                    <div>
                        <hr>
                    <b>TO REPLACE CARD</b></br>
                    <label><b>Current card Number:</b></label>&nbsp;{{$show_debit->existing_card_number}}
                </div>
                <div>
                    <label><b>Reason for replacement:</b></label> &nbsp;{{$show_debit->reason_for_replacement}}
                </div>
                <div>
                    <hr>

                    <b> SUPPLEMENTARY CARD ONLY</b><br>
                    <label><b>Name:</b></label>&nbsp;{{$show_debit->supplementary_name}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection