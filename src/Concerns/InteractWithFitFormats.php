<?php

namespace Everzel\Concerns;

use Everzel\Enums\Fit;

trait InteractWithFitFormats
{
    public function fitCover(): self
    {
        return $this->fit(Fit::COVER->value);
    }

    public function fitOutside(): self
    {
        return $this->fit(Fit::OUTSIDE->value);
    }

    public function fitInside(): self
    {
        return $this->fit(Fit::OUTSIDE->value);
    }

    public function fitContain(): self
    {
        return $this->fit(Fit::CONTAIN->value);
    }
}
