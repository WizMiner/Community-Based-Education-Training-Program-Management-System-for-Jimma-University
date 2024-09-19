<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department_user extends Model
{
    use HasFactory;
    public function Department(){
        return $this->hasOne(Department::class);
    }
    public function Student_list(){
        return $this->hasMany(Student_list::class);
    }
}
