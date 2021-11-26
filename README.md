# Base para hacer tests

Configuración básica para empezar a hacer una kata o aprender a hacer tests en los siguientes lenguajes:

- PHP y PHPUnit
- Javascript con Jest
- Java, Junit y Mockito

# Configuración específica por lenguaje

## PHP
1. Instalar [composer](https://getcomposer.org/) `curl -sS https://getcomposer.org/installer | php`
2. `composer install` (estando en la carpeta php)
3. `./vendor/bin/phpunit`

## Javascript
1. Instalar [Node](http://nodejs.org/)
2. `npm install` (Estando en la carpeta javascript)
3. `npm test`

## Java
1. Instalar las dependencias y tests con Maven [mvn test]
2. Ejecutar los tests con el IDE

# Documentación
## Javascript
[Jest](https://jestjs.io)

## PHP
[PHPUnit](https://phpunit.readthedocs.io/)

[Prophecy](https://github.com/phpspec/prophecy) para dobles de prueba

## Java
[JUnit](https://github.com/junit-team/junit/wiki)

[Mockito](http://site.mockito.org/mockito/docs/current/org/mockito/Mockito.html)

# Fractions Kata

![](https://i.imgur.com/6SVdqjG.png)


Nuestro programa tomará como entrada de datos una cadena de texto con el siguiente formato

```
{3/2}+{4/4}/{2/3}
```

Dado un input como por ejemplo `{3/2}+{4/4}/{2/3}` se espera un output de `3`.

Nuestro software debería haber resuleto las operaciones entre las fracciones dependiendo de la prioridad de la operación o de los parentesis y devolvernos el resultado final de la operación.


# Definición de requisitos

## Formato de una fracción

Una fracción empieza por `{` y termina por `}`. El **numerador** está separado del **denominador** por `/`.

Tanto el numerador como el denominador son número enteros que pueden tener un prefijo `-` para definirlos como números negativos.

- Input: `{9/12}`  representa la siguiente fracción `9/12`.
- Input: `{-9/12}` representa la siguiente fracción `-9/12`.
- Input: `{9/-12}` representa la siguiente fracción `9/-12`.

## Operadores validos de fracciones

Los operadores validos para esta kata son:

- `+` Suma (addition)
- `-` Resta (subtraction)
- `*` Multiplicación (multiplication)
- `/` División (divide)

Las fracciones tienen que poder realizar el listado de opeaciones anteriores.

Cualquier otro operador, es considerado un operador invalido y no debería poder realizarse ninguna de las operaciones

## Ejemplos de casos de uso

- Suma de fracciones: `{3/2}+{4/4}`
- Resta de fracciones: `{3/2}-{4/4}`
- Multiplicación de fracciones: `{3/2}*{4/4}`
- División de fracciones: `{3/2}/{4/4}`

## Ejemplos de multiples operaciones

Este sería un ejemplo sobre como se resolvería una entrada con multiples operaciones:

```
{3/2}+{4/4}/{2/3}
```

👁️ Si la operación no tiene paréntesis tenemos que priorizar, según operadores, en caso de tener paréntesis, primero tienen que resolverse los paréntesis y luego lo que haya fuera.

**Ejemplo de como sería resuelto**
```
{3/2}+{4/4}/{2/3}
```
**Primer paso**
```
{4/4}/{2/3}
```

**Segundo paso**
```
{3/2}+RESULT_FROM_FIRST_OPERATION
```
## El comando o las fracciones pueden ser erroneos
Los comandos que nos encontremos pueden ser invalidos, en estos casos no se procesaría la fracción

```
'' // Fracción vacía
{
}
{}
({})
({a/a})
{a/a}
{a3/a3}
{3a/3a}
{03/3a}
{a3/03}
{a3/0}
{0/0a}
{0/a0}
{0/0}
{0/3}
{-3/0}
{-1/-2}
{-01/-02}
 { 1 / -2 }
 {1/-2} {1/-2} 
{1/-2}{1/-2}
{1/-2} {1/-2}
1/-2
1/2
12
{1/-3-3}
{-1-1/3}
{}+{}
```

