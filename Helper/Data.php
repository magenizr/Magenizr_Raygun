<?php
declare(strict_types=1);

/**
 * Magenizr Raygun
 *
 * @copyright   Copyright (c) 2023 Magenizr (https://www.magenizr.com)
 */

namespace Magenizr\Raygun\Helper;

use GuzzleHttp\Client;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\ProductMetadataInterface;
use Psr\Log\LoggerInterface;

class Data extends AbstractHelper
{
    /**
     * @var string
     */
    private $namespace = 'magenizr_raygun';

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var ProductMetadataInterface
     */
    private $productMetadata;

    /**
     * Init constructor
     *
     * @param Context $context
     * @param ProductMetadataInterface $productMetadata
     * @param LoggerInterface $logger
     */
    public function __construct(
        Context                  $context,
        ProductMetadataInterface $productMetadata,
        LoggerInterface          $logger
    ) {
        parent::__construct($context);
        $this->productMetadata = $productMetadata;
        $this->logger = $logger;
    }

    /**
     * Check if crash reporting is enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfigFlag('crash_reporting', 'enabled');
    }

    /**
     * Get module flags from core_config_data
     *
     * @param string $group
     * @param string $field
     * @return boolean
     */
    public function getConfigFlag($group, $field)
    {
        return $this->scopeConfig->isSetFlag(
            $this->namespace . '/' . $group . '/' . $field,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get module configuration values from core_config_data
     *
     * @param string $group
     * @param string $field
     * @return mixed
     */
    public function getConfig($group, $field)
    {
        return $this->scopeConfig->getValue(
            $this->namespace . '/' . $group . '/' . $field,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Magento version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->productMetadata->getVersion();
    }

    /**
     * Get Magento Name + Edition
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->productMetadata->getName() . ' ' . $this->productMetadata->getEdition();
    }
}
