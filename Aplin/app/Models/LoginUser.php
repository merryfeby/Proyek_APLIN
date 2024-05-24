<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginUser extends Model
{
    use HasFactory;
    protected $table = 'users';
    // protected $primaryKey = 'username';
    protected $fillable = [
        'username',
        'password'
    ];
}
