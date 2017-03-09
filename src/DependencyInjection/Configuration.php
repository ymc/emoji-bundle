<?php

namespace YMC\EmojiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ymc_emoji');

        $rootNode
            ->children()
                ->scalarNode('definition_file')
                ->defaultValue(__DIR__.'/../Resources/config/emoji.json')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
