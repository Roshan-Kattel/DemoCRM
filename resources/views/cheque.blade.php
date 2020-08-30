@extends('layouts.app')
@section('content')
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <b>
                            <h4>{{ __('CHEQUE BOOK REQUEST FORM') }}</h4>
                        </b>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('cheque')}}">


                        <div class="form-group">
                            <label for="branch">Branch:</label></br>
                            <select name="branch" id="branch" class="form-control">
                                <option value="New Road">Kathmandu</option>
                                <option value="Pokhara">Pokhara</option>
                                <option value="Suryabinayak">Suryabinayak</option>
                                <option value="Satdobato">Satdobato</option>
                                <option value="Kalanki">Kalanki</option>
                                <option value="New Baneshwor">New Baneshwor</option>
                                <option value="Hetauda">Hetauda</option>
                                <option value="Teku">Teku</option>
                                <option value="Dhangadi">Dhangadi</option>
                                <option value="Ekantakuna">Ekantakuna</option>
                                <option value="Mahendranagar">Mahendranagar</option>
                                <option value="Ghorahi">Ghorahi</option>
                                <option value="Surkhet">Surkhet</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label>Date:</label></br>
                            <input type="text" class="form-control" name="date">
                            @if ($errors-> has('date'))
                            <small class="from-text invalid-feedback">{{$errors->first('date')}}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Please Supply one Cheque book contating(10,20,30) leaves</label></br>
                            <input type="number" class="form-control" name="leaves">
                            @if ($errors-> has('leaves'))
                            <small class="from-text invalid-feedback">{{$errors->first('leaves')}}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>For Account No:</label></br>
                            <input type="number" class="form-control" name="accNumber">
                            @if ($errors-> has('accNumber'))
                            <small class="from-text invalid-feedback">{{$errors->first('accNumber')}}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Account Name:</label></br>
                            <input type="text" class="form-control" name="accName">
                            @if ($errors-> has('accName'))
                            <small class="from-text invalid-feedback">{{$errors->first('accName')}}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Currency of Account:</label></br>
                            <input type="text" class="form-control" name="currency">
                            @if ($errors-> has('currency'))
                            <small class="from-text invalid-feedback">{{$errors->first('currency')}}</small>
                            @endif
                        </div>

                        <b><u>Cheque collection by authorized person</u></b>

                        <div class="form-group">
                            <label>Name of Authorized person:</label></br>
                            <input type="text" class="form-control" name="authName">
                            @if ($errors-> has('authName'))
                            <small class="from-text invalid-feedback">{{$errors->first('authName')}}</small>
                            @endif
                        </div>
                        <button class="btn btn-primary">Submit</button>

                    </form>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection
