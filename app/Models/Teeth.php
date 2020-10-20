<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teeth extends Model
{
    protected $fillable = [
        'name', 'state_id', 'treatment_card_id'
    ];
    public function treatment_card(){
        return $this->belongsTo(TreatmentCard::class);
    }
    public function state(){
        return $this->belongsTo(State::class);
    }
}
