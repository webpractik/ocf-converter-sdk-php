# Webpractik\OcfConverter\Sdk\MainOcfApiApi

All URIs are relative to https://api-tasker.onlineconvertfree.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appControllerCheckFileStatus()**](MainOcfApiApi.md#appControllerCheckFileStatus) | **GET** /api/{fileId} | Проверить статус файла, полученного на внешнюю конвертацию |
| [**appControllerDeleteFile()**](MainOcfApiApi.md#appControllerDeleteFile) | **DELETE** /api/{fileId} | Удалить сконвертированный файл |
| [**appControllerGetHello()**](MainOcfApiApi.md#appControllerGetHello) | **GET** /api |  |
| [**appControllerGetJsonApi()**](MainOcfApiApi.md#appControllerGetJsonApi) | **GET** /api/json/content |  |
| [**appControllerGetList()**](MainOcfApiApi.md#appControllerGetList) | **GET** /api/files/list | Получить список конвертаций |
| [**appControllerUploadFile()**](MainOcfApiApi.md#appControllerUploadFile) | **POST** /api/upload | Загрузить файл на конвертацию |

## `appControllerCheckFileStatus()`

```php
appControllerCheckFileStatus($token, $fileId): \Webpractik\OcfConverter\Sdk\Model\GetFileDto
```

Проверить статус файла, полученного на внешнюю конвертацию

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
appControllerDeleteFile($fileId, $token)
```

Удалить сконвертированный файл

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
    $apiInstance->appControllerDeleteFile($fileId, $token);
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

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

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
appControllerGetList($token): \Webpractik\OcfConverter\Sdk\Model\GetFileDto[]
```

Получить список конвертаций

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

Загрузить файл на конвертацию

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
