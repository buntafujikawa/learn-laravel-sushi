<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Series extends Model
{
    use Sushi;

    public function screencasts()
    {
        return $this->hasMany(Screencast::class);
    }

    public function getRows()
    {
        return [
            ['id' => 1, 'order' => 1, 'title' => 'Getting Started'],
            ['id' => 2, 'order' => 2, 'title' => 'A Basic Form With Validation'],
            //...
        ];
    }
}
