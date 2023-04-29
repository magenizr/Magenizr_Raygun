<?php
declare(strict_types=1);

/**
 * Magenizr Raygun
 *
 * @copyright   Copyright (c) 2023 Magenizr (https://www.magenizr.com)
 */

namespace Magenizr\Raygun\Helper;

use GuzzleHttp\Client;
use Raygun4php\RaygunClient;
use Raygun4php\Transports\GuzzleAsync;
use Raygun4php\Transports\GuzzleSync;
use Magenizr\Raygun\Helper\Data;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Psr\Log\LoggerInterface;

class Raygun extends AbstractHelper
{
    /**
     * @var \Magenizr\Raygun\Helper\Data
     */
    private $data;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Init constructor
     *
     * @param Context $context
     * @param \Magenizr\Raygun\Helper\Data $data
     * @param LoggerInterface $logger
     */
    public function __construct(
        Context         $context,
        Data            $data,
        LoggerInterface $logger
    ) {
        parent::__construct($context);
        $this->data = $data;
        $this->logger = $logger;
    }

    /**
     * Send request to Raygun
     *
     * @param Exception $exception
     * @return void
     */
    public function send($exception)
    {
        try {

            if (!$this->data->isEnabled()) {
                return;
            }

            $httpClient = new Client([
                'base_uri' => $this->data->getConfig('general', 'base_uri'),
                'timeout' => $this->data->getConfig('general', 'timeout'),
                'headers' => [
                    'X-ApiKey' => $this->data->getConfig('general', 'api_key')
                ]
            ]);

            $async = $this->data->getConfigFlag('crash_reporting', 'async');

            $tags = [$this->data->getProduct(), $this->data->getVersion()];

            if ($async) {
                $transport = new GuzzleAsync($httpClient);
            } else {
                $transport = new GuzzleSync($httpClient);
            }

            $raygunClient = new RaygunClient($transport);

            if (is_string($exception)) {
                $raygunClient->Send($exception);
            } else {
                $raygunClient->SendException($exception, $tags);
            }

            if ($async) {
                $transport->wait();
            }

        } catch (\Exception $e) {
            $this->logger->error(__('An error occurred while sending the exception to Raygun.'));
            $this->logger->error($e->getMessage());
        }
    }
}
