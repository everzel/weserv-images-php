<?php

namespace Everzel\Enums;

enum Alignment: string
{
    case CENTER = 'center';
    case TOP = 'top';
    case RIGHT = 'right';
    case BOTTOM = 'bottom';
    case LEFT = 'left';
    case TOP_LEFT = 'top-left';
    case BOTTOM_LEFT = 'bottom-left';
    case BOTTOM_RIGHT = 'bottom-right';
    case TOP_RIGHT = 'top-right';
    case ENTROPY = 'entropy';
    case ATTENTION = 'attention';
}
