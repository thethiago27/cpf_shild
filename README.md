# cpf_shild
Uma simples API de validar CPF
 
Instale: ```composer require thethiago27/cpf_shild```
 
Validando um CPF: 

```php 
include_once "validate_cpf_class.php";

$validate = new ValidateCPF("647.484.384.30");

echo $validate->response();
```

Obtendo a resposta se o CPF é valido:

```php 
    $validade->response;
    output: "Falso"
```
 
Para saber como surgiu uma classe leia esse artigo no Linkedin
 
https://www.linkedin.com/pulse/engenharia-reversa-com-php-thiago-rodrigues
