<?php

/*
 * OAuth2 Client Bundle
 * Copyright (c) KnpUniversity <http://knpuniversity.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KnpU\OAuth2ClientBundle\DependencyInjection\Providers;

use KnpU\OAuth2ClientBundle\Client\Provider\WaveClient;
use Symfony\Component\Config\Definition\Builder\NodeBuilder;

class WaveProviderConfigurator implements ProviderConfiguratorInterface
{
    public function buildConfiguration(NodeBuilder $node)
    {
        // no custom options
    }

    public function getProviderClass(array $config)
    {
        return 'Qdequippe\OAuth2\Client\Provider\Wave';
    }

    public function getProviderOptions(array $config)
    {
        return [
            'clientId' => $config['client_id'],
            'clientSecret' => $config['client_secret'],
        ];
    }

    public function getPackagistName()
    {
        return 'qdequippe/oauth2-wave';
    }

    public function getLibraryHomepage()
    {
        return 'https://github.com/qdequippe/oauth2-wave';
    }

    public function getProviderDisplayName()
    {
        return 'Wave';
    }

    public function getClientClass(array $config)
    {
        return WaveClient::class;
    }
}
