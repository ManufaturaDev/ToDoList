<?php

namespace App\Services\Status;

use App\Services\Status\Contracts\StatusServiceContract;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Status;

class StatusService implements StatusServiceContract
{
    public function __construct()
    {
        //
    }

    /**
     * Summary of getList
     * 
     * @return Collection
     */
    public function getList(): Collection
    {
        return Status::orderBy('id')->get();
    }
}