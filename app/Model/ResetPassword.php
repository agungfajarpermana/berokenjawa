<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
    protected $table = 'forgot';
    protected $guarded = ['created_at','updated_at'];
}
