<?php

interface ObjetoInterface
{
    public function dameVolumen();
    public function dameNombre();
    public function dameMostrar();
    
}

class Box implements ObjetoInterface
{
   public $volumen;
   public $contenido;

   function __construct($volumen,$contenido)
   {
    $this->volumen=$volumen;
    $this->contenido=$contenido;
   }



        public function sacarObjeto()
        {

        }
        public function guardarObjeto()
        {

        }
        public function vaciarObjetos()
        {

        }
}


$box = new Box (4,'peras');


class bici implements ObjetoInterface
{}
class tazas implements ObjetoInterface
{}
class cordero implements ObjetoInterface
{}