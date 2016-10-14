<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function () {
    echo 'hello';
});

Macaw::dispatch();
