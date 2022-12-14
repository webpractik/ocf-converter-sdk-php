# ocf-converter-sdk

SDK for [onlineconvertfree.com](https://onlineconvertfree.com/) [file conversion API](https://onlineconvertfree.com/file-conversion-api/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

The recommended way to install SDK is through [Composer](https://getcomposer.org/).

```shell
composer require webpractik/ocf-converter-sdk
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then start from the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiKey = 'myApiKey';

$client = new Webpractik\OcfConverter\Sdk\OcfClient($apiKey);

$filePath = '/path/to/file/to/convert.png';
$extensionToConvertTo = 'pdf';

try {
    $task = $client->uploadFile($filePath, $extensionToConvertTo);

    $result = $task->waitForConversion();

    if ($result->isSuccess()) {
        $resultUrl = $result->getResultingFileUrl();

        $resultFileName = basename($resultUrl);

        if (file_put_contents($resultFileName, file_get_contents($resultUrl))) {
            $result->deleteFile();
        }
    }
} catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), PHP_EOL;
}

```

## License

SDK is made available under the MIT License (MIT). Please see [License File](LICENSE) for more information.

## Contribution

[OpenAPI Generator](https://github.com/OpenAPITools/openapi-generator-cli/) is used for the client generation.

### Requirements

JRE and [OpenAPI Generator](https://github.com/OpenAPITools/openapi-generator-cli/) are required for the client generation.

### Client generation

To regenerate the client do the following:

- run generation command:

```shell
composer api-codegen
```

- reformat the generated code with your IDE.
