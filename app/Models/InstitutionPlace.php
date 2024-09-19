<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionPlace extends Model
{
    use HasFactory;

    public function institutionUser(){
        return $this->belongsTo(institution::class,'institution_place_id');
    }
}
