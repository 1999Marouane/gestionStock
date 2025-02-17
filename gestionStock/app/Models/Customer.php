<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'contact_info', 'address'
    ];

    public function salesOrders()
    {
        return $this->hasMany(sales_order::class);
    }
}
