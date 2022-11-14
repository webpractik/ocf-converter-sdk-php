<?php

namespace Webpractik\OcfConverter\Sdk;

use Webpractik\OcfConverter\Sdk\Api\MainOcfApiApi;
use Webpractik\OcfConverter\Sdk\Model\GetFileDto;

/**
 * onlineconvertfree.com file conversion result
 */
class OcfConversionResult
{
    private string $apiKey;
    private string $fileId;
    private GetFileDto $fileStatus;

    private MainOcfApiApi $apiInstance;

    /**
     * @param string     $apiKey Your personal API Key
     * @param string     $fileId File ID
     * @param GetFileDto $fileStatus File status DTO
     */
    public function __construct(string $apiKey, string $fileId, GetFileDto $fileStatus)
    {
        $this->apiKey     = $apiKey;
        $this->fileId     = $fileId;
        $this->fileStatus = $fileStatus;

        $this->apiInstance = new MainOcfApiApi();
    }

    /**
     * Check if file converted successfully
     *
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->fileStatus->getStatus() === OcfFileStatus::READY;
    }

    /**
     * Get resulting file URL
     *
     * @return string|null
     */
    public function getResultingFileUrl(): ?string
    {
        $isSuccess = $this->isSuccess();

        if ($isSuccess) {
            return $this->fileStatus->getPath();
        }

        return null;
    }

    /**
     * Delete file
     *
     * @return void
     * @throws ApiException
     */
    public function deleteFile(): void
    {
        $this->apiInstance->appControllerDeleteFile($this->fileId, $this->apiKey);
    }
}
