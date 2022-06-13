<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

     protected $fillable = [

        'title', 'content',  'imageone', 'one', 'onedetails', 'imagetwo', 'two', 'twodetails', 'imagethree', 'three', 'threedetails'

    ];

     
}