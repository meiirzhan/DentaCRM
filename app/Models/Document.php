<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'name', 'subtitle', 'file', 'section_id'
    ];
    public function section(){
        return $this->belongsTo(Section::class);
    }
}
