<?php
	class Producto{
		private $idProducto;
		private $nombre;
		private $idCategoria;
		private $cantidad;
		private $fecha_creacion;
		private $fecha_mod;

		public function __construct(){

		}

		//
		public function getIdProducto(){
			return $this->idProducto;
		}
		public function setIdProducto($idProducto){
			$this->idProducto = $idProducto;
		}


		//
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}


		//
		public function getIdCategoria(){
			return $this->idCategoria;
		}
		public function setIdCategoria($idCategoria){
			$this->idCategoria = $idCategoria;
		}

		//
		public function getCantidad(){
			return $this->cantidad;
		}
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}

		//
		public function getFecha_creacion(){
			return $this->fecha_creacion;
		}
		public function setFecha_creacion($fecha_creacion){
			$this->fecha_creacion = $fecha_creacion;
		}

		//
		public function getFecha_mod(){
			return $this->fecha_mod;
		}
		public function setFecha_mod($fecha_mod){
			$this->fecha_mod = $fecha_mod;
		}

	}
?>