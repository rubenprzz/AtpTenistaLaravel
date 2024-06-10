# Proyecto aplicación web Concesionario de Vehículos con Laravel


¡Bienvenido al proyecto de Web para la gestion de la ATP desarrollado por el equipo **ATPGestore**!

## Índice

1. [Autores](#autores)
2. [Descripción](#descripción)
3. [Estructura del Proyecto](#estructura-del-proyecto)
4. [Bases de datos utilizadas](#bases-de-datos-utilizadas)
5. [Test](#test)
6. [Dependencias utilizadas en producción](#dependencias-utilizadas-en-el-modo-de-producción)
9. [Contribución](#contribución)
10. [Contacto](#contacto)
11. [Agradecimientos](#agradecimientos)

---



## Autores
Este proyecto fue desarrollado por  [Ruben Fernandez](https://github.com/rubenprzz).
Alumno de 2º DAW del IES Luis Vives, Proyecto de la asignatura **Desarrollo Web en entornos Servidor**


## Descripción
Este proyecto consiste en una API REST desarrollada con Laravel para un la gestion del ATP. La WEB proporciona funcionalidades para gestionar torneos, tenistas y los participantes. Todo con autenticacion

## Estructura del Proyecto

El proyecto sigue la siguiente estructura de carpetas:


#### Carpetas Principales

# Estructura del Proyecto

Http
│   ├── Controllers
│   │   ├── Auth
│   │   │   ├── ConfirmPasswordController.php
│   │   │   ├── ForgotPasswordController.php
│   │   │   ├── LoginController.php
│   │   │   ├── RegisterController.php
│   │   │   ├── ResetPasswordController.php
│   │   │   └── VerificationController.php
│   │   ├── ParticipanteController.php
│   │   ├── PdfController.php
│   │   ├── ProfileController.php
│   │   ├── TenistaController.php
│   │   └── TorneoController.php
│   ├── Kernel.php
│   └── Middleware
│       ├── AdminVerified.php
│       ├── Authenticate.php
│       ├── CheckRole.php
│       ├── EncryptCookies.php
│       ├── PreventRequestsDuringMaintenance.php
│       ├── RedirectIfAuthenticated.php
│       ├── TrimStrings.php
│       ├── TrustHosts.php
│       ├── TrustProxies.php
│       ├── ValidateSignature.php
│       └── VerifyCsrfToken.php
├── Models
│   ├── Participante.php
│   ├── Tenista.php
│   ├── Torneo.php
│   ├── User.php
└── Providers
├── AppServiceProvider.php
├── AuthServiceProvider.php
├── BroadcastServiceProvider.php
├── EventServiceProvider.php
└── RouteServiceProvider.php


## Bases de datos utilizadas

- **PostgreSQL**: Utilizado para almacenar datos estructurados y relacionales relacionados con la aplicación y gestionar los pedidos.


## Test
En la carpeta **test/feature** se almacenan los test






## Contacto

ruben.fernandez@alumno.iesluisvives.org
## Agracedimientos
¡Gracias por visitar nuestro proyecto API REST para gestion de la Atp! Esperamos que encuentres útil y completo este README para comprender la estructura, funcionalidades y documentación de nuestra API.

Si tienes alguna pregunta, sugerencia o deseas contribuir al proyecto, no dudes en contactarnos o seguir las instrucciones detalladas en la sección de contribución. ¡Estamos ansiosos por recibir tus aportes y mejorar juntos este proyecto!


