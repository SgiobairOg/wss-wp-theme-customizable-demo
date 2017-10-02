<?php
    $uri = explode('/', filter_input(INPUT_SERVER, 'REQUEST_URI'));
    $showroom = strtolower($uri[2]);
    switch ($showroom) {
        case 'value':
            $description = ' ';
            break;

        default:
            $description = ' ';
            break;
    }
    echo $description;
