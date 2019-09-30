<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use Monetizze\Page;
use Monetizze\Sorteio\Sorteio;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    $page = new Page();
    $page->setTpl("index", array(
        "mensagem" => ""
    ));
});

$app->get('/exibe', function() {
    $page = new Page();
    $sorteio = new Sorteio($_GET['qtdDezenas'], $_GET['nJogos']);
    $valor = $sorteio->confereResultado();
    $jogos = $valor['Jogos'];
    $acertos = $valor['Acertos'];
    $resultado = $valor['Resultado'];

    if (count($jogos[0]) < 6 || count($jogos[0]) > 10) {
        $page->setTpl("index", array(
            "mensagem" => "A quantidade mínima de dezenas para jogar é 6 e a máxima é 10!"
        ));
    } else {
        $page->setTpl("exibe", array(
            "jogos" => $jogos,
            "acertos" => $acertos,
            "resultado" => $resultado
        ));
    }
});

$app->run();
