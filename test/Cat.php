<?php

namespace TypeCasting\Test;

use TypeCasting\TypeCasting;

final class Cat extends Animal
{
    use TypeCasting;

    public function meow(): string
    {
        return 'meow';
    }
}