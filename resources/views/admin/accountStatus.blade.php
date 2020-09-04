@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                    @if(count($errors)>0)
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>

                        @endif
                        <h4><b>Reference No : -{{$update_account->reference_number}} Account Status Details</b></h4></div>
                        <div class="card-body">
                            <div>
                                <b>Reference Number:</b>
                                {{$update_account->reference_number}}
                            </div>
                            <hr>
                            <form method="post" action="{{action('AccountController@update',$id)}}">
                                {{csrf_field()}}
                            <div>
                                <b>Account Number:</b>
                                <input name="account_number" type="text" value="{{$update_account->account_number}}" class="col-md-5">
                            </div>

                                <br>
                                <div>
                                    <b> Update Status: </b>

                                        <select name="account_status" class="form-control col-md-4">
                                            <option value="{{$update_account->account_status}}" selected="selected">Current : {{$update_account->account_status}}</option>
                                            <option value="verified">verified</option>

                                    <option value="pending">pending</option>
                                    </select>
                                    <br>
                                    <div>
                                        <button class="btn btn-primary btn-warning" type="submit" value="edit">Update{{ method_field('PUT') }}
                                        </button>

                                    </div>
                                </div>



                            </form>
                        </div>
            </div>
        </div>
    </div>
@endsection
