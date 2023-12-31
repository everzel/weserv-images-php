<?php

namespace Everzel\WeservPhp\Concerns;

use Everzel\WeservPhp\Enums\Output;

trait InteractWithOutputFormats
{
    public function jpg(): self
    {
        return $this->output(Output::JPG->value);
    }

    public function webp(): self
    {
        return $this->output(Output::WEBP->value);
    }
}
