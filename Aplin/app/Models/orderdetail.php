<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    use HasFactory;

    protected $table = 'orderdetails';

    protected $primaryKey = 'orderNumber';
    protected $fillable = [
        'orderNumber',
        'seatID',
        'price'
    ];

    public function order()
    {
        return $this->belongsTo(order::class, 'orderNumber', 'orderNumber');
    }
}
