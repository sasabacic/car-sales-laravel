<?php

namespace App\Providers\Faker;

use Faker\Generator;
use Faker\Provider\Base;

class PicsumImageProvider extends Base
{
    public function imageUrl($width = 640, $height = 480)
    {
        // Add a random seed or ID to ensure uniqueness
        $randomId = $this->generator->numberBetween(1, 1000); // Random number between 1 and 1000
        return "https://picsum.photos/id/{$randomId}/{$width}/{$height}";
    }
}
