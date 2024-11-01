<?php

namespace MathApps;

class Output
{
    private Memo $memo;
    private Example $example;

    public function __construct(int $count = 10, string $operation = 'addition')
    {
        $this->memo = new Memo();
        $this->example = new Example($count, $operation);
    }

    public function print(): void
    {
        $this->memo->print();
        $this->example->print();
    }
}