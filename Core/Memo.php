<?php

namespace MathApps;

class Memo
{
    public function print(): void
    {
        $numbers = range(1, 10);
        echo '<ul class="flex flex-wrap space-x-8 justify-center border-b-4 border-black py-4">';
        foreach ($numbers as $number) {
            $dots = str_repeat('•', $number);
            echo <<<CONTENT
                <li class="text-center">
                    <div>
                        <div class="text-[40px]">{$number}</div>
                        <div class="text-[40px]">{$dots}</div>
                    </div>
                </li>
            CONTENT;
        }
        echo '</ul>';
    }
}