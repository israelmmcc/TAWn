<?php
require_once 'model/cliente.php';

class clienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new cliente();
    }
    //vistas
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cliente/cliente.php';
       
    }
    //crud del alumno
    public function Crud(){
        $cliente = new cliente();
        
        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/cliente/cliente-editar.php';
        
    }
    //guarda los datos almacenados
    public function Guardar(){
        $cliente = new cliente();
        
        $cliente->id = $_REQUEST['id'];
        $cliente->mat = $_REQUEST['mat'];
        $cliente->Nombre = $_REQUEST['Nombre'];
        $cliente->Apellido = $_REQUEST['Apellido'];
        $cliente->Correo = $_REQUEST['Correo'];  
        $cliente->carrera = $_REQUEST['carrera'];    
      

        $cliente->id > 0 
            ? $this->model->Actualizar($cliente)
            : $this->model->Registrar($cliente);
        
        header('Location: index.php');
    }
    //funcion de eliminar
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}