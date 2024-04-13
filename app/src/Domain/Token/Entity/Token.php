<?php

declare(strict_types=1);

namespace App\Domain\Token\Entity;

use App\Domain\Token\Repository\TokenRepository;
use Cycle\Annotated\Annotation as Cycle;
use Cycle\Annotated\Annotation\Column;

#[Cycle\Entity(repository: TokenRepository::class)]
class Token
{
    public function __construct(bool $received, string $token, string $platform, int $message_id)
    {
    }

    #[Column(type: 'primary')]
    private int $id;

    #[Column(type: 'boolean', default: 0)]
    private bool $received;

    #[Column(type: 'string(1000)')]
    private string $token;

    #[Column(type: 'string', default: 'app')]
    private string $platform;

    #[Column(type: 'integer')]
    private int $message_id;

    #[Column(type: 'datetime')]
    private \DateTime $time_created;
}
