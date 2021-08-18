<?php

namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements TranslatableContract
{
 
    use HasFactory;

  //  TranslatableContract
  use Translatable;

    public $translatedAttributes  = ['name', 'category_id'];

    protected $guarded = ['id'];
    protected $fillable = ['image'];
}
