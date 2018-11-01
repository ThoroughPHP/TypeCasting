<?php

namespace TypeCasting\Test;

use PHPUnit\Framework\TestCase;

final class TypeCastingTest extends TestCase
{
    public function testDowncasting(): void
    {
        $pets = new class {
            /** @var Animal[] */
            private $animals = [];

            public function add(Animal $animal): self
            {
                $this->animals[\get_class($animal)] = $animal;

                return $this;
            }

            public function get(string $fqcn): ?Animal
            {
                return $this->animals[$fqcn] ?? null;
            }
        };

        $pets->add(new Cat());
        $pets->add(new Dog());

        $cat = Cat::cast($pets->get(Cat::class));
        $dog = Dog::cast($pets->get(Dog::class));

        $this->assertSame('meow', $cat->meow());
        $this->assertSame('bark', $dog->bark());
    }
}