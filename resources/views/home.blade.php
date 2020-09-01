@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                <center><h4><b>{{ __('DASHBOARD') }}</b></h4></center>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ __('Please choose one of the following:-') }}<br>
                        <div class="cards-list1">

                            <div class="card1 1">
                                <a href="{{ url('account/create')}}">
                                <div class="card_image1" style="background-color:#f8d7da;"></div>
                                <div class="card_title1 title1-black">
                                    <p>ACCOUNT OPENING FORM</p>
                                </div></a>
                            </div>

                            <div class="card1 2">
                                <a href="{{ url('cheque/create')}}">
                                <div class="card_image1" style="background-color:#b4f882 ;"> </div>
                                <div class="card_title1 title1-black">
                                    <p>CHEQUE BOOK REQUEST</p>
                                </div></a>
                            </div>

                            <div class="card1 3">
                                <a href="{{ url('debit/create') }}">
                                <div class="card_image1" style="background-color:#f8c182;">  </div>
                                <div class="card_title1 title1-black">
                                    <p>CREDIT/DEBIT CARD REQUEST</p>
                                </div></a>
                            </div>

                            <div class="card1 4">
                                <a href="{{ url('IB/create') }}">
                                <div class="card_image1" style="background-color:#f9a4e8 ;"></div>
                                <div class="card_title1 title1-black">
                                    <p>INTERNET BANKING REQUEST</p>
                                </div></a>
                            </div>
                        </div>

{{--                    <ol>--}}
{{--                        <li> <a href="{{ url('account/create')}}">Account Opening form</a></li>--}}
{{--                        <li> <a href="{{ url('cheque/create')}}">Cheque Book request</a></li>--}}
{{--                        <li> <a href="{{ url('debit/create') }}">Credit/Debit Card request</a></li>--}}
{{--                        <li> <a href="{{ url('IB/create') }}">Internet Banking request</a></li>--}}
{{--                    </ol>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<link href="{{ asset('css/dashboard-button.css') }}" rel="stylesheet">
@endsection
