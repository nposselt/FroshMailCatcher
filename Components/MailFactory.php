<?php

namespace FroshMailCatcher\Components;

use Shopware\Components\DependencyInjection\Bridge\MailTransport;

/**
 * Class MailFactory
 */
class MailFactory extends MailTransport
{
    /**
     * @return mixed|DatabaseMailTransport
     */
    public function factory(\Enlight_Loader $loader, \Shopware_Components_Config $config, array $options)
    {
        $transport = Shopware()->Container()->get('frosh_mail_catcher.components.database_mail_transport');

        \Enlight_Components_Mail::setDefaultTransport($transport);

        return $transport;
    }
}
