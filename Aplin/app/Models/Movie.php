<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movie';

    public $timestamps = false;
    
    protected $primaryKey = 'id';

	protected $fillable = [
        'title',	
		'duration',	
		'cast',	
		'producer',
		'cast',
		'director',
		'poster',
		'genre',
		'license',
		'status',
		'synopsis'
	];
    
}
