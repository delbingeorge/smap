<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = "teachers";
    protected $fillable = [
        'emp_id',
        'fullname',
        'designation',
        'email',
        'contact',
    ];
}
