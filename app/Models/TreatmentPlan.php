<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TreatmentPlan extends Model
{
    protected $fillable = [
      'treatment_card_id'
    ];
    public function treatment_card(){
        return $this->belongsTo(TreatmentCard::class);
    }
}
