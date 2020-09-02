@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <center><h4><b>{{ __('USER CREDIT/DEBIT CARD REQUESTS') }}</b></h4></center>
                </div>
                <div class="card-body">
                <table class=" table table-striped">
                        <thead>
                            <tr>
                                <th>Rec. Id</th>
                                <th>User Id</th>
                                <th>Account Number</th>
                                <th>Applicant Name</th>
                                <th>View Data</th>
                                <th>Delete Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($debits as $debit)
                            <tr>
                                <td>{{$debit->id}}</td>
                                <td>{{$debit->user_id}}</td>
                                <td>{{$debit->account_number}}</td>
                                <td>{{$debit->applicants_name}}</td>
                                <td> <a href="/debit/{{$debit->id}}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">View Data</a> </td>
                                <td>

                                    {!!Form::open(['action' => ['DebitController@destroy',$debit->id],'method'=>'POST','class'=>'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>

            </div>
        </div>
    </div>
</div>

@endsection