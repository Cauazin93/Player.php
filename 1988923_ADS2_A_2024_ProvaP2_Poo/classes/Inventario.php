<?php
class Inventario {
    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct(int $capacidadeMaxima = 20) {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function adicionar(Item $item): bool {
        if ($this->capacidadeLivre() >= $item->getTamanho()) {
            $this->itens[] = $item;
            return true;
        }
        return false;
    }

    public function remover(Item $item): bool {
        foreach ($this->itens as $key => $invItem) {
            if ($invItem === $item) {
                unset($this->itens[$key]);
                return true;
            }
        }
        return false;
    }

    public function capacidadeLivre(): int {
        $ocupado = 0;
        foreach ($this->itens as $item) {
            $ocupado += $item->getTamanho();
        }
        return $this->capacidadeMaxima - $ocupado;
    }

    public function aumentarCapacidade(int $valor): void {
        $this->capacidadeMaxima += $valor;
    }

    public function listarItens(): array {
        return $this->itens;
    }
}

?>