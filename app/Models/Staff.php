<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
     protected $fillable = ['title', 'name', 'image','short_description','description','speciality','degrees','training','contact_info','work_days','services','status'];

     protected $casts = [
                         'services' => 'array',
                         ];
}
