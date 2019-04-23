<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = [
        'name', 'title', 'image','has_static_text'
    ];
    public function prepareParameters($parameters)
    {
        return $parameters;
    }
}
