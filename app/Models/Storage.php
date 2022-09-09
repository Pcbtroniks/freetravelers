<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Storage extends Model
{
    use HasFactory;

    public static function upload( Request $request , $image_name , $directoy_name ){

        $filename = $request->file($image_name)->getClientOriginalName() . '-' . time();

        return $request[$image_name]->storeAs($directoy_name, $filename, 'public');

    }

    public static function erase(){




    }

    public static function replace(){



    }
}
