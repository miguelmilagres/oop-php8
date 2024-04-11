<?php

class Humanos {
    private $masculinos = [];
    private $femininos = [];
    private $outros = [];

    public function definir($sexo, $nome) {
        if (strtoupper($sexo) == 'M') {
            $this->masculinos[] = $nome;
        } elseif (strtoupper($sexo) == 'F') {
            $this->femininos[] = $nome;
        } else {
            $this->outros[] = $nome;
        }
    }

    public function get_masculinos() {
        return $this->masculinos;
    }

    public function get_femininos() {
        return $this->femininos;
    }

    public function get_outros() {
        return $this->outros;
    }
}