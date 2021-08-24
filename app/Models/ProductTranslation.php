<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    use HasFactory;

    use HasFactory;
    public $timestamps = false;

 


    protected $fillable = ['id','locale','product_id','product_name',
    'product_description','product_meta_tag_title','product_meta_tag_description','product_meta_tag_keyword'
];
    protected $guarded = ['id'];
}
