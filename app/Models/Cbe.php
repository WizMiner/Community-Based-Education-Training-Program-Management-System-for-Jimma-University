<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cbe extends Model
{
    use HasFactory;
    //Relationship with student_list
    public function student_list(){
        return $this->hasMany(student_list::class);
    }
    //Relationship with the user
    public function user(){
        return $this->hasMany(user::class);
    }
    //Relationship with college
    public function college (){
        return $this->hasOne(College::class);
    }
}
