<?php

declare(strict_types=1);

namespace Bizkit\VersioningBundle\DependencyInjection;

use Bizkit\VersioningBundle\Command\IncrementCommand;
use Bizkit\VersioningBundle\VCS\VCSHandlerInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('bizkit_versioning');

        $treeBuilder
            ->getRootNode()
            ->children()
                ->scalarNode('parameter_prefix')
                    ->info('The prefix added to the version parameters.')
                    ->example('my_app')
                    ->cannotBeEmpty()
                    ->defaultValue('application')
                ->end()
                ->scalarNode('strategy')
                    ->info('The versioning strategy used.')
                    ->cannotBeEmpty()
                    ->defaultValue('incrementing')
                ->end()

                ->scalarNode('filename')
                    ->info('The name of the file containing the version information.')
                    ->cannotBeEmpty()
                    ->defaultValue('version')
                ->end()
                ->scalarNode('filepath')
                    ->info('The path to the file containing the version information.')
                    ->cannotBeEmpty()
                    ->defaultValue('%kernel.project_dir%/config')
                ->end()

                ->enumNode('format')
                    ->info('The format used for the version file.')
                    ->values(['yaml', 'xml'])
                    ->cannotBeEmpty()
                    ->defaultValue('yaml')
                ->end()

                ->arrayNode('vcs')
                    ->info("Configuration for the VCS integration,\nset to false to disable the integration.")
                    ->addDefaultsIfNotSet()
                    ->beforeNormalization()
                        ->ifTrue(static function ($v): bool {
                            return \is_bool($v);
                        })
                        ->then(static function (bool $v): array {
                            return $v ? [] : ['handler' => null];
                        })
                    ->end()
                    ->children()
                        ->scalarNode('handler')
                            ->info("The handler used for the VCS integration,\nset to null to disable the integration.")
                            ->defaultValue('git')
                        ->end()

                        ->scalarNode('commit_message')
                            ->info('The message to use for the VCS commit.')
                            ->cannotBeEmpty()
                            ->defaultValue(VCSHandlerInterface::DEFAULT_MESSAGE)
                        ->end()
                        ->enumNode('tagging_mode')
                            ->values(IncrementCommand::TAGGING_MODES)
                            ->info("The mode for applying tags to version commits:\n- 'always': automatically add a tag without prompting\n- 'never': do not add a tag\n- 'ask': prompt before tagging when incrementing versions")
                            ->cannotBeEmpty()
                            ->defaultValue('ask')
                        ->end()
                        ->scalarNode('tag_message')
                            ->info('The message to use for the VCS tag.')
                            ->cannotBeEmpty()
                            ->defaultValue(VCSHandlerInterface::DEFAULT_MESSAGE)
                        ->end()

                        ->scalarNode('name')
                            ->info("The name used for the VCS commit information,\nset to null to use the default VCS configuration.")
                            ->defaultNull()
                        ->end()
                        ->scalarNode('email')
                            ->info("The email used for the VCS commit information,\nset to null to use the default VCS configuration.")
                            ->defaultNull()
                        ->end()

                        ->scalarNode('path_to_executable')
                            ->info("The path to the VCS executable,\nset to null for autodiscovery.")
                            ->defaultNull()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
