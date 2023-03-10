<?php

/*
 * OAuth2 Client Bundle
 * Copyright (c) KnpUniversity <http://knpuniversity.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KnpU\OAuth2ClientBundle\DependencyInjection\Providers;

use KnpU\OAuth2ClientBundle\Client\Provider\OdnoklassnikiClient;
use Symfony\Component\Config\Definition\Builder\NodeBuilder;

class OdnoklassnikiProviderConfigurator implements ProviderConfiguratorInterface
{
    public function buildConfiguration(NodeBuilder $node)
    {
        // no custom options
    }

    public function getProviderClass(array $config)
    {
        return 'Aego\OAuth2\Client\Provider\Odnoklassniki';
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
        return 'aego/oauth2-odnoklassniki';
    }

    public function getLibraryHomepage()
    {
        return 'https://github.com/rakeev/oauth2-odnoklassniki';
    }

    public function getProviderDisplayName()
    {
        return 'Odnoklassniki';
    }

    public function getClientClass(array $config)
    {
        return OdnoklassnikiClient::class;
    }
}
