<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\program;
use App\Models\Student_training_responses;
class student extends Model
{
    use HasFactory;

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Program(){
        return $this->belongsTo(Program::class);
    }
    public function Student_training_responses(){
        return $this->hasOne(Student_training_responses::class,'user_id'); 
    }
}
