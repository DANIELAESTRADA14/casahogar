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
        $nombre=$this->request->getPost("nombre");
        $foto=$this->request->getPost("foto");
        $edad=$this->request->getPost("edad");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        if($this->validate('animales')){
            $datos_animal=array(

                "nombre"=>$nombre, 
                "foto"=>$foto,
                "edad"=>$edad,
                "descripcion"=>$descripcion,
                "tipo"=>$tipo
    
            );
           
        } else {
            $mensaje="Todos los datos son requeridos";
            return redirect()->to(site_url('/animales/registro'))->with('mensaje', $mensaje);
        }


    }

    
}
