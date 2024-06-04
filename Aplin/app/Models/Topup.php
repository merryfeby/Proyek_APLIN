<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topup extends Model
{
    use HasFactory;

    protected $table = 'topup';
    public $timestamps = false;
    
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'customer',
        'method',
        'amount',
        'transdate',
        'status'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'customer', 'username');
    }
}
