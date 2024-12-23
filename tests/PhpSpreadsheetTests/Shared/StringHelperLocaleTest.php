<?php

declare(strict_types=1);

namespace PhpOffice\PhpSpreadsheetTests\Shared;

use PhpOffice\PhpSpreadsheet\Shared\StringHelper;
use PHPUnit\Framework\Attributes;
use PHPUnit\Framework\TestCase;

// separate processes due to setLocale
#[Attributes\RunTestsInSeparateProcesses]
class StringHelperLocaleTest extends TestCase
{
    /**
     * @var false|string
     */
    private $currentLocale;

    protected function setUp(): void
    {
        $this->currentLocale = setlocale(LC_ALL, '0');
    }

    protected function tearDown(): void
    {
        if (is_string($this->currentLocale)) {
            setlocale(LC_ALL, $this->currentLocale);
        }
        StringHelper::setCurrencyCode(null);
    }

    public function testCurrency(): void
    {
        if (!setlocale(LC_ALL, 'de_DE.UTF-8', 'deu_deu.utf8')) {
            self::markTestSkipped('Unable to set German UTF8 locale for testing.');
        }
        $result = StringHelper::getCurrencyCode();
        self::assertSame('€', $result);
        if (!setlocale(LC_ALL, 'en_ca', 'en_CA')) {
            self::markTestSkipped('Unable to set en_ca locale for testing.');
        }
        $result = StringHelper::getCurrencyCode();
        self::assertSame('€', $result, 'result persists despite locale change');
        StringHelper::setCurrencyCode(null);
        $result = StringHelper::getCurrencyCode();
        self::assertSame('$', $result, 'locale now used');
        StringHelper::setCurrencyCode(null);
        if (!setlocale(LC_ALL, 'deu_deu', 'de_DE')) {
            self::markTestSkipped('Unable to set German single-byte locale for testing.');
        }
        // Seems like Linux returns trailing blank, Win doesn't
        $result = StringHelper::getCurrencyCode(true); // trim if alt symbol is used
        self::assertSame('EUR', $result, 'non-UTF8 result ignored');
    }
}
