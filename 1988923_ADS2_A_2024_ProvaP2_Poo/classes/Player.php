<?php

require_once("Inventario.php");

class Player{
    private string  $nickname;
    private int $nivel;
    private inventario $inventario;

    public function __construct(string $nickname) {
        $this->nickname = $nickname;
        $this->nivel = 1;
        $this->inventario = new Inventario();
    }


        public function getNickname(): string{
            return $this->nickname;
        }
    
        public function setNickname($nickname): void{
            $this->nickname = $nickname;
        }
        public function getNivel(): int {
            return $this->nivel;
        }
        public function setNivel($nivel): void{
            $this->nivel = $nivel;
        }
        public function getInventario(): Inventario {
            return $this->inventario;
        }
        public function setInventario($inventario): void{
            $this->inventario = $inventario;
        }



        public function soltarItem(Item $item): bool {
            return $this->inventario->remover($item);
        }

        public function coletarItem(Item $item): bool {
            return $this->inventario->adicionar($item);
        }

        public function subirNivel(): void {
            $this->nivel++;
            $this->inventario->aumentarCapacidade($this->nivel * 3);
        }


    }




?>