<?php

namespace Database\Seeders;

use App\Models\College;
use App\Models\Department;
use App\Models\Major;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'name'          => 'admin',
        ]);

        Role::create([
            'name'          => 'teacher',
        ]);

        Role::create([
            'name'          => 'student',
        ]);

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
