# Códigos de Estado HTTP

Los códigos de estado HTTP son un conjunto de números que se devuelven como respuesta a una petición realizada por un cliente a un servidor. Estos códigos se dividen en cinco clases, de las cuales la primera es la más importante, ya que indica si la petición se ha realizado correctamente o no. En este artículo vamos a ver los códigos de estado más importantes y cómo podemos utilizarlos en nuestras aplicaciones.

## Clasificación de Códigos de Estado HTTP

Los códigos de estado HTTP se dividen en cinco clases, cada una de ellas con un significado diferente. A continuación vamos a ver cada una de ellas y los códigos que la componen.

- **1xx**: Respuestas informativas (100-199)
- **2xx**: Respuestas satisfactorias (200-299)
- **3xx**: Redirecciones (300-399)
- **4xx**: Errores del cliente (400-499)
- **5xx**: Errores del servidor (500-599)

## Códigos de Estado HTTP más importantes

A continuación vamos a ver los códigos de estado HTTP más importantes y cómo podemos utilizarlos en nuestras aplicaciones.

### 200 OK

El código de estado 200 OK indica que la petición se ha realizado correctamente. Este código se utiliza para indicar que la petición se ha realizado correctamente y que el servidor ha devuelto la respuesta esperada.

### 201 Created

El código de estado 201 Created indica que la petición se ha realizado correctamente y que se ha creado un nuevo recurso. Este código se utiliza para indicar que la petición se ha realizado correctamente y que se ha creado un nuevo recurso.

### 204 No Content

El código de estado 204 No Content indica que la petición se ha realizado correctamente y que no se ha devuelto ningún contenido. Este código se utiliza para indicar que la petición se ha realizado correctamente y que no se ha devuelto ningún contenido.

### 301 Moved Permanently

El código de estado 301 Moved Permanently indica que la petición se ha realizado correctamente y que el recurso solicitado ha sido movido de forma permanente. Este código se utiliza para indicar que la petición se ha realizado correctamente y que el recurso solicitado ha sido movido de forma permanente.

### 302 Found

El código de estado 302 Found indica que la petición se ha realizado correctamente y que el recurso solicitado ha sido movido de forma temporal. Este código se utiliza para indicar que la petición se ha realizado correctamente y que el recurso solicitado ha sido movido de forma temporal.

### 304 Not Modified

El código de estado 304 Not Modified indica que la petición se ha realizado correctamente y que el recurso solicitado no ha sido modificado. Este código se utiliza para indicar que la petición se ha realizado correctamente y que el recurso solicitado no ha sido modificado.

### 400 Bad Request

El código de estado 400 Bad Request indica que la petición no se ha realizado correctamente. Este código se utiliza para indicar que la petición no se ha realizado correctamente.

### 401 Unauthorized

El código de estado 401 Unauthorized indica que la petición no se ha realizado correctamente porque el cliente no está autorizado. Este código se utiliza para indicar que la petición no se ha realizado correctamente porque el cliente no está autorizado.

### 403 Forbidden

El código de estado 403 Forbidden indica que la petición no se ha realizado correctamente porque el cliente no tiene permiso para acceder al recurso solicitado. Este código se utiliza para indicar que la petición no se ha realizado correctamente porque el cliente no tiene permiso para acceder al recurso solicitado.

### 404 Not Found

El código de estado 404 Not Found indica que la petición no se ha realizado correctamente porque el recurso solicitado no existe. Este código se utiliza para indicar que la petición no se ha realizado correctamente porque el recurso solicitado no existe.

### 500 Internal Server Error

El código de estado 500 Internal Server Error indica que la petición no se ha realizado correctamente porque el servidor ha encontrado un error interno. Este código se utiliza para indicar que la petición no se ha realizado correctamente porque el servidor ha encontrado un error interno.

### 501 Not Implemented

El código de estado 501 Not Implemented indica que la petición no se ha realizado correctamente porque el servidor no soporta la funcionalidad solicitada. Este código se utiliza para indicar que la petición no se ha realizado correctamente porque el servidor no soporta la funcionalidad solicitada.

### 502 Bad Gateway

El código de estado 502 Bad Gateway indica que la petición no se ha realizado correctamente porque el servidor ha recibido una respuesta inválida de otro servidor. Este código se utiliza para indicar que la petición no se ha realizado correctamente porque el servidor ha recibido una respuesta inválida de otro servidor.

### 503 Service Unavailable

El código de estado 503 Service Unavailable indica que la petición no se ha realizado correctamente porque el servidor no está disponible. Este código se utiliza para indicar que la petición no se ha realizado correctamente porque el servidor no está disponible.

### 504 Gateway Timeout

El código de estado 504 Gateway Timeout indica que la petición no se ha realizado correctamente porque el servidor ha tardado demasiado tiempo en responder. Este código se utiliza para indicar que la petición no se ha realizado correctamente porque el servidor ha tardado demasiado tiempo en responder.

### 505 HTTP Version Not Supported

El código de estado 505 HTTP Version Not Supported indica que la petición no se ha realizado correctamente porque el servidor no soporta la versión de HTTP utilizada por el cliente. Este código se utiliza para indicar que la petición no se ha realizado correctamente porque el servidor no soporta la versión de HTTP utilizada por el cliente.

## Códigos de Estado HTTP en PHP

En PHP, podemos utilizar la función `http_response_code()` para establecer el código de estado HTTP de una respuesta. Esta función recibe como parámetro el código de estado HTTP que queremos establecer y devuelve el código de estado HTTP actual.

```php
http_response_code(200); // Establece el código de estado HTTP a 200
echo http_response_code(); // Devuelve el código de estado HTTP actual
```
Si no se especifica ningún código de estado HTTP, la función http_response_code() devuelve el código de estado HTTP actual. Si se especifica un código de estado HTTP, la función http_response_code() establece el código de estado HTTP especificado y devuelve el código de estado HTTP actual.



## Códigos de Estado HTTP en JavaScript
En JavaScript, podemos utilizar la propiedad status de la clase XMLHttpRequest para obtener el código de estado HTTP de una respuesta. Esta propiedad devuelve el código de estado HTTP de la respuesta.

```javascript

let request = new XMLHttpRequest();
request.open('GET', 'https://www.example.com');
request.send();
request.onreadystatechange = function() {
    if (request.readyState === 4) {
        console.log(request.status); // Devuelve el código de estado HTTP de la respuesta
    }
};
```
Si no se especifica ningún código de estado HTTP, la propiedad status devuelve 0. Si se especifica un código de estado HTTP, la propiedad status devuelve el código de estado HTTP de la respuesta.