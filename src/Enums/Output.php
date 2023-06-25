<?php

namespace Everzel\WeservPhp\Enums;

enum Output: string
{
    case JPG = 'jpg';
    case PNG = 'png';
    case GIF = 'gif';
    case TIFF = 'tiff';
    case WEBP = 'webp';
    case JSON = 'json';
}
