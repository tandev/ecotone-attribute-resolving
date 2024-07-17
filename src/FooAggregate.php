<?php

namespace App;

use Ecotone\Modelling\Attribute\Aggregate;
use Ecotone\Modelling\Attribute\CommandHandler;

#[Aggregate]
class FooAggregate
{
    #[CommandHandler()]
    public static function create(CreateFooCommand $command, FooServiceWithLocator $fooServiceWithLocator): self
    {
        return new FooAggregate(1);
    }
}