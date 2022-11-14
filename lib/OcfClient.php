<?php

namespace Webpractik\OcfConverter\Sdk;

use SplFileObject;
use Webpractik\OcfConverter\Sdk\Api\MainOcfApiApi;

/**
 * onlineconvertfree.com API client
 */
class OcfClient
{
    private string $apiKey;

    private MainOcfApiApi $apiInstance;

    /**
     * @param string $apiKey Your personal API Key
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        $this->apiInstance = new MainOcfApiApi();
    }

    /**
     * Send file to conversion
     *
     * @param string $filePath File path
     * @param string $toFormat Destination format
     *
     * @return OcfFileTask File conversion task
     * @throws ApiException
     */
    public function uploadFile(string $filePath, string $toFormat): OcfFileTask
    {
        $file = new SplFileObject($filePath);

        $result = $this->apiInstance->appControllerUploadFile($file, $toFormat, $this->apiKey);

        return new OcfFileTask($this->apiKey, $result->getIDFILE());
    }
}
