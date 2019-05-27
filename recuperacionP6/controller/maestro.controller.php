<?php
require_once 'model/maestro.php';
class maestroController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new maestro();
    }
    //vistas
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/maestro/maestro.php';
       
    }
    //crud del alumno
    public function Crud(){
        $maestro = new maestro();
        
        if(isset($_REQUEST['id'])){
            $maestro = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/maestro/maestro-editar.php';
        
    }
    //guarda los datos almacenados
    public function Guardar(){
        $maestro = new maestro();
        
        $maestro->id = $_REQUEST['id'];
        $maestro->empleado = $_REQUEST['empleado'];
        $maestro->Nombre = $_REQUEST['Nombre'];
        $maestro->Apellido = $_REQUEST['Apellido'];
        $maestro->Correo = $_REQUEST['Correo'];  
        $maestro->carrera = $_REQUEST['carrera'];    
      

        $maestro->id > 0 
            ? $this->model->Actualizar($maestro)
            : $this->model->Registrar($maestro);
        
        header('Location: index.php');
    }
    //funcion de eliminar
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}