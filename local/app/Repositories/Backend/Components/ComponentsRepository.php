<?php

namespace App\Repositories\Backend\Components;


use App\Repositories\EloquentRepository;


class ComponentsRepository extends EloquentRepository implements ComponentsRepositoryInterface
{
    public function getModel()
    {
        return \App\Component::class;
    }




}