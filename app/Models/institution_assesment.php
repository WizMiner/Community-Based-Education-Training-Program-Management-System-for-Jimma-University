<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institution_assesment extends Model
{
    use HasFactory;
    public function Institution(){
        return $this->belongsTo(Institution::class);
    }
    public function Student_trainings(){
        return $this->belongsTo(Student_trainings::class);
    }
}
