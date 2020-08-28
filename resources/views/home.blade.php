@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <center><b>
                            <h4>{{ __('DASHBOARD') }}</h4>
                        </b></center>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ __('Please choose one of the following:-') }}<br>
                    <ol>
                        <li> <a href="{{ url('account/create')}}">Account Openinig form</a></li>
                        <li> <a href="{{ url('cheque/create')}}">Cheque Book request</a></li>
                        <li> <a href="{{ url('debit/create') }}">Credit/Debit Card request</a></li>
                        <li> <a href="{{ url('IB/create') }}">Internet Banking request</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection