<?php

namespace App\Controllers;

//Se importa el modelo de datos 
use App\Models\ProductoModelo;

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
            $modelo= new ProductoModelo();
            $modelo->insert($datos);
            return redirect()->to(site_url('/productos/registro'))->with('mensaje', "exito agregando el producto");

            }catch(\Exception $error){
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
            }


        }else {

        $mensaje="Tienes datos pendientes";
        return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

        
        }

    }

    public function buscar(){
        try{
            $modelo= new ProductoModelo();
            $resultado=$modelo->findAll();
            $productos=array('productos'=>$resultado);
            return view('listaProductos', $productos);

        }catch(\Exception $error) {
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
        }

        
    }

    public function eliminar($id){
       try {
        $modelo= new ProductoModelo();
        $modelo->where("id",$id)->delete();
        return redirect()->to(site_url('/productos/registro'))->with('mensaje', "exito eliminando el producto");

       }catch(\Exception $error) {
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function editar($id){
        //recibo datos
        $producto=$this->request->getPost("producto");
        $precio=$this->request->getPost("precio");

        //debo hacer validación 
        if($this->validate('editar')){
        //organizo datos en array asociativo 
        $datos=array(
            'producto'=> $producto, 
            'precio' => $precio
        );

       // echo("estamos editando el producto".$id);
        //print_r($datos);

        //crear objeto del modelo
        try {
            $modelo= new ProductoModelo();
            $modelo->update($id,$datos);
            return redirect()->to(site_url('/productos/registro'))->with('mensaje', "exito editando el producto");

            }catch(\Exception $error){
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
            }


        }else {

        $mensaje="Tienes datos pendientes";
        return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

        }

    }
}
