<?php

namespace MathApps;

class Addition
{
    public int $a;
    public int $b;
    public string $operation;

    public function __construct()
    {
        $this->a = rand(0, 10);
        $this->b = rand(0, 10 - $this->a);
        $this->operation = '+';
    }
}