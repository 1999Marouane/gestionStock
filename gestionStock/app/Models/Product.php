<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'category_id', 'supplier_id', 'cost_price', 'sale_price', 'quantity_in_stock'
    ];

    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function stockMovements()
    {
        return $this->hasMany(stock_movement::class);
    }
}
