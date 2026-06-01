# Swagger\Client\EmpresasApi

All URIs are relative to *http://localhost:8080/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEmpresa**](EmpresasApi.md#createempresa) | **POST** /empresas | Registrar nueva empresa
[**deleteEmpresa**](EmpresasApi.md#deleteempresa) | **DELETE** /empresas/{id} | Desactivar empresa
[**getEmpresa**](EmpresasApi.md#getempresa) | **GET** /empresas/{id} | Obtener empresa por ID
[**getEmpresas**](EmpresasApi.md#getempresas) | **GET** /empresas | Listar empresas validadas
[**updateEmpresa**](EmpresasApi.md#updateempresa) | **PUT** /empresas/{id} | Actualizar empresa
[**validarEmpresa**](EmpresasApi.md#validarempresa) | **PATCH** /empresas/{id}/validar | Validar empresa (solo administración)

# **createEmpresa**
> \Swagger\Client\Model\Empresa createEmpresa($body)

Registrar nueva empresa

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmpresasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EmpresaInput(); // \Swagger\Client\Model\EmpresaInput | 

try {
    $result = $apiInstance->createEmpresa($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresasApi->createEmpresa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EmpresaInput**](../Model/EmpresaInput.md)|  |

### Return type

[**\Swagger\Client\Model\Empresa**](../Model/Empresa.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmpresa**
> deleteEmpresa($id)

Desactivar empresa

Desactiva el perfil sin eliminarlo de la base de datos.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmpresasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $apiInstance->deleteEmpresa($id);
} catch (Exception $e) {
    echo 'Exception when calling EmpresasApi->deleteEmpresa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmpresa**
> \Swagger\Client\Model\Empresa getEmpresa($id)

Obtener empresa por ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmpresasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->getEmpresa($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresasApi->getEmpresa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Empresa**](../Model/Empresa.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmpresas**
> \Swagger\Client\Model\Empresa[] getEmpresas($tipo_empresa)

Listar empresas validadas

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmpresasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tipo_empresa = "tipo_empresa_example"; // string | 

try {
    $result = $apiInstance->getEmpresas($tipo_empresa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresasApi->getEmpresas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tipo_empresa** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Empresa[]**](../Model/Empresa.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmpresa**
> updateEmpresa($body, $id)

Actualizar empresa

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmpresasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EmpresaInput(); // \Swagger\Client\Model\EmpresaInput | 
$id = 56; // int | 

try {
    $apiInstance->updateEmpresa($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling EmpresasApi->updateEmpresa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EmpresaInput**](../Model/EmpresaInput.md)|  |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validarEmpresa**
> validarEmpresa($id)

Validar empresa (solo administración)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmpresasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $apiInstance->validarEmpresa($id);
} catch (Exception $e) {
    echo 'Exception when calling EmpresasApi->validarEmpresa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

