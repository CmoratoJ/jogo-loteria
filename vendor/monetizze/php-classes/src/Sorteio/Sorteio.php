<?php 
namespace Monetizze\Sorteio;

class Sorteio
{
    private $qtdDezenas;
    private $resultados;
    private $totalJogos;
    private $jogos;

    public function __construct($qtdDezenas, $totalJogos)
    {
        $this->setQtdDezenas($qtdDezenas);
        $this->setTotalJogos($totalJogos);
    }
    public function getQtdDezenas()
    {
        return $this->qtdDezenas;
    }
    public function setQtdDezenas($qtdDezenas)
    {
        $this->qtdDezenas = $qtdDezenas;
    }
    public function getResultados()
    {
        return $this->resultados;
    }
    public function setResultados($resultados)
    {
        $this->resultados = $resultados;
    }
    public function getTotalJogos()
    {
        return $this->totalJogos;
    }
    public function setTotalJogos($totalJogos)
    {
        $this->totalJogos = $totalJogos;
    }
    public function getJogos()
    {
        return $this->jogos;
    }
    public function setJogos($jogos)
    {
        $this->jogos = $jogos;
    }
    private function qtdDezenas()
    {
        $numAtual = 1;
        $arrDezenas = array();
        while ($numAtual <= $this->qtdDezenas) {
            $random = rand(1,60);
            if (!in_array($random,$arrDezenas)) {
                array_push($arrDezenas,$random);
                $numAtual++;
            }
        }
        sort($arrDezenas);
        return $arrDezenas;
    }
    public function qtdJogos()
    {
        $arrJogos = array();
        for ($i = 1; $i <= $this->totalJogos; $i++) {
            array_push($arrJogos, $this->qtdDezenas());
        }
        $this->setJogos($arrJogos);
        return $this->getJogos();
    }
    public function realizaSorteio()
    {
        $quantNumeros = 6;
        $numAtual = 1;
        $arrSorteio = array();
        while($numAtual <= $quantNumeros)
        {
            $random = rand(1,60);
            if (!in_array($random,$arrSorteio)) {
                array_push($arrSorteio,$random);
                $numAtual++;
            }
        }
        sort($arrSorteio);
        $this->setResultados($arrSorteio);
        return $this->getResultados();
    }
    public function confereResultado()
    {
        $acertos = array();
        $jogos = $this->qtdJogos();
        $resultado = $this->realizaSorteio();
        foreach ($jogos as $chave=>$valor) {
            $acertos[$chave] = array_intersect($valor, $resultado);
        }
        $resultadoFinal = [
            "Jogos" => $jogos,
            "Acertos" => $acertos,
            "Resultado" => $resultado
        ];
        return $resultadoFinal;
    }
}
