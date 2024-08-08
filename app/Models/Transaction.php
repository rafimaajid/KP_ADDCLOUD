<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'courier_id',
        'name',
        'email',
        'contact',
        'city',
        'address',
        'total_price',
        'status',
    ];

    public function product()
    {
        return $this->hasMany(TransactionProduct::class);
    }

    public function courier()
    {
        return $this->belongsTo(Courier::class);
    }
}
