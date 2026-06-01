# ProviEmplea API REST - Evaluación Sumativa U3

**Asignatura:** Desarrollo Backend  
**Equipo:** Grupo 6  

---

## 📌 Descripción del Proyecto

**ProviEmplea** es el backend de una plataforma pionera de búsqueda inversa de empleo para la comuna de Providencia. A diferencia de las plataformas tradicionales, aquí las empresas buscan activamente a los talentos. 

La API está diseñada para mitigar sesgos cognitivos y discriminación arbitraria mediante la implementación de un **CV Ciego**, el cual oculta información sociodemográfica (nombre, edad, género) y expone únicamente las competencias, educación y experiencia del talento.

### Tecnologías Utilizadas
* **Framework:** Laravel 11 (PHP 8.2)
* **Infraestructura:** Docker & Docker Compose
* **Documentación API:** OpenAPI 3.0 / L5-Swagger
* **Cliente API:** Generado vía Swagger Codegen

---

## 🚀 Operaciones CRUD Implementadas

Se ha implementado una arquitectura RESTful completa que gestiona las entidades principales del sistema:

1. **Recurso Health:** Endpoint de observabilidad para verificar el estado de la API (`GET /api/health`).
2. **Recurso Personas:** CRUD completo para el registro, actualización, validación y listado (en formato CV Ciego) de talentos.
3. **Recurso Empresas:** CRUD para empleadores que buscarán talentos en la plataforma.
4. **Recurso Administración:** Gestión del flujo de selección, creación de solicitudes de contacto entre empresas y talentos, cambio de estados (pendiente, contactado, entrevista, etc.) y generación de estadísticas de la plataforma.

---

## 📖 Documentación OpenAPI (Swagger) - Puntos 1, 2 y 3

Toda la API ha sido documentada exhaustivamente siguiendo la especificación OpenAPI 3.0. El archivo resultante (`swagger.yaml`) se encuentra en la raíz del proyecto.

* **Formatos y Estructuras:** Se utilizaron diferentes Schemas para adaptar la salida de datos según el contexto de la petición (ej. `PersonaSchema` para datos completos y `PersonaCVCiegoSchema` para la vista pública sin sesgos).
* **Interactividad:** La documentación puede probarse interactivamente levantando el contenedor y accediendo a `http://localhost:8080/api/documentation`.
* **Ejemplos:** Cada endpoint cuenta con parámetros, esquemas de validación, ejemplos de entrada (`RequestBody`) y códigos de respuesta esperados (`200 OK`, `201 Created`, `422 Unprocessable Entity`, `404 Not Found`).

**Evidencia de Swagger UI funcionando:**
![Evidencia de Interfaz Swagger UI](evidencia_prueba2.png)

---

## ⚙️ Generación de Cliente API y Pruebas Automáticas (Punto 4)

Para validar la solidez de la especificación OpenAPI, se utilizó la herramienta **Swagger Codegen / Swagger Editor** para generar un SDK de consumo en lenguaje PHP. Este cliente permite interactuar con la API sin necesidad de crear peticiones HTTP manuales.

El cliente se encuentra exportado en el directorio `/cliente_api` del proyecto.

### Prueba Automática Realizada
Se programó un script (`prueba_automatica.php`) que utiliza el SDK generado para consultar el endpoint base del sistema de forma automatizada. 

**Evidencia de ejecución en consola:**
![Evidencia de Prueba Automática](evidencia_prueba.png)

```php
<?php
require_once __DIR__ . '/cliente_api/vendor/autoload.php';

try {
    $config = Swagger\Client\Configuration::getDefaultConfiguration()->setHost('http://web:80/api');
    $apiInstance = new Swagger\Client\Api\HealthApi(new GuzzleHttp\Client(), $config);

    $result = $apiInstance->healthCheck();
    echo "¡Prueba Exitosa! Respuesta de la API:\n";
    print_r($result);
} catch (\Throwable $e) {
    echo "Resultado de la prueba: " . $e->getMessage() . "\n";
}

### Github links
* **https://github.com/LuisETC98/proviemplea_eva3  Luis Tapia
* **https://github.com/D3R5/proviemplea_eva3 Diego Rivera
