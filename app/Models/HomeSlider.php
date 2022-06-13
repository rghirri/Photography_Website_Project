<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class HomeSlider extends Model
{
    use SoftDeletes;

    use HasFactory;

     protected $fillable = [

        'title', 'slider'
    ];


     /**
     * Delete slider image from the storage
     * @return void
     */
    public function deleteImage()
    {
        Storage::delete($this->image);
    }

    
    


}