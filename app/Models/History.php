<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['date', 'cost', 'treatment_card_id'];

    public function treatment_card(){
        return $this->belongsTo(TreatmentCard::class);
    }
}
