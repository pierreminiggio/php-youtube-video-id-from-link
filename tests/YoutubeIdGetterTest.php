<?php

namespace PierreMiniggio\YoutubeVideoIdFromLinkTest;

use PHPUnit\Framework\TestCase;
use PierreMiniggio\YoutubeVideoIdFromLink\YoutubeIdGetter;

class YoutubeIdGetterTest extends TestCase
{
    /**
     * @dataProvider provideCorrectLinks
     */
    public function testCorrectLinks(string $link, string $expectedId): void
    {
        $getter = new YoutubeIdGetter();
        self::assertSame($expectedId, $getter->get($link));
    }

    /**
     * @return string[][]
     */
    public function provideCorrectLinks(): array
    {
        return [
            ['https://www.youtube.com/watch?v=11GAfiiJuZ0', '11GAfiiJuZ0']
        ];
    }
}
