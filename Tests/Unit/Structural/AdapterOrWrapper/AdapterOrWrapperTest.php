<?php

namespace Tests\Structural\AdapterOrWrapper;

use App\Structural\AdapterOrWrapper\Classes\EBookAdapter;
use App\Structural\AdapterOrWrapper\Classes\Kindle;
use App\Structural\AdapterOrWrapper\Classes\PaperBook;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class AdapterOrWrapperTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        static::assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        static::assertSame(2, $book->getPage());
    }
}
