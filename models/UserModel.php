<?php

class UserModel extends Model
{
	public function set( $user_data = array() ) {
		foreach ($user_data as $key => $value) {

			$$key = $value;
		}

		$this->query = "REPLACE users SET userName = '$user', nombre = '$nombre'
        , fechaRegistro = '$fechaRegistro', tipoUsuarioId='$tipoUsuarioId';";
		$this->set_query();
		
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
    
    public function validaUsuario($user,$password)
    {   
        
		$this->query = "SELECT * FROM `users` WHERE userName = '$user' and pass = MD5('$password');";
        
        $this->get_query();

        return $this->rows;
    //$num_rows = count($this->rows);
        
    }
}



?>