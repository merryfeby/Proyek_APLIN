<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'employee';
    protected $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string'; 
    protected $fillable = [
        'username',
        'password',
        'name'
    ];

    public function order() {
		return $this->hasMany(order::class, 'employee', 'username');
	}
}
