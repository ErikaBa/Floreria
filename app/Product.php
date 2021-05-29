<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'stock',
        'image',
        'sell_price',
        'status',
        'category_id',
    ];

    /*un producto pertenece a una categoria */
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
