<?php

declare(strict_types=1);

use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

return [
    [52, '21-Dec-2000', 1],
    [1, '2000-01-01', 1],
    [2, '2000-01-02', 1],
    [1, '2000-01-01', 2],
    [2, '2000-01-03', 2],
    [1, '1995-01-01', 1],
    [1, '1995-01-07', 1],
    [2, '1995-01-08', 1],
    [1, '1995-01-01', 2],
    [2, '1995-01-02', 2],
    [28, '3/7/1977'],
    [ExcelError::VALUE(), '3/7/1977', 'A'],
    [ExcelError::NAN(), '3/7/1977', 0],
    [ExcelError::NAN(), '3/7/1977', -1],
    [ExcelError::VALUE(), 'Invalid', 1],
    [ExcelError::NAN(), -1],
    [53, '2019-12-29', 1],
    [52, '2019-12-29', 2],
    [ExcelError::NAN(), '2019-12-29', 3],
    [ExcelError::NAN(), '2019-12-29', 10],
    [52, '2019-12-29', 11],
    [52, '2019-12-29', 12],
    [53, '2019-12-29', 13],
    [53, '2019-12-29', 14],
    [53, '2019-12-29', 15],
    [53, '2019-12-29', 16],
    [53, '2019-12-29', 17],
    [ExcelError::NAN(), '2019-12-29', 18],
    [ExcelError::NAN(), '2019-12-29', 20],
    [ExcelError::NAN(), '2019-12-29', 22],
    [52, '2019-12-29', 21],
    [53, '2020-12-29', 21],
    [52, '2021-12-29', 21],
    [52, '2022-12-29', 21],
    [1, '2020-01-01', 21],
    [53, '2021-01-01', 21],
    [52, '2022-01-01', 21],
    [52, '2023-01-01', 21],
    [2, '2020-01-08', 21],
    [1, '2021-01-08', 21],
    [1, '2022-01-08', 21],
    [1, '2023-01-08', 21],
    [1, '2025-12-29', 21],
    [ExcelError::VALUE(), '1900-03-01'],
    [ExcelError::VALUE(), '1900-01-07', 2],
    [2, '1905-01-07', 2],
    [ExcelError::VALUE(), '1900-01-01'],
    [ExcelError::VALUE(), '1900-01-01', 2],
    [ExcelError::VALUE(), '1900-01-02', 2],
    [1, null, 11],
    [1, 0, 11],
    [1, 0, 12],
    [1, 0, 13],
    [1, 0, 14],
    [1, 0, 15],
    [1, 0, 16],
    [1, 0, 17],
    [1, '1905-01-01', 17],
    [1, 0],
    [1, null],
    [1, null, 2],
    [1, 0, 2],
    [1, '1906-01-01'],
    [ExcelError::VALUE(), true],
    [ExcelError::VALUE(), false, 21],
    [53, null, 21],
    [53, '1904-01-01', 21],
    [ExcelError::VALUE(), '1900-01-01', 21],
    [ExcelError::VALUE(), '1900-01-07', 21],
    [ExcelError::VALUE(), '1900-01-08', 21],
    [ExcelError::VALUE(), '1900-01-09', 21],
    [ExcelError::VALUE(), '1900-03-04', 21],
    [ExcelError::VALUE(), '1900-03-05', 21],
    [27, '2004-07-02'],
    [1, '1904-01-02'],
    [0, '1904-01-01'],
    [0, '1904-01-01', 1],
    [1, '1904-01-01', 2],
    [1, '1904-01-01', 11],
    [1, '1904-01-01', 12],
    [1, '1904-01-01', 13],
    [1, '1904-01-01', 14],
    [1, '1904-01-01', 15],
    [1, '1904-01-01', 16],
    [0, '1904-01-01', 17],
];
