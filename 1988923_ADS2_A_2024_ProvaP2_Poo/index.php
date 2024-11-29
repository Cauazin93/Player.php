<?php
require_once("./classes/Player.php");
require_once("./classes/Item.php");
require_once("./classes/Magia.php");
require_once("./classes/Ataque.php");
require_once("./classes/Defesa.php");

$player1 = new Player("Nextage");
$player2 = new Player("Noobmaster69");

$item1 = new Ataque("<font color='#DAA520'>Espada destruída</font color>");
$item2 = new Ataque("<font color='#00FF00'>Espada do carpinteiro</font color>");
$item3 = new Defesa("<font color='#00FF00'>Escudo do lobo</font color>");
$item4 = new Defesa("<font color='#DAA520'>Capacete do lobo</font color>");
$item5 = new Magia("<font color='#DAA520'>Cajado do Nextage</font color>");
$item6 = new Magia("<font color='#1E90FF'>Cajado do Tibia</font color>");

echo"<h1><hr></h1>";
echo "<font color='	#008B8B'><h3>Entrando no personagem</h3></font color>";
echo "<h4><strong>Personagem:{$player1->getNickname()}<br>";
echo "Nivel: {$player1->getNivel()}<br>";
echo "Espaço no inventario: {$player1->getInventario()->capacidadeLivre()}</strong></h4>";
echo"<h1><hr></h1>";

$player1->coletarItem($item5);
echo "<h5><br>\n{$player1->getNickname()} coleta o item {$item5->getName()}.\n<br></h5>";
$player1->coletarItem($item6);
echo "<h5><br>\n{$player1->getNickname()} coleta o item {$item6->getName()}.\n<br></h5>";
$player1->coletarItem($item4);
echo "<h5><br>\n{$player1->getNickname()} coleta o item {$item4->getName()}.\n<br></h5>";

echo "<h2>Itens no inventário do {$player1->getNickname()}:</h2><br>\n";
foreach ($player1->getInventario()->listarItens() as $item) {
    echo "- {$item->getName()} ({$item->getClasse()}, tamanho: {$item->getTamanho()})<br>\n";
}
echo "<br>Capacidade livre no inventário: {$player1->getInventario()->capacidadeLivre()} slots<br>";

echo "<br><h3>{$player1->getNickname()} dropa o item '{$item6->getName()}'.</h3><br>\n";
if ($player1->soltarItem($item6)) {
    echo "'{$item6->getName()}' <br><br>\n";
} 

$player1->coletarItem($item3);
echo "<h5><br>\n{$player1->getNickname()} coleta o item '{$item3->getName()}'.\n<br></h5>";
echo "Itens no inventário do {$player1->getNickname()}:<br>\n";
foreach ($player1->getInventario()->listarItens() as $item) {
    echo "- {$item->getName()} ({$item->getClasse()}, tamanho: {$item->getTamanho()})<br>\n";
}
echo "<br>Capacidade livre: {$player1->getInventario()->capacidadeLivre()} slots<br>";

for ($i = 1; $i <= 4; $i++) {
    $player1->subirNivel();
    echo "<h4>{$player1->getNickname()} subiu para o nível {$player1->getNivel()}!</h4>\n";
    echo "Seu inventario aumentou!!! Capacidade livre: {$player1->getInventario()->capacidadeLivre()} slots<br><br>\n";
}//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
echo"<h1><hr></h1>";
echo "<font color='	#008B8B'><h3>Trocando para o personagem</h3></font color>";
echo "<h4><strong>Personagem:{$player2->getNickname()}<br>";
echo "Nivel: {$player2->getNivel()}<br>";
echo "Espaço no inventario: {$player2->getInventario()->capacidadeLivre()}</strong></h4>";
echo"<h1><hr></h1>";

$player2->coletarItem($item1);
echo "<h5><br>\n{$player2->getNickname()} coleta o item {$item1->getName()}.\n<br></h5>";
$player2->coletarItem($item2);
echo "<h5><br>\n{$player2->getNickname()} coleta o item {$item2->getName()}'.\n<br></h5>";

echo "<h2>Itens no inventário do {$player2->getNickname()}:</h2><br>\n";
foreach ($player2->getInventario()->listarItens() as $item) {
    echo "- {$item->getName()} ({$item->getClasse()}, tamanho: {$item->getTamanho()})<br>\n";
}
echo "<br>Capacidade livre no inventário: {$player2->getInventario()->capacidadeLivre()} slots<br>";

echo "<h3>{$player2->getNickname()} dropa o item '{$item1->getName()}'.</h3><br>\n";
if ($player2->soltarItem($item1)) {
    echo "{$item1->getName()} dropado<br><br>\n";
} 

echo "Itens no inventário do {$player2->getNickname()} após soltar um item:<br>\n";
foreach ($player2->getInventario()->listarItens() as $item) {
    echo "- {$item->getName()} ({$item->getClasse()}, tamanho: {$item->getTamanho()})<br>\n";
}
echo "<br>Capacidade livre: {$player2->getInventario()->capacidadeLivre()} slots<br>";

for ($i = 1; $i <= 2; $i++) {
    $player2->subirNivel();
    echo "<h4>{$player2->getNickname()} subiu para o nível {$player2->getNivel()}!</h4>\n";
    echo "Seu inventario aumentou!!! Capacidade livre: {$player2->getInventario()->capacidadeLivre()} slots<br><br>\n";
}
echo"<h1><hr></h1>";
echo "<font color='	#008B8B'><h3>Saindo do personagem</h3></font color>";
echo "<h4><strong>Personagem:{$player2->getNickname()}<br>";
echo "Nivel: {$player2->getNivel()}<br>";
echo "Espaço no inventario: {$player2->getInventario()->capacidadeLivre()}</strong></h4>";
echo"<h1><hr></h1>";
