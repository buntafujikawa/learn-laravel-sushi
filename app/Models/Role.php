<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        [
            'id' => 1,
            'name' => 'Alabama',
            'abbreviation' => 'AL',
        ],
        [
            'id' => 2,
            'name' => 'Alaska',
            'abbreviation' => 'AK',
        ],
        [
            'id' => 3,
            'name' => 'Arizona',
            'abbreviation' => 'AZ',
        ],
        [
            'id' => 4,
            'name' => 'Arkansas',
            'abbreviation' => 'AR',
        ],
        [
            'id' => 5,
            'name' => 'California',
            'abbreviation' => 'CA',
        ],
        // ...
    ];

    protected function sushiShouldCache(): bool
    {
        return true;
    }
}
