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
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());

            }catch(\Exception $error){
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
            }


        }else {

        $mensaje="Tienes datos pendientes";
        return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

        
        }

    }
}
