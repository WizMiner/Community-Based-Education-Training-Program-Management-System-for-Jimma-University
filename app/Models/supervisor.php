<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supervisor extends Model
{
    use HasFactory;

    //Relationship with supervisor_assesment
    public function Supervisor_assesment(){
        return $this->hasMany(Supervisor_assesment::class);
    }
    //Relationship with student_training
    public function Student_trainings(){
        return $this->hasOne(Student_trainings::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
