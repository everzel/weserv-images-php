<?php

namespace Everzel\Enums;

enum Mask: string
{
    case CIRCLE = 'circle';
    case ELLIPSE = 'ellipse';
    case TRIANGLE = 'triangle';
    case TRIANGLE_180 = 'triangle-180';
    case PENTAGON = 'pentagon';
    case PENTAGON_180 = 'pentagon-180';
    case HEXAGON = 'hexagon';
    case SQUARE = 'square';
    case STAR = 'star';
    case HEART = 'heart';
}
