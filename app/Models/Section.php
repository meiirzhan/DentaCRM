<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'name'
    ];
    public function documents(){
        return $this->hasMany(Document::class);
    }
}
