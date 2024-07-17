<?php

namespace App;

use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\Attribute\AutowireLocator;

final readonly class FooServiceWithLocator
{
    public function __construct(
        #[AutowireLocator(FooLocatedService::class)]
        private ContainerInterface $foos,
    ) {
    }
}