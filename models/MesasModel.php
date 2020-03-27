<?php

class MesasModel extends Model
{
    public function set()
    {
    }

    public function get($mesa = '')
    {
        $this->query = ($mesa != '')
            ? "SELECT * FROM mesas WHERE mesaId = '$mesa'"
            : "SELECT * FROM mesas";

        $this->get_query();

        $num_rows = count($this->rows);

        return $this->rows;
    }

    public function getHoraUso()
    {
        $this->query = 
        "
        SELECT MAX(p.fechaPedido) as fechaPedido, m.mesaId
        FROM pedidos AS p
        INNER JOIN mesas as m on m.mesaId = p.mesaId
        INNER JOIN estatuspedido as ep on ep.estatusPedidoId = p.estatusPedidoId
        GROUP BY m.mesaId
        ";

        $this->get_query();

        $num_rows = count($this->rows);

        return $this->rows;
    }

    public function del()
    {
    }
}
