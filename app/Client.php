<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'curp',
        'rfc',
        'address',
        'houseReference',
        'phone',
        'email',
    ];
    public function sales(){
       return $this->hasMany(Sale::class);
    }
    public function clients(){
        return $this->hasMany(Client::class);
    }
}