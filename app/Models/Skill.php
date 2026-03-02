<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
/*
    use to generate dummy data

    use HasFactory;
*/

    // Good practice in case the table does not follow pluralization
    protected $table = 'skills';
    
/*
    do not really need because we are just
    presenting the data

    protected $fillable = [
        'skill',
        'level'
    ];
*/
}
