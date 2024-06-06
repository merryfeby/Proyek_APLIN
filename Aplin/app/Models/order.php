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

    public function screening()
    {
        return $this->belongsTo(screening::class, 'screeningID', 'id');
    }

    public function offer()
    {
        return $this->belongsTo(offer::class, 'offerID');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee');
    }
}
