<?php

declare(strict_types=1);

namespace App\Database\Seeder;

use App\Database\Factory\TokenFactory;
use Spiral\DatabaseSeeder\Attribute\Seeder;
use Spiral\DatabaseSeeder\Seeder\AbstractSeeder;

#[Seeder]
class TokenTableSeeder extends AbstractSeeder
{
    public function run(): \Generator
    {
        foreach (TokenFactory::new()->times(10000)->make() as $token) {
            yield $token;
        }
    }
}
