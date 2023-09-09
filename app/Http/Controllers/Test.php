<?php

namespace App\Http\Controllers;

use App\Http\Resources\SeriesResource;
use App\Models\Series;
use Illuminate\Http\Request;

class Test extends Controller
{
    public function __invoke()
    {
        $series = Series::with(['screencasts'])->orderBy('order')->get();
        dump($series);

        return SeriesResource::collection($series);
    }
}
