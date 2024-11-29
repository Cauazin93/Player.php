<?php

class Item{
    protected string $name;
    protected int $tamanho;
    protected string $classe;

    public function __construct(string $name, int $tamanho, string $classe){
        $this->name = $name;
        $this->tamanho = $tamanho;
        $this->classe = $classe;
    }
    public function getName(): string{
        return $this->name;
    }

    public function setName($name): void{
        $this->name = $name;
    }

    public function getTamanho(): int{
        return $this->tamanho;
    }

    public function setTamanho($tamanho): void{
        $this->tamanho = $tamanho;
    }

    public function getClasse(): string{
        return $this->classe;
    }
    public function setClasse($classe): void{
        $this->classe = $classe;
    }

}


?>