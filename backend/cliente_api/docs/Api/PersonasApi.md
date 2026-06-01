# Swagger\Client\PersonasApi

All URIs are relative to *http://localhost:8080/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPersona**](PersonasApi.md#createpersona) | **POST** /personas | Registrar nueva persona/talento
[**deletePersona**](PersonasApi.md#deletepersona) | **DELETE** /personas/{id} | Desactivar persona
[**getPersona**](PersonasApi.md#getpersona) | **GET** /personas/{id} | Obtener persona por ID
[**getPersonas**](PersonasApi.md#getpersonas) | **GET** /personas | Listar personas (CV ciego)
[**updatePersona**](PersonasApi.md#updatepersona) | **PUT** /personas/{id} | Actualizar persona
[**validarPersona**](PersonasApi.md#validarpersona) | **PATCH** /personas/{id}/validar | Validar persona (solo administración)

# **createPersona**
> \Swagger\Client\Model\Persona createPersona($body)

Registrar nueva persona/talento

Crea un perfil de talento. El código se genera automáticamente.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PersonasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PersonaInput(); // \Swagger\Client\Model\PersonaInput | 

try {
    $result = $apiInstance->createPersona($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonasApi->createPersona: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PersonaInput**](../Model/PersonaInput.md)|  |

### Return type

[**\Swagger\Client\Model\Persona**](../Model/Persona.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePersona**
> deletePersona($id)

Desactivar persona

Desactiva el perfil sin eliminarlo de la base de datos.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PersonasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $apiInstance->deletePersona($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonasApi->deletePersona: ', $e->getMessage(), PHP_EOL;
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

# **getPersona**
> \Swagger\Client\Model\Persona getPersona($id)

Obtener persona por ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PersonasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->getPersona($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonasApi->getPersona: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Persona**](../Model/Persona.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonas**
> \Swagger\Client\Model\PersonaCVCiego[] getPersonas($validado, $nivel_educacional)

Listar personas (CV ciego)

Obtiene talentos activos en formato de CV ciego (sin datos personales identificables).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PersonasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$validado = true; // bool | Filtrar por validación
$nivel_educacional = "nivel_educacional_example"; // string | 

try {
    $result = $apiInstance->getPersonas($validado, $nivel_educacional);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonasApi->getPersonas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **validado** | **bool**| Filtrar por validación | [optional]
 **nivel_educacional** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PersonaCVCiego[]**](../Model/PersonaCVCiego.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePersona**
> updatePersona($body, $id)

Actualizar persona

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PersonasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PersonaInput(); // \Swagger\Client\Model\PersonaInput | 
$id = 56; // int | 

try {
    $apiInstance->updatePersona($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling PersonasApi->updatePersona: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PersonaInput**](../Model/PersonaInput.md)|  |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validarPersona**
> validarPersona($id)

Validar persona (solo administración)

Marca a una persona como validada para que aparezca en la vitrina.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PersonasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $apiInstance->validarPersona($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonasApi->validarPersona: ', $e->getMessage(), PHP_EOL;
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

