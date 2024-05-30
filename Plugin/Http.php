<?php
declare(strict_types=1);

/**
 * Magenizr Raygun
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2023 Magenizr (https://magenizr.com.au)
 */

namespace Magenizr\Raygun\Plugin;

use Magenizr\Raygun\Helper\Raygun;

class Http
{
    /**
     * Init constructor
     *
     * @param Raygun $raygun
     */
    public function __construct(
        private Raygun $raygun
    ) {
    }

    /**
     * Hook into CatchException
     *
     * @param \Magento\Framework\App\Http $subject
     * @param \Magento\Framework\App\Bootstrap $bootstrap
     * @param \Exception $exception
     * @return void
     */
    public function beforeCatchException(
        \Magento\Framework\App\Http $subject,
        \Magento\Framework\App\Bootstrap $bootstrap,
        \Exception $exception
    ) {
        $this->raygun->send($exception);
    }
}
