<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'name', 'complaints', 'treatment_evaluations', 'treatment_card_id', 'teeth_id'
    ];
    public function treatment_card(){
        return $this->belongsTo(TreatmentCard::class);
    }
    public function teeth(){
        return $this->belongsTo(Teeth::class);
    }
}
