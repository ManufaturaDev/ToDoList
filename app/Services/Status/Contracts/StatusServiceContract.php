<?php

namespace App\Services\Status\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface StatusServiceContract
{
    /**
     * Summary of list
     * 
     * @return Collection
     */
    public function getList(): Collection;
}