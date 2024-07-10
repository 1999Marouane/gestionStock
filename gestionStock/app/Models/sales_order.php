<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales_order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'order_date', 'total_amount'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
