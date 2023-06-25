# PHP images.weserv.nl

This package provides a fluent PHP OOP builder for [images.weserv.nl](https://images.weserv.nl).

## Installation

You can install the package via composer:

```bash
composer require everzel/weserv-images-php
```

## Usage

```php
use Everzel\WeservImages;
use Everzel\Enums\Fit;

$weserv = WeservImages::make('https://images.weserv.nl/lichtenstein.jpg', 'https://wsrv.nl', false);

$url = $weserv
    ->w(512)
    ->h(512)
    ->we()
    ->fit(Fit::INSIDE->value);

echo $url;
```

### Or

```php
function weserv(string $imageUrl) {
    return WeservImages::make($imageUrl, 'https://wsrv.nl', false);
}

$url = weserv('https://images.weserv.nl/lichtenstein.jpg')
    ->w(512)
    ->h(512)
    ->we()
    ->fit(Fit::INSIDE->value);

echo $url;
```

![](https://images.weserv.nl/?w=512&h=512&we=1&fit=inside&url=https%3A%2F%2Fimages.weserv.nl%2Flichtenstein.jpg)

