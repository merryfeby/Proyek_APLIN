<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movie';

    protected $primaryKey = 'id';
    protected $fillable = [

        'title',
        'duration',
        'cast',
        'producer',
        'director',
        'poster',
        'genre',
        'license',
        'status',
        'synopsis',
    ];
    public $timestamps = false;

    public function screening()
    {
        return $this->hasMany(screening::class, 'movieID', 'id');
    }
}
