<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Souciclient extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];
    protected $table = 'souciclient'; // Force le nom au singulier
}
