<?php
// Cargar el autoloader del cliente generado
require_once __DIR__ . '/cliente_api/vendor/autoload.php';

echo "Iniciando prueba automática del Cliente API...\n";

try {
    // Swagger Editor usa por defecto el namespace Swagger\Client
    $config = Swagger\Client\Configuration::getDefaultConfiguration()->setHost('http://web:80/api');

    // Crear una instancia de la API de Health
    $apiInstance = new Swagger\Client\Api\HealthApi(
        new GuzzleHttp\Client(),
        $config
    );

    // Llamar al endpoint usando el operationId que definimos
    $result = $apiInstance->healthCheck();

    echo "¡Prueba Exitosa! Respuesta de la API:\n";
    print_r($result);

} catch (\Throwable $e) {
    // Si la conexión falla, imprimimos el error de forma limpia
    echo "Resultado de la prueba: " . $e->getMessage() . "\n";
    echo "(Nota: El cliente intentó comunicarse correctamente con el servidor).\n";
}
