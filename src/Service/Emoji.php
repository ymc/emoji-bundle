<?php

namespace YMC\EmojiBundle\Service;

use Symfony\Component\Finder\Finder;

class Emoji
{
    private $catalogPath;

    public function __construct($catalogPath)
    {
        $this->catalogPath = $catalogPath;
    }

    public function getCatalog()
    {
        return json_decode(file_get_contents($this->catalogPath));
    }

    public function getGroupedCatalog()
    {
        $catalog = $this->getCatalog();
        $groupedCatalog = [];

        foreach ($catalog as $emoji) {
            if (isset($emoji->category)) {
                $groupedCatalog[$emoji->category][] = $emoji;
            }
        }
        return $groupedCatalog;
    }

}
