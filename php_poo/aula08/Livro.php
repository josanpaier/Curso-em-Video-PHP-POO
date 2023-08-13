<?php
namespace undefined;
require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao {
    // Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    // Métodos especiais
    private function getTitulo() {
        return $this->titulo;
    }
    private function setTitulo($ti) {
        $this->titulo = $ti;
    }
    private function getAutor() {
        return $this->autor;
    }
    private function setAutor($at) {
        $this->autor = $at;
    }
    private function getTotPaginas() {
        return $this->totPaginas;
    }
    private function setTotPaginas($tp) {
        $this->totPaginas = $tp;
    }
    private function getPagAtual() {
        return $this->pagAtual;
    }
    private function setPagAtual($pa) {
        $this->pagAtual = $pa;
    }
    private function getAberto () {
        if ($this->aberto == 0 || $this->aberto == null) {
            $this->aberto = "fechado";
        } else {
            $this->aberto = "aberto";
        }
        return $this->aberto;
    }
    private function setAberto($ab) {
        $this->aberto = $ab;
    }
    private function getLeitor() {
        return $this->leitor;
    }
    private function setLeitor($le) {
        $this->leitor = $le;
    }
    function __construct($ti, $at, $tp, $le) {
        $this->titulo = $ti;
        $this->autor = $at;
        $this->totPaginas = $tp;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $le;
    }

    // Método público
    public function detalhes() {
        echo "<p>O título do livro é " . $this->getTitulo() . ", o autor é " . $this->getAutor() . ", o total de página é " . $this->getTotPaginas() . ", está aberto na página " . $this->getPagAtual() . ", no momento, ele está " . $this->getAberto() . " e está sendo lido por " . $this->getLeitor()->getNome() . "</p>";
    }
    public function abrir() {
        $this->setAberto(true);
    }
    public function fechar() {
        $this->setAberto(false);
    }
    public function folhear($p) {
        if ($p > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    public function avancarPag() {
        if ($this->getAberto()) {
            $this->setPagAtual($this->getPagAtual() + 1);
        } else {
            echo "O livro está fechado e não pode ser folheado.";
        }
    }
    public function voltarPag() {
        if ($this->getAberto()) {
            $this->setPagAtual($this->getPagAtual() - 1);
        } else {
            echo "O livro está fechado e não pode ser folheado.";
        }
    }
}