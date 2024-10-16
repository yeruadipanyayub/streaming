<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Inertia\Inertia;


class MovieController extends Controller
{
    public function Show(Movie $movie)
    {
        return Inertia::render(
            'User/Dashboard/Movie/Show',
            [
                'movie' => $movie
            ]
        );
    }
}
