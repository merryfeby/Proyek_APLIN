<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studio extends Model
{
    use HasFactory;

    protected $table = 'studio';

    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'location',
        'name',
        'capacity',
        'status'
    ];
    public $timestamps = false;

    public function screening()
    {
        return $this->hasMany(screening::class, 'studioID', 'id');
    }

    public function location()
    {
        return $this->belongsTo(location::class, 'locationID', 'id');
    }

    public function seats()
    {
        return $this->hasMany(Seat::class, 'studioID');
    }
}
