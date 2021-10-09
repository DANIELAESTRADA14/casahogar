<?php

namespace App\Controllers;

class Animales extends BaseController
{
    public function index()
    {
        return view('registroanimales');
    }

    public function animales()
    {
        $nombre_animal=$this->request->getPost("nombre_animal");
        $edad=$this->request->getPost("edad");
        $descripcion_animal=$this->request->getPost("descripcion_animal");
        $tipo_animal=$this->request->getPost("tipo_animal");

        $datos_animal=array(

            "nombre_animal"=>$nombre_animal, 
            "edad"=>$edad,
            "descripcion_animal"=>$descripcion_animal,
            "tipo_animal"=>$tipo_animal

        );

        print_r($datos_animal);
    }

    
}
