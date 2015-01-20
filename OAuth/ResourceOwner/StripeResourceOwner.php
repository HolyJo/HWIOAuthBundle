<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware.Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\OAuth\ResourceOwner;

use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * StripeResourceOwner
 *
 * @author Nathan O'Hanlon <nathanlon@me.com>
 */
class StripeResourceOwner extends GenericOAuth2ResourceOwner
{
    /**
     * {@inheritDoc}
     */
    protected $paths = array(
        'identifier' => 'id',
        'nickname'   => 'username',
        'email'      => 'fullname',
    );

    /**
     * {@inheritDoc}
     */
    protected function configureOptions(OptionsResolverInterface $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(array(
            'sandbox'           => false,
            'scope'             => 'openid email',
            'authorization_url' => 'https://connect.stripe.com/oauth/authorize',
            'access_token_url'  => 'https://connect.stripe.com/oauth/token',
            'infos_url'         => null,
        ));
    }
}
