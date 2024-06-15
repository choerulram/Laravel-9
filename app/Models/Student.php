<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // DATA FILLABLE untuk insert data dengan ELOQUENT
    protected $fillable = [
        'name', 'gender', 'nis', 'class_id'
    ];
}
