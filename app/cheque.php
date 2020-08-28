<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cheque extends Model
{
    protected $fillable = ['Branch','Date','Leaves','Account_Number','Account_Name','Currency','AuthName','user_id'];
}
