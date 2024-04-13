<?php

declare(strict_types=1);

namespace App\Database\Factory;

use App\Domain\Token\Entity\Token;
use Spiral\DatabaseSeeder\Factory\AbstractFactory;
use Spiral\DatabaseSeeder\Factory\FactoryInterface;

/**
 * @implements FactoryInterface<Token>
 */
class TokenFactory extends AbstractFactory
{
    public function entity(): string
    {
        return Token::class;
    }

    public function makeEntity(array $definition): Token
    {
        return new Token(
            received: $definition['received'],
            token: $definition['token'],
            platform: $definition['platform'],
            message_id: $definition['message_id'],
        );
    }

    public function definition(): array
    {
        return [
            'received' => $this->faker->boolean(),
            'token' => $this->faker->sha256(),
            'platform' => $this->faker->randomElement(['app', 'snap']),
            'message_id' => 41,
            'time_created' => $this->faker->dateTime(),
        ];
    }
}
