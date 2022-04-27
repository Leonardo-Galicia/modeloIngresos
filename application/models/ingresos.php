<?php
    class ingresos extends CI_model{
        public function __construct(){
            $this->load->database();
        }
        public function agregarDatos($fechaPago, $descripcion, $sucursal, $refAlfanumerica, $autorizacion, $ordenante, $bancoEmisor, $montoDeposito){
            return $this->db->insert("sipae", ["fechaPago" => $fechaPago, "descripcion" => $descripcion, "sucursal" => $sucursal, "refAlfanumerica" => $refAlfanumerica, "autorizacion" => $autorizacion, "ordenante" => $ordenante, "bancoEmisor" => $bancoEmisor, "montoDeposito" => $montoDeposito]);
        }
    }
?>
