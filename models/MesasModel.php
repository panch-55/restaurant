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

    public function del()
    {
    }
}
