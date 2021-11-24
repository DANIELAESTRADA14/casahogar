<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class APIProductos extends ResourceController
{
    protected $modelName = 'App\Models\ProductoModelo';
    protected $format    = 'json';

    public function buscarProductos()
    {
        return $this->respond($this->model->findAll());
    }

    public function encontrarProductos($id)
    {
        return $this->respond($this->model->find($id));
    }      

    public function agregarProducto(){ 

        //Recibir
        $producto=$this->request->getPost("producto");
        $fotografia=$this->request->getPost("fotografia");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //Validar
        if($this->validate('producto')){

            //Se organizan datos en array (arreglo)
            $datos=array(

                "producto"=>$producto, 
                "fotografia"=>$fotografia,
                "precio"=>$precio,
                "descripcion"=>$descripcion,
                "tipo"=>$tipo
    
            );

            //intentamos grabar datos en BD
            try {
            $this->model->insert($datos);
            $mensaje= array(
                "mensaje"=>"Exito agregando el producto",
                "estado"=>true
            );
            return $this->respond(json_encode($mensaje));

            }catch(\Exception $error){
                $mensaje= array(
                    "mensaje"=>"Error agregando el producto",
                    "estado"=>false
                );
                return $this->respond(json_encode($mensaje));
            }


        }else {

            $mensaje= array(
                "mensaje"=>"Tienes datos pendientes",
                "estado"=>false
            );
            return $this->respond(json_encode($mensaje));

        
        }
           
    }
}