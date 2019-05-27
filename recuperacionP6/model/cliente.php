<?php
class cliente
{
	private $pdo;
    
    public $id;
    public $mat;
    public $Nombre;
    public $Apellido;  
    public $Correo;
    public $Carrera;

//Constructor
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
//Duncion para listar
	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM cliente");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
//Funcion para obtener los datos
	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM cliente WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
//Funcion para eliminar
	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM cliente WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	//Funcion para actualizar 

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE cliente SET 
						mat      		= ?,
						Nombre          = ?, 
						Apellido        = ?,
                        Correo        = ?,
                        Carrera        = ?
						
				    WHERE id = ?";
//Ver datos
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->mat, 
                        $data->Nombre,                        
                        $data->Apellido,
                         $data->Correo,
                        $data->carrera, 
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
//Registrar datos
	public function Registrar(cliente $data)
	{
		try 
		{
		$sql = "INSERT INTO cliente (mat,Nombre,Apellido,Correo,carrera) 
		        VALUES (?, ?, ?, ?, ?)";
//Accion de base de datos para registrar
		$this->pdo->prepare($sql)
		     ->execute(
				array(
					 $data->mat, 
                    $data->Nombre,
                    $data->Apellido, 
                    $data->Correo, 
                     $data->carrera 
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}