<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable = [
      'name', 'date', 'file', 'treatment_card_id'
    ];
    public function treatment_card(){
        return $this->belongsTo(TreatmentCard::class);
    }
}
