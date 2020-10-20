<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'individual_id_number', 'fullname', 'phones', 'email', 'address', 'birthday', 'organization', 'price_list', 'bonus_type', 'source'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
