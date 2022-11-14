<?php

namespace Webpractik\OcfConverter\Sdk;

use Webpractik\OcfConverter\Sdk\Api\MainOcfApiApi;
use Webpractik\OcfConverter\Sdk\Model\GetFileDto;

/**
 * onlineconvertfree.com file conversion task
 */
class OcfFileTask
{
    private string $apiKey;
    private string $fileId;
    /**
     * @var GetFileDto|null
     */
    private $fileStatus;

    private int $secondsUntilNextCheck = 0;

    private MainOcfApiApi $apiInstance;

    /**
     * @param string $apiKey Your personal API Key
     * @param string $fileId File ID
     */
    public function __construct(string $apiKey, string $fileId)
    {
        $this->apiKey = $apiKey;
        $this->fileId = $fileId;

        $this->apiInstance = new MainOcfApiApi();
    }

    /**
     * Wait for the file to be processed
     *
     * @return OcfConversionResult
     * @throws ApiException
     */
    public function waitForConversion(): OcfConversionResult
    {
        if (!$this->fileStatus) {
            $this->waitAndRefreshFileStatus();
        }

        while ($this->fileStatus->getStatus() === OcfFileStatus::WAIT) {
            $this->waitAndRefreshFileStatus();
        }

        return new OcfConversionResult($this->apiKey, $this->fileId, $this->fileStatus);
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

    /**
     * @return void
     * @throws ApiException
     */
    private function waitAndRefreshFileStatus(): void
    {
        sleep($this->secondsUntilNextCheck);

        $this->refreshFileStatus();
    }

    /**
     * @return void
     * @throws ApiException
     */
    private function refreshFileStatus(): void
    {
        [$fileStatus, $statusCode, $headers] = $this->apiInstance->appControllerCheckFileStatusWithHttpInfo($this->apiKey, $this->fileId);

        $this->fileStatus            = $fileStatus;
        $this->secondsUntilNextCheck = array_key_exists('retry-after', $headers) ? (int)$headers['retry-after'] : 5;
    }
}
