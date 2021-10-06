<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        return view('registroproductos');
    }

    public function registrar()
    {
        $producto=$this->request->getPost("producto");
        $fotografia=$this->request->getPost("fotografia");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        $datos=array(

            "producto"=>$producto, 
            "fotografia"=>$fotografia,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo

        );

        print_r($datos);
    }
}
