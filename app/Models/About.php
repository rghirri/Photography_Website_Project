<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

     protected $fillable = [

        'title', 'imagework',  'content', 'titlechoose', 'choosedetails', 'titlehistory', 'historydetails', 'titlecontact', 'contactdetails'

    ];

}