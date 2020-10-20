<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceTreatmentPlan extends Model
{
    protected $fillable = [
        'level', 'quantity', 'service_id', 'treatment_plan_id', 'teeth_id'
    ];
    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function treatment_plan(){
        return $this->belongsTo(TreatmentPlan::class);
    }
    public function teeth(){
        return $this->belongsTo(Teeth::class);
    }
}
