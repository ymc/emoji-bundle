<?php
namespace YMC\EmojiBundle\Twig;

use YMC\EmojiBundle\Service\Emoji;

class EmojiExtension extends \Twig_Extension
{
    private $emoji;

    public function __construct(Emoji $emoji)
    {
        $this->emoji = $emoji;
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('emoji_groups', array($this, 'listEmojiByGroup')),
        );
    }

    public function listEmojiByGroup()
    {

        return $this->emoji->getGroupedCatalog();
    }
}
