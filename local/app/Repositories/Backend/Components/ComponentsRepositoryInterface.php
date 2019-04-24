<?php

namespace App\Repositories\Backend\Components;

interface ComponentsRepositoryInterface
{
    public function createNewComponent($request);

    public function getAllComponents();

    public function showEditComponent($id);

    public function updateComponent($request, $id);
}
