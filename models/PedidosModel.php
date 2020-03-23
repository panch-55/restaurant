<?php

class PedidosModel extends Model
{   
    protected $PedidoId;
    public function set( $pedido_data = array() ) {
		foreach ($pedido_data as $key => $value) {

			$$key = $value;
		}
        //INSERT INTO pedidos (estatuspedidoId,mesaId,fechaPedido,userId,total) VALUES ()
		$this->query = "INSERT INTO pedidos (estatuspedidoId,mesaId,fechaPedido,userId,total) 
        VALUES ('$estatuspedidoId','$mesaId',now(),'$userId','$total');";
		$this->set_query();
		return $this->lastId;
		/*$this->query = "SELECT MAX(peditodId) FROM pedidos";
		$this->get_query();
		$this->PedidoId = $this->rows;
		return $this->PedidoId;*/
		
	}

	public function get( $user = '' ) {
		$this->query = ($user != '')
			?"SELECT * FROM users WHERE user = '$user'"
			:"SELECT * FROM users";
		
		$this->get_query();

		$num_rows = count($this->rows);

		return $this->rows;
	}

	public function del( $user = '' ) {
		$this->query = "DELETE FROM users  WHERE user = '$user'";
		$this->set_query();
    }
}



?>