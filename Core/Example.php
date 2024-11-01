<?php

namespace MathApps;

class Example
{
    private array $examples;

    public function __construct(int $count, string $operation)
    {
        $operationName = strtolower($operation) === 'addition' ? '\MathApps\Addition' : '\MathApps\Subtraction';
        for ($i = 0; $i < $count; $i++) {
            $this->examples[] = new $operationName();
        }
    }

    public function print(): void
    {
        echo '<ul class="flex flex-col flex-wrap justify-center">';
        foreach ($this->examples as $example) {
            $dots = str_repeat('•', $example->a);
            $crosses = str_repeat($example->operation === '-' ? '✕' : '•', $example->b);
            $signSize = $example->operation === '-' ? 14 : 40;
            echo <<<CONTENT
                <li class="text-center border-b-2 border-black border-dotted py-4">
                    <div class="flex justify-center flex-col space-y-4">
                        <div class="text-4xl">{$example->a} {$example->operation} {$example->b} =</div>
                        <div style="line-height: 14px;" class="flex justify-center items-center">
                            <span class="text-[40px]">{$dots}</span>
                            &nbsp;&nbsp;&nbsp;
                            <span class="text-[{$signSize}px]">{$crosses}</span>
                        </div>
                    </div>
                </li>
            CONTENT;
        }
        echo '</ul>';
    }
}