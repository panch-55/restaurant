<?php
//Clase Abstracta que nos permitirá conectarnos a MySQL
abstract class Model
{
	//Atributos
	private static $db_host = '192.168.1.68';
	private static $db_user = 'root';
	private static $db_pass = '1234';
	private static $db_name = 'db_restaurant';
	private static $db_charset = 'utf8';
	private $conn;
	protected $query;
	protected $lastId = array();
	protected $rows = array();

	//Métodos abstractos
	abstract protected function set();
	abstract protected function get();
	abstract protected function del();

	//método privado para conectarse a la base de datos
	private function db_open()
	{

		$this->conn = new mysqli(
			self::$db_host,
			self::$db_user,
			self::$db_pass,
			self::$db_name
		);

		$this->conn->set_charset(self::$db_charset);
	}

	//método privado para desconectarse de la base de datos
	private function db_close()
	{

		$this->conn->close();
	}

	//establecer un query que afecte datos (INSERT, DELETE o UPDATE)
	protected function set_query()
	{
		$this->db_open();
		$result = $this->conn->query($this->query);
		$result = $this->conn->query("SELECT LAST_INSERT_ID();");
		while ($this->lastId[] = $result->fetch_assoc());
		$this->db_close();
		return array_pop($this->lastId);
	}

	//obtener datos de un query (SELECT)
	protected function get_query()
	{
		//$this->rows = array();
		
		$this->db_open();

		$result = $this->conn->query($this->query);
		
		while ($this->rows[] = $result->fetch_assoc());
		$result->close();

		$this->db_close();

		return array_pop($this->rows);
	}
}
