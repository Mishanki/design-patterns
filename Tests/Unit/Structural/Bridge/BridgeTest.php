<?php

namespace Tests\Structural\Bridge;

use App\Structural\Bridge\Classes\HtmlFormatter;
use App\Structural\Bridge\Classes\PlainTextFormatter;
use App\Structural\Bridge\Services\HelloWorldService;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        static::assertSame('Hello World', $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter()
    {
        $service = new HelloWorldService(new HtmlFormatter());

        static::assertSame('<p>Hello World</p>', $service->get());
    }
}
