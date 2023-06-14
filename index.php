<?php
// Este código define dos interfaces, Saludar y Saludar2.
// Una interfaz es un contrato que define un conjunto de métodos que debe implementar una clase.
interface Saludar {
    public function getNumero();
    public function setNumero($numero);
    public function getNome();
}

interface Saludar2 {
    public function getNumeroRamdom();
    public function setNumeroRamdom($numero);
}

// Este código define una clase llamada Hola2 que extiende la clase Hola e implementa las interfaces Saludar y Saludar2.
class Hola2 extends Hola implements Saludar, Saludar2 {

// Este constructor inicializa el objeto Hola2 con el número y nombre dados.
    function __construct($numero,$nome){
        parent::__construct($numero,$nome);
    }

    // Este método imprime el número 1.
    public function getNumero(){
        print_r(1);
    }

    // Este método no hace nada.
    public function setNumero($numero){}

    // Este método no hace nada.
    public function getNome(){}

    // Este método no hace nada.
    public function getNumeroRamdom(){}

    // Este método no hace nada.
    public function setNumeroRamdom($numero){}

}

