<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IB extends Model
{
    //
    protected $fillable = ['Date', 'Branch','Service','Applicant_name','Address','Account_number','Mobile_no','Application_for','Change_Add_Mobile_no','New_Account_no','e_Required_Service','Email','i_Required_Service','linked_Account_no','linked_Accoun_name'];
}