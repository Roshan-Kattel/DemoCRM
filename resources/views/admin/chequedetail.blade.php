 @extends('layouts.app')
 @section('content')

 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-10">
             <div class="card">
                 <div class="card-header">
                     <center>
                         <h4><b>ID-{{$show_cheque->id}} CHEQUE BOOK REQUEST DETAILS</b></h4>
                     </center>
                 </div>
                 <div class="card-body">
                     <div>
                         <b>Branch:</b>
                         &nbsp;<span>{{$show_cheque->branch}}</span>
                     </div>

                     <div>
                         <b>Date:</b>
                         &nbsp;<span>{{$show_cheque->date}}</span>
                     </div>

                     <div>
                         <b>No of leaves:</b>
                         &nbsp;<span>{{$show_cheque->leaves}}</span>
                     </div>

                     <div>
                         <b>Account Number:</b>
                         &nbsp;<span>{{$show_cheque->account_number}}</span>

                     </div>

                     <div>
                         <b>Account Name:</b>
                         &nbsp;<span>{{$show_cheque->account_name}}</span>
                     </div>

                     <div>
                         <b>Currency of Account:</b>
                         &nbsp;<span>{{$show_cheque->currency}}</span>
                     </div>
                     <div>
                         <hr>
                         <b> COLLECTION BY AUHORIZED PERSON</b><br>
                         <b>Name of Authorized person:</b>
                         &nbsp;<span>{{$show_cheque->auth_name}}</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 @endsection
