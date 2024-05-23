<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primaryKey = 'orderNumber';
    protected $fillable = [
        'orderNumber',
        'screeningID',
        'offerID',
        'customer',
        'employee',
        'created_at',
        'subtotal',
        'grandtotal',
        'status'
    ];

    public function orderDetails()
    {
        return $this->hasMany(orderdetail::class, 'orderNumber', 'orderNumber');
    }
}
