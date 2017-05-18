factory
======

> factory - [php](http://php.net) library

## Install
Via Composer

```sh
composer require g4/factory
```

## Usage
Interfaces

```php
<?php

namespace G4\Factory;

interface CreateInterface
{
    public function create();
}

interface MappingInterface
{
    public function id();

    public function map();
}

interface ReconstituteInterface
{
    public function reconstitute();
}
```

## Development

### Install dependencies

    $ composer install

### Run tests

    $ composer test

## License

(The MIT License)
see LICENSE file for details...
