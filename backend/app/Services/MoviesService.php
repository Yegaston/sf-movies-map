<?php

namespace App\Services;

use App\Models\Movies;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class MoviesService.
 */
class MoviesService
{
    public function getAll(): Collection
    {
        return Movies::all();
    }
}
