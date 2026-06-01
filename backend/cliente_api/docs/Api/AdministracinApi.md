# Swagger\Client\AdministracinApi

All URIs are relative to *http://localhost:8080/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actualizarEstadoContacto**](AdministracinApi.md#actualizarestadocontacto) | **PATCH** /admin/contactos/{id}/estado | Actualizar estado de contacto
[**crearContactoSolicitado**](AdministracinApi.md#crearcontactosolicitado) | **POST** /admin/contactos | Registrar solicitud de contacto
[**getContactosSolicitados**](AdministracinApi.md#getcontactossolicitados) | **GET** /admin/contactos | Listar contactos solicitados
[**getEstadisticas**](AdministracinApi.md#getestadisticas) | **GET** /admin/estadisticas | Estadísticas generales de la plataforma

# **actualizarEstadoContacto**
> \Swagger\Client\Model\ContactoSolicitado actualizarEstadoContacto($body, $id)

Actualizar estado de contacto

Cambia el estado del proceso. Las fechas se registran automáticamente según el estado.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministracinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\IdEstadoBody(); // \Swagger\Client\Model\IdEstadoBody | 
$id = 56; // int | 

try {
    $result = $apiInstance->actualizarEstadoContacto($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministracinApi->actualizarEstadoContacto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IdEstadoBody**](../Model/IdEstadoBody.md)|  |
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ContactoSolicitado**](../Model/ContactoSolicitado.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crearContactoSolicitado**
> \Swagger\Client\Model\ContactoSolicitado crearContactoSolicitado($body)

Registrar solicitud de contacto

Una empresa solicita contactar a un talento. No puede existir una solicitud activa previa.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministracinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ContactoSolicitadoInput(); // \Swagger\Client\Model\ContactoSolicitadoInput | 

try {
    $result = $apiInstance->crearContactoSolicitado($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministracinApi->crearContactoSolicitado: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContactoSolicitadoInput**](../Model/ContactoSolicitadoInput.md)|  |

### Return type

[**\Swagger\Client\Model\ContactoSolicitado**](../Model/ContactoSolicitado.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactosSolicitados**
> \Swagger\Client\Model\ContactoSolicitado[] getContactosSolicitados($estado)

Listar contactos solicitados

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministracinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$estado = "estado_example"; // string | 

try {
    $result = $apiInstance->getContactosSolicitados($estado);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministracinApi->getContactosSolicitados: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **estado** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ContactoSolicitado[]**](../Model/ContactoSolicitado.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEstadisticas**
> \Swagger\Client\Model\InlineResponse200 getEstadisticas()

Estadísticas generales de la plataforma

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministracinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getEstadisticas();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministracinApi->getEstadisticas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

