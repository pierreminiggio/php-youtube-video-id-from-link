<?php

namespace PierreMiniggio\YoutubeVideoIdFromLink;

class YoutubeIdGetter
{

    /**
     * @throws BadLinkException
     */
    public function get(string $youtubeLink): string
    {
        $linkBase = 'https://www.youtube.com/watch?v=';

        if (strpos($youtubeLink, $linkBase) === 0) {
            return substr($youtubeLink, strlen($linkBase));
        }
        
        throw new BadLinkException();
    }
}
