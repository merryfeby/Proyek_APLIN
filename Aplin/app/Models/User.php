<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	use HasFactory;

	protected $table = 'user';
	protected $primaryKey = 'username';
	protected $fillable = [
		'username',	
		'password',	
		'email',	
		'telp',	
	];
}
