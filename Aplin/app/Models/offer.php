<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    use HasFactory;

    protected $table = 'offers';
    // protected $primaryKey = 'username';
    protected $fillable = [
        'code',
        'discount',
        'max_trans'
    ];

    public $timestamps = false;

    public function order() {
		return $this->hasMany(order::class, 'offerID', 'id');
	}
}
