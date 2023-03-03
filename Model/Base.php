<?php

class Base extends database
{
    public function All($table)
    {
        $sql = "SELECT * FROM ${table}";
        $query = $this->Run($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        return $data;


    }

    public function findById()
    {

    }

    public function Add()
    {


    }

    public function update()
    {

    }

    public function delete()
    {

    }

    private function Run($sql)
    {
        return mysqli_query($this->connect(), $sql);
    }
}
?>