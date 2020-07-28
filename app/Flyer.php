<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class Flyer extends Model
{
    protected $fillable = [
        'title','foto',
    ];
    public static function setImage($foto, $actual = false){
        if($foto){
            if($actual){
                Storage::disk('public')->delete("imagenes/flyers/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $imagen = Image::make($foto)->encode('jpg',75);
            $imagen->resize(530,470,function($constraint){
                $constraint->upsize();
            });
            Storage::disk('public')->put("imagenes/flyers/$imageName",$imagen->stream());
            return $imageName;
        }
        else{
            return false;
        }
    }
}
