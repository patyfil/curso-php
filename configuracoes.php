<?php

date_default_timezone_set("America/Sao_Paulo");

spl_autoload_register(function ($class_name) {

    $model = __DIR__ . "/model/";
    $dao = __DIR__ . "/dao/";
    $dto = __DIR__ . "/dto/";
    $fotos = __DIR__ . "/fotos/";

    $pastas = [$model, $dao, $dto, $fotos];
    foreach ($pastas as $pasta) {
        $arquivo = $pasta . $class_name . ".php";
        if (file_exists($arquivo)) {
            require_once $arquivo;
        }
    }
});
