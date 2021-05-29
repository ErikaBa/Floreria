<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'name', 'email','rfc','address', 'phone',
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
}