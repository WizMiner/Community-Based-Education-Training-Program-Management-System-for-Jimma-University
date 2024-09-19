<?php

namespace Database\Seeders;

use App\Models\Cbe;
use App\Models\College;
use App\Models\department;
use App\Models\department_user;
use App\Models\institution;
use App\Models\InstitutionPlace;
use App\Models\program;
use App\Models\questionery;
use App\Models\User;
use App\Models\student;
use App\Models\supervisor;
use App\Models\training_types;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $college = College::firstOrCreate([
            'name' => 'JiT',
        ]);

        $department = department::firstOrCreate([
            'name' => 'Computer Science',
            'coll_id' => $college->id
        ]);

        $program = program::firstOrCreate([
            'dep_id' => $department->id,
            'name' => 'B.Sc. in Computer Science (Extension)'
        ]);

        $student = User::firstOrCreate([
            'email' => 'student@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at'=>now(),
            'last_login' => now(),
            'type' => 0,
        ]);

        student::firstOrCreate([
            'user_id' => $student->id,
            'id_number' => 'EU0011/11',
            'f_name' => 'Student',
            'l_name' => 'User',
            'program_id' => $program->id
        ]);

        $cbe = User::firstOrCreate([
            'email' => 'cbe@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at'=>now(),
            'last_login' => now(),
            'type' => 1,
        ]);

        Cbe::firstOrCreate([
            'name' => 'Cbe User',
            'user_id' => $cbe->id,
            'coll_id' => $college->id
        ]);

        $departmentUser = User::firstOrCreate([
            'email' => 'department@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at'=>now(),
            'last_login' => now(),
            'type' => 2,
        ]);

        department_user::firstOrCreate([
            'user_id' => $departmentUser->id,
            'name' => 'Department User',
            'dep_id' => $department->id
        ]);

        $supervisor = User::firstOrCreate([
            'email' => 'supervisor@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at'=>now(),
            'last_login' => now(),
            'type' => 3,
        ]);

        supervisor::firstOrCreate([
            'user_id' => $supervisor->id,
            'dep_id' => $department->id,
            'name' => 'Supervisor User',
        ]);

        $institutionUser = User::firstOrCreate([
            'email' => 'institution@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at'=>now(),
            'last_login' => now(),
            'type' => 4,
        ]);

        $instPlace = InstitutionPlace::firstOrCreate([
            'name' => 'Y Institution',
            'address' => 'agaro',
        ]);

        institution::firstOrCreate([
            'name' => 'Institution User',
            'user_id' => $institutionUser->id,
            'institution_place_id' => $instPlace->id
        ]);


        training_types::firstOrCreate([
            'name' => 'CBTP',
            'description' => 'cbtp',
            'slug' => 'cbtp'
        ]);

        training_types::firstOrCreate([
            'name' => 'TTP',
            'description' => 'ttp',
            'slug' => 'ttp'
        ]);

        questionery::firstOrCreate([
            'name' => 'Questionnaire',
            'status' => true,
            'content' => 'content'
        ]);
    }
}
