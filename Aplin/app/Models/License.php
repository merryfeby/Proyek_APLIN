<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $table = 'licenses';

    protected $primaryKey = 'id';

    protected $fillable = [
        'movieID',
        'created_at',
    ];

    public $timestamps = false;

    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }
}
