<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $table = 'pizza';
    protected $primarykey = 'id';

    protected $fillable = [
        'harga',
        'varian'
    ];

    protected $date = [
        'created_at',
        'updated_at'
    ];
}
