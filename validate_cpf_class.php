<?php


class ValidateCPF
{

    public $cpf;
    public $response;


    public function __construct($cpf = "")
    {
        $ch = curl_init();

        //Fazemos um CURL para a URL usando os parâmetros que descobrimos
        //a URL ficara assim https://www.4devs.com.br/ferramentas_online.php?acao=validar_cpf&cpf=["CPF DIGITADO"]

        curl_setopt($ch, CURLOPT_URL, "https://www.4devs.com.br/ferramentas_online.php");
        curl_setopt($ch, CURLOPT_POST, 1); // Definimos o método POST para enviar as informações
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "acao=validar_cpf&txt_cpf=$cpf"); //Pârametros que serão usados

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch); //Pegamos os dados retornados do CURL


        $array = explode("-", $server_output); //Como os dados retornados é um texto vamos transformar esse
        //texto em array para que podemos manipular melhor

        $this->cpf = $array[0]; //Retorna o CPF do TEXTO
        $this->response = $array[1]; //Retorna o status do CPF Verdadeiro ou Falso

        curl_close($ch);

    }

    function response()
    {

        $toJson = array("cpf" => $this->cpf, "cpf_status" => $this->response); //Transforma os dados em JSON para melhor manipulação

        print_r(json_encode($toJson, true)); //Exibe o JSON gerado

    }

}