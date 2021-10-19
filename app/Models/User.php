<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $email;
    protected $nama;
    protected $noTelp;

    public function __construct($email, $nama, $noTelp)
    {
        $this->email = $email;
        $this->nama = $nama;
        $this->noTelp = $noTelp;
    }

    public function getId()
    {
        return $this->id;
    }

    // public function __construct()
    // {

    // }
}
