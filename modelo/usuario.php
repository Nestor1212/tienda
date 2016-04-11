<?php
	class Usuario{
		private $idUsuario;
		private $nombre;
		private $apellido;
		private $direccion;
		private $telefono;
		private $email;
		private $clave;
		private $usuario;
		private $fecha_creacion;
		private $fecha_mod;

		public function __construct(){

		}

		/*constructor de la clase*/
		/*get para leer*/
		/*set para escribir o guardar*/
		
		/*Usuario*/
		public function getIdUsuario(){
			return $this->idUsuario;
		}
		public function setIdUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}
			
		/*nombre*/
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		
		/*apellido*/
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		
		/*direccion*/
		public function getDireccion(){
			return $this->direccion;			
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		
		/*telefono*/
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		
		/*email*/
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		
		/*clave*/
		public function getClave(){
			return $this->clave;
		}
		public function setClave($clave){
			$this->clave = $clave;
		}
		
		/*usuario*/
		public function getUsuario(){
			return $this->usuario;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		
		/*fecha_creacion*/
		public function getFecha_creacion(){
			return $this->fecha_creacion;
		}
		public function setFecha_creacion($fecha_creacion){
			$this->fecha_creacion = $fecha_creacion;
		}
		
		/*fecha_mod*/
		public function getFecha_mod(){
			return $this->fecha_mod;
		}
		public function setFecha_mod($fecha_mod){
			$this->fecha_mod = $fecha_mod;
		}
	}


?>