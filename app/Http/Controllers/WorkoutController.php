<?php

namespace App\Http\Controllers;
use App\Models\Exercise;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }

}
