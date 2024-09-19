<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_list extends Model
{
    use HasFactory;
    public function cbe(){
        return $this->belongsTo(cbe::class);
    }
    public function Department_user(){
        return $this->belongsTo(Department_user::class);
    }
    public function Department(){
        return $this->belongsTo(Department::class);
    }
    public function Program(){
        return $this->belongsTo(Program::class);
    }
}

