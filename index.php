<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use Monetizze\Page;
use Monetizze\Sorteio\Sorteio;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    $sorteio = new Sorteio(10, 5);
    $valor = $sorteio->confereResultado();
    $jogos = $valor['Jogos'];
    $acertos = $valor['Acertos'];
    $resultado = $valor['Resultado'];

    if (count($jogos[0]) < 6 || count($jogos[0]) > 10) {
        echo "<script>window.alert('A quantidade mínima de dezenas para jogar é 6 e a máxima é 10!')</script>";
    } else {
        $page = new Page();
        $page->setTpl("index", array(
            "jogos" => $jogos,
            "acertos" => $acertos,
            "resultado" => $resultado
        ));
    }
});

$app->run();
