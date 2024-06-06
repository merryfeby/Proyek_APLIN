<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{
    use HasFactory;

    protected $table = 'seats';
    protected $primaryKey = 'id';
    protected $fillable = [
        'studioID',
        'seatnumber',
        'seatrow'
        
    ];
    public $timestamps = false;

    public function studio()
    {
        return $this->belongsTo(studio::class, 'studioID', 'id');
    }
}
