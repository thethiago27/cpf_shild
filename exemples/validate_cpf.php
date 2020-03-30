<?php

include_once "validate_cpf_class.php";

$validate = new ValidateCPF("647.484.384.30");

echo $validate->response();

//Não esqueça que o cpf deve ser nesse formato 000.000.000.00 não 000.000.000-00