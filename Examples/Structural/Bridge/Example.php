<?php

namespace Examples\Structural\Bridge;

use App\Structural\Bridge\Classes\HtmlFormatter;
use App\Structural\Bridge\Classes\PlainTextFormatter;
use App\Structural\Bridge\Services\HelloWorldService;

class Example
{
    /**
     * Decouple an abstraction from its implementation so that the two can vary independently.
     */
    public function usage()
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        $service->get(); // 'Hello World'

        $service->setImplementation(new HtmlFormatter());
        $service->get(); // '<p>Hello World</p>'
    }
}
