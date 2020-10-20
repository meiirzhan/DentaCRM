<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnos extends Model
{
    protected $fillable = [
        'name', 'diagnoses', 'treatment_card_id', 'teeth_id'
    ];
    public function treatment_card(){
        return $this->belongsTo(TreatmentCard::class);
    }
    public function teeth(){
        return $this->belongsTo(Teeth::class);
    }
}
