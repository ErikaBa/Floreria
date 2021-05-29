<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    /*una categoria pertenece a muchos productos */
    public function products(){
        return $this->hasMany(Product::class);
    }

}
