<?php

namespace Webpractik\OcfConverter\Sdk;

use SplFileObject;
use Webpractik\OcfConverter\Sdk\Api\MainOcfApiApi;

/**
 * onlineconvertfree.com API client
 */
class OcfClient
{
    private string $token;

    private MainOcfApiApi $apiInstance;

    /**
     * @param string $apiKey Your personal API Key
     */
    public function __construct(string $apiKey)
    {
        $this->token = $apiKey;

        $this->apiInstance = new MainOcfApiApi();
    }

    /**
     * Send file to conversion
     *
     * @param string $filePath File path
     * @param string $toFormat Destination format
     *
     * @return string File ID
     * @throws ApiException
     */
    public function uploadFile(string $filePath, string $toFormat): string
    {
        $file = new SplFileObject($filePath);

        $result = $this->apiInstance->appControllerUploadFile($file, $toFormat, $this->token);

        return $result->getIDFILE();
    }

    /**
     * Get file status code by its ID
     *
     * Possible status codes are in \Webpractik\OcfConverter\Sdk\OcfFileStatus
     *
     * @param string $fileId
     *
     * @return string Status Code
     * @throws ApiException
     */
    public function getFileStatusCode(string $fileId): string
    {
        $fileStatus = $this->apiInstance->appControllerCheckFileStatus($this->token, $fileId);

        return $fileStatus->getStatus();
    }

    /**
     * Get resulting file URL by file ID
     *
     * @param string $fileId
     *
     * @return string|null
     * @throws ApiException
     */
    public function getResultingFileUrl(string $fileId): ?string
    {
        $fileStatus = $this->apiInstance->appControllerCheckFileStatus($this->token, $fileId);

        if ($fileStatus->getStatus() === OcfFileStatus::READY) {
            return $fileStatus->getPath();
        }

        return null;
    }

    /**
     * Delete file by its ID
     *
     * @param string $fileId
     *
     * @return void
     * @throws ApiException
     */
    public function deleteFile(string $fileId): void
    {
        $this->apiInstance->appControllerDeleteFile($fileId, $this->token);
    }
}
