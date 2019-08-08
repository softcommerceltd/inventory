<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Newsletter\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Newsletter configuration model
 */
class Config
{
    /**
     * Configuration path to newsletter active setting
     */
    const XML_PATH_NEWSLETTER_ACTIVE = 'newsletter/general/active';

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Config constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Returns newsletter's enabled status
     *
     * @return bool
     */
    public function isActive($scopeType = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_NEWSLETTER_ACTIVE, $scopeType);
    }
}
