<?php

namespace Everzel\WeservPhp\Enums;

enum Fit: string
{
    case INSIDE = 'inside';
    case OUTSIDE = 'outside';
    case COVER = 'cover';
    case FILL = 'fill';
    case CONTAIN = 'contain';
}
