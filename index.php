<?php
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use Monetizze\Page;
use Monetizze\Sorteio\Sorteio;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    $page = new Page();
    if (isset($_SESSION['msg'])) {
        $page->setTpl("index", array(
            "mensagem" => $_SESSION['msg']
        ));
        session_destroy();
    } else {
        $page->setTpl("index", array(
            "mensagem" => ""
        ));
    }
});

$app->post('/exibe', function() {
    $page = new Page();
    $sorteio = new Sorteio($_POST['qtdDezenas'], $_POST['nJogos']);
    $valor = $sorteio->confereResultado();
    $jogos = $valor['Jogos'];
    $acertos = $valor['Acertos'];
    $resultado = $valor['Resultado'];

    if (count($jogos[0]) < 6 || count($jogos[0]) > 10) {
        $_SESSION['msg'] = 'A quantidade mínima de dezenas para jogar é 6 e a máxima é 10!';
        header("Location: /");
    } else {
        $page->setTpl("exibe", array(
            "jogos" => $jogos,
            "acertos" => $acertos,
            "resultado" => $resultado
        ));
    }
});

$app->run();
