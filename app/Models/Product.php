<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'quantity', 'measure', 'cost', 'date', 'code', 'articule', 'barcode', 'stock_id'
    ];
    public function stock(){
        return $this->belongsTo(Stock::class);
    }
}
