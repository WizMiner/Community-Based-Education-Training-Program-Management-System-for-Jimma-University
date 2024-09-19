<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    use HasFactory;

    public function Department(){
        return $this->belongsTo(Department::class);
    }
    public function Student(){
        return $this->hasMany(Student::class);
    }
    public function Student_list(){
        return $this->hasMany(Student_list::class);
    }
}
