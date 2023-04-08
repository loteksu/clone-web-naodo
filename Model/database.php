<?php
class database extends PDO
{
    //const username = "root"; // Khai báo username
    //const password = ""; // Khai báo password
    //const server = "localhost"; // Khai báo server
    // const dbname = "test"; // Khai báo database


    function __construct($connect, $username, $pass)
    {
        parent::__construct($connect, $username, $pass);
        //$db = new PDO($connect,$username,$pass);
    }

    public function select($table)
    {
        $sql = "SELECT * FROM $table ";
        $statement = $this->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
}
