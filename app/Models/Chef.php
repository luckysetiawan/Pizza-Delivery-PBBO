<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chef extends User
{
    use HasFactory;

    protected $table = 'Chefs';
    protected $primarykey = 'id';

    protected $fillable = [
        'email',
        'nama',
        'noTelp'
    ];

    protected $date = [
        'created_at',
        'updated_at'
    ];
 
}
