<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    protected $casts = [
    	'pictures' => 'array',
    ];
}
