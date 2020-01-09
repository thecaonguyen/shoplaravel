<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "tbl_product";
    protected $fillable = ['product_id','category_id','brand_id','product_name','product_desc','product_content','product_price','product_image','product_status']
}
