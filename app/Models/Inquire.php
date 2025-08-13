<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquire extends Model
{

    protected $table = 'inquires';

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'service_type',
        'message',
        'status'
    ];

    
}
