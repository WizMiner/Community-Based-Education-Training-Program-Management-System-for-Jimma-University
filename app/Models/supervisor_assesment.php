<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supervisor_assesment extends Model
{
    use HasFactory;

    //relationship with Supervisor
    public function Supervisor(){
        return $this->belongsToMany(Supervisor::class);
    }
    public function Student_trainings(){
        return $this->belongsToMany(Student_trainings::class);
    }
}
