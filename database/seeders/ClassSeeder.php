<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'TI 2A'],
            ['name' => 'TI 2B'],
            ['name' => 'TI 2C'],
            ['name' => 'TI 2D']
        ];

        foreach ($data as $value){
            ClassRoom::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
