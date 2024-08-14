<?php
declare(strict_types=1);

/**
 * Magenizr Raygun
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2023 Magenizr (https://magenizr.com.au)
 */

namespace Magenizr\Raygun\Block;

use Magenizr\Raygun\Helper\Data;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Framework\View\Element\Template;
use Magento\Customer\Model\Session;

class RealUserMonitoring extends Template
{
    /**
     * Init constructor
     *
     * @param Template\Context $context
     * @param Session $session
     * @param Data $helper
     * @param Json $json
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        private Session                                  $session,
        private Data                                     $helper,
        private Json                                     $json,
        array                                            $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Check if real user monitoring is enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->helper->getConfigFlag('real_user_monitoring', 'enabled');
    }

    /**
     * Check if error tracking is enabled
     *
     * @return bool
     */
    public function getTrackError()
    {
        return $this->helper->getConfigFlag('real_user_monitoring', 'track_error');
    }

    /**
     * Check if pulse is enabled
     *
     * @return bool
     */
    public function getTrackPulse()
    {
        return $this->helper->getConfigFlag('real_user_monitoring', 'track_pulse');
    }

    /**
     * Check if customer data should be tracked
     *
     * @return bool
     */
    public function getTrackCustomer()
    {
        return $this->helper->getConfigFlag('real_user_monitoring', 'track_customer');
    }

    /**
     * Check if a customer is logged in
     *
     * @return bool
     */
    public function isLoggedIn()
    {
        return $this->session->isLoggedIn();
    }

    /**
     * Return customer data
     *
     * @return bool
     */
    public function getUserData()
    {
        $data = [];

        if ($this->session->isLoggedIn()) {

            $data = [
                'identifier' => $this->session->getCustomer()->getId(),
                'email' => $this->session->getCustomer()->getEmail(),
                'fullName' => $this->session->getCustomer()->getName()
            ];
        }

        return $this->json->serialize($data);
    }

    /**
     * Get API Key
     *
     * @return bool
     */
    public function getApiKey()
    {
        return $this->helper->getConfig('general', 'api_key');
    }

    /**
     * Check if data should be sent anonymously
     *
     * @return bool
     */
    public function getIsAnonymous()
    {
        return $this->helper->getConfigFlag('real_user_monitoring', 'is_anonymous');
    }

    /**
     * Check if data should be sent via insecure connection
     *
     * @return bool
     */
    public function getAllowInsecureSubmissions()
    {
        return $this->helper->getConfigFlag('real_user_monitoring', 'allow_insecure_submissions');
    }

    /**
     * Return a list of hostnames to exclude
     *
     * @return bool
     */
    public function getExcludedHostnames()
    {
        $value = $this->helper->getConfig('developer', 'excluded_hostnames');

        return trim($value);
    }

    /**
     * Check if debugging is enabled
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->helper->getConfigFlag('developer', 'debug');
    }

    /**
     * Convert a boolean into string for JavaScript
     *
     * @param boolean $value
     * @return string
     */
    public function booleanToString($value)
    {
        return ($value) ? 'true' : 'false';
    }
}
