<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class GeneralSetting extends Model
{
     protected $fillable = ['company_name', 'phone', 'email', 'address', 'meta_title', 'meta_description' ];
 
}
