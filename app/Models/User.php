<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Cbe;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'email_verified_at',
        'last_login',
        'type',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //Relationship with CBE
    public function Cbe(){
        return $this->belongsTo(Cbe::class);
    }
    //Relationshiop with Student
    public function Student(){
        return $this->hasOne(Student::class);
    }
    public function Supervisor(){
        return $this->hasOne(Supervisor::class);
    }
    public function Institution(){
        return $this->hasOne(Institution::class);
    }

    protected function type(): Attribute
    {
        return new Attribute(
            get: fn($value) => ["student", "cbe", "department", "supervisor", "institution"][$value],
        );
    }
}
