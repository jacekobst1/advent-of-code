<?php

namespace App\Year2022\Day10CathodeRayTube\Part02;

class Command
{
    public function __construct (
        public readonly Instruction $instruction,
        public readonly ?int $value = null
    ) {
    }

    public function cycles(): int
    {
        return $this->instruction->cycles();
    }
}