<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    protected $table = "queries";
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'company',
        'industry',
        'service',
        'facility_size',
        'bill',
        'info'
    ];
}
