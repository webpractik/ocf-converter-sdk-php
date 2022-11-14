# Webpractik\OcfConverter\Sdk\MainOcfApiApi

All URIs are relative to https://api-tasker.onlineconvertfree.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appControllerCheckFileStatus()**](MainOcfApiApi.md#appControllerCheckFileStatus) | **GET** /api | Checking the status of a file received for conversion |
| [**appControllerCheckFileStatusV1()**](MainOcfApiApi.md#appControllerCheckFileStatusV1) | **GET** /api/v1/{fileId} | Checking the status of a file received for conversion v1 |
| [**appControllerDeleteFile()**](MainOcfApiApi.md#appControllerDeleteFile) | **DELETE** /api/{fileId} | Delete file sent for conversion |
| [**appControllerGetHello()**](MainOcfApiApi.md#appControllerGetHello) | **GET** /api/health/check |  |
| [**appControllerGetJsonApi()**](MainOcfApiApi.md#appControllerGetJsonApi) | **GET** /api/json/content |  |
| [**appControllerGetList()**](MainOcfApiApi.md#appControllerGetList) | **GET** /api/list | Get a list of conversions |
| [**appControllerGetListV1()**](MainOcfApiApi.md#appControllerGetListV1) | **GET** /api/v1/files/list | Get a list of conversions V1 |
| [**appControllerUploadFile()**](MainOcfApiApi.md#appControllerUploadFile) | **POST** /api/upload | Upload file for conversion |

## `appControllerCheckFileStatus()`

```php
appControllerCheckFileStatus($token, $fileId): \Webpractik\OcfConverter\Sdk\Model\OldGetFileDto
```

Checking the status of a file received for conversion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Webpractik\OcfConverter\Sdk\Api\MainOcfApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string
$fileId = 'fileId_example'; // string

try {
    $result = $apiInstance->appControllerCheckFileStatus($token, $fileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MainOcfApiApi->appControllerCheckFileStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |
| **fileId** | **string**|  | |

### Return type

[**\Webpractik\OcfConverter\Sdk\Model\OldGetFileDto**](../Model/OldGetFileDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerCheckFileStatusV1()`

```php
appControllerCheckFileStatusV1($token, $fileId): \Webpractik\OcfConverter\Sdk\Model\GetFileDto
```

Checking the status of a file received for conversion v1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Webpractik\OcfConverter\Sdk\Api\MainOcfApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string
$fileId = 'fileId_example'; // string

try {
    $result = $apiInstance->appControllerCheckFileStatusV1($token, $fileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MainOcfApiApi->appControllerCheckFileStatusV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |
| **fileId** | **string**|  | |

### Return type

[**\Webpractik\OcfConverter\Sdk\Model\GetFileDto**](../Model/GetFileDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerDeleteFile()`

```php
appControllerDeleteFile($fileId, $token): \Webpractik\OcfConverter\Sdk\Model\DeleteDto
```

Delete file sent for conversion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Webpractik\OcfConverter\Sdk\Api\MainOcfApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileId = 'fileId_example'; // string
$token = 'token_example'; // string

try {
    $result = $apiInstance->appControllerDeleteFile($fileId, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MainOcfApiApi->appControllerDeleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fileId** | **string**|  | |
| **token** | **string**|  | |

### Return type

[**\Webpractik\OcfConverter\Sdk\Model\DeleteDto**](../Model/DeleteDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerGetHello()`

```php
appControllerGetHello()
```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Webpractik\OcfConverter\Sdk\Api\MainOcfApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerGetHello();
} catch (Exception $e) {
    echo 'Exception when calling MainOcfApiApi->appControllerGetHello: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerGetJsonApi()`

```php
appControllerGetJsonApi($token)
```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Webpractik\OcfConverter\Sdk\Api\MainOcfApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $apiInstance->appControllerGetJsonApi($token);
} catch (Exception $e) {
    echo 'Exception when calling MainOcfApiApi->appControllerGetJsonApi: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerGetList()`

```php
appControllerGetList($token): \Webpractik\OcfConverter\Sdk\Model\OldGetFileDto[]
```

Get a list of conversions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Webpractik\OcfConverter\Sdk\Api\MainOcfApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->appControllerGetList($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MainOcfApiApi->appControllerGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |

### Return type

[**\Webpractik\OcfConverter\Sdk\Model\OldGetFileDto[]**](../Model/OldGetFileDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerGetListV1()`

```php
appControllerGetListV1($token): \Webpractik\OcfConverter\Sdk\Model\GetFileDto[]
```

Get a list of conversions V1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Webpractik\OcfConverter\Sdk\Api\MainOcfApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->appControllerGetListV1($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MainOcfApiApi->appControllerGetListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |

### Return type

[**\Webpractik\OcfConverter\Sdk\Model\GetFileDto[]**](../Model/GetFileDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerUploadFile()`

```php
appControllerUploadFile($file, $to, $token): \Webpractik\OcfConverter\Sdk\Model\FileStatusDto
```

Upload file for conversion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Webpractik\OcfConverter\Sdk\Api\MainOcfApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | Current file
$to = 'to_example'; // string | The target subreddit
$token = 'token_example'; // string | The target subreddit

try {
    $result = $apiInstance->appControllerUploadFile($file, $to, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MainOcfApiApi->appControllerUploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| Current file | |
| **to** | **string**| The target subreddit | |
| **token** | **string**| The target subreddit | |

### Return type

[**\Webpractik\OcfConverter\Sdk\Model\FileStatusDto**](../Model/FileStatusDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
