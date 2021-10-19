<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';
    protected $primarykey = 'id';

    protected $fillable = [
        'rating',
        'alamat',
        'status'
    ];

    protected $date = [
        'created_at',
        'updated_at'
    ];
}
