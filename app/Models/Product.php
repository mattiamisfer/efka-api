<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Product extends Model implements TranslatableContract
{
    use HasFactory,Translatable;
    protected $translatedAttributes = ['product_name',
    'product_description','product_meta_tag_title','product_meta_tag_description','product_meta_tag_keyword'
    ];
    protected $guarded = ['id'];
    protected $fillable = [ 'prooduct_model','prooduct_sku','prooduct_ispn','prooduct_quantity','prooduct_min_order','prooduct_price','product_weight_value','product_weight_type','product_status','date_available','status','category_id',
    'manufacture','main_image','user_id'];
}
