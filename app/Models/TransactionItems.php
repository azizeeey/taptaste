<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionItems extends Model
{
    protected $fillable = [
        'transactions_id',
        'foods_id',
        'quantity',
        'price',
        'subtotal',
    ];

    public function transactions()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id');
    }
    public function foods()
    {
        return $this->belongsTo(Foods::class, 'foods_id');
    }
}
