<?php
	class Detalleventa{
		private $idDetalleVenta;
		private $idVenta;
		private $idProduto;
		private $precio;
		private $cantida;
		private $fecha;

		public function __construct(){
			
		}


		public function getIdDetalleVenta(){
			return $this->idDetalleVenta;
		}
		public function setIdDetalleVenta($idDetalleVenta){
			$this->idDetalleVenta = $idDetalleVenta;
		}


		public function getIdVenta(){
			return $this->idVenta;
		}
		public function setIdVenta($idVenta){
			$this->idVenta = $idVenta;
		}


		public function getIdProducto(){
			return $this->idProducto;
		}
		public function setIdProducto($idProducto){
			$this->idProducto = $idProducto;
		}


		public function getPrecio(){
			return $this->precio;
		}
		public function setPrecio($precio){
			$this->precio = $precio;
		}


		public function getCantida(){
			return $this->cantida;
		}
		public function setCantida($cantida){
			$this->cantida = $cantida;
		}


		public function getFecha(){
			return $this->fecha;
		}
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}

	}
?>