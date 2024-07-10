<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock_movement extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'date', 'quantity', 'movement_type', 'source'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
