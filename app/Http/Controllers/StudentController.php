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


        // COLLECTION
        // $nilai = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        // $nilaiRataRata = collect($nilai)->avg(); // rata-rata
        // dd($nilaiRataRata);

        // contains = apakah sebuah array memiliki sesuatu
        // $nilai = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        // $aaa = collect($nilai)->contains(function ($value) {
        //     return $value < 6;
        // });
        // dd($aaa);

        // diff = mendapatkan perbandingan data dari array satu dan lainnya
        // $restauranA = ["burger", "siomay", "pizza", "spaghetti", "makaroni", "martabak", "bakso"];
        // $restauranB = ["pizza", "fried chicken", "martabak", "sayur asem", "pecel lele", "bakso"];
        // $menuRestoA = collect($restauranA)->diff($restauranB);
        // $menuRestoB = collect($restauranB)->diff($restauranA);
        // dd($menuRestoA);

        // filter
        // $nilai = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        // $aaa = collect($nilai)->filter(function ($value) {
        //     return $value > 7;
        // })->all();
        // dd($aaa);

        // pluck = mengambil semua nilai untuk kunci tertentu
        // $collection = collect([
        //     ['nama' => 'budi', 'umur' => 17],
        //     ['nama' => 'ani', 'umur' => 16],
        //     ['nama' => 'siti', 'umur' => 17],
        //     ['nama' => 'rudi', 'umur' => 20],
        // ]);
        // $aaa = $collection->pluck('nama')->all();
        // dd($aaa);

        // map = mengulangi koleksi dan meneruskan setiap nilai ke panggilan balik yang diberikan
        $nilai = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $aaa = collect($nilai)->map(function ($value) {
            return $value * 3;
        })->all();
        dd($aaa);
    }
}
