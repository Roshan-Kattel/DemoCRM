 @extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h4><b>ID-{{$show_cheque->id}} CHEQUE BOOK REQUEST DETAILS</b></h4>
                    </center>
                </div>
                <div class="card-body">
                        {{csrf_field() }}

                        <div>
                            <label><b>Branch:</b></label>
                            &nbsp;{{$show_cheque->branch}}
                        </div>

                        <div>
                            <label><b>Date (DD/MM/YYYY):</b></label>
                             &nbsp;{{$show_cheque->date}}
                        </div>

                        <div>
                            <label><b>Cheque Book contating leaves:</b></label>
                            &nbsp;{{$show_cheque->leaves}}
                        </div>

                        <div>
                            <label><b>Account Number:</b></label>
                            &nbsp;{{$show_cheque->account_number}}

                        </div>

                        <div>
                            <label><b>Account Name:</b></label>
                            &nbsp;{{$show_cheque->account_name}}
                        </div>

                        <div>
                            <label><b>Currency of Account:</b></label>
                            &nbsp;{{$show_cheque->currency}}
                        </div>
                        <div>
                            <hr>
                            <label><b> COLLECTION BY AUHORIZED PERSON</b></label><br>
                            <label><b>Name of Authorized person:</b></label>
                            &nbsp;{{$show_cheque->auth_name}}
                        </div>                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

