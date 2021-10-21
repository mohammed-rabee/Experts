<?php

namespace Database\Seeders;

use App\Models\College;
use App\Models\Department;
use App\Models\Major;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        College::create([
            'name'          => 'firstCollege',
        ]);

        College::create([
            'name'          => 'secondeCollege',
        ]);

        Department::create([
            'college_id'    => '2',
            'name'          => 'firstDepartment',
        ]);

        Department::create([
            'college_id'    => '1',
            'name'          => 'secondeDepartment',
        ]);

        Major::create([
            'department_id' => 2,
            'name'          => 'IT-infromation tech',
            'discount'      => 0.0,
            'numberOfYears' => 5
        ]);

        Major::create([
            'department_id' => '1',
            'name'          => 'Ecnomy-1-',
            'discount'      => 0.0,
            'numberOfYears' => 5
        ]);

        Major::create([
            'department_id' => '2',
            'name'          => 'Mathmatices',
            'discount'      => 0.0,
            'numberOfYears' => 5
        ]);

        Major::create([
            'department_id' => '1',
            'name'          => 'science-1-',
            'discount'      => 0.0,
            'numberOfYears' => 5
        ]);

        Role::create([
            'name'          => 'Experts+',
        ]);

        Role::create([
            'name'          => 'admin',
        ]);

        Role::create([
            'name'          => 'teacher',
        ]);

        Role::create([
            'name'          => 'student',
        ]);

        $user = User::create([
            'fname'     => 'Experts+',
            'lname'     => 'Experts+',
            'username'  => 'Experts+',
            'password'  => Hash::make('123456789'),
            'email'     => 'Experts+@admin.com',
            'birthDate' => Carbon::parse('12-05-1995'),
            'age'       => 26,
            'phone'     => '456465456448',
            'gander'    => 'male',
            'major_id'  => null,
            'active'    => true,
        ]);

        $user = User::create([
            'fname'     => 'Ebrahim',
            'lname'     => 'Ziab',
            'username'  => 'EbrahimZ',
            'password'  => Hash::make('123456789'),
            'email'     => 'Ebrahim@admin.com',
            'birthDate' => Carbon::parse('12-05-1995'),
            'age'       => 26,
            'phone'     => '54646546546',
            'gander'    => 'male',
            'major_id'  => null,
            'active'    => true,
        ]); 

        $user->assignRole('admin');

        $user = User::create([
            'fname'     => 'Abdulqader',
            'lname'     => 'Alsheht',
            'username'  => 'AbdulqaderA',
            'password'  =>  Hash::make('123456789'),
            'email'     => 'Abdulqader@admin.com',
            'birthDate' => Carbon::parse('12-05-1995'),
            'age'       => 26,
            'phone'     => '645646484818',
            'gander'    => 'male',
            'major_id'  => null,
            'active'    => true,
        ]); 

        $user->assignRole('admin');

        $user = User::create([
            'fname'     => 'AbduAallah',
            'lname'     => 'Houri',
            'username'  => 'AbduAallahH',
            'password'  =>  Hash::make('123456789'),
            'email'     => 'AbduAallah@admin.com',
            'birthDate' => Carbon::parse('12-05-1995'),
            'age'       => 26,
            'phone'     => '456481518',
            'gander'    => 'male',
            'major_id'  => null,
            'active'    => true,
        ]); 

        $user->assignRole('admin');

        // DB::table('colleges')->insert([
        //     'name'          => 'firstCollege',
        // ]);

        // DB::table('colleges')->insert([
        //     'name'          => 'secondeCollege',
        // ]);

        // DB::table('departments')->insert([
        //     'college_id'    => '2',
        //     'name'          => 'firstDepartment',
        // ]);

        // DB::table('departments')->insert([
        //     'college_id'    => '1',
        //     'name'          => 'secondeDepartment',
        // ]);

        // DB::table('majors')->insert([
        //     'department_id' => 2,
        //     'name'          => 'IT-infromation tech',
        //     'discount'      => 0.0,
        //     'numberOfYears' => 5
        // ]);

        // DB::table('majors')->insert([
        //     'department_id' => '1',
        //     'name'          => 'Ecnomy-1-',
        //     'discount'      => 0.0,
        //     'numberOfYears' => 5
        // ]);

        // DB::table('majors')->insert([
        //     'department_id' => '2',
        //     'name'          => 'Mathmatices',
        //     'discount'      => 0.0,
        //     'numberOfYears' => 5
        // ]);

        // DB::table('majors')->insert([
        //     'department_id' => '1',
        //     'name'          => 'science-1-',
        //     'discount'      => 0.0,
        //     'numberOfYears' => 5
        // ]);
    }
}
