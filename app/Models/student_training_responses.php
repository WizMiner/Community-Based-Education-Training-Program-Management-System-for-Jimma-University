<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_training_responses extends Model
{
    use HasFactory;

    public function Student_trainings()
    {
        return $this->belongsToMany(Student_trainings::class);
    }
    public function Student(){
        return $this->belongsTo(Student::class);
    }
}
