<?php

namespace App\Repositories\Backend\Components;


use App\ComponentStaticText;
use App\Repositories\EloquentRepository;


class ComponentsRepository extends EloquentRepository implements ComponentsRepositoryInterface
{
    public function getModel()
    {
        return \App\Component::class;
    }

    public function createNewComponent($request)
    {
        $parameters = $this->_model->prepareParameters($request);
        $result = $this->_model->create($parameters->all());
    }

    public function getAllComponents()
    {
        return $this->_model::orderBy('id', 'DESC')->get();
    }

    public function showEditComponent($id)
    {
        $data['component'] = $this->find($id);
        return $data;
    }

    public function updateComponent($request, $id)
    {
        $compStaticText = new ComponentStaticText();
        $parameters = $this->_model->prepareParameters($request);
        $result = $this->update($id, $parameters->all());
        if ($result->has_static_text == 1){
            $parameters = $compStaticText->prepareParameters($result->id,$request);
        }
        return true;
    }


}