<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $table = 'seats';

    protected $fillable = [
        'studioID',
        'seatnumber',
        'seatrow'
    ];

    public function studio()
    {
        return $this->belongsTo(Studio::class, 'studioID');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'seatID');
    }
}
