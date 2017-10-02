<?php
    $condition = filter_input(INPUT_GET, 'condition');
    switch($condition) {
        case '1':
            $description = ' ';
            break;

        case '2':
            $description = ' ';
            break;

        default:
            $description = ' ';
            break;
    }
    echo $description;
