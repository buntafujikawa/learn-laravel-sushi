<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Screencast extends Model
{
    use Sushi;

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function getNextAttribute()
    {
        return static::find($this->id + 1);
    }

    public function getPrevAttribute()
    {
        return static::find($this->id - 1);
    }

    public function getDurationInSecondsAttribute()
    {
        // ...
    }

    protected $rows = [
        [
            'title' => 'Installation',
            'slug' => 'installation',
            'description' => "Installing Livewire is so simple, this 2.5 minute video feels like overkill. Composer require, and two little lines added to your layout file, and you are fully set up and ready to rumble!",
            'video_url' => 'https://vimeo.com/...',
            'code_url' => 'https://github.com/...',
            'duration_in_minutes' => '2:32',
            'series_id' => 1,
        ],
        [
            'title' => 'Data Binding',
            'slug' => 'data-binding',
            'description' => "The first and most important concept to understand when using Livewire is \"data binding\". It's the backbone of page reactivity in Livewire, and it'll be your first introduction into how Livewire works under the hood. Mandatory viewing.",
            'video_url' => 'https://vimeo.com/...',
            'code_url' => 'https://github.com/...',
            'duration_in_minutes' => '9:11',
            'series_id' => 1,
        ],
        // ...
    ];
    }
