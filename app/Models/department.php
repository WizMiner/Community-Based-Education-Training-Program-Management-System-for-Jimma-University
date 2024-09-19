<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;
    public function Department_user(){
        return $this->belongsTo(Department_user::class);
    }
    public function program(){
        return $this->hasMany(program::class);
    }
    public function Student_list(){
        return $this->hasMany(Student_list::class);
    }
}
