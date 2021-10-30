<?php

namespace App\Controllers;

use App\Models\AnimalesModelo;

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
            $datos=array(

                "nombre"=>$nombre, 
                "foto"=>$foto,
                "edad"=>$edad,
                "descripcion"=>$descripcion,
                "tipo"=>$tipo
    
            );

            try {
                $modelo= new AnimalesModelo();
                $modelo->insert($datos);
                return redirect()->to(site_url('/animales/registro'))->with('mensaje', "exito agregando el animal");
    
                }catch(\Exception $error){
                    return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
                }
    
           
        } else {
            $mensaje="Todos los datos son requeridos";
            return redirect()->to(site_url('/animales/registro'))->with('mensaje', $mensaje);
        }


    }

    public function buscar()
    {
        try {
            $modelo= new AnimalesModelo();
            $resultado=$modelo->findAll();
            $animales=array('animales'=>$resultado);
            //print_r($animales);
            return view('listaAnimales', $animales);


        } catch(\Exception $error) {
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
        
    }

    public function eliminar($id){
        try {
         $modelo= new AnimalModelo();
         $modelo->where("id",$id)->delete();
         return redirect()->to(site_url('/animales/registro'))->with('mensaje', "exito eliminando el animal");
 
        }catch(\Exception $error) {
             return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
         }
     }
}
