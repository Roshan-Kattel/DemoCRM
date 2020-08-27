<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cheque extends Model
{
    protected $fillable = ['branch','date','leaves','accNumber','accName','currency','authName'];
}
