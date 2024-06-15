<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // $student = Student::all();
        // return view('student', ['studentsList' => $student]);

        // QUERY BUILDER
        // $student = DB::table('students')->get(); // tampilkan data
        // dd($student);
        // DB::table('students')->insert([ // insert data
        //     'name' => 'query builder',
        //     'gender' => 'L',
        //     'nis' => '220302088',
        //     'class_id' => 1,
        // ]);
        // DB::table('students')->where('id', 26)->update([ // update data
        //     'name' => 'query builder 2',
        //     'class_id' => 3
        // ]);
        // DB::table('students')->where('id', 26)->delete(); // delete data


        // ELOQUENT (Biasakan menggunakan ELOQUENT)
        // $student = Student::all(); // tampilkan data
        // dd($student);
        // Student::create([ // insert data
        //     'name' => 'eloquent',
        //     'gender' => 'P',
        //     'nis' => '220302089',
        //     'class_id' => 2,
        // ]);
        // Student::find(28)->update([ // update data
        //     'name' => 'eloquent 2',
        //     'class_id' => 2
        // ]);
        // Student::find(28)->delete();
    }
}
