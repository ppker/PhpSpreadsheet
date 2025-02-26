<?php

declare(strict_types=1);

return [
    [50, 5, 15, 30],
    [52, 5, 15, 30, 2],
    [53.1, 5.7, 15, 30, 2.4],
    [52.1, 5.7, '14', 30, 2.4],
    [52.2, 5.7, '14.1', 30, 2.4],
    [38.1, 5.7, 'X', 30, 2.4], // error if entered in formula, but not in cell
    [38.1, 5.7, '', 30, 2.4], // error if entered in formula, but not in cell
    [38.1, 5.7, null, 30, 2.4],
    [38.1, 5.7, false, 30, 2.4],
    [39.1, 5.7, true, 30, 2.4],
];
