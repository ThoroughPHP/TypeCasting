<?php

namespace TypeCasting\Test;

use TypeCasting\TypeCasting;

class Dog extends Animal
{
    use TypeCasting;

    public function bark(): string
    {
        return 'bark';
    }
}