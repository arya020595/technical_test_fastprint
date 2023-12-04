<?php

namespace App\Services;

use App\Models\Status;

class StatusService
{
    public function getStatuses()
    {
        return Status::all();
    }

    public function getStatus($id)
    {
    }

    public function storeStatus($request)
    {
    }

    public function updateStatus($request, $id)
    {
    }

    public function deleteStatus($id)
    {
    }
}
