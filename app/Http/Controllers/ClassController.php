<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::all();
        return view('classroom', ['classList' => $class]);
    }
}
