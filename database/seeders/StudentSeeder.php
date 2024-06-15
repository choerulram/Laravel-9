<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['name' => 'Achmad', 'gender' => 'L', 'nis' => '220302049', 'class_id' => 3],
        //     ['name' => 'Alivia', 'gender' => 'P', 'nis' => '220302050', 'class_id' => 3],
        //     ['name' => 'Amalia', 'gender' => 'P', 'nis' => '220302051', 'class_id' => 3],
        //     ['name' => 'Apridho', 'gender' => 'L', 'nis' => '220302052', 'class_id' => 3]
        // ];

        // foreach ($data as $value){
        //     Student::insert([
        //         'name' => $value['name'],
        //         'gender' => $value['gender'],
        //         'nis' => $value['nis'],
        //         'class_id' => $value['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);
        // }

        Student::factory()->count(20)->create();
    }
}
