<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class debit extends Model
{
    protected $fillable = ['Branch','Date','Service','Applicants_name','Applicants_Address','Account_Number','Card_Type','Existing_Card_Number','Reason_for_Replacement','Supplementary_Name'];
}
       