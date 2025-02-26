<?php

declare(strict_types=1);

// Settlement, Maturity, Frequency, Basis, Result

return [
    [
        4,
        '25-Jan-2007',
        '15-Nov-2008',
        2,
        1,
    ],
    [
        8,
        '2011-01-01',
        '2012-10-25',
        4,
        0,
    ],
    [
        8,
        '2011-01-01',
        '2012-10-25',
        4,
        null,
    ],
    [
        '#VALUE!',
        'Invalid Date',
        '15-Nov-2008',
        2,
        1,
    ],
    [
        '#VALUE!',
        '25-Jan-2007',
        'Invalid Date',
        2,
        1,
    ],
    'Invalid Frequency' => [
        '#NUM!',
        '25-Jan-2007',
        '15-Nov-2008',
        3,
        1,
    ],
    'Non-Numeric Frequency' => [
        '#VALUE!',
        '25-Jan-2007',
        '15-Nov-2008',
        'NaN',
        1,
    ],
    'Invalid Basis' => [
        '#NUM!',
        '25-Jan-2007',
        '15-Nov-2008',
        4,
        -1,
    ],
    'Non-Numeric Basis' => [
        '#VALUE!',
        '25-Jan-2007',
        '15-Nov-2008',
        4,
        'NaN',
    ],
    'Same Date' => [
        '#NUM!',
        '24-Dec-2000',
        '24-Dec-2000',
        4,
        0,
    ],
    [
        5,
        '01-Jan-2008',
        '31-Dec-2012',
        1,
        1,
    ],
    [
        '#NUM!',
        '24-Dec-2000',
        '24-Dec-2000',
        4,
        0,
    ],
    [
        1,
        '23-Dec-2000',
        '24-Dec-2000',
        4,
        0,
    ],
    [
        1,
        '24-Sep-2000',
        '24-Dec-2000',
        4,
        0,
    ],
    [
        2,
        '23-Sep-2000',
        '24-Dec-2000',
        4,
        0,
    ],
    [
        16,
        '1-Apr-2012',
        '31-Mar-2020',
        2,
        0,
    ],
    [
        16,
        '1-Apr-2012',
        '31-Mar-2020',
        2,
        1,
    ],
    [
        16,
        '1-Apr-2012',
        '31-Mar-2020',
        2,
        2,
    ],
    [
        16,
        '1-Apr-2012',
        '31-Mar-2020',
        2,
        3,
    ],
    [
        16,
        '1-Apr-2012',
        '31-Mar-2020',
        2,
        4,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        1,
        0,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        1,
        1,
    ],
    [
        2,
        '31-Jan-2020',
        '20-Mar-2021',
        1,
        1,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        1,
        2,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        1,
        3,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        1,
        4,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        2,
        0,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        2,
        1,
    ],
    [
        3,
        '31-Jan-2020',
        '20-Mar-2021',
        2,
        1,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        2,
        2,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        2,
        3,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        2,
        4,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        4,
        0,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        4,
        1,
    ],
    [
        5,
        '31-Jan-2020',
        '20-Mar-2021',
        4,
        1,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        4,
        2,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        4,
        3,
    ],
    [
        1,
        '31-Jan-2021',
        '20-Mar-2021',
        4,
        4,
    ],
];
