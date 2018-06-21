<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Relations\Concerns\InteractsWithPivotTable;

interface Taggable
{
    /**
     * @return InteractsWithPivotTable
     */
    public function tags();
}