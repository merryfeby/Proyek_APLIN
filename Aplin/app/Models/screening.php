<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class screening extends Model
{
    use HasFactory;

    protected $table = 'screening';

    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'movieID',
        'studioID',
        'starttime'
        
    ];
    public $timestamps = false;

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movieID', 'id');
    }
}
