<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
      'startus', 'total_price', 'payment_type', 'user_id', 'patient_id'
    ];

        public function user(){
            return $this->belongsTo(User::class);
        }
        public function patient(){
            return $this->belongsTo(Patient::class);
        }
}
