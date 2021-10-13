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
    
        //Recibir
        $producto=$this->request->getPost("producto");
        $fotografia=$this->request->getPost("fotografia");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //Validar
        if($this->validate('producto')){
            echo("Guardado");
        }else {

        $mensaje="Tienes datos pendientes";
        return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

            //echo ("Todos los datos son requeridos");
        
        }
/*
        //Crear arreglo asociativo
        $datos=array(

            "producto"=>$producto, 
            "fotografia"=>$fotografia,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo

        );

        print_r($datos);*/
    }
}
