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
        if ($parameters->input('has_static_text')) {
            if(!array_filter($parameters->input('variable')))
                $parameters->merge(['has_static_text'=>0]);
            else
                $parameters->merge(['has_static_text'=>1]);
        }else{
            $parameters->request->add(['has_static_text' => 0]);
        }

        return $parameters;
    }
}
