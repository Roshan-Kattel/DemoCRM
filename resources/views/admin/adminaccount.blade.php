@extends('layouts.app')
@section('content')

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <center>
                    <h4><b>{{ __('BANK USER ACCOUNTS') }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('account/create')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true"> + Open New Account</a></b></h4>
                </center>
            </div>
            <div class="card-body">
                <table class=" table table-striped">
                    <thead>
                    <tr>
                        <th>Rec. Id</th>
                        <th>User Id</th>
                        <th>Account Name</th>
                        <th>Mobile Number</th>
                        <th>View Data</th>
                        <th>Delete Data</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($accounts as $account)
                        <tr>
                            <td>{{$account->id}}</td>
                            <td>{{$account->user_id}}</td>
                            <td>{{$account->first_name}} {{$account->middle_name}} {{$account->last_name}}</td>
                            <td>{{$account->mobile_no}}</td>
                            <td class > <a href="/account/{{$account->id}}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">View Data</a> </td>
                            <td>
                                {!!Form::open(['action' => ['AccountController@destroy',$account->id],'method'=>'POST','class'=>'pull-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete Data',['class'=>'btn btn-danger btn-sm'])}}
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
