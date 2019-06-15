<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected  $table = 'services';
    protected $fillable = [
        'name', 'body', 'price1', 'price2', 'price3', 'image', 'image2', 'imag3', 'image4','type'
    ];


    protected $guarded = ['id'];


}
